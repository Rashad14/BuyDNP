<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($slug)
    {
        try {
            // Get product by a slug from the products
            $product = Product::with('category')->where('slug', $slug)->firstOrFail();

            // Get product description from the product
            $firstSentence = self::description($product->description);

            //Get last six related products from the products
            $related_products = Product::with('category')->where('category_id', $product->category_id)
                ->latest()
                ->take(6)
                ->get();

            // Get last three products from the products
            $top_products = Product::latest()->take(3)->get();

            // Generate breadcrumb for single product
            Breadcrumbs::for('product.details', function ($trail) use ($product) {
                $trail->parent('home');
                $trail->push($product->category->name, route('products.by.cat', $product->category->slug));
                $trail->push($product->name, route('product.details', $product->slug));
            });

            return view('product.product', [
                'product' => $product,
                'firstSentence' => $firstSentence,
                'top_products' => $top_products,
                'related_products' => $related_products
            ]);

        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function productsByCat(Request $request, $category, $subcategory = null)
    {
        // Get the selected sorting option from the request
        $sortOption = $request->input('sort');

        if (!is_null($category) && !is_null($subcategory)) {
            // Retrieve products by subcategory
            $subcategory = Category::where('slug', $subcategory)->firstOrFail();
            $category = Category::where('slug', $category)->firstOrFail();
            $productsQuery = $subcategory->products();

            // Filter the products
            self::filter($sortOption, $productsQuery);

            // Get the paginated products with the selected sorting option applied
            $products = $productsQuery->paginate(12);

            // Generate breadcrumb for subcategory
            Breadcrumbs::register('products.by.cat', function ($trail) use ($category, $subcategory) {
                $trail->push('home', route('home'));
                $trail->push($category->name, route('products.by.cat', [$category->slug]));
                $trail->push($subcategory->name, route('products.by.cat',
                    [$subcategory->slug, $subcategory->slug]
                ));
            });

            // Return view for products under subcategory
            return view('shop.shop', [
                'products' => $products,
                'route' => $request->url(),
                'sortOption' => $sortOption
            ]);
        } else {
            // Retrieve products by category
            $category = Category::where('slug', $category)->firstOrFail();
            $productsQuery = $category->products();

            // Filter the products
            self::filter($sortOption, $productsQuery);

            // Get the paginated products with the selected sorting option applied
            $products = $productsQuery->paginate(12);

            // Generate breadcrumb for category
            Breadcrumbs::for('products.by.cat', function ($trail) use($category) {
                $trail->parent('home');
                $trail->push($category->name, route('products.by.cat', $category->slug));
            });

            // Return view for products under category
            return view('shop.shop', [
                'products' => $products,
                'route' => $request->url(),
                'sortOption' => $sortOption
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function shop(Request $request)
    {
        // Get the selected sorting option from the request
        $sortOption = $request->input('sort');

        // Get the products query with the selected sorting option applied
        $productsQuery = Product::with('category');

        // Filter the products
        self::filter($sortOption, $productsQuery);

        // Get the paginated products with the selected sorting option applied
        $products = $productsQuery->paginate(12);

        // Generate breadcrumb for shop
        Breadcrumbs::for('shop', function ($trail) {
            $trail->parent('home');
            $trail->push('Shop', route('shop'));
        });

        // Pass the sorting option to the view
        return view('shop.shop', [
            'products' => $products,
            'route' => $request->url(),
            'sortOption' => $sortOption
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function description($htmlDescription)
    {
        // Remove HTML tags from the description
        $description = strip_tags($htmlDescription);

        // Find the first sentence
        $firstSentence = strstr($description, '.', true);

        if ($firstSentence) {
            // Found the end of the first sentence
            $firstSentence .= '.';
        } else {
            // The description does not contain a period, so assume the whole description is the first sentence
            $firstSentence = $description;
        }

        return $firstSentence; // Output: This is the first sentence.

    }

    /**
     *
     * Display a listing of the resource.
     *
     */

    public function filter($sortOption, $productsQuery)
    {
        switch ($sortOption) {
            case 'low_high':
                $productsQuery->sortByPrice('asc');
                break;
            case 'high_low':
                $productsQuery->sortByPrice('desc');
                break;
            default:
                // Default sorting (by ID)
                $productsQuery->orderBy('category_id', 'desc');
                break;
        }
    }
}

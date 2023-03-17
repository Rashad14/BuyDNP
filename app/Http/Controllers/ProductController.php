<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($slug)
    {
        // Get product by a slug from the products
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();

        // Get product description from the product
        $firstSentence = self::description($product->description);

        //Get last six related products from the products
        $related_products = Product::with('category')->where('category_id', $product->category_id)->latest()->take(6)->get();

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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function productsByCat($category, $subcategory = null)
    {
        if (!is_null($category) && !is_null($subcategory)) {
            // Retrieve products by subcategory
            $subcategory = Category::where('slug', $subcategory)->firstOrFail();
            $category = Category::where('slug', $category)->firstOrFail();
            $products = $subcategory->products()->get();

            // Generate breadcrumb for subcategory
            Breadcrumbs::register('products.by.cat', function ($trail) use ($category, $subcategory) {
                $trail->push('home', route('home'));
                $trail->push($category->name, route('products.by.cat', [$category->slug]));
                $trail->push($subcategory->name, route('products.by.cat', [$subcategory->slug, $subcategory->slug]));
            });

            // Return view for products under subcategory
            return view('shop.shop', [
                'products' => $products
            ]);
        } else {
            // Retrieve products by category
            $category = Category::where('slug', $category)->firstOrFail();
            $products = $category->products()->get();

            // Generate breadcrumb for category
            Breadcrumbs::for('products.by.cat', function ($trail) use($category) {
                $trail->parent('home');
                $trail->push($category->name, route('products.by.cat', $category->slug));
            });

            // Return view for products under category
            return view('shop.shop', [
                'products' => $products
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function shop()
    {
        // Get last six products from the products
        $products = Product::with('category')->paginate(12);

        // Generate breadcrumb for shop
        Breadcrumbs::for('shop', function ($trail) {
            $trail->parent('home');
            $trail->push('Shop', route('shop'));
        });

        return view('shop.shop', [
            'products' => $products
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
}

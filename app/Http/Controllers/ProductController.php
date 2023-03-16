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

        //Get last six related products from the products
        $related_products = Product::where('category_id', $product->category_id)->latest()->take(6)->get();

        // Get last three products from the products
        $top_products = Product::latest()->take(3)->get();

        // Generate breadcrumb for single product
        Breadcrumbs::for('product.details', function ($trail) use ($product) {
            $trail->parent('home');
            $trail->push($product->category->name, route('product.details', $product->category->slug));
            $trail->push($product->name, route('product.details', $product->slug));
        });

        return view('product.product', [
                'product' => $product,
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
        $products = Product::latest()->take(6)->get();

        // Generate breadcrumb for shop
        Breadcrumbs::for('shop', function ($trail) {
            $trail->parent('home');
            $trail->push('Shop', route('shop'));
        });

        return view('shop.shop', [
            'products' => $products
        ]);
    }
}

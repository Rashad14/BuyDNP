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
        return 'product';
        // Get product by a slug from the products
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();

        //Get last six related products from the products
        $related_products = Product::where('category_id', $product->category_id)->latest()->take(6)->get();

        // Get last three products from the products
        $top_products = Product::latest()->take(3)->get();

        // Generate breadcrumb for single product
        Breadcrumbs::for('product.details', function ($trail) use ($product) {
            $trail->parent('home');
            $trail->push($product->name, route('product.details', $product->slug));
        });

        return view('product.product',
            [
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

    public function productsByCat($slug, $catSlug = null, $subCatSlug = null)
    {
        if ($slug) {
            return  "slug";
            // Retrieve single product by slug
            $product = Product::with('category')->where('slug', $slug)->firstOrFail();

            // Generate breadcrumb for single product
            Breadcrumbs::for('product.details', function ($trail, $product) use ($catSlug, $subCatSlug) {
                $trail->parent('subcategory', $catSlug, $subCatSlug);
                $trail->push($product->name, route('productsByCat', [$catSlug, $subCatSlug, $product->slug]));
            });

            return view('product.product', compact('product'));
        } elseif ($subCatSlug) {
            return "subCatSlug";
            // Retrieve products by subcategory
            $subcategory = Subcategory::where('slug', $subCatSlug)->firstOrFail();
            $products = $subcategory->products()->where('is_active', true)->get();

            // Generate breadcrumb for subcategory
            Breadcrumbs::for('subcategory', function ($trail, $subcategory) use ($catSlug) {
                $trail->parent('category', $catSlug);
                $trail->push($subcategory->name, route('productsByCat', [$catSlug, $subcategory->slug]));
            });

            return view('product.subcategory', compact('products', 'subcategory'));
        } elseif ($catSlug) {
            return "catSlug";
            // Retrieve products by category
            $category = Category::where('slug', $catSlug)->firstOrFail();
            $products = $category->products()->where('is_active', true)->get();

            // Generate breadcrumb for category
            Breadcrumbs::for('category', function ($trail, $category) {
                $trail->parent('home');
                $trail->push($category->name, route('productsByCat', $category->slug));
            });

            return view('product.category', compact('products', 'category'));
        } else {
            // Retrieve all active products
            $products = Product::where('is_active', true)->get();

            return view('product.all', compact('products'));
        }
    }

}

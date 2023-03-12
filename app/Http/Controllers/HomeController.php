<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Get all categories with their subcategories
        $categories = Category::with('children')->whereNull('parent_id')->get();

        // Get last six products from the products
        $products = Product::latest()->take(6)->get();

        return view('home.home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}

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

    public function about()
    {
        // Generate breadcrumb for about
        Breadcrumbs::for('about', function ($trail) {
            $trail->parent('home');
            $trail->push('About Us', route('about'));
        });

        return view('about.about');
    }

    public function contact()
    {
        // Generate breadcrumb for contact
        Breadcrumbs::for('contact', function ($trail) {
            $trail->parent('home');
            $trail->push('Contact Us', route('contact'));
        });
        return view('contact.contact');
    }

    public function wishlist()
    {
        // Generate breadcrumb for contact
        Breadcrumbs::for('wishlist', function ($trail) {
            $trail->parent('home');
            $trail->push('Wishlist', route('wishlist'));
        });
        return view('wishlist.wishlist');
    }
}

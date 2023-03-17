<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        // Get last six products from the products
        $our_products = Product::with('category')->latest()->take(6)->get();

        // Get random nine products from the products
        $trending_products = Product::with('category')->inRandomOrder()->take(9)->get();

        // Get random nine products from the products
        $featured_products = Product::with('category')->inRandomOrder()->take(9)->get();

        return view('home.home', [
            'our_products' => $our_products,
            'trending_products' => $trending_products,
            'featured_products' => $featured_products,
        ]);
    }

    public function faq():View
    {
        // Generate breadcrumb for about
        Breadcrumbs::for('faq', function ($trail) {
            $trail->parent('home');
            $trail->push('Frequently asked questions', route('faq'));
        });

        return view('faq.faq');
    }

    public function not_found():View
    {
        // Generate breadcrumb for about
        Breadcrumbs::for('not.found', function ($trail) {
            $trail->parent('home');
            $trail->push('404 | NOT FOUND', route('not.found'));
        });

        return view('404.404');
    }

    public function about(): View
    {
        // Generate breadcrumb for about
        Breadcrumbs::for('about', function ($trail) {
            $trail->parent('home');
            $trail->push('About Us', route('about'));
        });

        return view('about.about');
    }

    public function contact(): View
    {
        // Generate breadcrumb for contact
        Breadcrumbs::for('contact', function ($trail) {
            $trail->parent('home');
            $trail->push('Contact Us', route('contact'));
        });
        return view('contact.contact');
    }

    public function wishlist(): View
    {
        // Generate breadcrumb for contact
        Breadcrumbs::for('wishlist', function ($trail) {
            $trail->parent('home');
            $trail->push('Wishlist', route('wishlist'));
        });
        return view('wishlist.wishlist');
    }

    public function cart(): View
    {
        // Generate breadcrumb for contact
        Breadcrumbs::for('cart', function ($trail) {
            $trail->parent('home');
            $trail->push('Shopping Cart', route('cart'));
        });
        return view('cart.cart');
    }
}

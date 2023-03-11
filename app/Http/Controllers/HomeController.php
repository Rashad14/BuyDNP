<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Get all categories with their subcategories
        $categories = Category::with('children')->whereNull('parent_id')->get();

        return view('home.home', ['categories' => $categories]);
    }
}

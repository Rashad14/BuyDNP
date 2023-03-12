<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('profile.edit');
})->middleware(['auth', 'verified'])->name('dashboard');

// User Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth Routes
require __DIR__.'/auth.php';

// Voyager Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//|--------------------------------------------------------------------------
//| Front Side Routes
//|--------------------------------------------------------------------------

// Home Page Routes
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// About Page Routes
Route::view('/about-us', 'about.about')->name('about');

// Shop Page Routes
Route::view('/shop', 'shop.shop')->name('shop');

// Contact Page Routes
Route::view('/contact-us', 'contact.contact')->name('contact');

// Product Page Routes
Route::get('/product/{slug?}', [\App\Http\Controllers\ProductController::class, 'details'])->name('product.details');

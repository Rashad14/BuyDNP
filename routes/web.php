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

// Auth Routes
Route::middleware('auth')->group(function () {

    // User Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Order Routes
    Route::post('/order-place', [\App\Http\Controllers\OrderController::class, 'order_place'])->name('order.place');
    Route::get('/order-view/{uuid}', [\App\Http\Controllers\ProfileController::class, 'order_view'])->name('order.view');
    Route::get('/order-place-success', [\App\Http\Controllers\CheckoutController::class, 'order_place_success'])->name('order.place.success');
});

// Auth Routes
require __DIR__.'/auth.php';

// Voyager Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    // Your overwrites here
    Route::get('orders/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'order']);
    Route::post('/update-order-status', [\App\Http\Controllers\Admin\OrderController::class, 'update_status'])->name('update.order.status');
});

//|--------------------------------------------------------------------------
//| Front Side Routes
//|--------------------------------------------------------------------------

// Home Page Routes
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Static page Routes
Route::get('/faq', [\App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/about-us', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/shopping-cart', [\App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/contact-us', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/wishlist', [\App\Http\Controllers\HomeController::class, 'wishlist'])->name('wishlist');

// Checkout Routes
Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');

// Product Routes
Route::get('/shop', [\App\Http\Controllers\ProductController::class, 'shop'])->name('shop');
Route::get('/{product?}', [\App\Http\Controllers\ProductController::class, 'details'])->name('product.details');
Route::get('/category/{category}/{subcategory?}', [\App\Http\Controllers\ProductController::class, 'productsByCat'])->name('products.by.cat');

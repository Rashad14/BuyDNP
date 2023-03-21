<?php

namespace App\Http\Controllers;

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    public function checkout(): View
    {
        //To get the user's last address and show it in the checkout page
        $address = auth()->user()?->addresses()->latest()->first();

        // Generate breadcrumb for checkout
        Breadcrumbs::for('checkout', function ($trail) {
            $trail->parent('home');
            $trail->push('Checkout', route('checkout'));
        });

        return view('checkout.checkout', ['address' => $address]);
    }

    public function order_place_success(): View
    {
        // Generate breadcrumb for order_place_success
        Breadcrumbs::for('order.place.success', function ($trail) {
            $trail->parent('home');
            $trail->push('Order Placed Successfully', route('order.place.success'));
        });

        return view('checkout.order_place.order_place_success');
    }
}

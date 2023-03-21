<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Order;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        //To get the user's addresses and show it in the profile page
        $addresses = $request->user()->addresses()->orderByDesc('id')->get();

        //To get the user's orders and show it in the profile page
        $orders = $request->user()->orders()->orderByDesc('id')->get();

        // Generate breadcrumb for profile
        Breadcrumbs::for('profile.edit', function ($trail) {
            $trail->parent('home');
            $trail->push('My account', route('profile.edit'));
        });

        return view('profile.edit', [
            'user' => $request->user(),
            'addresses' => $addresses,
            'orders' => $orders
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Display the user's single order.
     */

    public function order_view($uuid): View
    {
        //To get the user's order and show it in the order view page
        $order = Order::with('address', 'order_products.product')->where('uuid', $uuid)->first();

        // Generate breadcrumb for profile
        Breadcrumbs::for('order.view', function ($trail) use ($uuid){
            $trail->parent('home');
            $trail->push('My account', route('profile.edit'));
            $trail->push('View order', route('order.view', $uuid));
        });

        return view('profile.order_view', ['order' => $order]);
    }
}

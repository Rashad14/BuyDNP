<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\OrderPlaceRequest;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function order_place(OrderPlaceRequest $request)
    {
        try {
            // Begin a database transaction
            DB::beginTransaction();

            $user_id = auth()->user()->id;

            $address = Address::create([
                'user_id' => $user_id,
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'apartment' => $request->input('apartment'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'zip' => $request->input('zip'),
            ]);

            $orderTotal = $request->input('total');

            $order = Order::create([
                'user_id' => $user_id,
                'address_id' => $address->id,
                'status' => 'pending',
                'total' => $orderTotal,
                'order_notes' => $request->input('order_notes'),
            ]);

            $products = json_decode($request->input('products'));

            foreach ($products as $product) {
                $orderProduct = OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $product->quantity,
                    'price' => $product->price,
                ]);
            }

            // Commit the transaction
            DB::commit();

            // Redirect the user to the order confirmation page
            return redirect()->route('order.place.success', ['order' => $order])->with('status', 'order-placed');

        } catch (\Exception $e) {
            // Something went wrong, rollback the transaction and handle the error
            DB::rollback();
            return redirect()->back()->withErrors('Error placing order: ' . $e->getMessage());
        }
    }
}

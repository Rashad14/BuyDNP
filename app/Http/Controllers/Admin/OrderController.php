<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Order;

class OrderController extends Controller
{
    public function order($id): View
    {
        //To get the customer's order and show it in the read view bread
        $order = Order::with('address', 'order_products.product')->where('id', $id)->first();

        return view('vendor.voyager.orders.read', [
            'order' => $order,
            'statusConstants' => Order::getStatusConstants()
        ]);
    }

    public function update_status(Request $request): JsonResponse
    {
        $orderId = $request->input('order_id');
        $status = $request->input('status');

        // Get the order from your database
        $order = Order::find($orderId);

        // Update the order status
        $order->status = $status;
        $order->save();

        return response()->json(['success' => true]);
    }
}

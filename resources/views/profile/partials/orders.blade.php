<div class="tab-pane fade" id="liton_tab_1_2">
    <div class="ltn__myaccount-tab-content-inner">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>#{{$order->uuid}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->status}}</td>
                            <td>${{$order->total}}</td>
                            <td><a href="{{route('order.view', ['uuid' => $order->uuid])}}">View</a></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="5" class="text-center p-4 {{$orders->count() > 0 ? 'd-none' : ''}}">
                            To view your orders, please place your first order with us.
                            <br>After placing an order, you'll be able to view and manage your orders from your account dashboard.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

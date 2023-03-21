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
                </tbody>
            </table>
        </div>
    </div>
</div>

@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.'Order')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-data"></i> Viewing Order &nbsp;

        <a href="{{implode('/', array_slice(explode('/', request()->url()), 0, -1))}}" class="btn btn-warning">
            <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">Return to List</span>
        </a>
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="container-fluid">

        <div class="container">
            <!-- Change order status -->
            <div class="d-flex justify-content-between align-items-center py-3" style="margin-bottom: 40px;">
                <h2 class="h5 mb-0">Change order status</h2>
                    <select name="status" id="status" class="form-control" onchange="changeStatus()">
                        @foreach ($statusConstants as $name => $value)
                            <option value="{{$value}}" {{$order->status == $value ? 'selected' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
            </div>

            <!-- Title -->
            <div class="d-flex justify-content-between align-items-center py-3">
                <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Order #{{$order->uuid}}</h2>
            </div>

            <!-- Main content -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- Details -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3 d-flex justify-content-between">
                                <div>
                                    <span class="me-3" style="margin-right: 14px">{{$order->created_at}}</span>
                                    <span class="me-3" style="margin-right: 14px">#{{$order->uuid}}</span>
                                    <span class="badge rounded-pill bg-info">{{$order->status}}</span>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i class="bi bi-download"></i> <span class="text">Invoice</span></button>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 text-muted" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i> Print</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-borderless">
                                <tbody>
                                    @foreach($order->order_products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0" style="float: left">
                                                        <img src="{{Storage::url($product->product->image)}}" alt="" width="35" class="img-fluid">
                                                    </div>
                                                    <div class="flex-lg-grow-1 ms-3">
                                                        <h6 class="small mb-0"><a href="{{route('product.details', ['product' => $product->product->slug])}}" class="text-reset" target="_blank">{{$product->product->name}}</a></h6>
                                                        <span class="small">Brand: {{$product->product->name}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$product->quantity}}</td>
                                            <td class="text-end">${{ number_format(($product->quantity * $product->price), 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">Subtotal</td>
                                    <td class="text-end">${{$order->total}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Shipping</td>
                                    <td class="text-end">$00.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Discount (Code: )</td>
                                    <td class="text-danger text-end">-$00.00</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td colspan="2">TOTAL</td>
                                    <td class="text-end">${{$order->total}}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="h6">Payment Method</h3>
                                    <p>Visa -1234 <br>
                                        Total: $169,98 <span class="badge bg-success rounded-pill">PAID</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Customer Notes -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">Customer Notes</h3>
                            <p>{{$order->order_notes}}</p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <!-- Shipping information -->
                        <div class="card-body">
                            <h3 class="h6">Shipping Information</h3>
                            <strong>FedEx</strong>
                            <span><a href="#" class="text-decoration-underline" target="_blank">FF1234567890</a> <i class="bi bi-box-arrow-up-right"></i> </span>
                            <hr>
                            <h3 class="h6">Billing/Shipping Address</h3>
                            <address>
                                <strong>{{auth()->user()->name}}</strong><br>
                                {{$order->address->country}}, {{$order->address->city}}, {{$order->address->state}}, {{$order->address->zip}}<br>
                                {{$order->address->address}}<br>
                                {{$order->address->apartment}}<br>
                                <abbr title="Phone">P:</abbr> {{$order->address->phone}}
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function changeStatus() {
        var status = document.getElementById("status").value;
        var orderId = {{$order->id}}

        if (confirm("Are you sure you want to update the order status?"))
        {
            $.ajax({
                type: "POST",
                url: "{{route('update.order.status')}}",
                data: {
                    status: status,
                    order_id: orderId
                },
                success: function(response) {
                    // Handle the response from the server
                    location.reload();
                    if (response.success) {
                        alert('Order status updated successfully.');
                    }
                },
                error: function(xhr) {
                    // Handle the error
                }
            });
        }
    }
</script>


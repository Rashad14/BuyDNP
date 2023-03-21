<div class="tab-pane fade" id="liton_tab_1_4">
    <div class="ltn__myaccount-tab-content-inner">
        <p>The following addresses will be used on the checkout page by default.</p>
        <div class="row">
            @foreach($addresses as $address)
                <div class="col-md-6 col-12 learts-mb-30">
                    <h4>Billing/Shipping Address <small><a href="#" class="d-none">edit</a></small></h4>
                    <address>
                        <p class="m-0"><strong>{{auth()->user()->name}}</strong></p>
                        <p class="m-0">{{$address->country}}, {{$address->city}}, {{$address->state}}, {{$address->zip}}</p>
                        <p class="m-0">{{$address->address}} <br>
                            {{$address->apartment}}</p>
                        <p>Mobile: {{$address->phone}}</p>
                    </address>
                </div>
            @endforeach
        </div>
    </div>
</div>

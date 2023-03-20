<div class="col-lg-12">
    <div class="ltn__checkout-inner">
        <div class="ltn__checkout-single-content">
            <h4 class="title-2">Billing Details</h4>
            <div class="ltn__checkout-single-content-info">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <h6>Country</h6>
                        <div class="input-item">
                            <x-input-error class="error" :messages="$errors->get('country')" />
                            <input type="text" placeholder="Country" name="country" value="{{old('country')}}">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <h6>Address</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item">
                                    <x-input-error class="error" :messages="$errors->get('address')" />
                                    <input type="text" placeholder="House number and street name" name="address" value="{{old('address')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <x-input-error class="error" :messages="$errors->get('apartment')" />
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="apartment" value="{{old('apartment')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Town / City</h6>
                        <div class="input-item">
                            <x-input-error class="error" :messages="$errors->get('city')" />
                            <input type="text" placeholder="City" name="city" value="{{old('city')}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>State </h6>
                        <div class="input-item">
                            <x-input-error class="error" :messages="$errors->get('state')" />
                            <input type="text" placeholder="State" name="state" value="{{old('state')}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Zip</h6>
                        <div class="input-item">
                            <x-input-error class="error" :messages="$errors->get('zip')" />
                            <input type="text" placeholder="Zip" name="zip" value="{{old('zip')}}">
                        </div>
                    </div>
                </div>
                <h6>Order Notes (optional)</h6>
                <div class="input-item input-item-textarea ltn__custom-icon">
                    <x-input-error class="error" :messages="$errors->get('order_notes')" />
                    <textarea placeholder="Notes about your order, e.g. special notes for delivery." name="order_notes" value="{{old('order_notes')}}"></textarea>
                </div>

            </div>
        </div>
    </div>
</div>

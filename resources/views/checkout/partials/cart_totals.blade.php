<div class="col-lg-6">
    <div class="shoping-cart-total mt-50">
        <h4 class="title-2">Cart Totals</h4>

        <x-input-error class="error" :messages="$errors->get('total')" />
        <x-input-error class="error" :messages="$errors->get('products')" />

        <checkout-cart></checkout-cart>

    </div>
</div>

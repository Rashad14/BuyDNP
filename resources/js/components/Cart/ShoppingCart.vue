<template>
    <div class="shoping-cart-inner">
        <div class="shoping-cart-table table-responsive">
            <table class="table">
                <!-- <thead>
                    <th class="cart-product-remove">Remove</th>
                    <th class="cart-product-image">Image</th>
                    <th class="cart-product-info">Product</th>
                    <th class="cart-product-price">Price</th>
                    <th class="cart-product-quantity">Quantity</th>
                    <th class="cart-product-subtotal">Subtotal</th>
                </thead> -->
                <tbody v-if="cartProducts.length">
                    <tr  v-for="(product, index) in cartProducts" :key="product.id">
                        <td class="cart-product-remove" @click="removeFromCart(index)">x</td>
                        <td class="cart-product-image">
                            <a :href="product.slug"><img :src="'storage/' +product.image" :alt="product.name"></a>
                        </td>
                        <td class="cart-product-info">
                            <h4><a :href="product.slug">{{product.name}}</a></h4>
                        </td>
                        <td class="cart-product-price">${{product.price}}</td>
                        <td class="cart-product-quantity">
                            <div class="cart-plus-minus">
                                <div class="dec qtybutton" @click="decrementQuantity(product)">-</div>
                                <input type="text" name="qtybutton" class="cart-plus-minus-box" :value="product.quantity" readonly>
                                <div class="inc qtybutton" @click.prevent="addToCart(product)">+</div>
                            </div>
                        </td>
                        <td class="cart-product-subtotal">${{(product.quantity * product.price).toFixed(2)}}</td>
                    </tr>
                    <tr class="cart-coupon-row d-none">
                    <td colspan="6">
                        <div class="cart-coupon">
                            <input type="text" name="cart-coupon" placeholder="Coupon code">
                            <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                        </div>
                    </td>
                    <td>
                        <button type="submit" class="btn theme-btn-2 btn-effect-2-- disabled">Update Cart</button>
                    </td>
                </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="text-center">Your shopping cart is empty!</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="shoping-cart-total mt-50">
            <h4>Cart Totals</h4>
            <table class="table">
                <tbody>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>${{cartTotalPrice}}</td>
                </tr>
                <tr class="d-none">
                    <td>Shipping and Handing</td>
                    <td>$15.00</td>
                </tr>
                <tr>
                    <td>Vat</td>
                    <td>$00.00</td>
                </tr>
                <tr>
                    <td><strong>Order Total</strong></td>
                    <td><strong>${{cartTotalPrice}}</strong></td>
                </tr>
                </tbody>
            </table>
            <div class="btn-wrapper text-right">
                <a :href="'checkout'" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShoppingCart",

    computed: {
        cartTotalPrice() {
            return this.$store.getters.cartTotalPrice.toFixed(2);
        },
        cartProducts() {
            return this.$store.getters.cartProducts
        }
    },

    methods: {
        addToCart(product) {
            this.$store.commit('addToCart', product);

            // set the product data in the modal
            this.$bus.emit('addToCartProduct', product);
            // open the quick view modal
            $('#add_to_cart_modal').modal('show');
        },

        decrementQuantity(product) {
            this.$store.commit('decrementQuantity', product);
        },
        removeFromCart(index) {
            this.$store.commit('removeFromCart', index)
        }
    },
}
</script>

<style scoped>

</style>

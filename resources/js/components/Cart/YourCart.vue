<template>
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div v-if="cartProducts.length" class="mini-cart-product-area ltn__scrollbar">
                <div  v-for="(product, index) in cartProducts" :key="product.id" class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a :href="product.slug"><img :src="'/storage/' +product.image" :alt="product.name"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel" @click="removeFromCart(index)"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a :href="product.slug">{{ product.name }}</a></h6>
                        <span class="mini-cart-quantity">{{product.quantity}} x ${{product.price}}</span>
                    </div>
                </div>
            </div>
            <div v-else class="mini-cart-product-area ltn__scrollbar">Your shopping cart is empty!</div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>${{ cartTotalPrice}}</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a :href="'shopping-cart'" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a :href="'checkout'" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>

</template>

<script>
export default {
    name: "Cart",

    computed: {
        cartItemCount() {
            return this.$store.getters.cartItemCount;
        },
        cartTotalPrice() {
            return this.$store.getters.cartTotalPrice.toFixed(2);
        },
        cartProducts() {
            return this.$store.getters.cartProducts
        }
    },

    methods: {
        removeFromCart(index) {
            this.$store.commit('removeFromCart', index)
        }
    }
}
</script>

<style scoped>

</style>

<template>
    <ul>
        <li>
            <div class="cart-plus-minus">
                <div class="dec qtybutton" @click="decrementQuantity(product)">-</div>
                <input type="text" name="qtybutton" class="cart-plus-minus-box" :value="productQuantity" readonly>
                <div class="inc qtybutton" @click.prevent="addToCart(product)">+</div>
            </div>
        </li>
        <li>
            <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" @click.prevent="addToCart(product)">
                <i class="fas fa-shopping-cart"></i>
                <span>ADD TO CART</span>
            </a>
        </li>
    </ul>
</template>

<script>
export default {
    name: "ProductDetailsCart",

    props: {
        product: {
            type: Object,
            required: true
        }
    },

    computed: {
        productQuantity() {
            const item = this.$store.state.cart.find(item => item.id === this.product.id)
            return item ? item.quantity : 0
        }
    },

    methods: {
        addToCart(product) {
            this.$store.commit('addToCart', product);

            // open the quick view modal
            $('#add_to_cart_modal').modal('show');
        },

        decrementQuantity(product) {
            this.$store.commit('decrementQuantity', product);
        }
    },
}
</script>

<style scoped>

</style>

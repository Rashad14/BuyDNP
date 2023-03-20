<template>
    <table class="table">
        <tbody v-if="cartProducts.length">
            <tr v-for="product in cartProducts" :key="product.id">
                <td>{{product.name}} <strong>× {{product.quantity}}</strong></td>
                <td>${{(product.quantity * product.price).toFixed(2)}}</td>
            </tr>
            <tr>
                <td>Vat</td>
                <td>$00.00</td>
            </tr>
            <tr>
                <td><strong>Order Total</strong></td>
                <td><strong>${{cartTotalPrice}}</strong></td>
            </tr>
            <input type="hidden" name="total" :value="cartTotalPrice">
            <input type="hidden" name="products" :value="JSON.stringify(cartProducts)">
        </tbody>
        <tbody v-else>
            <tr>
                <td class="text-center">Your shopping cart is empty!</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "CheckoutCart",

    computed: {
        cartTotalPrice() {
            return this.$store.getters.cartTotalPrice.toFixed(2);
        },
        cartProducts() {
            return this.$store.getters.cartProducts
        },

    }
}
</script>

<style scoped>

</style>

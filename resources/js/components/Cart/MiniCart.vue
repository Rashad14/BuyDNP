<template>
    <div class="mini-cart-icon mini-cart-icon-2">
        <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                            <span class="mini-cart-icon">
                                                <i class="icon-shopping-cart"></i>
                                                <sup>{{ cartItemCount }}</sup>
                                            </span>
            <h6><span>Your Cart</span> <span class="ltn__secondary-color">${{ cartTotalPrice }}</span></h6>
        </a>
    </div>
</template>

<script>
export default {
    name: "MiniCart",
    computed: {
        cartItemCount() {
            return this.$store.getters.cartItemCount;
        },
        cartTotalPrice() {
            return this.$store.getters.cartTotalPrice;
        }
    }
}
</script>

<style scoped>

</style>

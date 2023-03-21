<template>
    <h2 class="text-center">Order Placed Successfully!</h2>
</template>

<script>
export default {
    name: "ClearCart",

    created() {
        this.clearCart();
    },

    methods: {
        clearCart() {
            this.$store.commit('clearCart')
        }
    }
}
</script>

<style scoped>

</style>

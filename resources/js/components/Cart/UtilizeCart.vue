<template>
    <span class="utilize-btn-icon">
        <i class="fas fa-shopping-cart"></i>
        <sup>{{ cartItemCount }}</sup>
    </span>
</template>

<script>
export default {
    name: "UtilizeCart",

    computed: {
        cartItemCount() {
            return this.$store.getters.cartItemCount;
        }
    }
}
</script>

<style scoped>

</style>

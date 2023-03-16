<template>
    <span class="utilize-btn-icon">
        <i class="far fa-heart"></i>
        <sup>{{wishlistProductCount}}</sup>
    </span>
</template>

<script>
export default {
    name: "UtilizeWishlist",

    computed: {
        wishlistProductCount() {
            return this.$wishlistStore.getters.wishlistProductCount
        }
    },
}
</script>

<style scoped>

</style>

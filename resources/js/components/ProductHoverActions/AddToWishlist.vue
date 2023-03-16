<template>
    <a href="#" class="" title="Wishlist" @click.prevent="addToWishlist(product)">
        <i class="far fa-heart"></i>
        <span>Add to Wishlist</span>
    </a>
</template>

<script>
export default {
    name: "AddToWishlist",
    props: {
        product: {
            type: Object,
            required: true
        }
    },

    methods: {
        addToWishlist(product) {
            this.$wishlistStore.commit('addToWishlist', product)

            // set the product data in the modal
            this.$bus.emit('addToWishlistProduct', product);

            // open the quick view modal
            $('#liton_wishlist_modal').modal('show');
        }
    },
}
</script>

<style scoped>

</style>

<template>
    <div class="product-hover-action">
        <ul>
            <li>
                <a href="#" title="Quick View" @click.prevent="openQuickViewModal(product)">
                    <i class="far fa-eye"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                    <i class="far fa-heart"></i></a>
            </li>
        </ul>
    </div>
</template>

<script>

export default {
    name: "ProductHoverAction",
    props: {
        product: {
            type: Object,
            required: true
        }
    },

    methods: {
        openQuickViewModal(product) {
            // set the product data in the modal
            this.$bus.emit('quickViewProduct', product);

            // open the quick view modal
            $('#quick_view_modal').modal('show');
        },
    },

    created() {
        // console.log(this.product.id);
    }
}
</script>

<style scoped>

</style>

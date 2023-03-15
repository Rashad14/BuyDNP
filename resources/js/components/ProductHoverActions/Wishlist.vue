<template>
    <div class="liton__wishlist-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <!-- <thead>
                                    <th class="cart-product-remove">X</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Title</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                <tbody>
                                <tr v-for="(product, index) in wishlistProducts" :key="product.id">
                                    <td class="cart-product-remove" @click="removeFromWishlist(index)">x</td>
                                    <td class="cart-product-image">
                                        <a :href="product.slug"><img :src="'storage/' +product.image" alt="#"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a :href="product.slug">{{product.name}}</a></h4>
                                    </td>
                                    <td class="cart-product-price">${{product.price}}</td>
                                    <td class="cart-product-stock">In Stock</td>
                                    <td class="cart-product-add-cart">
                                        <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Wishlist",

    computed: {
        wishlistProducts() {
            return this.$wishlistStore.getters.wishlistProducts
        }
    },

    methods: {
        removeFromWishlist(index) {
            this.$wishlistStore.commit('removeFromWishlist', index)
        }
    }
}
</script>

<style scoped>

</style>

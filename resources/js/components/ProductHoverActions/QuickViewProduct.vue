<template>
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div v-if="product" class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img :src="'/storage/' +product.image" :alt="product.name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul class="">
                                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                                {{product.brand_name}}

                                            </div>
                                            <h3><a :href="product.slug">{{product.name}}</a></h3>
                                            <div class="product-price">
                                                <span>${{product.price}}</span>
                                                <del>${{product.price * 2}}</del>
                                            </div>
                                            <hr>
                                            <div class="modal-product-brief d-none">
                                                <p v-html="product.description"></p>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Product Code:</strong>
                                                        <span>
                                                            <a href="JavaScript:void(0)">{{product.product_code}}</a>
                                                        </span>
                                                    </li>
                                                    <li class="mt-0">
                                                        <strong>Availability:</strong>
                                                        <span>
                                                            <a href="JavaScript:void(0)">{{product.availability ? 'In stock' : 'Out of Stock'}}</a>
                                                        </span>
                                                    </li>
                                                    <li class="mt-0">
                                                        <strong>Categorie:</strong>
                                                        <span>
                                                            <a :href="'category/' +product.category.slug">{{product.category.name}}</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <product-details-cart :product="product"></product-details-cart>
                                            </div>
                                            <!-- <hr> -->
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <add-product-to-wishlist :product="product"></add-product-to-wishlist>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-none" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                                </ul>
                                            </div>
                                            <label class="float-end mb-0"><a class="text-decoration" :href="product.slug"><small>View Details</small></a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name: "QuickViewProduct",

    data() {
        return {
            product: null
        };
    },
    created() {
        this.$bus.on('quickViewProduct', (product) => {
            this.product = product;
        });
    },
}
</script>

<style scoped>

</style>

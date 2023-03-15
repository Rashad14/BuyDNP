<div class="ltn__shop-details-inner mb-60">
    <div class="row">
        <div class="col-md-6">
            <div class="ltn__shop-details-img-gallery">
                <div class="ltn__shop-details-large-img">
                    @foreach (json_decode($product->slider_images) as $image)
                        <div class="single-large-img">
                            <a href="{{ Storage::url($image) }}" data-rel="lightcase:myCollection">
                                <img src="{{ Storage::url($image) }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="ltn__shop-details-small-img slick-arrow-2">
                    @foreach (json_decode($product->slider_images) as $image)
                        <div class="single-small-img">
                            <img src="{{ Storage::url($image) }}" alt="{{ $product->name }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="modal-product-info shop-details-info pl-0">
                <div class="product-ratting">
                    <ul>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                        <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                    </ul>
                </div>
                <h3>{{$product->name}}</h3>
                <div class="product-price">
                    <span>${{$product->price}}</span>
                    <del>$65.00</del>
                </div>
                <div class="modal-product-meta ltn__product-details-menu-1">
                    <ul>
                        <li>
                            <strong>Category:</strong>
                            <span>
                                <a href="#">{{$product->category->name}}</a>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="ltn__product-details-menu-2">
                    <product-details-cart :product='@json($product)'></product-details-cart>
                </div>
                <div class="ltn__product-details-menu-3">
                    <ul>
                        <li>
                            <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                <i class="far fa-heart"></i>
                                <span>Add to Wishlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
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
                <hr>
            </div>
        </div>
    </div>
</div>

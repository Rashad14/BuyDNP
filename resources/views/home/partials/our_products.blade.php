<div class="ltn__product-area ltn__product-gutter pt-20--- pt-65  pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Our Products</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    <!-- ltn__product-item -->
                    @foreach($our_products as $product)
                        <div class="col-lg-3--- col-md-3 col-sm-6 col-6">
                            <div class="ltn__product-item ltn__product-item-2 text-left">
                                <div class="product-img">
                                    <a href="{{ route('product.details', ['product' => $product->slug]) }}"><img src="{{Storage::url($product->image)}}" alt="{{$product->name}}"></a>
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badge">New</li>
                                        </ul>
                                    </div>

                                    <product-hover-action :product='@json($product)'></product-hover-action>

                                </div>
                                <div class="product-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title product-title-our"><a href="{{ route('product.details', ['product' => $product->slug]) }}">{{$product->name}}</a></h2>
                                    <div class="product-price">
                                        <span>${{$product->price}}</span>
                                        <del>${{($product->price * 2)}}</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>

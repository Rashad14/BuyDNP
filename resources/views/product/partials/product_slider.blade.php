<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h4 class="title-2">Related Products<span>.</span></h4>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach($related_products as $product)
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="{{route('product.details', ['product' => $product->slug])}}"><img src="{{Storage::url($product->image)}}" alt="{{$product->name}}"></a>
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
                            <h2 class="product-title"><a href="{{route('product.details', ['product' => $product->slug])}}">{{$product->name}}</a></h2>
                            <div class="product-price">
                                <span>${{$product->price}}</span>
                                <del>${{$product->price * 2}}</del>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--  -->
        </div>
    </div>
</div>

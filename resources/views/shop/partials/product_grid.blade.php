<div class="tab-pane fade active show" id="liton_product_grid">
    <div class="ltn__product-tab-content-inner ltn__product-grid-view">
        <div class="row">
            <!-- ltn__product-item -->
            @foreach($products as $product)
                <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
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
                            <h2 class="product-title product-title-new"><a href="{{route('product.details', ['product' => $product->slug])}}">{{$product->name}}</a></h2>
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

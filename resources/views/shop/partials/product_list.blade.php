<div class="tab-pane fade" id="liton_product_list">
    <div class="ltn__product-tab-content-inner ltn__product-list-view">
        <div class="row">
            <!-- ltn__product-item -->
            @foreach($products as $product)
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3">
                        <div class="product-img product-img-grid">
                            <a href="{{route('product.details', ['product' => $product->slug])}}"><img src="{{Storage::url($product->image)}}" alt="{{$product->name}}"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="{{route('product.details', ['product' => $product->slug])}}">{{$product->name}}</a></h2>
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span>${{$product->price}}</span>
                                <del>${{$product->price * 2}}</del>
                            </div>
                            <div class="product-brief">
                                @if (strlen(strip_tags($product->description)) > 114)
                                    <p>{{ substr(strip_tags($product->description), 0, 114) }}...</p>
                                @else
                                    <p>{{ strip_tags($product->description) }}</p>
                                @endif
                            </div>
                            <product-hover-action :product='@json($product)'></product-hover-action>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--  -->
        </div>
    </div>
</div>

<div class="ltn__small-product-list-area section-bg-1 pt-115 pb-90 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Featured Products</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- small-product-item -->
            @foreach($featured_products as $product)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="{{ route('product.details', ['product' => $product->slug]) }}"><img src="{{Storage::url($product->image)}}" alt="{{$product->name}}"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title product-title-featured"><a href="{{ route('product.details', ['product' => $product->slug]) }}">{{$product->name}}</a></h2>
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

<div class="widget ltn__top-rated-product-widget">
    <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
    <ul>
        @foreach($top_products as $product)
            <li>
            <div class="top-rated-product-item clearfix">
                <div class="top-rated-product-img">
                    <a href="{{route('product.details', ['slug' => $product->slug])}}"><img src="{{Storage::url($product->image)}}" alt="{{$product->name}}"></a>
                </div>
                <div class="top-rated-product-info">
                    <div class="product-ratting">
                        <ul>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                        </ul>
                    </div>
                    <h6><a href="{{route('product.details', ['slug' => $product->slug])}}">{{$product->name}}</a></h6>
                    <div class="product-price">
                        <span>${{$product->price}}</span>
                        <del>$65.00</del>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>

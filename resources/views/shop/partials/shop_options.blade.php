<div class="ltn__shop-options">
    <ul>
        <li>
            <div class="ltn__grid-list-tab-menu ">
                <div class="nav">
                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                </div>
            </div>
        </li>
        <li>
            <div class="short-by text-center">
                <form action="{{ route('shop') }}" method="GET" id="sort-form">
                    <select name="sort" id="sort">
                        <option value="default">Default sorting</option>
                        <option value="low_high" {{ $sortOption == 'low_high' ? 'selected' : '' }}>Sort by price: low to high</option>
                        <option value="high_low" {{ $sortOption == 'high_low' ? 'selected' : '' }}>Sort by price: high to low</option>
                    </select>
                </form>
            </div>
        </li>
        <li>
            <div class="showing-product-number text-right">
                <span>Showing {{$products->count() }} of {{$products->total()}} results</span>
            </div>
        </li>
    </ul>
</div>

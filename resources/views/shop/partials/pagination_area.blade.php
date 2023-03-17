<div class="ltn__pagination-area text-center">
    <div class="ltn__pagination">
        {{ $products->appends(['sort' => $sortOption])->links('vendor.pagination.default') }}
    </div>
</div>

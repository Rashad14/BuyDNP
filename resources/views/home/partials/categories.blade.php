<div class="ltn__category-menu-wrap">
    <div class="ltn__category-menu-title">
        <h2 class="section-bg-1 ltn__secondary-bg text-color-white">categories</h2>
    </div>
    <div class="ltn__category-menu-toggle ltn__one-line-active">
        <ul>
            @foreach ($categories as $category)
                <li class="ltn__category-menu-item ltn__category-menu-drop">
                    <a href="shop.html">{{ $category->name }}</a>
                    @if ($category->children && $category->children->count())
                        <ul class="ltn__category-submenu">
                            <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">{{ $category->name }}</a>
                                <ul class="ltn__category-submenu-children">
                                    @foreach ($category->children as $child)
                                        <li>
                                            <a href="#">{{ $child->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    @endif
                </li>
            @endforeach
            <!-- Submenu -->
        </ul>
    </div>
</div>

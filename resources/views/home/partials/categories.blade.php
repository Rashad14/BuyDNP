
        <ul>
            @foreach ($categories as $category)
                <li class="ltn__category-menu-item ltn__category-menu-drop">
                    <a href="{{route('products.by.cat', ['category' => $category->slug, 'subcategory' => ''])}}">{{ $category->name }}</a>
                    @if ($category->children && $category->children->count())
                        <ul class="ltn__category-submenu ltn__category-column-4">
                            <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">{{ $category->name }}</a>
                                <ul class="ltn__category-submenu-children">
                                    @foreach ($category->children as $child)
                                        <li>
                                            <a href="{{route('products.by.cat', ['category' => $category->slug, 'subcategory' => $child->slug])}}">{{ $child->name }}</a>
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

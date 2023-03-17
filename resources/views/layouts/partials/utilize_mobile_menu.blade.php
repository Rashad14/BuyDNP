<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{route('home')}}"><img src="{{asset('panel/img/logo.png')}}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{route('home')}}">Home</a>
                </li>
                <li><a href="{{route('about')}}">About</a>
                </li>
                <li><a href="{{route('shop')}}">Shop</a>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="javascript:void(0)">Payment</a></li>

            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="{{auth() ? route('profile.edit') : route('login')}}" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="{{route('wishlist')}}" title="Wishlist">
                        <utilize-wishlist></utilize-wishlist>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="{{route('cart')}}" title="Shopping Cart">
                        <utilize-cart></utilize-cart>
                        Shopping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>

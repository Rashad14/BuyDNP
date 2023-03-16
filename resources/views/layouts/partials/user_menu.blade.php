<div class="ltn__drop-menu user-menu">
    <ul>
        <li>
            <a href="#"><i class="icon-user"></i></a>
            <ul>
                @auth()
                    <li><a href="{{route('profile.edit')}}">My Account</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{route('logout')}}"
                               onclick="event.preventDefault();
                                                                         this.closest('form').submit();">
                                {{ __('Logout') }} </i>
                            </a>
                        </form>
                    </li>
                @else
                    <li><a href="{{route('login')}}">Sign in</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @endauth
                    <li><a href="{{route('wishlist')}}">Wishlist</a></li>
            </ul>
        </li>
    </ul>
</div>

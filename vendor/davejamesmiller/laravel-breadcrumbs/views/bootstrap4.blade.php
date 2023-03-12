@if (count($breadcrumbs))

    <ul class="">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="">
                    <a href="{{ $breadcrumb->url }}">
                        <span class="ltn__secondary-color">
                            @if($loop->first)<i class="fas fa-home"></i>@endif
                        </span>
                        {{ $breadcrumb->title }}
                    </a>
                </li>
            @else
                <li class="">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ul>

@endif

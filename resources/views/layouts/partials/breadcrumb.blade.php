<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <div class="ltn__breadcrumb-list">
                        @if (Breadcrumbs::exists())
                            {{ Breadcrumbs::render() }}
                        @else
                            <ul class="">
                                <li class=""><a href="{{route('home')}}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> Home </a></li>
                                <li class="">Not Found</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

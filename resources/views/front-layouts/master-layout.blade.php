<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-layouts.partials.head')
    @include('front-layouts.assets.css')
</head>

<body>
    {{-- <div class="page-loading">
        <div class="preloader-inner">
            <div class="preloader-square-swapping">
                <div class="cssload-square-part cssload-square-green"></div>
                <div class="cssload-square-part cssload-square-pink"></div>
                <div class="cssload-square-blend"></div>
            </div>
        </div>
    </div> --}}
    <!-- /Loader -->

    {{-- <div class="main-wrapper">
        @include('front-layouts.partials.navbar')
        @yield('content')
        @include('front-layouts.partials.footer')
        @include('front-layouts.partials.modals')
    </div> --}}

    @auth
        @if (Auth::user()->isLawyer())
            <div class="main-wrapper">
                @include('front-layouts.partials.lawyer-navbar')
                <div class="content">
                    <div class="container">
                        <div class="row">
                            @include('front-layouts.partials.lawyer-sidebar')
                            {{-- @yield('content') --}}
                            @include('front-layouts.pages.lawyer.dashboard')
                        </div>
                    </div>
                </div>
                @include('front-layouts.partials.lawyer-footer')
            </div>
        @elseif(Auth::user()->isCustomer())
            <div class="main-wrapper">
                @include('front-layouts.partials.user-navbar')
                <div class="content">
                    <div class="container">
                        <div class="row">
                            @include('front-layouts.partials.user-sidebar')
                            {{-- @yield('content') --}}
                            @include('front-layouts.pages.customer.dashboard')
                        </div>
                    </div>
                </div>
                @include('front-layouts.partials.user-footer')
            </div>
        @endif
    @endauth
    @guest
        <div class="main-wrapper">
            @include('front-layouts.partials.navbar')
            @yield('content')
            @include('front-layouts.partials.footer')
            @include('front-layouts.partials.modals')
        </div>
    @endguest

    @include('front-layouts.assets.script')
</body>

</html>

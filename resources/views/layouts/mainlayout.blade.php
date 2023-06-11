<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    @include('layouts.partials.head')
    @include('layouts.assets.css')
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')
        @yield('content')
    </div>
    @include('layouts.assets.script')
</body>

</html>

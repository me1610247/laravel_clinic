@include('front.layouts.header')
<body>
    <div class="page-wrapper">
        @include('front.layouts.navbar')
        @yield('content')
    </div>
</body>
    @include('front.layouts.footer')
    @include('front.layouts.js')
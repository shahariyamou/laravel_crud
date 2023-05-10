<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:20 GMT -->
<head>
    <meta charset="utf-8">
    <title>BIZTROX || @yield('title')</title>


    @include('front.includes.css')
</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('/') }}front/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
@include('front.includes.header')
<!-- /navigation -->

@yield('body')

<!-- footer -->
@include('front.includes.footer')
<!-- /footer -->

@include('front.includes.js')
</body>

<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:55 GMT -->
</html>

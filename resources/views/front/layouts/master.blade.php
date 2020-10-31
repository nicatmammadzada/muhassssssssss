<!DOCTYPE html>
<!--
Template Name: JB desks
Version: 1.0.0
Author: webstrot

-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from webstrot.com/html/jbdesk/main_version/main_pages/index_III.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 19:04:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    @include('front.layouts.include.head')
    @yield('head')
</head>

<body>
<!-- preloader Start -->
<!-- preloader Start -->
{{--<div class="jb_preloader">--}}
{{--    <div class="spinner_wrap">--}}
{{--        <div class="spinner"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="cursor cursor2 cursor3"></div>
<!-- Top Scroll Start --><a href="javascript:" id="return-to-top" class="return_top3"><i
        class="fas fa-angle-double-up"></i></a>
<!-- Top Scroll End -->
<!-- cp navi wrapper Start -->
@include('front.layouts.include.header')

<!-- navi wrapper End -->
<!-- slider wrapper Start -->
@yield('home_slider')
<!-- slider wrapper End -->
<!--services wrapper start-->
@yield('job_search')
<!--service wrapper end-->
<!-- best vacancies wrapper start-->
@yield('vacancies')

@yield('content')


@include('front.layouts.include.footer')

<!-- chat box Wrapper end -->
<!--custom js files-->
@include('front.layouts.include.foot')
@yield('foot')
<!-- custom js-->
</body>


<!-- Mirrored from webstrot.com/html/jbdesk/main_version/main_pages/index_III.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 19:06:20 GMT -->
</html>

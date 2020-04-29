<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta name="author" content="VAIO Corporation.">
    <meta name="keywords" content="@lang('common.meta.keywords')">
    <meta name="description" content="@lang('common.meta.description')">

    <meta property="og:title" content="VAIO">
    <meta property="og:site_name" content="VAIO">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="@lang('common.meta.description')">
    <meta property="og:image" content="https://hk.vaio.com/images/banner/fb-pic.jpg">

    @yield("meta")

    <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}" type="image/x-icon">

    <title>@yield('title', __('common.website_title'))</title>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-119970250-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

    <!-- Facebook Pixel Code -->

    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){
            n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '355545044967754');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=355545044967754&ev=PageView&noscript=1"/>
    </noscript>

    <!-- End Facebook Pixel Code -->

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/psr0fyl.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/azumino.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}" />



    @yield('css')
    @stack('css')

<!-- Scripts -->
    <!-- JS -->
    <script src="{{ asset('libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/popperjs/popperjs.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/blazy-master/blazy.min.js') }}"></script>
    <script src="{{ asset('js/support.js') }}"></script>
    <script src="{{ asset('js/footer.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>


    @yield('libjs')
    @stack('libjs')

    <script>
        var lang = "";
        var temp = window.location.pathname.split("/")[1];
        //check if localization exist
        if( $('html').attr('lang') == temp){
            lang = '/' + temp;
        }
        var pathname = window.location.pathname;
    </script>


</head>
<body>
@include('layout.header')
<main>
    @yield('content')
</main>
@include('layout.footer')
<div id="back-to-top">
    <div class="up-arrow"></div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
@yield('js')
@stack('js')
</body>
</html>

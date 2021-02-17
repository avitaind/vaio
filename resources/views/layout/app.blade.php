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
    <meta property="og:image" content="{{ asset('images/banner/VAIO_Unfold_the_Excellence_of_Japan_FbVisual_1200x630_v02.jpg') }}">

    @yield("meta")

    <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}" type="image/x-icon">

    <title>

        @if(View::hasSection('title'))
            @yield('title') @lang( 'common.website_title_suffix')
        @else
            @lang('common.website_title')
        @endif

    </title>



    <!-- Styles -->

    <link rel="preload" href="{{ asset('libs/bootstrap/css/oswald.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('libs/bootstrap/css/psr0fyl.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('libs/swiper/swiper.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('libs/tether/css/tether.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/global.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

     
      <!--- 
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap/css/oswald.css') }}"> 
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap/css/psr0fyl.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/tether/css/tether.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}" />
    --->
    {{--<link type="text/css" rel="stylesheet" href="{{ asset('css/azumino.css') }}" />--}}
    {{--<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}" />--}}
  



    <style>

        .text-danger.form-error {
            color: red !important;
            font-weight: 600;
        }

    </style>

    @yield('css')
    @stack('css')

<!-- Scripts -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

    <!-- JS -->
    <script  src="{{ asset('libs/swiper/swiper.min.js') }}" ></script>
    <script  src="{{ asset('libs/jquery/jquery.min.js') }}" ></script>
    <script  src="{{ asset('libs/popperjs/popperjs.min.js') }}" ></script>
    <script  src="{{ asset('libs/tether/js/tether.min.js') }}" ></script>
    <script  src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}" ></script>
    <script  src="{{ asset('libs/blazy-master/blazy.min.js') }}" ></script>
    <script  src="{{ asset('js/footer.js') }}" ></script>
    <script  src="{{ asset('js/demo.js') }}" ></script>
    <script  src="{{ asset('js/jquery.rwdImageMaps.min.js') }}" ></script>
    <script  src="{{ asset('js/product.js') }}"></script>
    <script  src="{{ asset('js/html5gallery.js') }}"></script>


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


    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-119970250-5', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=G-8MS82GVESW"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-8MS82GVESW');
 </script>

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


    <!-- Global site tag (gtag.js) - AdWords: 878181922 -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=AW-878181922"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);} gtag('js', new Date());
        gtag('config', 'AW-878181922');
    </script>

 <!-- Facebook Pixel Code -->

    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1366117793720319');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1366117793720319&ev=PageView&noscript=1"/>
    </noscript>


<!-- End Facebook Pixel Code -->
<script defer type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>



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


@yield('js')
@stack('js')


<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 830592061;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script defer type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/830592061/?guid=ON&amp;script=0"/>
    </div>
</noscript>


</body>
</html>

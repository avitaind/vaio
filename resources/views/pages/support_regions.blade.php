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

    <title>

        @if(View::hasSection('title'))
            @yield('title') @lang( 'common.website_title_suffix')
        @else
            @lang('common.website_title')
        @endif


    </title>

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
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/swiper/swiper.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('libs/tether/css/tether.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/support_region.css') }}" />

    <!-- Scripts -->
    <!-- JS -->
    <script src="{{ asset('libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/popperjs/popperjs.min.js') }}"></script>
    <script src="{{ asset('libs/tether/js/tether.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/blazy-master/blazy.min.js') }}"></script>
    <script src="{{ asset('js/footer.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>


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

<!-- Header -->

<div class="headerCover @hasSection('product_nav') product-header @endif "></div>
<nav class="header navbar">
    <div class="navbar-inner">

        <a class="navbar-brand mr-0 hidden-lg-up" href="/"><img src="/images/vaio.png" /></a>

        <div class="navbar-collapse">
            <ul class="main-nav  navbar-nav mr-auto d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between nav-fill w-100">
                <li class=""  style="padding-top: 1rem; padding-bottom: 1rem;" >
                    <a class="ml-3" href="/"><img src="/images/vaio.png" /></a>
                </li>

            </ul>
        </div>
        @if( $user = Auth::user( ) )
            <aside class="navbar-user-warp hidden-lg-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username">{{ $user->name }}</div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                            <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4 ">{{ $user->email }}</a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}" class=" pl-4">@lang('common.nav.member.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3">@lang('common.nav.member.logout')</button></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </aside>

        @endif

    </div>

    @yield('product_nav')
</nav>



<!-- End of Header -->

<main>
    <section class="localization-panel top-nav-padding ls-0">
        <div class="title section-title text-center pt-5">
            選擇您的所在地 <br>
        </div>
        <div class="title section-title text-center pt-0 pb-5" style="font-size: 2.0rem;">CHOOSE YOUR LOCATION</div>


        <div class="countries-list">
            <div class="country-box">
                <ul class="d-flex flex-column list-inline">
                    {{-- <li class="list-inline-item py-3 mr-0 text-center" style="font-size: 1.5em;">@lang('site.global_asia')</li> --}}
                    <li class="list-inline-item p-1 my-2 mr-0">
                        <a href="https://hk.vaio.com/support" class="global-icon-hk pl-5 py-2" target="_blank">香港 / Hong Kong</a>
                    </li>
                    {{--<li class="list-inline-item p-1 my-2 mr-0">--}}
                        {{--<a href="https://tw.vaio.com/support" class="global-icon-tw pl-5 py-2" target="_blank">台灣 / Taiwan</a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>
</main>

<!-- Footer -->

<footer class="footer">
    <div class=" py-0 pt-md-5">
        <div class="footer-disclaimer py-3">
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 my-3 p-0">
                        <a style="color: inherit;" href="{{ route('privacy') }}">@lang('common.footer.policy_terms')</a>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 p-0">
                        @lang('common.footer.policy_terms_content')
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 my-3 p-0">
                        @lang('common.footer.company')
                    </div>
                </div>
            </div>
        </div>
</footer>


<!-- End of Footer -->

<div id="back-to-top">
    <div class="up-arrow"></div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
@yield('js')
@stack('js')
</body>
</html>

<div class="headerCover @hasSection('product_nav') product-header @endif "></div>
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-lg-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-lg-up" href="/"><img src="/images/vaio.png" /></a>

        @if( $user = Auth::user( ) )
        <div class="navbar-user-toggle navbar-toggler-right hidden-lg-up d-flex align-items-center justify-content-center lead text-muted">
            <a class="user-toggle text-white" href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
        </div>
    @else

        @if( Request::is('login') || Request::is('register') )

            {{-- Do nothing, hide the right corner login button in register/login page --}}

        @else
            <div class="navbar-user-toggle navbar-toggler-right hidden-lg-up d-flex align-items-center justify-content-center lead text-muted">
                <a class="text-white" href="{{ route('login' ) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
            </div>
        @endif


    @endif


        <div class="navbar-collapse">
            <ul class="main-nav navbar-nav mr-auto d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between nav-fill w-100">
                <li class="col-2 col-md-4 col-xl-5 hidden-md-down">
                    <a class="ml-3" href="/"><img src="/images/vaio.png" /></a>
                </li>

                @if($store_enabled)
                <li class="nav-item">
                    <a class="nav-link py-4 buy-now" href="{{ $store_url }}" rel="noreferrer nofollow"  target="_blank" style="color: rgb(255, 160, 0);">@lang('common.nav.buy_now')</a>
                </li>
                @endif

                @if( $offer_enabled )
                    <li class="nav-item"><a class="nav-link py-4" href="{{ route('news.offers') }}">@lang('common.nav.offer')</a></li>
                @endif

                <!---
                <li class="nav-item">
                    <a class="nav-link py-4" href="{{ route('product.overview') }}">@lang('common.nav.product.title')</a>
                </li>
                 Hidden by Kevin 2018-07-08, Would be useful when more product added.
                 --->
                
                <li class="nav-item has-dropdown">
                    <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link py-4">
                        <label for="header_product">@lang('common.nav.product.title')</label>
                    </a>

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview_e15') }}"> @lang('common.nav.product.vaio_e15')</a>
                            </li>

                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview_se14') }}">@lang('common.nav.product.vaio_s14')</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>
            
                <!-----
                <li class="nav-item has-dropdown">
                    <input id="header_quality" type="checkbox" hidden="">
                    {{-- <a class="nav-link py-4"> --}}
                    <label class="nav-link py-4" for="header_quality">@lang('common.nav.quality.title')</label>
                    {{-- </a> --}}

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('quality.azumino_finish') }}" class="">@lang('common.nav.quality.azumino_finish')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('quality') }}">@lang('common.nav.quality.tests')</a>
                            </li>

                        </ul>
                    </div>

                </li>
                --------->
                @if( $life_enabled )
                <li class="nav-item">
                    <a class="nav-link py-4" href="{{ route('news.life') }}">@lang('common.nav.life')</a>
                </li>
                @endif

                <li class="nav-item  has-dropdown">
                    <input id="header_support" type="checkbox" hidden="">

                    {{-- <a class="nav-link py-4"> --}}
                    <label class="nav-link py-4" for="header_support">@lang('common.nav.support.title')</label>
                    {{-- </a> --}}

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('support') }}#support-center">@lang('common.nav.support.service_center')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('support') }}#faq">@lang('common.nav.support.faq')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('support') }}#driver_n_tools">@lang('common.nav.support.tools')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('support') }}#support-warranty">@lang('common.nav.support.warranty')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('support.repair_tnc') }}">@lang('common.nav.support.terms_cond')</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item has-dropdown">
                    <input id="header_about_vaio" type="checkbox" hidden="">
                    {{-- <a class="nav-link py-4"> --}}
                    <label class="nav-link py-4" for="header_about_vaio">@lang('common.nav.about.title')</label>
                    {{-- </a> --}}

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('about_us') }}">@lang('common.nav.about.title')</a>
                            </li>
                           
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('contact_us') }}">@lang('common.nav.about.contact_us')</a>
                            </li>
                        </ul>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link py-4" href="{{ route('where_to_buy') }}">@lang('common.nav.where_to_buy')</a>
                </li>

          
                    @if( Auth::user() )
                    <li class="nav-item hidden-md-down">
                        <a class="nav-link py-4 px-2" href="{{ route('member.profile') }}">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item hidden-md-down">

                        <a class="nav-link py-4 px-2" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="" aria-hidden="true">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @else
                    <li class="nav-item hidden-md-down">
                        <a class="nav-link py-4" href="{{ route('login') }}">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                @php
                    $supportedLocales = LaravelLocalization::getSupportedLocales();
                @endphp

                @if( count( $supportedLocales ) > 1 )

                <li class="nav-item has-dropdown">
                    <input id="header_language" type="checkbox" hidden="">

                    <label class="nav-link py-4 hidden-md-down" for="header_language">{{ LaravelLocalization::getCurrentLocaleNative() }}</label>
                    <label class="nav-link py-4 hidden-lg-up" for="header_language">{{ __("common.nav.languages")  }}</label>

                    <div class="dropdown lang">
                        <ul class="list-unstyled">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2"  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </li>

                @endif

              


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

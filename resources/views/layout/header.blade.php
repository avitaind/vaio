<div class="headerCover @hasSection('product_nav') product-header @endif "></div>

<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/vaio.png" alt="VAIO India Official Website"/>
        </a>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a href="/"><img src="/images/vaio.png" alt="VAIO India Official Website"/></a>
                </li>
        <!--- Products VAIO starts ---->
                <li class="nav-item has-dropdown">
                  <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-4"><label for="header_product"> @lang('common.nav.product.title')</label></a>
                
                    <div class="dropdown">
                       <ul class="list-unstyled">
                           <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview_e15') }}"> @lang('common.nav.product.vaio_e15')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview_se14') }}"> @lang('common.nav.product.vaio_s14')</a>
                            </li>
                           <!---
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview_fuji-z') }}"> @lang('common.nav.product.vaio_fuji-z')</a>
                            </li>
                            --->
                        </ul>
                    </div>
                </li>

        <!--- Product VAIO starts ---->
        <!--- Quality tab starts ---->

<!---
        <li class="nav-item has-dropdown">
                    <input id="header_quality" type="checkbox" hidden="">
                    {{-- <a class="nav-link py-4"> --}}
                    <label class="nav-link px-md-4 py-4" for="header_quality">@lang('common.nav.quality.title')</label>
                    {{-- </a> --}}

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('quality.azumino_finish') }}" class="">@lang('common.nav.quality.azumino_finish')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('quality') }}">@lang('common.nav.quality.tests')</a>
                            </li>

                        </ul>
                    </div>

                </li>

                ---->
        <!--- Quality tab Ends ---->
    <!--- Support tab starts ---->


        <li class="nav-item  has-dropdown">
                    <input id="header_support" type="checkbox" hidden="">

                    {{-- <a class="nav-link py-4"> --}}
                    <label class="nav-link px-md-4 py-4" for="header_support">@lang('common.nav.support.title')</label>
                    {{-- </a> --}}

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('support') }}#support-center">@lang('common.nav.support.service_center')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('support') }}#faq">@lang('common.nav.support.faq')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('support') }}#driver_n_tools">@lang('common.nav.support.tools')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('support') }}#support-warranty">@lang('common.nav.support.warranty')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('support.repair_tnc') }}">@lang('common.nav.support.terms_cond')</a>
                            </li>
                        </ul>
                    </div>
                </li>

    <!--- Support tab ends ---->

    <li class="nav-item has-dropdown">
                    <input id="header_about_vaio" type="checkbox" hidden="">
                    {{-- <a class="nav-link py-4"> --}}
                    <label class="nav-link px-md-4 py-4" for="header_about_vaio">@lang('common.nav.about.title')</label>
                    {{-- </a> --}}

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('about_us') }}">@lang('common.nav.about.title')</a>
                            </li>
                           
                            <li class="nav-item text-center">
                                <a class="nav-link px-md-4 py-4" href="{{ route('contact_us') }}">@lang('common.nav.about.contact_us')</a>
                            </li>
                        </ul>

                    </div>
                </li>
        <!--- About VAIO starts ---->
        
        <!---
                <li class="nav-item"> 
                     <a class="nav-link px-md-4 py-4" href="{{ route('about_us') }}" > @lang('common.nav.about.title')</a>
                </li>
            ------>    
        
        <!--- About VAIO end ---->
        <!--- Where to Buy starts ---->
            <li class="nav-item"> 
                     <a class="nav-link px-md-4 py-4" href="{{ route('where_to_buy') }}" > @lang('common.nav.where_to_buy')</a>
                </li>


             <!--- Where to Buy Ends ---->
   <!--- Event Registration starts ---->
        
  <!---
  
             <li class="nav-item"> 
                     <a class="nav-link px-md-4 py-4" href="https://live2.streamy.in/vaiolaunchindia/" >Enter Event</a>
                </li>
      
                <li class="nav-item"> 
                     <a class="nav-link px-md-4 py-4" href="{{ route('event.login') }}" > @lang('common.nav.event.login')</a>
                </li>

           
            ---->
        <!--- Event Registration end ---->
              
            </ul>
        </div>
   <!-- <div id="overlay">
        </div> -->
        @if( $user = Auth::user( ) )
            <aside class="navbar-user-warp hidden-md-up">
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
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}" class=" pl-4">@lang('site.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3">@lang('site.logout')</button></i>
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
</nav>
<!-- ./Header -->

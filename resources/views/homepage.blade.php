@extends('layout.app')

@section('content')

    @include('home.banner')

    <!-- Recommended Products -->
           
    <section class="py-5">
        <div class="container py-0 py-lg-4">
            <h2 class="section-title mb-3 mb-lg-5">@lang('common.homepage.recommended_products')</h2>
                <div class="home-product-list">
                     <div class="row no-gutters">
                <div class="col-6 d-flex align-items-end text-center recommend-item">
                        <a href="{{ route('product.overview_se14') }}" class="d-block w-100">
                            <img src="/images/elements/se14.jpg">
                            <div class="recommend-item-info">
                                <div class="recommend-model mb-1">VAIO® SE14</div>
                            <div class="orange-label px-2"><!--- @lang('common.homepage.available')---></div>
                               <!--- <div class="mb-2">@lang('common.homepage.tag_SE14')</div> --->
                                <div class="py-3"></div>
                            </div>
                        </a>
                </div>  
                <div class="col-6 d-flex align-items-end text-center recommend-item">
                        <a href="{{ route('product.overview_e15') }}" class="d-block w-100">
                            <img src="/images/elements/e15.jpg">
                            <div class="recommend-item-info">
                                <div class="recommend-model mb-1">VAIO® E15</div>
                                <div class="orange-label px-2">@lang('common.homepage.available')</div>
                              <!----  <div class="mb-2">@lang('common.homepage.tag_E15')</div> --->
                                <div class="py-3"></div>
                            </div>
                        </a>
                </div>  
                   
                 <!--- 
                <div class="col-6 d-flex align-items-end text-center recommend-item">
                        <a href="{{ route('product.overview_sx14') }}" class="d-block w-100">
                            <img src="/images/elements/sx14.jpg">
                            <div class="recommend-item-info">
                                <div class="recommend-model mb-1">VAIO® SX14</div>
                                <div class="orange-label px-2">@lang('common.homepage.available')</div>
                                <div class="mb-2">@lang('common.homepage.tag_SX14')</div>
                                <div class="py-3"></div>
                            </div>
                        </a>
                </div>  
                    
                
                    
                <div class="col-6 d-flex align-items-end text-center recommend-item">
                    <a href="{{ route('product.overview') }}" class="d-block w-100">
                        <img src="/images/elements/s11.jpg">
                        <div class="recommend-item-info">
                            <div class="recommend-model mb-1">VAIO® S11</div> 
                            <div class="mb-2">@lang('common.homepage.tag_S11')</div>
                            <div class="mb-2">&nbsp;</div>
                        </div>
                    </a>
                </div>
                
                
                  <div class="col-6 d-flex align-items-end text-center recommend-item">
                    <a href="{{ route('product.overview') }}" class="d-block w-100">
                        <img src="/images/elements/s13.jpg">
                        <div class="recommend-item-info">
                            <div class="recommend-model mb-1">VAIO® S13</div> 
                            <div class="mb-2">@lang('common.homepage.tag_S13')</div>
                            <div class="mb-2">&nbsp;</div>
                        </div>
                    </a>
                </div>
              
                
                    
                <div class="col-6 d-flex align-items-end text-center recommend-item">
                        <a href="{{ route('product.overview_se14_whl') }}" class="d-block w-100">
                            <img src="/images/elements/se14.jpg">
                            <div class="recommend-item-info">
                                <div class="recommend-model mb-1">VAIO® SE14</div>
                                <div class="orange-label px-2">@lang('common.homepage.available')</div>
                                <div class="mb-2">@lang('common.homepage.tag_SE14')</div>
                                <div class="py-3"></div>
                            </div>
                        </a>
                </div>  
                    
                          
                    <div class="col-6 d-flex align-items-end text-center recommend-item">
                        <a href="{{ route('product.overview_se14_whl') }}" class="d-block w-100">
                            <img src="/images/elements/se14.jpg">
                            <div class="recommend-item-info">
                                <div class="recommend-model mb-1">VAIO® SE14</div>
                                <div class="orange-label px-2">@lang('common.homepage.available')</div>
                                <div class="mb-2">@lang('common.homepage.tag_SE14')</div>
                                <div class="py-3"></div>
                            </div>
                        </a>
                    </div>  
                    
                  ------->
                
                    
          </div>
          
          </div>
          
             
        </div>
    </section>
   
    <!-- VAIO Life -->

    @if( $lifes->count() > 0 )
    <section class="py-5">
        <div class="container">
            <h2 class="section-title mb-3 mb-lg-5">@lang('common.life.title')</h2>
            <div class="row no-gutters">
                <div class="col-12 main-life-col-lg mr-0 mr-lg-1 mr-xl-2 mb-3 mb-lg-0">
                    @component('home.life_card_big', ['item' => $lifes[0] ])
                    @endcomponent
                </div>

                <div class="col-12 main-life-col-sm">

                    @for( $i = 1; $i < $lifes->count(); $i++ )
                        @component('home.life_card', ['item' => $lifes->get($i) ])
                        @endcomponent
                    @endfor

                </div>

            </div>
        </div>
    </section>
    @endif


    <!-- Support -->

  <!---

    <section id="main-support-section" class="main-banner-section">
        <div class="main-support-content container">
            <h2 class="section-title pb-0 pb-lg-4 mb-5">@lang('common.homepage.support')</h2>
            <div>
                <div class="support-list-wrapper mr-3">

                    <div class="row">
                        <div class="col-7 col-lg-3">
                            <div id="model_number_field_wrapper">
                            <select id="model_number_field" name="type" class="form-control">
                                <option value="" disabled="" selected="">@lang('common.homepage.select_model_number')</option>
                                @foreach( $model_numbers as $model_number )
                                    <option class="model-item py-3" value="{{ $model_number }}">{{ $model_number }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>

                    {{--<button class="support-list-toggler"><span class="mr-5 pr-md-5"><span></button>--}}

                    {{--<ul id="main-support-list" class="d-none list-unstyled mt-2">--}}
                        {{--@foreach( $model_numbers as $model_number )--}}
                            {{--<li class="model-item py-3">{{ $model_number }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                </div>
                <button class="orange-btn px-5 mt-4 driver-search-btn">@lang('common.homepage.support_search')</button>
            </div>
        </div>
    </section>
----->
    @if( $offers->count() > 0 )
        <!-- Offer -->
        <section class="deep-grey-section pb-4" style="background-color: #67678e;">
            <div class="container">
                <h2 class="section-title text-white pt-4 pb-3">@lang('common.homepage.offer')</h2>
                <div class="row">

                    @foreach($offers as $offer )
                        @component('home.news_card', ['item' => $offer])

                        @endcomponent
                    @endforeach

                </div>
            </div>
        </section>
    @endif


    @if( $news->count() > 0 )
    
 <section class="deep-grey-section pb-4">
        <div class="container">
            <h2 class="section-title text-white pt-4 pb-3">@lang('common.homepage.newsroom')</h2>
            <div class="row">
                
                @foreach($news as $new )
                    @component('home.news_card', ['item' => $new])

                    @endcomponent
                @endforeach

            </div>
        </div>
  </section>
    @endif
   

<section class="email-subscription py-5 ls-0" style="width: 100%; margin-top: -37px;">
  <form class="email-subscription-form col-12 col-lg-8 col-xl-6 mx-auto" role="form" method="POST" action="{{ url('/subscribe') }}"  enctype="multipart/form-data" >
    {!! csrf_field() !!}

    @include('includes.flash')
  <h2 class="text-center mt-4 mb-3 font-weight-light">{{ __('messages.home_join') }}</h2>
      <!---    <div class="text-center mt-3 mb-4 lead">{{ __('messages.home_receiving') }}</div> --->
             
                  <div class="row my-4 no-gutters justify-content-center">
                    <div class="col-12 col-sm-7 col-md-6 col-lg-7 ml-auto">
                <div class="input-group">
                    <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                         <input id="email" type="text" class="form-control" name="email" required>
                </div>
              </div>
              <div class="form-group">
              <div class="col-12 col-sm-4 col-md-4">
                    <button class="btn btn-primary d-block mt-3 mt-sm-0 mt-md-0 mx-auto ml-md-3" type="submit">{{ __('messages.get_notified') }}</button>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- Contact Us -->
    <!---
    <section id="main-contact-section" class="main-banner-section"  style="background-position: 35%">
        <div class="main-contact-content container">
            <h2 class="section-title mb-5">@lang('common.homepage.contact_us')</h2>
            <p class="content-text mb-5">@lang('common.homepage.contact_us_tagline')</p>
            <a href="{{ route('contact_us') }}" class="d-inline-block orange-btn px-5 mx-auto text-center contact-btn">@lang('common.homepage.contact_now')</a>
        </div>
    </section>
    --->

@stop



@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />

    <style>

        #model_number_field_wrapper {
            position: relative;
            /*padding: .75rem 1rem;*/

            color: #808090;
            border: 1px solid #808090;
            cursor: pointer;
        }

        #model_number_field {
            border: 0;
            height: calc(3rem + 2px);
            margin-bottom: 0px;
        }

    </style>
@stop

@section('js')


<script>
    var msg = '{{Session::get('alert')}}';
   // var exist = '{{Session::has('alert')}}';
    if(msg){
      alert(msg);
    }
  </script>



    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            speed: 1500,
            autoplay:{
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination:{
                el: '.swiper-pagination',
                clickable: true,
            }
        });

        $('.support-list-toggler').on('click', function(){
            $('#main-support-list').toggleClass('d-none');
        });

        $(".driver-search-btn").click(function() {

            var selected_model_number = $("#model_number_field").val();

            if (selected_model_number) {
                window.location.href = "/support?model_number=" + selected_model_number;
            }

        });
    </script>
@stop

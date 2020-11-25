@extends ('layout.app')

@section('title', __('common.nav.support.title'))

@section('content')

    <section class="top-nav-padding support-search-section">
        <div class="contact-banner-wrapper" style="">
            <div class="contact-banner-support contact-banner" style="background-image: url('/images/background/support.png')"></div>
            <div class="container">
                <h2 class="page-title">@lang('common.support.title')</h2>
            </div>
        </div>

        @include('support.service_center')

        @include('support.driver_n_tools')

        @include('support.faq_section')

        <div id="support-warranty" class="support-warranty-wrap ">
            <div class="container bg-dark  ">
                <div class="row ">
                    <div class="row no-gutters my-4 col-12 mx-auto ml-0 ml-md-4">
                        <div class="col-12 page-title mb-3 ls-0">@lang('common.support.warranty.title')</div>
                            <div class="warranty-img col-12 mb-3">
                                <div class="sub-panel py-5 px-3">
                                    <div class="col-md-6 offset-md-6 text-right">
                                        <div class="content-title text-white my-2">@lang('common.support.warranty.banner_content_1')</div>
                                        <div class="py-0 sub-panel-content">
                                            <div class="content-title text-white mt-1 mb-4">
                                                {{--@lang('common.support.warranty.banner_content_2')--}}
                                        </div>
                                    </div>
                                    @if( Auth::user() )
                                    <div class="text-right">
                                    <a href="{{ route('member.reg_product') }}">
                                        <button type="button" class="btn btn-primary btn-lg btn-warning border-0">@lang('common.support.warranty.banner_button')
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    </div>
                                    @else
                                    <div class="text-right">
                                    <a href="{{ route('login') }}" class="text-right">
                                        <button type="button" class="btn btn-primary btn-lg btn-warning border-0">@lang('common.support.warranty.banner_button')
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="p-2 pt-3 pt-md-0 p-md-5" style="background: white">
                            <div class="col-12 ls-0" id="warranty_scroll" style=" height: 500px; overflow-y: auto; background-color: white;">
                                <div class="terms">
                                    {!! $warranty->terms  !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="support-center-wrap">
            <div class="container  ">
                <div class="row  ">
                    <div class="row no-gutters my-5 col-12 mx-auto ml-0">
                        <div class="col-12">
                            <ul class="disclaimer pl-0 pl-md-5" style="list-style:none;">
                               @foreach( Lang::get('common.support_display_msg') as $msg )
                                 <li>{{ $msg }}</li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <div class="gotop-wrap">
        <button class="btn-gotop">
            <span class="sr-only">Back to Top</span>
        </button>
    </div>

@stop


@section('css')

    <style>

        .terms li{
            margin-bottom: 1rem;
            padding-left: 1rem;
        }

        .terms li > ol {

            margin-top: 1rem;
            list-style-type: lower-roman;

        }

        .navbar {
            background-color: black;
        }

        .map_hk {
            background-color: #9897A5;
            color: white;
            border: 1px;
            border-color: #8D8C9B;
            border-top-style: solid;
            border-bottom-style: solid;
            border-left-style: solid;
            border-right-style: solid;
        }

        .support-banner-wrap {
            background: url(/images/background/support.png) 100% 100% no-repeat;
            background-size: cover;
            background-position: bottom;
            height: 400px;
        }

        .support-search-wrap,
        .support-center-wrap {
            background-color: white !important;
        }
        .support-warranty-wrap {
            background-color: #f0f0f0 !important;
        }

        .disclaimer li {
            font-size: 1rem;
            margin-bottom: .5rem;
            padding-left: 2rem;
            position: relative;
        }

        .disclaimer li::before {
            content: '-';
            font-size: 1.2rem;
            position: absolute;
            left: 0;
        }

        .fa-1 {
            font-size: 1em;
        }

        .fa-6 {
            font-size: 6em;
        }

        .classWithPad {
            margin: 10px;
            padding: 10px;
        }

        .faq {
            border-width: 1px;
            border-color: rgb(184, 184, 184);
            border-style: solid;
            height: 289px;
            background-color: #4D5268;
            color: white;
            -webkit-transition: background-color 1s ease-out;
            -moz-transition: background-color 1s ease-out;
            -o-transition: background-color 1s ease-out;
            transition: background-color 1s ease-out;
        }

        .faq:hover {
            background-color: white;
            color: #4D5268;
        }

        @media (min-width: 992px) {
            .map-wrap {
                height: 600px;
            }

            #warranty_scroll::-webkit-scrollbar-thumb {
                background-color: #4D5268;
            }
            .list-group-item {
                background-color: white;
                -webkit-transition: all 0.5s ease-out;
                -moz-transition: all 0.5s ease-out;
                -o-transition: all 0.5s ease-out;
                transition: all 0.5s ease-out;
            }
            .list-group-item:hover {
                background-color: #4D5268;
                color: white;
            }
            .list-group-item:first-child {
                border-top-right-radius: 0;
                border-top-left-radius: 0;
            }
            .list-group-item:last-child {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
        }


    </style>

@stop



@section('js')


    <script src="{{ asset('js/support.js') }}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_AK') }}&callback=initMap"></script>

@stop

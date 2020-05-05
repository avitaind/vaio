@extends('layout.app')

@section('title', __('common.nav.about.title'))

@section('content')

    <section id="about-us">
        <div class="aboutus-main-wrapper">
            <div class="container py-3 py-md-5">
                <div class="aboutus-main-content">
                    <h1 class="page-title mb-4 text-white">@lang('common.about_us.title')</h1>
                    <div class="content-text text-white">
                        @lang('common.about_us.content')
                    </div>
                </div>
            </div>
        </div>

        <div class="aboutus-wrapper">
            <div class="container">
                <div class="aboutus-item row flex-lg-nowrap pt-5 pt-lg-0">
                    <div class="col-12 col-lg-6 d-flex align-items-center mb-4 mb-lg-0">
                        <div class="quality-content pr-lg-5">
                            <div class="content-title mb-3">@lang('common.about_us.vaio.title')</div>
                            <div class="content-text">@lang('common.about_us.vaio.content')</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 px-lg-0 d-flex align-items-center aboutus-item-pic">
                        <img src="/images/banner/aboutus-banner-1.jpg" />
                    </div>
                </div>
                <div class="aboutus-item pic-first row flex-lg-nowrap mt-5 mt-lg-0">
                    <div class="col-12 col-lg-6 d-flex align-items-center flex-first flex-lg-last mb-4 mb-lg-0">
                        <div class="quality-content pl-lg-5">
                            <div class="content-title mb-3">@lang('common.about_us.nexstgo.title')</div>
                            <div class="content-text">@lang('common.about_us.nexstgo.content')</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 px-lg-0 flex-last flex-lg-first aboutus-item-pic">
                        <img src="/images/banner/aboutus-banner-2.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="py-5" id="about-us-history">
      <div class="container">
        <h2 class="page-title">VAIO History</h2>
      </div>
    </section> -->



@stop

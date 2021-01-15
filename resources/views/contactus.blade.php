@extends('layout.app')

@section('title', __('common.nav.about.contact_us'))

@section('content')
    <section id="contact-us" class="pb-5">
        <div class="contact-banner-wrapper">
            <div class="contact-banner-contactus contact-banner"></div>
            <div class="container">
                <h2 class="page-title">@lang('common.contact_us.title')</h2>
            </div>
        </div>

      

        <div class="container">
            <div class="mt-5 pt-0 pt-lg-4">
                <h2 class="page-title mb-5">@lang('common.contact_us.headquarter.title')</h2>
                <div class="row">

                    <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/phone.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.headquarter.general_phone')</p>
                        <a href="tel:18001039635" class="sub-text">1800-103-9635</a>
                    </div>

                    <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/email-icon.png">
                        <p class="content-text mt-3 mb-0 ">@lang('common.contact_us.headquarter.general')</p>
                        <a href="mailto:salesin@in.vaio.com" class="sub-text">Salesin@in.vaio.com</a>
                    </div>
                </div>
            </div>


            <div class="mt-5 pt-0 pt-lg-4">
                <h2 class="page-title mb-5">@lang('common.contact_us.headquarter.pr_title')</h2>
                <h3 class="sub-title mt-3 mb-5">@lang('common.contact_us.sales.open_hour')</h3>

                <div class="row">

                    <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/email-icon.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.headquarter.press')</p>
                        <a href="mailto:prin@in.vaio.com"class="sub-text">prin@in.vaio.com</a>
                    </div>
                </div>
            </div>
        <!-----
            <div class="contact-enquire-wrapper mt-5 pt-0 pt-lg-4">
                <h2 class="page-title">@lang('common.contact_us.sales.title')</h2>
                <div class="row">
                    {{--<div class="col-12 col-md-4 text-center mb-4 mb-lg-0">--}}
                    {{--<img class="info-icon" src="/images/icons/phone.png">--}}
                    {{--<p class="content-text mt-3 mb-0">@lang('common.contact_us.sales.phone')</p>--}}
                    {{--<a href="tel:+85237250611" class="sub-text">@lang('common.contact_us.sales.phone_number')</a>--}}
                    {{--</div>--}}
                    <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/email-icon.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.sales.email')</p>
                        <a href="mailto:salesin@in.vaio.com" class="sub-text">Salesin@in.vaio.com</a>
                    </div>
                </div>
            </div>

            ------>
        </div>


    </section>
@endsection

@section('js')

    <script src="{{ asset('js/support.js') }}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_AK') }}&callback=initMap"></script>
@stop

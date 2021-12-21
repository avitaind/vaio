@extends('layout.app')

@section('title', __('common.campaign'))

@section('content')

<section id="contact-us" class="">
    <div class="contact-banner-wrapper">
        <div class="contact-banner-contactus contact-banner"></div>
        <div class="container">
            <h2 class="page-title">@lang('common.campaign')</h2>
        </div>
    </div>
</section>

<div class="admiror-video">
    <video autoplay="" controls="" muted="" loop="">
    <source src="/images/Nexstgo_video/The_Success_Story_of_AVITA.mp4" type="video/mp4">
    </video>
</div>


@endsection

@section('js')

    <script src="{{ asset('js/support.js') }}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_AK') }}&callback=initMap"></script>
@stop

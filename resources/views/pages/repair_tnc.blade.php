@extends('layout.app')

@section('title', __('common.nav.support.terms_cond'))

@section('content')

    <div class="container py-5">

        <h1 class="mb-4"> @lang('common.nav.support.terms_cond')</h1>

        <div class="terms">
            {!! $term->terms !!}
        </div>



    </div>

@endsection


@section('css')

    <style>
        .terms li{
            margin-bottom: 1rem;
            padding-left: 1rem;
        }
    </style>

@stop
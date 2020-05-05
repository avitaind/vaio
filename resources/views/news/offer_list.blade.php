@extends('layout.app')

@section('title', __('common.nav.offer'))

@section('content')

    @include('home.banner')

    <section class="top-nav-padding" id="vaio-offer">

        <div class="container pb-5 pt-4">
            <div class="page-title pb-4 py-md-5">@lang('common.offer.title')</div>

            <div class="row" id="offer-list-wrapper">


                @foreach( $offers as $offer )

                    @component('news.cards.offer_card', ['item' => $offer])

                    @endcomponent

                @endforeach

            </div>
        </div>
    </section>
@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />

@stop

@section('js')

  <script>
      var swiper = new Swiper('.swiper-container', {
          loop: true,
          speed: 1500,
          pagination:{
              el: '.swiper-pagination',
              clickable: true,
          }
      });
  </script>

@endsection

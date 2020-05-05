@extends('layout.app')

@section('title', __('common.nav.about.news'))

@section('content')

    <section class="top-nav-padding ls-0" style="background-color:white;">
        <div class="container py-5">
            <h2 class="page-title mb-5">@lang('common.news.title')</h2>
            <div class="row">

                @foreach($feature_news as $item )
                    @component('news.cards.news_card', ['item' => $item]) @endcomponent
                @endforeach

            </div>
        </div>
    </section>

    <section class="older-news-section ls-0" style="background-color:#f9f9f9;">

        <div class="container py-5">
            <div class="container row mb-5">
                <h2 class="page-title justify-content-center">@lang('common.news.old_news')</h2>
                {{--<div class="col-12 col-lg-3 ml-auto mt-1">--}}
                    {{--<select id="news_month_field" name="type" class="form-control">--}}
                        {{--<option value="" disabled selected>@lang('common.news.select_month')</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
            </div>

            @foreach($news as $item )
                @component('news.cards.news_row', ['item' => $item]) @endcomponent
            @endforeach

            {{ $news->links() }}

        </div>
    </section>
@stop

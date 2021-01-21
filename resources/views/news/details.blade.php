@extends('layout.app')

@section('content')

    <section class="top-nav-padding ls-0" style="background-color:white;">
        <div class="container py-5">
            <div class="news-nav my-3">
                <a style="color: inherit;" href="/">@lang('common.home')</a>

                <a style="color: inherit;" href="{{ $parent_page['url'] }}">
                    <i class="fa fa-chevron-right mx-1" aria-hidden="true"></i>{{ $parent_page['text'] }}
                </a>

                <i class="fa fa-chevron-right mx-1" aria-hidden="true"></i> {{ $news->title }}
            </div>

            <h2 class="page-title mb-3 col-12 p-0">{{ $news->title }}</h2>

            @if($news->type == "offer")
                <p class="content-text mb-4">{{ $news->tagline }}</p>
            @else
                <p class="content-text mb-4">{{ date('d/m/Y', strtotime($news->start_date)) }}</p>
            @endif




            <div class="news-content mb-5">
                {!! $news->content !!}
            </div>


            <!--
            <div class="related-news-section">
                <div class="container pb-5">
                    <h2 class="page-title mb-3 py-5">@lang('common.news.related_news')</h2>
                    <div class="row no-gutters">

                        <div class="col-12 col-lg-4 py-3 pr-md-3">

                            @component('news.cards.related_news_card')
                            @endcomponent

                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </section>


@stop

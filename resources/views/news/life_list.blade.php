@extends('layout.app')

@section('title', __('common.nav.life'))

@section('content')

    <section class="top-nav-padding" id="vaio-life">
        <div class="container py-5">
            <h1 class="page-title mb-4 mb-lg-5">@lang('common.life.title')</h1>
            <ul class="d-flex no-gutters mb-4 mb-lg-5 nav nav-tabs border-0">
                <li class="nav-item col-4">
                    <a class="life-tab tab-toggler p-3 py-md-4" data-toggle="tab" role="tab" href="#all-tab" data-type="0">
                        @lang('common.life.tab_all')
                    </a>
                </li>

                @foreach( $categories as $category )
                    <li class="nav-item col-4">
                        <a class="life-tab tab-toggler p-3 py-md-4 navTab_button" data-toggle="tab" role="tab" href="#tab-{{ str_slug($category->name_en ) }}" data-type="{{ $category->id }}">
                            {{ $category->name  }}
                        </a>
                    </li>
                @endforeach

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="all-tab" role="tabpanel">

                </div>
                @foreach( $categories as $category )
                    <div class="tab-pane" id="tab-{{ str_slug($category->name_en) }}" role="tabpanel">

                    </div>
                @endforeach
            </div>
        </div>

    </section>

@stop

@section('js')

    <script>

        var tab_loaded = [];

        $('.life-tab ').on('show.bs.tab', function (e) {

            var now_tab = e.target; // activated tab

            var type = $(now_tab).data('type')

            var tab_id = $(now_tab).attr('href');

            if ( tab_loaded.indexOf( tab_id ) == -1 ) {

                $(tab_id).load('/vaio-life/feeds?feed_type=' + type);
                tab_loaded.push( tab_id );
            }

        });

        $(function(){

            // Trigger the first tab loading
            $('a.life-tab:first').tab('show');
        });

    </script>
@stop

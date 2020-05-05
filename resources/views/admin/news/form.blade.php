@extends('admin.layout.app')

@php

    $start_date = $news->start_date ? $news->start_date : \Carbon\Carbon::now();
    $start_date_string = $start_date->format("Y-m-d");
    $end_date_string = $news->end_date ? $news->end_date->format("Y-m-d") : null;
    $sections = config('constants.news_types');

@endphp


@section('title')
    {{ $news->exists ? "Update" : "Add" }} News
@stop

@section('content')

    {!! BootForm::open(['model' => $news, 'store' => 'admin.news.store', 'update' => 'admin.news.update', 'files' => true]) !!}

    <div class="card mb-4">

        <div class="card-body">

            <div class="row">
                <div class="col-md-4 order-md-2">

                    <div class="page-sidebar">

                        {!! BootForm::select('type', 'Section', $sections) !!}

                            <div class="category_wrapper">
                                {!! BootForm::select('category_id', 'Category') !!}
                            </div>

                        {!! BootForm::text('start_date', null, $start_date_string, ['class' => 'datepicker']) !!}
                        {!! BootForm::text('end_date', null, $end_date_string, ['class' => 'datepicker']) !!}


                        {!! BootForm::file('thumbnail', null, ['help_text' => 'Recommend size: 540px x 360px']) !!}

                        @if( $url = $news->thumbnail_url() )
                            <img src="{{ $url }}" class="img-fluid">
                        @endif

                        {{--{!! BootForm::file('image') !!}--}}

                        {{--@if( $url = $news->image_url() )--}}
                            {{--<img src="{{ $url }}" class="img-responsive">--}}
                        {{--@endif--}}
                        
                        <hr>

                        {!! BootForm::label('Is Feature?') !!}

                        {!! BootForm::checkbox('is_feature', 'Check this for feature record') !!}


                        {!! BootForm::label('Is Active? ') !!}

                        {!! BootForm::checkbox('is_publish', 'Check this to active the record') !!}


                    </div>




                    <div class="text-right">
                        {!! BootForm::submit() !!}
                    </div>


                </div>

                <div class="col-md-8 order-md-1">


                    <div class="en-content">
                        {!! BootForm::text('title:en', 'Title (EN)', null) !!}

                        {!! BootForm::text('tagline:en', 'Tagline (EN)', null) !!}

                        {!! BootForm::textarea('content:en', 'Content (EN)', null, ['class' => 'text_editor']) !!}
                    </div>
                    <hr>
                    <div class="tc-content">
                        {!! BootForm::text('title:tc', 'Title (TC)', null) !!}
                        {!! BootForm::text('tagline:tc', 'Tagline (TC)', null) !!}
                        {!! BootForm::textarea('content:tc', 'Content (TC)', null, ['class' => 'text_editor']) !!}
                    </div>

                </div>

            </div>



        </div>






    </div>




    {!! BootForm::close() !!}

    @include('admin.upload_image_form')


@stop

@section('js')

    <script>

        $(function(){

            var selected_category_id = {{ $news->category_id ?: 0 }} ;
            var $categories = @json($categories_options);


            $('select[name="type"]').on('init change', function() {

                var type = $(this).val();

                var options = null;

                switch ( type ) {
                    case "news" : options = $categories.news; break;
                    case "offer" : options = null; break;
                    case "life" : options = $categories.life; break;
                }

                var option_picker = $('select[name="category_id"]');
                option_picker.empty();


                // Update Category Options
                if ( options ) {

                    $.each(options, function(value, key) {
                        option_picker.append($("<option></option>").attr("value", value).text(key));
                    });

                    if ( selected_category_id > 0 ) {
                        option_picker.val( selected_category_id ) ;
                    }

                    $(".category_wrapper").show();

                } else {
                    $(".category_wrapper").hide();
                }

            }).trigger('init');;



        })

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd"
        })
    </script>

@stop

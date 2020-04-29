@extends('admin.layout.app')

@section('title')
    {{ $banner->exists ? "Update" : "Add" }} FAQ
@stop

@section('content')

    <div class="card my-4">


        <div class="card-body">

            {!! BootForm::open(['model' => $banner, 'store' => 'admin.banners.store', 'update' => 'admin.banners.update', 'files' => true]) !!}

            {!! BootForm::hidden('type', 'offer') !!}

            <div class="row">
                <div class="col-12 col-md-4">
                    {!! BootForm::select('type', 'Location', $types) !!}
                </div>
                <div class="col-12 col-md-4">
                    {!! BootForm::number('seq', 'Sequence', null, ['min' => 0]) !!}
                </div>
                <div class="col-12 col-md-4">
                    {!! BootForm::text('url', 'URL') !!}
                </div>
            </div>

            <h5>Desktop Banners ( Banner Size: 1920px x 720px )</h5>

            <div class="row">
                <div class="col-12 col-md-4 pb-4">
                    {!! BootForm::file('image_en', 'Banner Image (EN)') !!}

                    @if( $banner->image_path_en )
                        <img src="{{ $banner->getBannerURLAttribute('en') }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-12 col-md-4 pb-4">
                    {!! BootForm::file('image_tc', 'Banner Image (TC)') !!}

                    @if( $banner->image_path_tc )
                        <img src="{{ $banner->getBannerURLAttribute('tc') }}" class="img-fluid">
                    @endif
                </div>

            </div>

            <h5>Mobile Banners ( Banner Size: 991px x 1050px ) / Only applicable for Homepage and Product section</h5>

            <div class="row">
                <div class="col-12 col-md-4 pb-4">
                    {!! BootForm::file('mobile_image_en', 'Mobile Banner Image (EN)') !!}

                    @if( $banner->image_path_en )
                        <img src="{{ $banner->getMobileBannerURLAttribute('en') }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-12 col-md-4 pb-4">
                    {!! BootForm::file('mobile_image_tc', 'Mobile Banner Image (TC)') !!}

                    @if( $banner->image_path_tc )
                        <img src="{{ $banner->getMobileBannerURLAttribute('tc') }}" class="img-fluid">
                    @endif
                </div>

            </div>


            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

            @include('admin.upload_image_form')

        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@endsection
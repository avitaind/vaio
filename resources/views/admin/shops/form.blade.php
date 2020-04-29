@extends('admin.layout.app')

@section('title')
    {{ $shop->exists ? "Update" : "Add" }} Shop
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::open(['model' => $shop, 'store' => 'admin.shops.store', 'update' => 'admin.shops.update']) !!}



            <div class="row">
                <div class="col-md-4">{!! BootForm::text('name:en', 'Shop Name') !!}</div>
                <div class="col-md-4">{!! BootForm::text('name:tc', '店舖名稱(繁)') !!}</div>
            </div>

            <div class="row">
                <div class="col-md-4">{!! BootForm::text('address:en', 'Address') !!}</div>
                <div class="col-md-4">{!! BootForm::text('address:tc', '店舖地址(繁)') !!}</div>
            </div>

            <div class="row">
                <div class="col-md-2">{!! BootForm::text('latitude') !!}</div>
                <div class="col-md-2">{!! BootForm::text('longitude') !!}</div>
                <div class="col-md-2">{!! BootForm::text('phone') !!}</div>
                <div class="col-md-2">{!! BootForm::text('seq', 'Ordering (Smallest first)') !!}</div>

                <div class="col-md-2">
                    <label for="longitude" class="control-label">Enable</label>
                    {!! BootForm::checkbox('enabled', 'Enable', '1') !!}
                </div>
            </div>

            <div class="text-right">
                {!! BootForm::submit() !!}
            </div>

            {!! BootForm::close() !!}

        </div>

    </div>

@stop

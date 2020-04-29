@extends('admin.layout.app')

@section('title')
    {{ $category->exists ? "Update" : "Add" }} News Category
@stop

@section('content')

    {!! BootForm::open(['model' => $category, 'store' => 'admin.news_categories.store', 'update' => 'admin.news_categories.update', 'files' => true]) !!}

    <div class="card mb-4">

        <div class="card-body">

            <div class="row">
                <div class="col-md-4 order-md-2">

                    {!! BootForm::text('name_en', 'Name (EN)', null) !!}
                    {!! BootForm::text('name_tc', 'Name (TC)', null) !!}

                    <div class="text-right">
                        {!! BootForm::submit() !!}
                    </div>

                </div>

            </div>

        </div>

    </div>

    {!! BootForm::close() !!}

@stop

@section('js')

@stop

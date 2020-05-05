@extends('admin.layout.app')

@section('title')
    {{ $term->exists ? "Update" : "Add" }} Warranty Term
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::horizontal(['model' => $term, 'store' => 'admin.warranties.store', 'update' => 'admin.warranties.update']) !!}

            {!! BootForm::text('name', 'Name') !!}

            {!! BootForm::text('code', 'Code') !!}

            {!! BootForm::textarea('terms:tc', 'Terms(TC)', null, ['class' => 'text_editor']) !!}
            {!! BootForm::textarea('terms:en', 'Terms(EN)', null, ['class' => 'text_editor']) !!}
            {!! BootForm::submit() !!}
            {!! BootForm::close() !!}

            @include('admin.upload_image_form')

        </div>

    </div>

@stop


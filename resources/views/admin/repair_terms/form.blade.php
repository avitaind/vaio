@extends('admin.layout.app')

@section('title', 'Repair Terms & Conditions')

@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::open(['model' => $repair_term, 'store' => 'admin.repair_tnc.store', 'update' => 'admin.repair_tnc.update']) !!}

            <div class="row">
                <div class="col-md-2">{!! BootForm::select('locale', 'Locale', config('languages')) !!}</div>
                <div class="col-md-10">{!! BootForm::text('title', "Title", null, ['help_text' => 'Internal Use']) !!}</div>
            </div>


            {!! BootForm::textarea('message', "維修條款及細則", null, ['class' => 'text_editor']) !!}

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

        @include('admin.upload_image_form')

    </div>

@stop

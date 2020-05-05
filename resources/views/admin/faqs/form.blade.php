@extends('admin.layout.app')

@section('title')
    {{ $faq->exists ? "Update" : "Add" }} FAQ
@stop

@section('content')

    <div class="card my-4">


        <div class="card-body">

            {!! BootForm::horizontal(['model' => $faq, 'store' => 'admin.faqs.store', 'update' => 'admin.faqs.update']) !!}

            {!! BootForm::select('category', 'Category', $categories) !!}

            {!! BootForm::text('question_no', 'Question No.') !!}

            <h4>Traditional Chinese</h4>
            {!! BootForm::text('question:tc', 'Question (TC)') !!}
            {!! BootForm::textarea('answer:tc', 'Answer (TC)', null, ['class' => 'answer_editor text_editor']) !!}

            <hr>

            <h4>English</h4>
            {!! BootForm::text('question:en', 'Question (EN)') !!}
            {!! BootForm::textarea('answer:en', 'Answer (EN)', null, ['class' => 'answer_editor text_editor']) !!}

            <hr>

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
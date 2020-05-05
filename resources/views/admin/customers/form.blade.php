@extends('admin.layout.app')

@section('title')
    {{ $user->exists ? "Update" : "Add" }} Customer
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::horizontal(['model' => $user, 'store' => 'admin.customers.store', 'update' => 'admin.customers.update']) !!}

            {!! BootForm::text('first_name') !!}
            {!! BootForm::text('last_name') !!}
            {!! BootForm::text('name', 'Nick Name') !!}
            {!! BootForm::email('email') !!}
            {!! BootForm::password('password') !!}
            {!! BootForm::password('password_confirmation') !!}

            {!! BootForm::select('gender', null, config('constants.genders')) !!}
            {!! BootForm::text('birthday', null, $user->present()->birthday) !!}
            {!! BootForm::select('country', null, $countries) !!}
            {{--{!! BootForm::text('address') !!}--}}
            {!! BootForm::text('phone') !!}
            {!! BootForm::text('mobile') !!}


            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

    </div>

@stop


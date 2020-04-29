@extends('admin.layout.app')

@section('title')
    My Profile
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::open(['route' => 'admin.profile']) !!}

            <div class="row">
                <div class="col-md-6">
                    {!! BootForm::text('name', null, $user->name) !!}
                </div>
                <div class="col-md-6">
                    {!! BootForm::staticField('email', 'Email', $user->email) !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {!! BootForm::password('password') !!}
                </div>
                <div class="col-md-6">
                    {!! BootForm::password('password_confirmation') !!}
                </div>
            </div>





            {!! BootForm::submit('Submit') !!}

            {!! BootForm::close() !!}



        </div>

    </div>


@stop


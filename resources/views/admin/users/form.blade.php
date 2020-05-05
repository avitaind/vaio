@extends('admin.layout.app')

@section('title')
    Admins
@stop


@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::open(['model' => $admin, 'store' => 'admin.users.store', 'update' => 'admin.users.update' ]) !!}
            {!! BootForm::text('name') !!}

            @if( $admin->exists )
                {!! BootForm::staticField('email', 'Email', $admin->email) !!}
            @else
                {!! BootForm::email('email') !!}
            @endif


            {!! BootForm::password('password') !!}
            {!! BootForm::password('password_confirmation') !!}

            {!! BootForm::checkboxes('roles[]', 'Roles', $roles, $selected_roles, true) !!}

            {!! BootForm::submit('Submit') !!}

            {!! BootForm::close() !!}



        </div>

    </div>

@stop

@extends('layout.app')

@section('title', __('common.nav.member.forget_password'))

@section('content')

    <section class="login-panel top-nav-padding">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="main-panel py-3">
                        <h2 class="page-title my-4 text-center ls-5">@lang('common.forget_password_title')</h2>
                        <div class="my-4 text-center">@lang('common.forget_password_introduction')</div>



                        <form method="POST" action="{{ route('password.email') }}" accept-charset="UTF-8" class="login-form col-12 col-xl-8 mx-auto my-4">
                            @csrf

                            @if( Session::has('status'))
                                <div class="alert alert-info my-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group mb-4">
                                <div class="input-group" >
                                    <div class="input-group-addon overlay-addon" >
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <input class="form-control" name="email" type="email" required>

                                </div>

                                @if ($errors->has('email')) <small class="text-danger form-error">{{ $errors->first('email')}}</small>@endif

                            </div>

                            <div class="d-flex flex-wrap justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 ls-2">@lang('common.forget_password_reset_password')</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

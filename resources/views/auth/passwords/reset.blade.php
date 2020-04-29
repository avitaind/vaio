@extends('layout.app')

@section('content')

    <section class="login-panel top-nav-padding">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="main-panel py-3">

                        <h2 class="page-title my-4 text-center ls-5">@lang('common.reset_password')</h2>

                        {!! Form::open(['route' => 'password.request', 'method' => 'POST', 'class' => 'login-form col-12 col-xl-8 mx-auto my-4']) !!}

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mb-4{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label for="email" class="control-label">@lang('member.form_email')</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email')) <small class="text-danger form-error">{{ $errors->first('email')}}</small>@endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">@lang('member.form_password')</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password')) <small class="text-danger form-error">{{ $errors->first('password')}}</small>@endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="control-label">@lang('member.form_confirm_password')</label>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <small class="text-danger form-error">{{ $errors->first('password_confirmation')}}</small>
                                @endif

                            </div>
                        </div>

                        <div class="d-flex flex-wrap">
                            <button type="submit" class="btn btn-primary ml-auto px-5 ls-2">@lang('common.reset_password')</button>
                        </div>


                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

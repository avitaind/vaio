@extends('layout.app')


@section('title', __('common.nav.member.login'))

@section('content')

    <section class="login-panel top-nav-padding">
        <div class="container">
            <div class="row my-5">
                <div class="col-6 hidden-sm-down">
                    <div class="sub-panel py-5 px-3">
                        <h2 class="mx-5 my-4 ls-5 ">@lang('common.login.signup.title')</h2>
                        <div class="py-0 sub-panel-content">
                            <div class="my-4 mx-5 ls-0">@lang('common.login.signup.text')</div>
                        </div>
                        <div class="py-0 sub-panel-content text-center">
                            <a class="btn btn-register btn-opacity my-5 px-4 ls-0" href="{{ route('register') }}">@lang('common.login.signup.btn_text')</a>
                        </div>
                    </div>
                </div>
                
                <div class="sign-up-info text-center hidden-sm-up" style="background-color:#808090; padding:15px;">
                     <h2 class="my-4 ls-5" style="color:#fff;">@lang('common.login.signup.title')</h2>
                    <div class="py-0 sub-panel-content" style="color:#fff;">
                        <div class="my-4 mx-2 ls-1">@lang('common.login.signup.text')</div> 
                    </div>
                </div>
                    
                
                <div class="col-12 col-md-6">
                    <div class="main-panel py-md-5">
                        <form class="login-form col-12 col-xl-10 mx-auto my-4 ls-0" method="post" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <h2 class="my-4 ls-5">@lang('common.login.title')</h2>
                            <div class="my-4 ">@lang('common.login.login_hints')</div>
                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <div class="input-group-addon overlay-addon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <input class="form-control" name="email" type="email">

                                </div>

                                @if ($errors->has('email')) <small class="text-danger form-error">{{ $errors->first('email')}}</small>@endif
                            </div>

                            <div class="form-group mb-0">

                                <div class="input-group">
                                    <div class="input-group-addon overlay-addon">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                    <input class="form-control " name="password" type="password" value="">
                                </div>

                                @if ($errors->has('password')) <small class="text-danger form-error">{{ $errors->first('password')}}</small>@endif
                            </div>
                            <div class="d-md-flex flex-column flex-md-row mt-2">
                                <label class="col-12 col-md-6 custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-2 mb-md-0 m-0 justify-content-md-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description ls-1">@lang('common.login.remember_me')</span>
                                </label>
                                <label class="col-12 col-md-6 text-md-right text-sm-center justify-content-md-start m-0">
                                    <a class="text-right" href="{{ route('password.request') }}">@lang('common.login.forget_pwd')</a>
                                </label>
                            </div>

                            <div class="d-flex flex-sm-row mx-auto my-4 px-3 justify-content-start justify-content-sm-center small">
                                <button type="submit" class="col-12 col-md-2 btn btn-primary ls-2 justify-content-md-end">@lang('common.login.login_text')</button>
                            </div>

                            <div class="hidden-md-up d-flex flex-sm-row mx-auto my-4 px-3 justify-content-start justify-content-sm-center small">
                                <a class="btn btn-primary text-center mt-2 px-4 ls-0 font-weight-light hidden-md-up col-12 " href="{{ route('register') }}">@lang('common.login.signup.btn_text')</a>
                            </div>
                            <div class="col-12 mx-auto pt-4 p-0">
                                <div class="text-left pt-4 extra-login ls-1">@lang('common.login.social_media_text')</div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <a class="login-facebook pr-4" href="{{ route('login.facebook') }}">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <!--<a class="login-googleplus" href="{{ route('login.google') }}">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

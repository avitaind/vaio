@extends('layout.app')

@section('title', __('common.nav.member.register'))

@section('content')

    <section class="register-panel top-nav-padding">
      <div class="regis-banner-wrapper">
          <div class="bg-item" style="background-image: url('{{ asset('images/background/regis-banner.jpg') }}')" /></div>
      </div>

        <div class="container">
            <div class="page-title pt-md-3 my-3">
                @lang('common.registration_title') </div>
            <div class="d-flex hidden-xs-down my-4">
            <!-- 
                     <a href="/login/facebook" class="pr-2">
                    <img src="/images/btn_register_facebook.jpg" alt="Register with Facebook" class="pb-2">
                </a>
              <a href="/login/google" class="pr-2">
                    <img src="/images/btn_register_google.jpg" alt="Register with Google Account" class="pb-2">
                </a>-->
            </div>
            <div class="d-flex hidden-sm-up my-2">
                <div class="pr-2 text-right">
                    <a class="register-facebook" href="/login/facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="pr-2">
                    <a class="register-googleplus" href="/login/google">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8" class="pb-5 ls-0">
                @csrf
                <div class="register-form">
                    <div class="register-form-title mb-4">
                        <div class="col-12 px-0 my-1" style="line-height: 2.5">@lang('common.registration_introduction')</div>
                        <div class="col-12 px-0 my-1">@lang('member.form_required')</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('member.form_name'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <input class="form-control" id="name_input" name="name" type="text" value="{{ old('name') }}" required>
                            @if ($errors->has('name')) <small class="text-danger form-error">{{ $errors->first('name')}}</small>@endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email_input" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('member.form_email'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <input class="form-control" id="email_input" required="" name="email" type="text" value="{{ old('email') }}">
                            @if ($errors->has('email')) <small class="text-danger form-error">{{ $errors->first('email')}}</small>@endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_input" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('member.form_password'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5 text-muted">
                            <input class="form-control" required="" placeholder="@lang('member.form_password_placeholder')" name="password" type="password" value="">
                            @if ($errors->has('password')) <small class="text-danger form-error">{{ $errors->first('password')}}</small>@endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_input_2" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('member.form_confirm_password'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5 ">
                            <input class="form-control" required="" placeholder="@lang('member.form_confirm_password_placeholder')" name="password_confirmation" type="password"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_input" class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label">@lang('member.form_phone'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <input class="form-control" id="phone_input" required="" name="phone" type="text" value="{{ old('phone') }}">
                            @if ($errors->has('phone')) <small class="text-danger form-error">{{ $errors->first('phone')}}</small>@endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="gender_input">@lang('member.form_gender'): </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">

                            <select class="custom-select form-control rounded-0" id="gender" name="gender">
                                @foreach($genders as $val => $text )
                                    <option value="{{ $val }}" {{ old('gender') == $val ? "selected" : "" }}>{{ $text }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('gender')) <small class="text-danger form-error">{{ $errors->first('gender')}}</small>@endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="age_input">@lang('member.form_age_group'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <select class="custom-select form-control rounded-0" id="age_group" required name="age_group">
                                @foreach($age_groups as $val => $text )
                                    <option value="{{ $val }}" {{ old('age_group') == $val ? "selected" : "" }}>{{ $text }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('age_group')) <small class="text-danger form-error">{{ $errors->first('age_group')}}</small>@endif
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="country">@lang('member.form_country'):
                            <span class="required">*</span>
                        </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <select class="custom-select form-control rounded-0" id="country" required name="country">

                                @foreach($countries as $val => $text )
                                    <option value="{{ $val }}" {{ "" == $val ? "selected" : "" }}>{{ $text }}</option>
                                @endforeach
                            </select> 
                            @if ($errors->has('country')) <small class="text-danger form-error">{{ $errors->first('country')}}</small>@endif
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-12 col-md-5 col-lg-4 col-xl-3 col-form-label" for="birthday">@lang('member.form_birthday'): </label>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <input class="form-control" id="birthday" data-date-format="yyyy-mm-dd" name="birthday" type="date" value="{{ old('birthday') }}">

                            @if ($errors->has('birthday')) <small class="text-danger form-error">{{ $errors->first('birthday')}}</small>@endif

                        </div>

                    </div>
                </div>

                <div class="form-group row pt-4 mb-0 ">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="from-check-input" name="tnc" type="checkbox" value="yes"> @lang('member.form_agree_tnc', ['url' => route('privacy')])

                                @if ($errors->has('tnc'))<br><small class="text-danger form-error">{{ $errors->first('tnc')}}</small>@endif
                            </label>
                        </div>


                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="from-check-input" name="edm" type="checkbox" value="accept"> @lang('member.form_accept_promotion') </label>
                        </div>
                    </div>
                </div>
                <input name="source" type="hidden">
                <button type="submit" class="btn btn-primary col-12 col-sm-3 p-3">@lang('member.form_join_now')</button>
            </form>
        </div>
    </section>

@stop


@section('css')

    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css')}}" >

@endsection

@section('js')

    <script src="{{ asset('libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" ></script>

    <script type="text/javascript">
        $(function(){
            $('#birthday').datepicker();
        });
    </script>

@endsection

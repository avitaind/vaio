@extends('layout.member_portal')

@section('portal_content')
    <div class="change_password_pane">

        <h1>@lang('member.change_password_title')</h1>

        <div class="col-12 with-line px-0 pb-2">@lang('member.change_password_introduction')</div>

        @if (Session::has('message'))
            <div class="alert alert-info mt-3">{{ Session::get('message') }}</div>
        @endif

        <div class="py-3 px-0">

            <form method="POST" action="{{ route('member.change_password') }}" accept-charset="UTF-8" class="ls-0">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="orgin_password" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label">
                        @lang('member.form_original_password'):
                    </label>
                    <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                        <input class="form-control" id="origin_password" name="origin_password" type="password" value="">

                        @if ($errors->has('origin_password')) <small class="text-danger form-error">{{ $errors->first('origin_password')}}</small>@endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_password" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label">
                        @lang('member.form_new_password'):
                    </label>
                    <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                        <input class="form-control" id="new_password" name="new_password" type="password" value="">

                        @if ($errors->has('new_password')) <small class="text-danger form-error">{{ $errors->first('new_password')}}</small>@endif

                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_password_confirmation" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label">
                        @lang('member.form_confirm_new_password'):
                    </label>
                    <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                        <input class="form-control" id="renew_password" name="new_password_confirmation" type="password" value="">

                        @if ($errors->has('new_password_confirmation')) <small class="text-danger form-error">{{ $errors->first('new_password_confirmation')}}</small>@endif

                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-12 col-lg-10 col-xl-9">
                <button type="submit" class="btn btn-primary my-3 py-3" style="float: right;">@lang('member.form_save')</button>
                        </div>
                </div>
            </form>
        </div>

    </div>
@stop
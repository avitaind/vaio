@extends('layout.member_portal')

@section('portal_content')
    <div class="p-0">
        <div class="d-md-flex">
            <div class="col col-auto px-0">
                <div class="col col-auto px-0 mb-1" style="word-break: break-word;">Register your product to enjoy an additional warranty. (This offer is subject to terms)</div>
                <h1>@lang('member.profile_title')</h1>
            </div>
        </div>
        {{--<div class="d-md-flex my-3">--}}
            {{--<div class="col col-auto px-0 mb-1">--}}
                {{--@lang('member.extra_warranty_statement', ['month' => 6])--}}
            {{--</div>--}}
        {{--</div>--}}

        @if (Session::has('message'))
            <div class="alert alert-info my-2">{{ Session::get('message') }}</div>
        @endif

        @if( Session::has('status'))
            <div class="alert alert-info my-2">{{ session('status') }}</div>
        @endif


        <form method="POST" action="{{ route('member.profile') }}" accept-charset="UTF-8" class="ls-0">
            {{ csrf_field() }}
            <div class="d-md-flex member-form-title my-3">
                <div class="col col-auto px-0 mb-1 form-title-required">@lang('member.form_required')</div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('member.form_name'): <span class="required">*</span>
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}">

                    @if ($errors->has('name')) <small class="text-danger form-error">{{ $errors->first('name')}}</small>@endif
                </div>

            </div>
            <div class="form-group row">
                <label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="gender_input">
                    @lang('member.form_gender'):
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select class="custom-select form-control rounded-0" id="gender" name="gender">
                        @foreach($genders as $val => $text )
                            <option value="{{ $val }}" {{ old('gender', $user->gender) == $val ? "selected" : "" }}>{{ $text }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('gender')) <small class="text-danger form-error">{{ $errors->first('gender')}}</small>@endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="age_input">
                    @lang('member.form_age_group'): <span class="required">*</span>
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select class="custom-select form-control rounded-0" id="age_group" required="required" name="age_group">
                        @foreach($age_groups as $val => $text )
                            <option value="{{ $val }}" {{ old('age_group', $user->age_group) == $val ? "selected" : "" }}>{{ $text }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="birthday" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('member.form_birthday'):
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <input class="form-control" id="birthday" data-date-format="yyyy-mm-dd" name="birthday" type="text" value="{{ $user->present()->birthday }}">
                </div>

                @if ($errors->has('birthday')) <small class="text-danger form-error">{{ $errors->first('birthday')}}</small>@endif
            </div>
            <div class="form-group row">
                <label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="country">
                    @lang('member.form_country'):
                    <span class="required">*</span>
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <select class="custom-select form-control rounded-0" id="country" required="required" name="country">
                        @foreach($countries as $val => $text)
                            <option value="{{ $val }}" {{ old('country', $user->country) == $val ? "selected" : "" }}>{{ $text }}</option>
                        @endforeach

                            @if ($errors->has('country')) <small class="text-danger form-error">{{ $errors->first('country')}}</small>@endif
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
                    @lang('member.form_phone'):
                </label>
                <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                    <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone', $user->phone) }}">
                    @if ($errors->has('phone')) <small class="text-danger form-error">{{ $errors->first('phone')}}</small>@endif
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-12 col-lg-10 col-xl-9">
                    <button type="submit" class="btn btn-primary" style="
                        float: right;
                            ">Save</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')

    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css')}}" >

@stop

@section('js')

    <script src="{{ asset('libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" ></script>

    <script type="text/javascript">
        $(function(){
            $('#birthday').datepicker();
        });
    </script>

@stop

<div class="tab-pane ml-md-5" role="tabpanel" id="step2">
    <div class="d-md-flex member-form-title mb-3">
        <div class="col col-auto px-0 mb-1 form-title-required">
            @lang('member.form_required')
        </div>
    </div>

    @php

        $q1_answers = [
            "made_in_japan",
            "stylish_design",
            "vaio_brand",
            "performance",
            "keyboard",
            "others",
        ];

    @endphp

    <div class="form-group row">
        <label class="col-12 col-form-label text-muted" for="question1">@lang('member.q1')
        </label>
        <div class="col-12 ml-md-3 text-muted">

            @foreach( $q1_answers as $answer )
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="option_{{ $answer }}" value="{{ $answer }}" @if( old('question1') == $answer ) checked @endif >
                    <label class="form-check-label text-muted" for="option_{{ $answer }}">
                        @lang('member.q1_'.$answer )
                    </label>
                </div>
            @endforeach
        </div>

    </div>
    <div class="form-group row">
        <label class="col-12 col-md-8 col-lg-8 col-xl-8 col-form-label text-muted" for="question2">@lang('member.q2')</label>
        <textarea class="form-control" rows="5" id="question2" name="question2">{{ old('question2') }}</textarea>
    </div>
    <div class="form-group row">
        <label class="col-12 col-md-8 col-lg-8 col-xl-8 col-form-label text-muted" for="question3">@lang('member.q3')</label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6 ml-md-3 text-muted">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question3" id="q3-option1" value="yes" @if( old('question3') == "yes" ) checked @endif>
                <label class="form-check-label text-muted" for="q3-option1">
                    @lang('common.Yes')
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question3" id="q3-option2" value="no" @if( old('question3') == "no" ) checked @endif>
                <label class="form-check-label text-muted" for="q3-option2">
                    @lang('common.No')
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="gender_input">@lang('member.form_gender'):
            <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <select class="custom-select form-control rounded-0" id="gender" name="gender" required="required">
                <option value="m" @if( old('gender') == "m" ) checked @endif>@lang('common.Male')</option>
                <option value="f" @if( old('gender') == "f" ) checked @endif>@lang('common.Female')</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted" for="age_input">@lang('member.form_age_group'):
            <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <select class="custom-select form-control rounded-0" id="age" required="required" name="age">
                @foreach($age_groups as $value => $text )
                    <option value="{{ $value }}" @if( old('age') == $value) selected @endif>{{ $text }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="birthday" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">@lang('member.form_birthday'):
            <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <input class="form-control" id="birthday" data-date-format="yyyy-mm-dd" data-date-end-date="0d" name="birthday" required="required" type="date" value="{{ old('birthday') }}">
        </div>
    </div>
    <div class="form-group row">
            <div class="col-12 col-lg-10 col-xl-9">
            <button type="button" class="btn btn-primary submit my-3 py-3"  style="float: right;display: none;">
                @lang('member.form_submit')
            </button>
            </div>
</div>
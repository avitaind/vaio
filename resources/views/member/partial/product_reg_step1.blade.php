<div class="tab-pane active ml-md-5" role="tabpanel" id="step1">
    <div class="d-md-flex member-form-title mb-3">
        <div class="col col-auto px-0 mb-1 form-title-required">
            @lang('member.form_required')
        </div>
    </div>

    <div class="form-group row">
        <label for="product_model" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
            @lang('member.form_product_model'): <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <select id="product_model" name="product_model" class="form-control custom-select" data-init-val="" required="">
                <option selected=""></option>
                @foreach($model_numbers as $model_number)
                    <option value="{{ $model_number }}" @if( old('product_model') == $model_number ) selected @endif>{{ $model_number }}</option>
                @endforeach
            </select>

            @if ($errors->has('product_model')) <small class="text-danger form-error">{{ $errors->first('product_model')}}</small>@endif
        </div>
    </div>
    <div class="form-group row">
        <label for="serial_num" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
            @lang('member.form_serial_number'): <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <input class="form-control" id="serial_num" name="serial_num" type="text" value="{{ old('serial_num') }}" required>

            @if ($errors->has('serial_num')) <small class="text-danger form-error">{{ $errors->first('serial_num')}}</small>@endif

        </div>
    </div>
    <div class="form-group row">
        <label for="purchase_from" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
            @lang('member.form_reseller_name'): <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <input class="form-control" id="purchase_from" required="required" name="purchase_from" type="text" value="{{ old('purchase_from') }}">

            @if ($errors->has('purchase_from')) <small class="text-danger form-error">{{ $errors->first('purchase_from')}}</small>@endif
        </div>
    </div>
    <div class="form-group row">
        <label for="purchase_date" class="col-12 col-md-4 col-lg-3 col-xl-3 col-form-label text-muted">
            @lang('member.form_purchase_date'): <span class="required">*</span>
        </label>
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <input class="form-control" id="purchase_date" data-date-format="yyyy-mm-dd" data-date-end-date="0d" required="required" name="purchase_date" type="date" value="{{ old('purchase_date') }}">

            @if ($errors->has('purchase_date')) <small class="text-danger form-error">{{ $errors->first('purchase_date')}}</small>@endif
        </div>
    </div>

    <div class="form-group row">
            <div class="col-12 col-lg-10 col-xl-9">
        <button type="submit" style="float: right;" class="btn btn-primary  my-3 py-3 btn btn-primary next-step next-button">
            @lang('member.form_next')
        </button>
    </div>
    </div>


</div>
<div id="regis">
    <div class="regis-bg"></div>
    <div class="d-flex no-gutters w-100 h-100 offset-lg-1 col-12 col-lg-11 p-0 regis-wrapper">
      <div class="col-12 col-lg-6 bg-white h-100 regis-left">
          <div class="regis-header p-3 p-lg-5">
            <a class="cross d-block d-lg-none" href="javascript:void(0)"></a>
            <div class="container">
              <h2 class="regis-heading text-white">VAIO is BACK!</h2>
              <h3 class="regis-subheading text-white">@lang('common.form.header.content')</h3>
            </div>
          </div>
          <div class="container">
            <form id="regis-form" class="px-0 py-5 p-lg-5" method="post" action="/">
              {{ csrf_field() }}
        			<div class="alert alert-danger warning-box">
        				@lang('common.warning-title')
        				<br/>
        				<ul></ul>
        			</div>

              <div class="form-group">
                <label class="font-weight-bold">1. @lang('common.form.q1.q')</label>
                <input type="email" class="form-control" name="email" autocomplete="off">
              </div>
              <div class="form-group form-row align-items-center">
                <label class="d-block font-weight-bold col-12">2. @lang('common.form.q2.q')</label>
                <div class="form-check col-6 col-lg-4">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q2_ans" value="是">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q2.ans1')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-lg-4">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q2_ans" value="否">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q2.ans2')</span>
                  </label>
                </div>
              </div>
              <div class="form-group form-row align-items-center mb-3">
                <label class="d-block font-weight-bold col-12">3. @lang('common.form.q3.q')</label>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q3_ans" value="櫻花粉">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q3.ans1')</span>
                    <span class="color-choice" style="background-color: #dda4aa;"></span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q3_ans" value="深夜黑">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q3.ans2')</span>
                    <span class="color-choice" style="background-color: #37383a;"></span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q3_ans" value="珍珠白">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q3.ans3')</span>
                    <span class="color-choice" style="background-color: #eeeeee;"></span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q3_ans" value="月光銀">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q3.ans4')</span>
                    <span class="color-choice" style="background-color: #dbdcde;"></span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q3_ans" value="金櫚棕">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q3.ans5')</span>
                    <span class="color-choice" style="background-color: #926c65;"></span>
                  </label>
                </div>
              </div>
              <div class="form-group form-row align-items-center mb-3">
                <label class="d-block font-weight-bold col-12">4. @lang('common.form.q4.q')</label>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q4_ans" value="日本製造">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q4.ans1')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-8 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q4_ans" value="TRUE PERFORMANCE" @if(old('q2_ans') == "TRUE PERFORMANCE") checked @endif>
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q4.ans2')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q4_ans" value="外形設計" @if(old('q2_ans') == "外形設計") checked @endif>
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q4.ans3')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-8 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q4_ans" value="防濺水鍵盤">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q4.ans4')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q4_ans" value="VAIO品牌">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q4.ans5')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-8 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q4_ans" value="其他">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description mr-3" style="white-space:nowrap">@lang('common.others')</span>
                    <input type="text" class="form-control" name="q4_others" size='20' autocomplete="off">
                  </label>
                </div>
              </div>
              <div class="form-group form-row align-items-center">
                <label class="d-block font-weight-bold col-12">5. @lang('common.form.q5.q')</label>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q5_ans" value="香港">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q5.ans1')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q5_ans" value="台灣">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q5.ans2')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q5_ans" value="新加坡">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q5.ans3')</span>
                  </label>
                </div>
                <div class="form-check col-6 col-xl-4 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q5_ans" value="馬來西亞">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description">@lang('common.form.q5.ans4')</span>
                  </label>
                </div>
                <div class="form-check col-8 mb-3">
                  <label class="form-check-label custom-label align-items-center">
                    <input type="radio" class="form-check-input custom-control-radio" name="q5_ans" value="其他">
                    <span class="custom-checkmark"></span>
                    <span class="custom-description mr-3" style="white-space:nowrap">@lang('common.others')</span>
                    <input type="text" class="form-control" name="q5_others" autocomplete="off">
                  </label>
                </div>
              </div>

              <div class="form-group mb-3">
                <div class="form-check">
                  <input class="form-check-input" value="yes" name="agree_news" type="checkbox" id="agree_news">
                  <label class="form-check-label" for="agree_news">{!! __('common.form.agree_news') !!}</label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" value="yes" name="agree_privacy" type="checkbox" id="agree_privacy">
                  <label class="form-check-label" for="agree_privacy">{!! __('common.form.agree_privacy', ['anchor' => route('privacy')]) !!}</label>
                </div>
              </div>

              <div class="form-group text-center mt-4">
                <input class="btn submit-btn" href="javascript:void(0)" type="submit" value="@lang('common.submit')">
              </div>
            </form>
          </div>
      </div>
      <div class="d-none d-lg-block col-lg-6 regis-right"></div>
      <a class="cross d-none d-lg-block" href="javascript:void(0)"></a>
    </div>
</div>

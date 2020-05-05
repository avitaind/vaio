<div class="collapse show" id="account_menu">
    <div class="card card-block border-0 px-0 pt-1" style="background-color: rgb(220, 221, 223); ">
        <div class="d-flex flex-column pb-3 mb-3 pt-4">
            <div class="pl-5 pb-2 member-title with-line font-weight-bold">@lang('member.sidebar.my_account')</div>
            <a href="{{ route('member.profile') }}" class="member-text pl-5 py-2">@lang('member.sidebar.my_profile')</a>
            <a href="{{ route('member.change_password') }}" class="member-text pl-5 py-2">@lang('member.sidebar.change_pwd')</a>
        </div>
        <div class="d-flex flex-column pb-3 mb-3">
            <div class="pl-5 py-2 member-title with-line font-weight-bold">@lang('member.sidebar.my_support')</div>
            <a href="{{ route('member.my_products') }}" class="member-text pl-5 py-2">@lang('member.sidebar.my_product')</a>
            <a href="{{ route('member.reg_product') }} " class="member-text pl-5 py-2">@lang('member.sidebar.product_registration')</a>
            <a href="{{ route('contact_us') }}" class="member-text pl-5 py-2">@lang('member.sidebar.contact_us')</a>
        </div>
    </div>
</div>
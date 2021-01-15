<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_e15') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>


        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="{{ $top_store_url }}" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif

    </ul>
</div>
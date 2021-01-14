@extends('layout.app')

@section('title', 'VAIO e15 Specification')

@section('product_nav')
    @include('products.e15.product_nav')
@stop

@section('content')
<!------>

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_e15') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="{{ $top_store_url }}" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif

    </ul>
</div>

<!--- ------->

    <section style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-2" class="text-center spec-product nav-item nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO® E15</h3>
                    <img src="/images/banner/S13vaio-black.png" class="my-5" alt="VAIO® S13">
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="/images/banner/S13vaio-black.png"></li>
                        <li class="color-pick" style="background-color: #dbdcde" data-src="/images/banner/S13vaio-silver.png"></li>
                    </ul>
                </a>
            </nav>
        </div>
    </section>

    <section class="tab-content py-5" style="background-color:white;">
        <div class="tab-pane active mb-5" id="spec-2" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Colour</div>
                        <div class="offset-md-1 spec-item-content">Black, Silver</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">CPU
                            <sub>1</sub>
                        </div>
                        <div class="offset-md-1 spec-item-content">
                            8th Gen Intel® Core™ i5-i7 Processor
                            <br>- Trusted Platform Module (TPM): TCG Ver. 2.0
                        </div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Operating System
                            <sub>2</sub>
                        </div>
                        <div class="offset-md-1 spec-item-content">Windows 10 Home / Windows 10 Pro</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Display</div>
                        <div class="offset-md-1 spec-item-content">13.3" FHD IPS (1920 x 1080)
                            <br>- CMOS Sensor HD&nbsp; Web Cam</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Main Memory</div>
                        <div class="offset-md-1 spec-item-content">8GB - 16GB LPDDR3</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Storage</div>
                        <div class="offset-md-1 spec-item-content">256GB - 512GB PCIe SSD</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Graphics</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Audio</div>
                        <div class="offset-md-1 spec-item-content">Intel® HD Audio, Integrated Stereo Mic</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Wireless Lan</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac Wireless Lan, Bluetooth® 4.1</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Inputs &amp; Outputs</div>
                        <div class="offset-md-1 spec-item-content">
                            1 X Network (LAN)
                            <br> 1 x SuperSpeed USB (3.0) With charge
                            <br> 2 x SuperSpeed USB (3.0)
                            <br> 1 x HDMI
                            <br> 1 x VGA
                            <br> 1 x Headphone + Microphone
                        </div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Card Slot</div>
                        <div class="offset-md-1 spec-item-content">SD Card (SDHC、SDXC、UHS-I)</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Fingerprint</div>
                        <div class="offset-md-1 spec-item-content">Yes</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">4G LTE</div>
                        <div class="offset-md-1 spec-item-content">Only available in specific model in colour black</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Dimensions (W x D x H)</div>
                        <div class="offset-md-1 spec-item-content">320.4mm × 15～17.9mm × 216.6mm</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Weight <sub>3</sub></div>
                        <div class="offset-md-1 spec-item-content">Approx. 1.07kg</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Battery
                            <sub>4</sub>
                        </div>
                        <div class="offset-md-1 spec-item-content">4-cell</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <p class="spec-item-name" style="font-size: 0.8rem;">1. Multi-Core is designed to improve performance of certain software products. Not all customers or software
                applications will necessarily benefit from use of this technology. Performance and clock frequency will
                vary depending on application workload and your hardware and software configurations. Intel’s numbering
                is not a measurement of higher performance. </p>
            <p class="spec-item-name" style="font-size: 0.8rem;">2. Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or
                separately purchased hardware, drivers and/or software to take full advantage of Windows functionality.
                Windows 10 is automatically updated, which is always enabled. ISP fees may apply and additional requirements
                may apply over time for updates. See http://www.microsoft.com. </p>
                <p class="spec-item-name" style="font-size: 0.8rem;">3. Weights vary depending on configuration and manufacturing variability.</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">4. Battery life will vary depending on various factors including product model, configuration, loaded applications,
                features, use, wireless functionality, and power management settings. The maximum capacity of the battery
                will naturally decrease with time and usage.</p>

            <p class="spec-item-name" style="font-size: 0.8rem;">
                Intel, the Intel logo, the Intel Inside logo and Intel Core are trademarks of Intel Corporation in the U.S. and/or other countries.<br>
                The use of the "VAIO" trademark is by the permission of and subject to license with VAIO Corporation.
            </p>



        </div>
    </section>



@endsection

@section('css')

@stop

@section('js')

    <script src="{{ asset('js/product.js') }}"></script>
@stop

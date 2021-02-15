@extends('layout.app')

@section('title', 'VAIO SE14 Specification')

@section('content')


<!------
------>
<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_se14') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_se14') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_se14') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
        @if( $store_enabled )
        
        <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="@lang('common.nav.Nexstmall_link')" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
        </li>
         
        @endif
    </ul>
</div>


<!------
------>


<!--------------- Product SPEC here----------------------->

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; SE14</h3>
                    <img src="/images/pt-pic/SE14vaio-black.png" class="my-4" alt="VAIO® SE14">
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="/images/pt-pic/SE14vaio-black.png"></li>
                        <li class="color-pick" style="background-color: #926c65" data-src="/images/pt-pic/SE14vaio-brown.png"></li>
                    </ul>
                </a>
            </nav>
        </div>
    </section>

    <section class="tab-content py-5">
        <div class="tab-pane active mb-5" id="spec-1" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Colour</div>
                        <div class="offset-md-1 spec-item-content">Red Copper, Dark Grey</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Operating System<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 Home</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">CPU<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">8th Gen Intel® Core™ Processor<br>i5 – 8265U</div>
                    </li>
					 <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Graphics</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
                    </li>

					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Memory</div>
                        <div class="offset-md-1 spec-item-content">8GB DDR4 2400MHz</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Storage</div>
                        <div class="offset-md-1 spec-item-content">512GB PCIe SSD</div>
                    </li>
                  
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Panel</div>
                        <div class="offset-md-1 spec-item-content">14” FHD TN/IPS (1920x1080) 16:9 wide view anti-Glare</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">I/O</div>
                        <div class="offset-md-1 spec-item-content">2 x   USB type C 3.1 (gen1; PD; DP)<br>
                          2 x   USB type A 3.1 (one support charging)<br>
						HDMI V1.4<br>
						Headphone-out and Mic-in (combo)<br>
                        </div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Card Slot</div>
                        <div class="offset-md-1 spec-item-content">Micro-SD Card Reader (SDHC、SDXC、UHS-I)</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Battery life<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">Up to 13 hours</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Webcam</div>
                        <div class="offset-md-1 spec-item-content">HD 720p<br>
						(Optional) FHD 1080p, (IR/RGB), support Windows Hello</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Audio</div>
                        <div class="offset-md-1 spec-item-content">4-Speaker design (Top-firing dual speakers, Down-firing dual speakers), Microphone optimized for Cortana</div>
                    </li>
                  
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Keyboard<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">Island style keyboard (Optional: backlit) with spill resistance</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Security</div>
                        <div class="offset-md-1 spec-item-content">TPM2.0 HW solution<br>
							Finger-print reader (Integrated with power button)<br>
							Lock slot</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Dimensions (W x D x H)</div>
                        <div class="offset-md-1 spec-item-content">324.4 x 229.6 x 19.55mm</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Weight<sup>5</sup></div>
                        <div class="offset-md-1 spec-item-content">Approx. 1.35kg</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Wireless</div>
                        <div class="offset-md-1 spec-item-content">802.11 ac Bluetooth® 5.0</div>
                    </li>					
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Warranty
                      </div>
                        <div class="offset-md-1 spec-item-content">2-Year Onsite</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">Bundling
                        <sub>6</sub>
                      </div>
                        <div class="offset-md-1 spec-item-content">Microsoft Office</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <p class="spec-item-name" style="font-size: 0.8rem;">1. Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. Windows 10 is automatically updated, which is always enabled. ISP fees may apply and additional requirements may apply over time for updates. See http://www.microsoft.com.</p>
             <p class="spec-item-name" style="font-size: 0.8rem;">2. Multi-Core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel’s numbering is not a measurement of higher performance.</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">3. Data on battery life is obtained from tests deploying internal tools by engineers. The actual battery performances could vary from battery life tests shown above, due to differences in operating environment and conditions.</p>
			<p class="spec-item-name" style="font-size: 0.8rem;">4. In the event of a water spillage, users should wipe away the water, before bringing the laptop to a VAIO service center for inspection or repair.<br>
		  The anti-spill feature is only available on the keyboard and is not applicable on water damage to other parts of the laptop.</p>
          <p class="spec-item-name" style="font-size: 0.8rem;">
                Intel, the Intel logo, the Intel Inside logo and Intel Core are trademarks of Intel Corporation in the U.S. and/or other countries.<br>
                The use of the "VAIO" trademark is by the permission of and subject to license with VAIO Corporation.
            </p>
          <p class="spec-item-name" style="font-size: 0.8rem;">5. Weights vary depending on configuration and manufacturing variability.</p>
          
            <p class="spec-item-name" style="font-size: 0.8rem;">6. Up to 1 Year.</p>

      </div>
    </section>



@endsection

@section('css')

@stop

@section('js')

    <script src="{{ asset('js/product.js') }}"></script>
@stop

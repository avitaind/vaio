@extends('layout.app')

@section('title', 'VAIO Z | KACHI-IRO SPECIAL EDITION Specification')

@section('product_nav')
    @include('products.z_kachiiro.product_nav')
@stop

@section('content')


<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_z_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_z_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_z_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
		  <!--
		<li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
			<a href="https://vaio.nexstmall.com/products/vaio-z-signature-edition?utm_source=brandsite&utm_medium=button&utm_campaign=buynow" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
		</li>  -->
    </ul>
</div>

<!--------------- Product SPEC here----------------------->

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; Z | KACHI-IRO SPECIAL EDITION</h3>
                    <img src="/images/z_kachiiro/1c1c38.png" class="my-4" >                     
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                       <!-- <li class="color-pick active" style="background-color: #000" data-src="/images/new_sx14/000.jpg"></li> 
						<li class="color-pick" style="background-color: #fff" data-src="/images/new_sx14/fff.jpg"></li> 
						<li class="color-pick" style="background-color: #9b9ca0" data-src="/images/new_sx14/9b9ca0.jpg"></li> 
						<li class="color-pick" style="background-color: #624b43" data-src="/images/new_sx14/624b43.jpg"></li>  -->
                    </ul>
                </a>
                 
            </nav>
        </div>
    </section>

    <section class="tab-content py-5">
    
<!--------------- Product I7 here----------------------->
      <div class="tab-pane active mb-5" id="spec-1" role="tabpanel">
        <div class="container">
          <ul class="list-unstyled spec-list">
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Color</div>
              <div class="offset-md-1 spec-item-content">VAIO® Z KACHI-IRO SPECIAL EDITION</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Processor<sup>1</sup></div>
              <div class="offset-md-1 spec-item-content">Intel® Core<sup>TM</sup> i7-11390H Processor</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Operating System<sup>2</sup></div>
              <div class="offset-md-1 spec-item-content">Windows 11 Pro</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Display</div>
              <div class="offset-md-1 spec-item-content">14" UHD 4K (3840 x 2160) 16:9</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Webcam</div>
              <div class="offset-md-1 spec-item-content">2.0MP Hello Camera</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Memory</div>
              <div class="offset-md-1 spec-item-content">32GB LPDDR4x</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Storage</div>
              <div class="offset-md-1 spec-item-content">2TB PCIe NVMe SSD Gen.4</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Graphics</div>
              <div class="offset-md-1 spec-item-content">Intel® Iris® Xe Graphics</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Audio</div>
              <div class="offset-md-1 spec-item-content">Stereo Speaker<br>Dolby Audio™</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Network Interface</div>
              <div class="offset-md-1 spec-item-content">IEEE802.11 a/b/g/n/ac/ax compliant Wi-Fi 6 compliant</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">External I/O Ports</div>
              	<div class="offset-md-1 spec-item-content">
					1x HDMI<br/>
					1x Combo Headphone+Microphone<br/>
					2x USB Type-C™ Supports<br/>
					 -Thunderbolt™ 4<br/>
					 -USB Power Delivery<br/>
					 -USB4™<br/>
					 -USB 3.1<br/>
					 -DisplayPort 1.4<br/>
					 -5V assist charge
				</div>
            </li>
            
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Keyboard<sup>5</sup></div>
              <div class="offset-md-1 spec-item-content">Backlit keyboard</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Finger Print</div>
              <div class="offset-md-1 spec-item-content">Yes</div>
            </li>
			  <!--
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Power<sup>4</sup></div>
              <div class="offset-md-1 spec-item-content">Approx. 15h 30min</div>
            </li>-->
             
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Dimensions (W X D X H)</div>
              <div class="offset-md-1 spec-item-content">Approx. 320.4 x 220.8 x 12.2~16.9mm</div>
            </li>
            
            <li class="spec-item d-flex">

              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Weight<sup>3^</sup></div>
              <div class="offset-md-1 spec-item-content">Approx. 1.06kg</div>
            </li>
			  
			<li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Security</div>
              	<div class="offset-md-1 spec-item-content">
				  -TPM2.0 (TCG ver.2.0 compliant)<br/>
				  -Security Lock slot
				</div>
            </li>
			 
          </ul>
        </div>
      </div> 
		
		
	<!---------------END I7 -------------->

      <div class="container">
        <p class="spec-item-name" style="font-size: 0.8rem;">1. Multi-Core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel’s numbering is not a measurement of higher performance.</p>
            <p class="spec-item-name w-100" style="font-size: 0.8rem;">2. Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. Windows 11 is automatically updated, which is always enabled. ISP fees may apply and additional requirements may apply over time for updates. See http://www.microsoft.com.</p>
          <p class="spec-item-name w-100" style="font-size: 0.8rem;">3. ^Weights vary depending on configuration and manufacturing variability.</p>
            <p class="spec-item-name w-100" style="font-size: 0.8rem;">4. Battery life will vary depending on various factors including product model, configuration, loaded applications, features, use, wireless functionality, and power management settings. The maximum capacity of the battery will naturally decrease with time and usage.</p>
			<p class="spec-item-name w-100" style="font-size: 0.8rem;">5. In the event of a water spillage, users should wipe away the water, before bringing the laptop to a VAIO service center for inspection or repair.<br>
		  The anti-spill feature is only available on the keyboard and is not applicable on water damage to other parts of the laptop.</p>
		  <p class="spec-item-name w-100" style="font-size: 0.8rem;">*Japanese keyboard version product shots for demonstration only.</p>
          <p class="spec-item-name w-100" style="font-size: 0.8rem;">
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

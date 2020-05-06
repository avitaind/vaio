@extends('layout.app')

@section('title', 'VAIO SX12 Specification')

@section('product_nav')
    @include('products.sx12.product_nav')
@stop

@section('content')
 


 <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; SX12</h3>
                    <img src="/images/sx12/sx12_black.png" class="my-4" alt="VAIO® SX12">                     
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="/images/sx12/sx12_black.png"></li>   
                        <li class="color-pick" style="background-color: #aa837b" data-src="/images/sx12/sx12_brown.png"></li>  
                        <li class="color-pick" style="background-color: #c0bbbf" data-src="/images/sx12/sx12_silver.png"></li>  
                    </ul>
                </a> 
            </nav>
        </div>
    </section>



  
    <section class="tab-content py-5">
<!--------------- Product SPEC-1 here----------------------->
      <div class="tab-pane active mb-5" id="spec-1" role="tabpanel">
        <div class="container">
          <ul class="list-unstyled spec-list">
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Color</div>
              <div class="offset-md-1 spec-item-content">Black, Silver, Brown</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Processor<sup>1</sup></div>
              <div class="offset-md-1 spec-item-content">
              	Intel<sup>®</sup> Core<sup>TM</sup> i5-8265U Processor<br/>
               	Intel<sup>®</sup> Core<sup>TM</sup> i7-8565U Processor</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Operating System<sup>2</sup></div>
              <div class="offset-md-1 spec-item-content">Windows 10 Pro</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Display</div>
              <div class="offset-md-1 spec-item-content">12.5" Full HD (1920x1080)</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Webcam</div>
              <div class="offset-md-1 spec-item-content">0.92 MP</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Memory</div>
              <div class="offset-md-1 spec-item-content">8GB LP</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Storage</div>
              <div class="offset-md-1 spec-item-content">256GB PCIe NVMe SSD / 512GB PCIe NVMe SSD</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Graphics</div>
              <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Audio</div>
              <div class="offset-md-1 spec-item-content">Stereo Speaker</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Network Interface</div>
              <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac,  Wireless LAN, Bluetooth® 4.1</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">External I/O Ports</div>
              <div class="offset-md-1 spec-item-content">
              1 X Network(LAN) : 1000BASE-T/100BASE-TX/10BASE-T<br/>
              1 x USB Type-C™ (3.1) w/power delivery and DisplayPort (1.2)<br/>
              1 x SuperSpeed USB (3.1) w/charge<br/>
              2 x SuperSpeed USB (3.0)<br/>
              1 x HDMI<br/>
              1 x VGA<br/>
              1 x Headphone + Microphone</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Expansion Slots</div>
              <div class="offset-md-1 spec-item-content">1 x SD card(SDHC/SDXC)</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Keyboard<sup>5</sup></div>
              <div class="offset-md-1 spec-item-content">Backlit</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">SenSors</div>
              <div class="offset-md-1 spec-item-content">Accelerometer, Gyroscope, Fingerprint</div>
            </li>
            
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Dimensions (W X D X H)</div>
              <div class="offset-md-1 spec-item-content">Approx. 287.8 x 203.3 x 15.7~18mm</div>
            </li>
            
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Weight<sup>3</sup></div>
              <div class="offset-md-1 spec-item-content">Approx. 899g</div>
            </li>
          </ul>
        </div>
      </div>
        
<!--------------- Product SPEC-2 here----------------------->
      <div class="tab-pane mb-5" id="spec-2" role="tabpanel">
        <div class="container">
          <ul class="list-unstyled spec-list">
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Color</div>
              <div class="offset-md-1 spec-item-content">Kachi-iro</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Processor<sup>1</sup></div>
              <div class="offset-md-1 spec-item-content">
               	Intel<sup>®</sup> Core<sup>TM</sup> i7-8565U Processor</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Operating System<sup>2</sup></div>
              <div class="offset-md-1 spec-item-content">Windows 10 Pro</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Display</div>
              <div class="offset-md-1 spec-item-content">12.5" Full HD (1920x1080)</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Webcam</div>
              <div class="offset-md-1 spec-item-content">0.92 MP</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Memory</div>
              <div class="offset-md-1 spec-item-content">16GB LP</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Storage</div>
              <div class="offset-md-1 spec-item-content">512GB PCIe NVMe SSD</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Graphics</div>
              <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Audio</div>
              <div class="offset-md-1 spec-item-content">Stereo Speaker</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Network Interface</div>
              <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac,  Wireless LAN, Bluetooth® 4.1</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">External I/O Ports</div>
              <div class="offset-md-1 spec-item-content">
              1 X Network(LAN) : 1000BASE-T/100BASE-TX/10BASE-T<br/>
              1 x USB Type-C™ (3.1) w/power delivery and DisplayPort (1.2)<br/>
              1 x SuperSpeed USB (3.1) w/charge<br/>
              2 x SuperSpeed USB (3.0)<br/>
              1 x HDMI<br/>
              1 x VGA<br/>
              1 x Headphone + Microphone</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Expansion Slots</div>
              <div class="offset-md-1 spec-item-content">1 x SD card(SDHC/SDXC)</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Keyboard<sup>5</sup></div>
              <div class="offset-md-1 spec-item-content">Backlit</div>
            </li>
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">SenSors</div>
              <div class="offset-md-1 spec-item-content">Accelerometer, Gyroscope, Fingerprint</div>
            </li>
            
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Dimensions (W X D X H)</div>
              <div class="offset-md-1 spec-item-content">Approx. 287.8 x 203.3 x 15.7~18mm</div>
            </li>
            
            <li class="spec-item d-flex">
              <div class="offset-md-1 col-4 col-md-3 spec-item-name">Weight<sup>3</sup></div>
              <div class="offset-md-1 spec-item-content">Approx. 899g</div>
            </li>
          </ul>
        </div>
        
        
      </div>
      <div class="container">
        <p class="spec-item-name" style="font-size: 0.8rem;">1. Multi-Core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel’s numbering is not a measurement of higher performance.</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">2. Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. Windows 10 is automatically updated, which is always enabled. ISP fees may apply and additional requirements may apply over time for updates. See http://www.microsoft.com.</p>
          <p class="spec-item-name" style="font-size: 0.8rem;">3. Weights vary depending on configuration and manufacturing variability.</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">4. Battery life will vary depending on various factors including product model, configuration, loaded applications, features, use, wireless functionality, and power management settings. The maximum capacity of the battery will naturally decrease with time and usage.</p>
			<p class="spec-item-name" style="font-size: 0.8rem;">5. In the event of a water spillage, users should wipe away the water, before bringing the laptop to a VAIO service center for inspection or repair.<br>
		  The anti-spill feature is only available on the keyboard and is not applicable on water damage to other parts of the laptop.</p>
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

@extends('layout.app')

@section('title', 'VAIO SE14')


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

<!--- Banner here------------------------------------>

<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">

       <!--- 	<a href="https://vaio-sg.nexstmall.com" target="_blank"  class="swiper-slide"> --->
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/se14/SE14.jpg)">
                            <div class="main-banner" title=""></div>
                        </div>
         <!---           </a>  ---->
        
    </div>
</section>
@push('css')

    <style>
        .cms-banner:before {
            padding-top: 37.51%;
        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-5 .main-banner {
            background-image: url(/images/se14/SE14.jpg);
        }

        @media(max-width: 991px) {
            .cms-banner-5 .main-banner {
            background-image: url(/images/se14/SE14-2.jpg);
            }
        }
        @media(max-width: 991px) {

            .feature-box{
            margin:5px 0px;
          }
        }

       

    </style>

@endpush
<!--- Banner end here------------------------------------>

<!---Page content here--------------------------------------------->

    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0 feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Common features for work &amp; play</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>User experience</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Productivity</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Reliability</h2>
                </a>
            </div>

            <section class="pt-section text-center" style="background-color: #eeeeee" id="pt-1">
                <div class="container">
                    <h2 class="pt-title mt-4">Performance &amp; Entertainment</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/VAIO_0318.jpg" alt="">
                    </div>
						<p class="pt-content-title mx-auto">Moving conference center</p>	
                        <hr class="pt-title-hr">
					
                        <p class="pt-content text-left">
                            Top/Down firing Speaker: Implement 4 high quality speakers on top/bottom side, providing clear and higher quality audio.
                        </p>
                        <p class="pt-content text-left">
                            720P/1080P Web Camera: Combine high quality Web Cam with 2 digital array microphone to correctly receive the voice in front of the screen. AEC* solution will decrease unnecessary echo and noise to allow you have good conference call all the time. 
                        </p>
						<p class="pt-content text-left">
                            Single/Multiple Conference Mode: Use F4 key to quick switch from different conference mode. Microphone will also automatically adjust to Activate Noise Cancellation(ANC) to optimize audio reception.
<ul class="text-left">
	<li>Single Mode: Limit and optimize the reception of microphone under 45 degree. You can have a short meeting with the client even in a noisy environment.</li>
<li>Multiple Mode: Microphone accepts the voice from 180 degree, optimizing the voice for meetings with a lot of attendants. </li>
						</ul>
                        </p>
						<!--<p class="pt-content  text-left">
                           SE14 features an AMD RadeonTM 550X discrete graphics chip (optional) for enhanced graphics performance, which provides a more engaging experience for digital media-oriented users when watching movies or playing games.</p>-->
					 <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">* Acoustic Echo Cancellation</p>
					
                    </div>
                    
				
				<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/se14pt01-2.png" class="w-50" alt=""><img src="/images/pt-pic/se14pt01-3.png" class="w-50" alt="">
                    </div>
				

                   <!-- <h2 class="pt-title mt-4">All Day Power For Outside Work &amp; Play</h2>-->
                    <div class="pt-content-wrapper mx-auto">						
						<p class="pt-content-title mx-auto">All Day Power For Outside Work &amp; Play</p>
                        <hr class="pt-title-hr">

                        <p class="pt-content text-left">Long battery Life: SE14 can provide up to 13-hour battery life for normal web browsing, email, and documentation even if you are out of office to work all day long. On long-distance flight, you can watch your favorite movies for the whole journey.</p>
                        <p class="pt-content text-left">
                            Quick charging: Quick charging technology can charge up 70% of the battery power in an hour. It allows you to go for to go for an external ad-hoc meeting. 
                        </p>
						 <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
                            * Data on battery life is obtained from tests deploying internal tools by engineers. The actual battery performances could vary from battery life tests shown above, due to differences in operating environment and conditions.
                        </p>	
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/VAIO_0492.jpg" alt="">
                    </div>
                    </div>

                </div>
            </section>

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0  feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Common features for work &amp; play</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>User experience</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Productivity</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Reliability</h2>
                </a>
            </div>


            <section class="pt-section text-center" id="pt-2">
                <div class="container">
                    <h2 class="pt-title mt-4">Delightful User Experience</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <h3 class="pt-content-title">Ergonomics for Work Comfort</h3>
                        <!--<p class="pt-content-sm mt-3 mb-2">Natural Ergonomics Tilt reduces stress of palm and wrist while typing</p>-->
						 <p class="pt-content text-left mb-5">Natural Ergonomics Tilt: With the screen opened(can be done by single hand), the body tilts up to form a natural slant angle with your tabletop. The stress to palm and wrist is greatly reduced while typing, providing comfortable and delightful user experience.<br><br>
							 More Airflow, Better Performance: SE14 will be lifted slightly because of the tilted body. It not only increase the airflow but also decreases the body temperature for better performance.
                    </p>	
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/VAIO_0419.jpg" alt="">
                    </div>
                    </div>
					
					
                    <div class="pt-content-wrapper mx-auto">
						 
                        <h3 class="pt-content-title">Backlit Keyboard with spill resistance</h3>
                        <hr class="pt-title-hr">

                      <!--  <p class="pt-content-sm mt-3 mb-2">2-level back-light keyboard to keep you use in dark place + Full size keyboard provides a comfortable and precise typing experience</p>-->
						 <p class="pt-content text-left">Convenient typing experience in a dimly-lit conference room or aircraft cabin. The backlit keyboard makes it easier for users to see the keycaps, offering a comfortable input experience that is not limited by the surrounding light environment. Water spill resistance keyboard brings you worry-free experience when working.</p>	
						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
                            * In the event of a water spillage, users should wipe away the water, before bringing the laptop to a VAIO service center for inspection or repair.<br>
							* The anti-spill feature is only available on the keyboard and is not applicable on water damage to other parts of the laptop.
                        </p>	
                    </div>
					

                </div>
            </section>

            

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0  feature-box" >
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Common features for work &amp; play</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>User experience</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Productivity</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Reliability</h2>
                </a>
            </div>

            <section class="pt-section text-center" id="pt-3">
                <div class="container">
                     <h2 class="pt-title mt-4">Uncompromised Performance</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/VAIO_0524.jpg" alt="">
                    </div>
                        <h3 class="pt-content-title">Seamless Connectivity</h3>
                        <hr class="pt-title-hr">

                        <!--<p class="pt-content-sm mt-3 mb-2">Highly connectivity (Multiple I/O ports)</p>-->
						 <p class="pt-content text-left">Connection options are very comprehensive, including two USB Type-C™ ports, two USB type A 3.1 ports and a HDMI port.  Most ports are on the left side of the device, which can avoid your right hand being jammed by the cables from different devices such a mouse or an external HDD.</p>
                    </div>
					
	
					
                    <div class="pt-content-wrapper mx-auto">
                        <h3 class="pt-content-title">More Airflow, Better Performance</h3>
                        <hr class="pt-title-hr">

                        <!--<p class="pt-content-sm mt-3 mb-2">Thinner and quieter fan + Ultimate thermal tech offers 10%~15% more airflow, better thermal design to achieve the maximum performance of laptop</p>-->
						 <p class="pt-content text-left">By a more compact and quieter fan with 53 split-design blades, which offers 10%~15% more airflow, together with the tilted body, body temperature of SE14 can be decreased to reach better performance.</p>
                    </div>
                
		
					
                    <div class="pt-content-wrapper mx-auto">
                        <h3 class="pt-content-title">Equipped with new processor</h3>
                        <hr class="pt-title-hr">

                        <!--<p class="pt-content-sm mt-3 mb-2">Moving conference center…</p>-->
						 <p class="pt-content text-left">The   VAIO® SE14 combines work and entertainment functions with a comprehensive range   of specifications aimed at the mainstream price arena, making it suitable for a   well-rounded variety of tasks and user groups. The VAIO® SE14 is equipped with   an 8th generation Intel® Core™ processor and a 14-inch full HD IPS screen with   ultra-narrow screen bezel design.</p>
                    </div>
                
				
				</div>
				
				
            </section>

            

    <div class="d-flex flex-wrap nav-pt px-4 p-lg-0  feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Common features for work &amp; play</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>User experience</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Productivity</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Reliability</h2>
                </a>
            </div>


<section class="pt-section d-flex flex-wrap text-center text-white p-0" id="pt-4">
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #808090;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">Built to be Secured</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content-title mb-0 mt-4">One Touch Quick Login</p>
							<!--<p class="pt-content-sm mt-3 mb-2" style="color: #ceced2">Windows Hello: Finger print &amp; IR camera</p>-->
                            <p class="pt-content mx-auto" style="color: #ceced2">Besides the dedicated design and functionality, SE14 also focuses on protecting personal privacy, and comes with a built-in fingerprint reader and TPM 2.0 chip to provide hardware-based security functions which prevent malicious access to private data. The fingerprint reader thwarts biometric hacking with anti-spoofing technology, and does not disclose login authentication when the user signs in. The user can also choose an IR Camera option that supports Windows Hello, enabling quick login with one touch (or a smile) in front of the camera.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0">
                    <div class="rect-banner" title="VAIO SE14 Thin and Lightweight Body" style="background-image: url('/images/pt-pic/product-banner-se14-1.jpg');"></div>
                </div>
            </section>





    <div class="support-center-wrap">
        <div class="container">

            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    <p class="spec-item-name" style="font-size: 0.8rem;">
                        Intel, the Intel logo, the Intel Inside logo and Intel Core are trademarks of Intel Corporation in the U.S. and/or other countries.<br>
                        The use of the "VAIO" trademark is by the permission of and subject to license with VAIO Corporation.
                        <br />
                      <br />
                    * Azumino Finish and all quality control tests are applicable to VAIO S11, VAIO S13, VAIO A12 and VAIO SX14 only.
                    </p>

                </div>
            </div>
        </div>
    </div>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop

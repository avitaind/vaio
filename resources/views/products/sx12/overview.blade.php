@extends('layout.app')

@section('title', 'VAIO SX12')

@section('product_nav')
    @include('products.sx12.product_nav')
@stop

@section('content')
 
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
        <!--<div class="swiper-wrapper"> -->
             <a href="#" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-1">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
             
        <!--</div>
        <div class="swiper-pagination"></div>   -->
    </div>
</section> 

@push('css')

    <style>
		.main-banner-section .txt_small {
			font-size: 0.8rem;
		}

        .main-banner-section .cms-banner:before {
            padding-top: 37.51%;
        }
 
        .main-banner-section .cms-banner-1 .main-banner{
            background-image: url(/images/sx12/SX12_e.jpg);
        }
		 
        @media(max-width: 991px) {
            .main-banner-section .cms-banner-1 .main-banner{
            background-image: url(/images/sx12/SX12_e_mob.jpg);
            }
			 
			.main-banner-section .swiper-container {
				padding-bottom: 0px;
			}
			 
           .main-banner-section .cms-banner:before {
                padding-top: 106%;
            }
						
        }

    </style>

@endpush 

<!--- Kachiiro here-------------------------------
 

<section class="sub-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
        <div class="swiper-wrapper">
             <a href="javascript:void(0);" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-1">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
            
             <a href="javascript:void(0);" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-2">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
            
            <a href="javascript:void(0);" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-3">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
            
            <a href="javascript:void(0);" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-4">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
             
        </div>
        <div class="swiper-pagination"></div>  
    </div>
</section>


 
@push('css')

    <style>
        .sub-banner-section .main-banner-wrapper:before {
            padding-top: 37.51%;
        }
		
        .sub-banner-section .cms-banner-1 .main-banner{
            background-image: url(/images/sx12/kachi_1920_1_e_sx12.jpg);
        }
		.sub-banner-section .cms-banner-2 .main-banner{
            background-image: url(/images/sx12/kachi_1920_2_e_sx12.jpg);
        }
		.sub-banner-section .cms-banner-3 .main-banner{
            background-image: url(/images/sx12/kachi_1920_3_e_sx12.jpg);
        }
		.sub-banner-section .cms-banner-4 .main-banner{
            background-image: url(/images/sx12/kachi_1920_4_e_sx12.jpg);
        } 
		
		.sub-banner-section .main-banner{
			background-size: cover;
    		background-repeat: no-repeat;
		}

        @media(max-width: 991px) {
            .sub-banner-section .cms-banner-1 .main-banner{
            background-image: url(/images/sx12/kachi_911_1_e_sx12.jpg);
            }
			.sub-banner-section .cms-banner-2 .main-banner{
            background-image: url(/images/sx12/kachi_911_2_e_sx12.jpg);
            }
			.sub-banner-section .cms-banner-3 .main-banner{
            background-image: url(/images/sx12/kachi_911_3_e_sx12.jpg);
            }
			.sub-banner-section .cms-banner-4 .main-banner{
            background-image: url(/images/sx12/kachi_911_4_e_sx12.jpg);
            }
			
			.sub-banner-section .swiper-container {
				padding-bottom: 0px;
			}
			
           .sub-banner-section .main-banner-wrapper:before {
                padding-top: 106%;
            }
			
			.sub-banner-section .swiper-container-horizontal>.swiper-pagination-bullets{
			    bottom: 0px	
			}
						
        }

    </style>

@endpush
	<section class="pt-section text-center py-5" style="background-color: #0b122e;" >
		<div class="container">
        <a href="https://vaio.nexstmall.com/en_hk/vaio/sx12/vaio-sx12-12-5-inch-kachi-iro-laptop-windows-10-pro-vaio-5th-anniversary-limited-edition.html?utm_source=facebook&utm_medium=social&utm_campaign=SX12KachirroLaunch&utm_content=Launch" class="btn" style="color: #dbad7a !important; border: 1px solid; padding: 1rem 5rem;" target="_blank">Buy the Kachi-iro-Edition Now</a>
		</div>                        
	</section>
    
   End  Kachi-iro ------------------------>

<!-----------------------INTRO----------------------------------------->        
	<section class="pt-section text-center" style="background-color: #fff" >
		<div class="container">
			<h2 class="pt-title mt-4">New concept, New standard</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto mb-5">
				<img src="/images/sx12/sx12_overview_01.png" alt="">
			</div>
			<h2 class="pt-title mt-4">The Right Connections</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<img src="/images/sx12/sx12_top_e.jpg" alt="">
			</div>
		</div>                        
	</section>
    

<!----------------MENU 1------------------------------------------------>                    
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>Lightweight laptop made for mobility</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Full capability offered by minimum size</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Uncompromised comfort and functionality</h2>
                </a>
            </div>
        </div>
   </section>

<section class="pt-section text-center" id="pt-1">
	<div class="container">
			<div class="selling-pt-sm active px-3"><strong>Lightweight laptop made for mobility</strong></div>
			<h2 class="pt-title mt-4"></h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">	
				<p class="pt-content">
The cover of VAIO SX12 is built with layers of unidirectional carbon fibers that increase the chassis's robustness for enhanced protection while keeping the laptop thin and light at a mere 899g.<br>
<br>
Thanks to the new lightweight and tough unidirectional carbon fibres that run in a parallel direction, the sturdy chassis is extra resistant to impact.<br>
<br>

<small>*Weight may vary according to configurations.</small>
				</p>
			</div>
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/sx12/sx12_overview_02_e.png" alt="">
			</div>
<!---------------------------------------------------------------->                    
			<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">Petite size with a wider view</h2>
			<hr class="pt-title-hr">
				<p class="pt-content">About the size of A4 paper, the 12.5" SX12 brings a wider viewing experience by adopting a thin bezel design that offers a screen area about 16% larger than the previous 11.6" S11 model.</p>						
			</div>
        <div class="d-flex flex-wrap py-5">
			<div class="col-12 col-lg-7 ">
				<img src="/images/sx12/img_area1_1_1_1.jpg" alt="">
			</div>
			<div class="col-12 col-lg-5 ">
				<img src="/images/sx12/img_area1_1_1_2.jpg" alt="">
			</div>
		</div>
<!---------------------------------------------------------------->    
		<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">Fast charging for whole day of use</h2>
			<hr class="pt-title-hr">
        </div>
        <div class="d-flex flex-wrap py-5">
			<div class="col-12 col-lg-6 ">
				<img src="/images/sx12/sx12_overview_03.png" alt="">
			</div>
			<div class="col-12 col-lg-6 py-5">
				<p class="pt-content text-left">SX12 provides battery life of up to 10.5 hours, keeping you productive all day long. Its fast charging feature allows you to recharge the laptop to around 80% in merely an hour.</p>
                <div class="d-flex flex-wrap py-5">
                    <div class="col-12 col-lg-6 ">
                        <img src="/images/sx12/icon_battery.png" alt=""><br />
Battery life of up to 10.5 hours
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <img src="/images/sx12/icon_battery2.png" alt=""><br />
Recharge the laptop to around 80% in merely an hour
                    </div>
                </div>
				<p class="pt-content text-left"><small>*Data on battery life is obtained from internal test tools deployed by VAIO engineers. The actual battery performances may vary due to different operating environment and conditions.</small></p>						
			</div>
		</div>
<!---------------------------------------------------------------->    
		<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">Supports power bank charging</h2>
			<hr class="pt-title-hr">
			<p class="pt-content">The USB Type-C<sup>TM</sup> port of SX12 supports charging from your handy dandy power bank or any regular 5V cell phone charger. Working on the go has never been easier.</p>
        </div>
<!---------------------------------------------------------------->    
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-3 ">
					<img src="/images/sx12/icon_charge1.png" alt="">
                </div>
				<div class="col-12 col-lg-9 ">
                	<p class="pt-content text-left py-3">
A power bank that supports USB Power Delivery (20000mAh/24W) can fully charge SX12 in around 3.5 hours*<sup>1</sup>, and performs around two full charges.
					</p>
				</div>
				<div class="col-12 col-lg-3 ">
					<img src="/images/sx12/icon_charge2.png" alt="">
                </div>
				<div class="col-12 col-lg-9 ">
                	<p class="pt-content text-left py-3">
Operation time can be extended up to 3.5 hours*<sup>2</sup> when connected to a regular charger (10000mAh/5V/1.5A).
					</p>
				</div>
				<div class="col-12 col-lg-3 ">
					<img src="/images/sx12/icon_charge3.png" alt="">
                </div>
				<div class="col-12 col-lg-9 ">
                	<p class="pt-content text-left py-3">
A regular cell phone power bank (5V/1.5A) can fully charge the laptop in around 7.5 hours*<sup>3</sup>.
					</p>
				</div>
				<div class="col-12 col-lg-3 ">
                </div>
				<div class="col-12 col-lg-9 ">
                	<p class="pt-content text-left">
                    <small>
*1 Internal battery charges from 0% to 100% with the device turned off. Actual charging time may vary depending on operating conditions.<br>
*2 Testing was conducted while battery drops from 100% to 5%. Test settings: loading a new website every 60 seconds, inputting characters through keyboard every 10 seconds, display brightness set at 150 nits. Actual battery life may vary depending on operating conditions.<br>
*3 Windows' Battery Health Report may show that the device is not charging. In which case, check the indicator light on the device. The indicator light will be on if the device is charging. The light will automatically be turned off when the internal battery reaches 95%.
					</small></p>
				</div>
			</div>
   </div>
</section>
                    
<!--------------------Section 2-------------------------------------------->            
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Lightweight laptop made for mobility</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>Full capability offered by minimum size</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Uncompromised comfort and functionality</h2>
                </a>
            </div>
        </div>
   </section>
<!---------------------------------------------------------------->            
	<section class="pt-section text-center" style="background-color: #fff"  id="pt-2">
		<div class="container">
			<div class="selling-pt-sm active px-3"><strong>Full capability offered by minimum size</strong></div>
			<h2 class="pt-title mt-4">Unparalleled performance from compact design</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content mb-5">
                    The compact SX12 features a full-size keyboard with 19mm key travel. Comfortable and error-free typing is guaranteed regardless in the office or on the road.<br>
                    <br>
                    Full-size silent keyboard<br>
                    <br>
                    SX12's keyboard is specially designed to keep noise to a minimum and provide a distraction-free typing experience.
                </p>				
			</div>
			<div class="d-flex flex-wrap mb-5">
                <div class="col-12 col-lg-6 ">
                    <img src="/images/sx12/sx12_overview_04.png" alt="">
                </div>
                <div class="col-12 col-lg-6 ">
                    <p class="pt-content text-left py-5">
                    While being compact, SX12 comes with a brilliantly engineered full-size keyboard made for added precision and comfort. Each keycap's supporting mechanism is improved to avoid the annoying 2KHz typing noise that conventional keyboard generates. Greater typing precision is achieved by the refined travel distance between keycaps. Besides, each keycap is covered by a specialized abrasion resistant coating to prevent smudges and streaks, keeping the keys clean and clear even after prolonged usage.</p>	
                </div>  
         	</div>          
<!----------------------------------------------------------------->
			
            <h2 class="pt-title mt-4">Exceptional Performance That Never Disappoints</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-8 ">
				<p class="pt-content-title mx-auto text-left">More power-efficient with the 8th generation Intel®Core™ processor</p>						
				<p class="pt-content text-left">
Featuring the 8th generation Intel®Core™ processor, VAIO SX12 delivers higher performance and power efficiency in a lightweight aluminum-stainless steel alloy chassis that effectively disperses heat generated by the CPU. VAIO’s unique efficient cooling system eliminates the need for a fan. Because the PC never overheats and no fan is needed, it eliminates unnecessary noise as well as redundant parts all together for a more reliable device.</p>
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/sx12/img_area3_article7_section1_1.jpg" alt="">
                </div>
			</div>
<!----------------------------------------------------------------->
            
        </div>
    </section>
<!---------------------------------------------------------------->    
	<section class="pt-section d-flex flex-wrap text-center text-white p-0" style="background-color:#000; ">
            <div class="container">
                <div class="col-12 col-lg-12 py-5 order-1 order-lg-2" >
                        <img src="https://hk.vaio.com/images/sx14/vaio-sx14-pdp-true-performance-min.png" alt="">
            	</div>
            </div>
                <div class="col-12 col-lg-6 " >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <div class="pt-content-wrapper-lg mx-auto">   
						<p class="pt-content-title mx-auto">What is VAIO TruePerformance?</p>						
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">Intel CPUs, such as the Core i7 adopted by VAIO, have "Intel® Turbo Boost Technology 2.0" installed, which enhances performance at peak usage. However, the period during which maximum performance can be maintained is limited by power consumption and temperature, and the performance will degrade. "VAIO TruePerformance" is technology designed to maintain higher performance for a longer period of time by increasing CPU power limits and more efficiently eliminating heat.</p> 
<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem; color:#ccc">
*Conceptual diagram. Actual performance may vary under certain operating conditions.</p>  
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 " >
					<div class="fs-0 my-4 my-lg-5">
                        <img src="https://hk.vaio.com/images/sx14/vaio-sx14-pdp-true-performance-animated-min.gif" alt="">
                    </div>
                </div>    
    </section>

<section class="pt-section text-center" style="background-color: #fff">
	<div class="container">
			<h2 class="pt-title mt-4">Productivity enhanced by speedy data retrieval</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content mb-5">
SX12 houses the 3<sup>rd</sup> generation PCIe SSD (with an M.2 interface), working six times faster sequential read speeds than conventional SATA SSD. The high-performance SSD offers a faster and crispier experience with quick application loading and high-speed data processing for quicker work.</p>	
			</div>
            
			<div class="d-flex flex-wrap mb-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">
                    <strong>SSD performance comparison
</strong><br />
					CrystalDiskMark5.2.1 Read / Write speed comparison
				</p>
				<img src="/images/sx12/img_area2_1_2_1.jpg" alt="">
				</div>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">
                    <strong>SSD performance comparison</strong><br />
                    The time  to copy 1000 files from folder to folder (In seconds)
				</p>
                <img src="/images/sx12/img_area2_1_2_2.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->                    

			<h2 class="pt-title mt-4">Connectivity</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12">
					<p class="pt-content-title mx-auto">The Right Connections</p>	
				<p class="pt-content">
					With a USB Type-C<sup>TM</sup> port, 3 USB ports, a HDMI port, a VGA connector and LAN connection, there will never be a need to carry external adapters again.
				</p>
				<p >
                *USB Type-C and VGA output cannot be used simultaneously for display output.
                </p>
                </div>
				<div class="col-12 col-lg-12 py-5">
				<img src="/images/sx12/img_area2_2_1_2.jpg" alt="">
				</div>
			</div>
</section>
<!---------------------------------------------------------------
			<h2 class="pt-title mt-4">Security</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-6 py-5">
				<p class="pt-content-title mx-auto text-left">Access Denied</p>						
				<p class="pt-content text-left">
Security literally at your fingertips. Instantly login to your VAIO SX14 with the new fingerprint reader. Exceptional security to prevent malicious intent.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/sx12/img_area3_article5_section1_2e.jpg" alt="">
                </div>
			</div>
	</div>
</section>
-->
<!--------------------Section 3-------------------------------------------->            
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Lightweight laptop made for mobility</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Full capability offered by minimum size</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>Uncompromised comfort and functionality</h2>
                </a>
            </div>
        </div>
   </section>
<!---------------------------------------------------------------->      
<section class="pt-section text-center" id="pt-3">
	<div class="container">

			<div class="selling-pt-sm active px-3"><strong>Uncompromised comfort and functionality</strong></div>
			<!--<h2 class="pt-title mt-4">Productivity enhanced by speedy data retrieval</h2>-->
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-6 py-5">
				<p class="pt-content-title mx-auto text-left">Natural slanting angle for extra comfort</p>						
				<p class="pt-content text-left">
Thanks to the delicate slanting angle design, the keyboard is automatically tilted when the screen is opened, reducing stress on your palms and wrists while giving you a comfortable typing position.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/sx12/img_area3_article2_section3_1e.jpg" alt="">
                </div>
			</div>
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-6 py-5">
				<p class="pt-content-title mx-auto text-left">High-precision silent trackpad</p>						
				<p class="pt-content text-left">
Positioned right below the space bar, the trackpad features the left and right physical buttons so you don’t have to worry about pressing the wrong buttons by mistake. Similar to the keyboard, the improved supporting mechanism underneath the buttons ensures your every click noise-free.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/sx12/img_area3_article2_section2_1.jpg" alt="">
                </div>
			</div>
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-6 py-5">
				<p class="pt-content-title mx-auto text-left">Fast and stable Wi-Fi connection</p>						
				<p class="pt-content text-left">
SX12 has its Wi-Fi antenna purposefully installed at the top of the screen, minimizing interference for the best Wi-Fi signal reception possible. With improved reception, you don't have to worry about workflow being interrupted as SX12 ensures a fast and stable network connection.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/sx12/img_area3_article2_section3_2.jpg" alt="">
                </div>
			</div>
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-6  py-5"  style="margin-top:60px;">
				<p class="pt-content-title mx-auto text-left">Without MU-MIMO networking</p>						
				<p class="pt-content text-left">
If multiple devices are connected to the same network without MU-MIMO, each device has to wait for its turn for the Wi-Fi signal, dragging down the internet speed.
				</p>
                </div>
                <div class="col-12 col-lg-6"  style="margin-top:60px;">
                    <img src="/images/sx12/img_area3_1_3_1.jpg" alt="">
                </div>
                
				<div class="col-12 col-lg-6  py-5"  style="margin-top:60px;">
				<p class="pt-content-title mx-auto text-left">With MU-MIMO networking</p>						
				<p class="pt-content text-left">
MU-MIMO allows multiple devices to access the same Wi-Fi network at the same time without significant drop in internet speed.
				</p>
                </div>
                <div class="col-12 col-lg-6"  style="margin-top:60px;">
                    <img src="/images/sx12/img_area3_article4_section4_2e.jpg" alt="">
                </div>
                
			</div>
<!----------------------------------------------------------------->
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 py-5">
				<p class="pt-content-title mx-auto text-left">Double data security</p>						
				<p class="pt-content text-left">
Instant and hassle-free login is made possible with the built-in fingerprint sensor. A touch with your finger is all it takes to log in and wake up the device from sleep mode. Advanced biometric security also means your data is more secure than ever.
				</p>
                <p class="txt_small text-left">*The feature of waking up through fingerprint sensor needs to be activated in VAIO Control Center.</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/sx12/img_area3_article5_section1_2e.jpg" alt="">
                </div>
                
			</div>
<!----------------------------------------------------------------->









			<!--<h2 class="pt-title mt-4">Robust Chassis To Protect Valuable Information</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">Durability that passes stringent quality tests</p>						
				<p class="pt-content text-left">
To keep up with the durability that the brand has known for, VAIO goes the extra mile to make sure even the detachable parts live up to everyone’s expectation. The screen uses AGC’s Dragontrail<sup>TM</sup> Pro tempered glass, and the hinge – a part that requires the highest level of durability – is made of high-endurance connecting units that are jointly developed by various Japanese manufacturers. A suite of quality tests reflecting actual usage scenarios are carried out to ensure each computer sent to the market has the highest structural strength.
</p><br />

				<p class="pt-content text-left txt_small">
※Quality tests are carried out in a specific environments based on VAIO’s regulations. The product’s quality tests do not guarantee that it is free from any damage or malfunction, nor do they guarantee the safety of the data in the SSD.<br />
*1  The water-resistant test is limited to splashes on the surface of the keyboard and does not consider water seeping through air vents and ports. In the event of a splash, visit the nearest VAIO designated repair center immediately for examination or repair.
                </p>
                </div>
                

				<div class="col-12 col-lg-12 py-5 ">
                    <a href="https://hk.vaio.com/tc/quality" class="btn pink-btn mt-3">Read more</a>
                </div>
                
			</div>-->
<!----------------------------------------------------------------->

	</div>
</section>

            <section class="pt-section text-center">
                <div class="container">
					 <div class="selling-pt-sm active px-3">GUARANTEED QUALITY</div>
                    <h2 class="pt-title mt-4">The “Azumino Finish”</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
                      <p class="pt-content-title mb-0 mt-4">The pursuit of perfection in craftsmanship and total quality, from start to finish.</p>
                      <p class="pt-content text-left">
Located in Azumino, Nagano Prefecture, Japan, the VAIO Corporation prides itself as a notebook computer manufacturer with a relentless pursuit of quality. At its core, the VAIO brand stands for a wealth of experience in top-notch manufacturing, state-of-the-art technologies and dedicated talents with a passion for craftsmanship. All VAIO notebook computers are either fully manufactured or assembled in Azumino, and can only be taken to the market after passing over 50 stringent quality control tests.
                        </p>    <br />
                    </div>
                    <a href="{{ route('quality.azumino_finish') }}" class="btn pink-btn mt-3">Learn More</a>
				</div>
            </section>
    

<!---------Disclaimer------------------------------------------------------->                    

    <div class="support-center-wrap">
        <div class="container">

            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    <p class="spec-item-name" style="font-size: 0.8rem;">
                        Intel, the Intel logo, the Intel Inside logo and Intel Core are trademarks of Intel Corporation in the U.S. and/or other countries.<br>
                        The use of the "VAIO" trademark is by the permission of and subject to license with VAIO Corporation.
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
 
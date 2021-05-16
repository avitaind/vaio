@extends('layout.app')

@section('title', 'VAIO SX14')

@section('product_nav')
    @include('products.sx14.product_nav')
@stop

@section('content')

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>

        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="@lang('common.sx14_buy_now_url')" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif

    </ul>
</div>
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
			<a href="javascript:void(0);" class="swiper-slide">
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/sx14/SX14.jpg)">
                            <div class="main-banner" title=""></div>
                        </div>
                    </a>
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
            background-image: url(/images/sx14/SX14.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/sx14/SX14-2.jpg);
            }
        }
		
		/* CSS for SX14 images */
		.mb_px-10 {
			padding: 0px 0px 0px 0px;
		}
		.sx14_bg1 {
			background-image: url(/images/sx14/sx14_bg01.jpg);
			height:550px;
		}
		.sx14_bg2 {
			background-image: url(/images/sx14/sx14_bg02.jpg);
			height:450px;

		}

       .mb_only {
				display:none;
        }
       .pc_only {
				display:block;
        }

        @media(max-width: 991px) {
		.mb_px-10 {
			padding: 10px 0px 10px 0px;
		}
			.sx14_bg1 {
			background-color:#000;
			background-image: url();
			}
			.sx14_bg2 {
			background-color:#000;
			background-image: url();
			}
            .pc_only {
				display:none;
            }
            .mb_only {
				display:block;
            }
        }

    </style>

@endpush
<!--- Kachiiro here------------------------------------> 
 

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
            background-image: url(/images/sx14/kachi_1920_1_e_sx14.jpg);
        }
		.sub-banner-section .cms-banner-2 .main-banner{
            background-image: url(/images/sx14/kachi_1920_2_e_sx14.jpg);
        }
		.sub-banner-section .cms-banner-3 .main-banner{
            background-image: url(/images/sx14/kachi_1920_3_e_sx14.jpg);
        }
		.sub-banner-section .cms-banner-4 .main-banner{
            background-image: url(/images/sx14/kachi_1920_4_e_sx14.jpg);
        } 
		
		.sub-banner-section .main-banner{
			background-size: cover;
    		background-repeat: no-repeat;
		}

        @media(max-width: 991px) {
            .sub-banner-section .cms-banner-1 .main-banner{
            background-image: url(/images/sx14/kachi_911_1_e_sx14.jpg);
            }
			.sub-banner-section .cms-banner-2 .main-banner{
            background-image: url(/images/sx14/kachi_911_2_e_sx14.jpg);
            }
			.sub-banner-section .cms-banner-3 .main-banner{
            background-image: url(/images/sx14/kachi_911_3_e_sx14.jpg);
            }
			.sub-banner-section .cms-banner-4 .main-banner{
            background-image: url(/images/sx14/kachi_911_4_e_sx14.jpg);
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

<!--
	<section class="pt-section text-center py-5" style="background-color: #0b122e;" >
		<div class="container">
        <a href="https://vaio.nexstmall.com/en_hk/vaio/sx14/vaio-sx14-14-inch-laptop-kachiiro-color-windows-10-pro-vaio-5th-anniversary-special-edition.html?utm_source=website&utm_medium=launch&utm_campaign=kachiiro&utm_content=buynow
" class="btn" style="color: #dbad7a !important; border: 1px solid; padding: 1rem 5rem;" target="_blank">Buy the Kachi-iro-Edition Now</a>
		</div>                        
	</section>

-->

<!---Page content here--------------------------------------------->
	<section class="pt-section d-flex flex-wrap text-center text-white p-0 sx14_bg1">
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">VAIO SX14</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">Take business productivity to the next level with more power, bigger display, expanded connectivity and legendary durability</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mb_only" >
                        <img src="/images/sx14/sx14_bg01B.jpg" alt="">
            	</div>
    </section>
<!------------------TAB Menu 1---------------------------------------------->   
    <section id="vaio-product mb_px-10">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Performance</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Craftsmanship</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Mobility</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Quality</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   
	<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-1" >
                <div class="col-12 col-lg-6 order-2 order-lg-1 px-0" >
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/sx14/sx14_pic01.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                     <div class="selling-pt-sm active px-3"><strong>PERFORMANCE</strong></div>
                        <h2 class="pt-title mt-4">Brilliance</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper-lg mx-auto">                            
						<p class="pt-content-title mx-auto">Ultra  High Definition</p>						
                      <p class="pt-content text-left">
                            Not only will you be able to view more with a thin bezel 14-inch display, the VAIO SX14 just made viewing your work more vibrant with an available 4K Ultra High Definition display. 
                        </p>
                        </div>
                    </div>
                </div>
    </section>
	<section class="pt-section d-flex flex-wrap text-center text-white p-0 sx14_bg2">
        <div class="container">
                <div class="col-12 col-lg-12 py-5 order-2 order-lg-2" >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">Power of Six</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">   
						<!--<p class="pt-content-title mx-auto">More Power</p>-->
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">Time to push the boundaries of performance with the available 10th generation Comet Lake intel® hex-core processors enhanced with VAIO® TruePerformance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 rect-banner-wrapper px-0 mb_only">
                    <div class="rect-banner" style="background-image: url(/images/sx14/sx14_bg02.jpg);"></div>
                </div>
            	</div>
        </div>
    </section>

<!---------------------------------------------------------------->   

	<section class="pt-section d-flex flex-wrap text-center text-white p-0" style="background-color:#000; ">
            <div class="container">
                <div class="col-12 col-lg-12 py-5 order-1 order-lg-2" >
                        <img src="/images/sx14/vaio-sx14-pdp-true-performance-min.png" alt="">
            	</div>
            </div>
                <div class="col-12 col-lg-6 " >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <div class="pt-content-wrapper-lg mx-auto">   
						<p class="pt-content-title mx-auto">What is VAIO TruePerformance?</p>						
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">Intel CPUs, such as the Core i7 adopted by VAIO, have "Intel® Turbo Boost Technology 2.0" installed, which enhances performance at peak usage. However, the period during which maximum performance can be maintained is limited by power consumption and temperature, and the performance will degrade. "VAIO TruePerformance" is technology designed to maintain higher performance for a longer period of time by increasing CPU power limits and more efficiently eliminating heat.
</p> 
<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem; color:#ccc">
* Conceptual diagram. Actual performance may vary under certain operating conditions. 
                        </p> 

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 " >
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/sx14/vaio-sx14-pdp-true-performance-animated-min.gif" alt="">
                    </div>
                </div>    
    </section>
<!---------------------------------------------------------------->   

	<section class="pt-section d-flex flex-wrap text-center p-0" >
        <div class="col-12 col-lg-4 rect-banner-wrapper px-0 pc_only">
            <div class="rect-banner" style="background-image: url(/images/sx14/vaio-sx14-pdp-fingerprint-scan.jpg);"></div>
            <div style="position: absolute; width: 100px; top: 15px; right: -115px; z-index: 9;">
                <img src="/images/sx14/FaceUnlock.png"  />
            </div>
        </div>
        <div class="col-12 col-lg-8 " style="background-color: #ddd;">
            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                <h2 class="pt-title mt-4">Security</h2>
                <hr class="pt-title-hr">
                <div class="pt-content-wrapper-lg mx-auto">                            
                    <p class="pt-content-title mb-0 mt-4">Access Denied</p>
                    <p class="pt-content mx-auto" > Security literally at your fingertips and face recognition login. Instantly login to your VAIO SX14 with the new fingerprint reader. Exceptional security to prevent malicious intent.</p>
                    <p class="pt-content-sm" style="font-size: 0.8rem;">* Face recognition is applicable to 10th gen CPU versions only.</p>                            <div class="col-12 mb_only">
                        <img src="/images/sx14/FaceUnlock.png"  style="margin-bottom:15px; width:100px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 rect-banner-wrapper px-0 mb_only">
            <div class="rect-banner" style="background-image: url(/images/sx14/vaio-sx14-pdp-fingerprint-scan.jpg);"></div>
        </div>
        
        
        <div class="col-12 win-hello">
                <h2 class="pt-title mt-4">Windows HELLO!</h2>
                <hr class="pt-title-hr">                     
                <p class="pt-content mx-auto">Sign in fast, secure, and password-less with Windows Hello.</p>
        </div>
        
	</section>


<!------------------TAB Menu---------------------------------------------->   
    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Performance</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Craftsmanship</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Mobility</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Quality</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   

<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-2">
                <div class="col-12 col-lg-6">
                   <img src="/images/sx14/img_main2.jpg" alt="">
                </div>

                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                    
                    <div class="selling-pt-sm active px-3">CRAFTSMANSHIP
</div>
<!---------------------------------------------------------------->                    
                    <h2 class="pt-title mt-4">Durable</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
						<p class="pt-content-title mx-auto">Strong as Ever</p>						
                      <p class="pt-content text-left">
Through the utilization of UD carbon fiber and strategic reinforcing rib placements, this laptop still features the legendary durability you would expect from VAIO.                        </p>
                    </div>

<!---------------------------------------------------------------->                    
                    <h2 class="pt-title mt-4">Quailty</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
						<p class="pt-content-title mx-auto">Nothing Less Than Perfect</p>						
                      <p class="pt-content text-left">
To guarantee precision and maintain exacting standards, every new VAIO SX14 is completed at VAIO headquarters in Nagano, Japan.                        </p>
                    </div>

                    </div>
                </div>
                
            </section>
            
<!------------------TAB Menu 3---------------------------------------------->   
    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Performance</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Craftsmanship</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Mobility</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Quality</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   

            <section class="pt-section text-center" id="pt-3">
                <div class="container">
					 <div class="selling-pt-sm active px-3">MOBILITY</div>
<!---------------------------------------------------------------->                    
                    <h2 class="pt-title mt-4">Connectivity</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
						<p class="pt-content-title mx-auto">The Right Connections</p>						
                      <p class="pt-content text-left">
With a USB Type-C<sup>TM</sup> port, 3 USB ports, an HDMI port, a VGA connector and LAN connection, there will never be a need to carry external adapters again.                         
						</p>
                      
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">SD Cart Slot</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">USB (3.1)</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">USB Type-C<sup>TM</sup></div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">HDMI</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">LAN</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">VGA</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">AC Power</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">Security Lock</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;"> USB (3.0)</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;"> Headphone Jack</div>
                    </div>
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/sx14/vaio-sx14-top.jpg" alt="">
                    </div>

<!---------------------------------------------------------------->                    
				</div>
            </section>
            
	
    <section class="pt-section d-flex flex-wrap text-center p-0" id="pt-4">
                <div class="col-12 col-lg-8 " style="background-color: #fff;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">Mobility</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content-title mb-0 mt-4">Thin And Light</p>
                            <p class="pt-content mx-auto" >Normally a larger screen equals more weight however the VAIO SX14 is weighted 1.05kg only and at 15mm thick.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 rect-banner-wrapper px-0">
                    <div class="rect-banner" style="background-image: url(/images/sx14/vaio-sx14-pdp-performance-lightweight-min.jpg);"></div>
                </div>
	</section>
    
<!------------------TAB Menu---------------------------------------------->   
    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Performance</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Craftsmanship</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Mobility</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Guaranteed Quality</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   

            <section class="pt-section text-center" id="pt-4">
                <div class="container">
					 <div class="selling-pt-sm active px-3">GUARANTEED QUALITY</div>
                    <h2 class="pt-title mt-4">VAIO - The Quest For Perfection</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
                      <p class="pt-content text-left">
Every SX14 is carefully assembled at the VAIO headquarters in Azumino, Nagano Prefecture, Japan. Each VAIO notebook computer has to pass a stringent series of quality control tests before it can be delivered to the hands of customers.
						</p>
                      <p class="pt-content text-left">
We named this particular set of procedures, designed to ensure the highest quality and standards, the “Azumino Finish”. It is the definition of how we pursue perfection at VAIO.
                        </p>                            
                    </div>
                    <div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/pt01-1.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan"><img src="/images/pt-pic/pt01-2.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan">
                    </div>
                    <a href="https://hk.vaio.com/en/quality" class="btn pink-btn mt-3">Learn More</a>
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
                        </p>                            
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

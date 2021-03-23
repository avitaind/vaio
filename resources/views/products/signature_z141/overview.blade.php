@extends('layout.app')

@section('title', 'VAIO Z SIGNATURE EDITION')

@section('product_nav')
    @include('products.signature_z141.product_nav')
@stop

@section('content')
<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_signature_z141') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_signature_z141') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_signature_z141') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
		<!--
        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="@lang('common.sx14_buy_now_url')" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif
		-->

    </ul>
</div>
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/signature_z141/VAIO_Z_SE_KV_EN.jpg)">
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
            background-image: url(/images/signature_z141/VAIO_Z_SE_KV_EN.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/signature_z141/VAIO_Z_SE_KV_EN_MO.jpg);
            }
        }
		
		/* CSS for Z images */
		.mb_px-10 {
			padding: 0px 0px 0px 0px;
		} 

       .mb_only {
				display:none;
        }
       .pc_only {
				display:block;
        }
		
		
		h1{
			font-size: 3rem;
			font-weight: bolder;
			letter-spacing: 2px;
    		line-height: 1.2;
		}
		
		h3{
			font-weight: bold;
			color: #000;
		}
		
		.pt-section{
			background-color: #000;
		}
		
		.pt-title {
			font-size: 2.3rem;
			font-weight: bold; 
		}
		
		.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
			/*width: calc(100% - 60px);*/
		}
		
		.pt-container-m{
			padding: 45px;
		}
		
		
		.pt-container-s{
			padding: 30px;
		}
		
		
		
		.bg-grey{
			background-color: #f0f0f0;
		}
		
		.text-white{
			color: #fff  !imporant;
		}
		
		.box{
			border:1px solid #fff;
			padding: 30px;
		}
		
		.img_maintext_vtp{
			position: absolute;
			left: 75%;
			margin-top: 50px;
		}
		
		.white-btn{
			border: 1px solid #fff;
			background-color: transparent;
			color: #fff;
			border-radius: 0;
			padding: 1rem 4rem;
		}
		
		.white-btn:hover{
			border: 1px solid #fff;
			background-color: transparent;
			color: #fff;
			opacity: 0.7;
		}
		
		a.linkWrapper{
			display: block;
			color: #fff; 
			text-align: center;
			background: url(/images/signature_z141/bg_arrow.png) no-repeat right 15px center;
			border: 1px solid #fff; 
			box-sizing: border-box;
			max-width: 300px;
			width: 100%;
			margin: auto;
		}
		
		.bg-vaio-logo{
			padding: 100px 0px 330px;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: bottom right;
		}
		
	
	.innerWrapper {
		width: 960px;
		margin: auto;
		color: #fff;
	}

	.innerWrapper .tabWrapper ul {
		display: table;
		width: 100%;
		border-collapse: collapse;
	}

	.innerWrapper .tabWrapper li {
		display: table-cell;
		width: calc(100% / 3);
		vertical-align: middle;
		text-align: center;
		background: url(/images/signature_z141/bg_tab.jpg) no-repeat;
		background-size: cover;
		height: 50px;
	}

	.innerWrapper .tabWrapper li a {
		display:  block;
		vertical-align: middle;
		height: 100%;
		/*padding: 11px 0;*/
		color: #fff;
		font-size: 18px;
		font-weight: bold;
		line-height: 50px;
		height: 50px;
		transition: all .4s;
		box-sizing: border-box; }

	.innerWrapper .tabWrapper li a span {
		display: block;
		font-size: 12px;
	}
	.sp .innerWrapper .tabWrapper li a span {
		line-height: 1.3;
		font-size: 11px;
	}

	.innerWrapper .tabWrapper li a:hover {
		opacity: .6;
		text-decoration: none; }

	.innerWrapper .tabWrapper li.current {
		background-image: none;
		background-color: #ccc;
	}
	.innerWrapper .tabWrapper li.current a {
		color: #000;
	}


		
		
        @media(max-width: 991px) {
		.mb_px-10 {

			padding: 10px 0px 10px 0px;
		}
			 
            .pc_only {
				display:none;
            }
            .mb_only {
				display:block;
            }
			
			
			
			h1{
				font-size: 2rem;
				font-weight: bolder;
				letter-spacing: 0px;
			}
			
			.pt-title{
				font-size: 1.5rem; 
    			letter-spacing: 0px !important;
			}
			
			h3{
				font-size: 1.2rem;
    			line-height: 1;
			}
			
			.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
				width: calc(100% - 30px);
			}
			
			.py-5 {
				padding-top: 2rem!important;
				padding-bottom: 2rem!important;
			}
			
			h1.my-4{
				margin-top: 0rem!important;
    			margin-bottom: 0rem!important;
			}
			
			.black-btn{				
				padding: .5rem;
				font-size: 12px;
				letter-spacing: 0px;
				width: auto;
				min-width: auto;
				max-width: 100%;
				margin-bottom: 40px;
			}
			
			.box{ 
   				padding: 15px;
			}
			
			.pt-container-m{				
    			padding: 30px;
			}
			
			
			
			.img_maintext_vtp{
				position: relative;
				left: 0;
				margin-top: 30px;
			}
			
			.bg-vaio-logo{				
    			padding: 50px 0px 150px;
			}
		
			
			
        }

    </style>

@endpush 

<!--
	<section class="pt-section text-center py-5" style="background-color: #0b122e;" >
		<div class="container">
        <a href="https://vaio.nexstmall.com/zh_hk/vaio/sx14/vaio-sx14-14-inch-laptop-kachiiro-color-windows-10-pro-vaio-5th-anniversary-special-edition.html?utm_source=website&utm_medium=launch&utm_campaign=kachiiro&utm_content=buynow
" class="btn" style="color: #dbad7a !important; border: 1px solid; padding: 1rem 5rem;" target="_blank">立即購買勝色限定版</a>
		</div>                        
	</section>

-->


<!---Page content here--------------------------------------------->
	<section class="pt-section d-flex flex-wrap text-center">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 py-5 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-left"> 
							<p class="pt-content text-white">
								The world’s *first all-carbon-fiber laptop, VAIO® Z is our latest flagship series that brings wondrous performance that you can rely on. The premium VAIO® Z – SIGNATURE EDITION combines unique materials with supreme innovation and unleashes the spectacular performance that hides within. As a proud laptop manufacturer for over 20 years, VAIO sets yet another milestone in the mobile device history.
							</p>
							<p class="pt-content-sm mt-3 mb-5 text-left text-white" style="font-size: 0.8rem;">
								*Made with continuous carbon fiber material that has been three-dimensionally molded on all sides of a laptop PC housing as of January 6, 2021. Based on research by stella associa.
							</p>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 

 
	<section class="pt-section p-0 py-5 pc_only">
		<div class="container"  id="pt-1">
			<div class="innerWrapper">
				<div class="tabWrapper">
					<ul class="clearFix mb-0">
						<li class="current"><a href="#pt-1" class="selling-pt">Pushes the Limit</a></li>
						<li><a href="#pt-2"  class="selling-pt">Natural Charm</a></li>
						<li><a href="#pt-3"  class="selling-pt">Superlative Craftsmanship</a></li>
					</ul>
				</div>
			</div>
		</div>
   </section>



	<section class="pt-section d-flex flex-wrap text-center text-white" style="padding-top: 0px;" >
	
	<div class="fs-0 my-4 my-lg-5" style="margin-top: 0px !important;">
		<img src="/images/signature_z141/area2_bg.jpg"> 
		<img src="/images/signature_z141/img_maintext_vtp.png" class="img_maintext_vtp" > 
	</div> 

	<div class="container">   
		<div class="row">
		
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">5.00GHz processor that pushes the limit</h1>
			
			<div class="pt-content-wrapper-lg mx-auto text-left"> 
				<p class="pt-content text-white mt-4">
					Powered by Core i7-11375H – a special edition of the 11th generation Intel®Core™ H series processor, VAIO® Z runs at a maximum speed of up to 5.00GHz, bringing the speed limit that VAIO has always been proud of to the next level, and showing unparalleled performance that has never been seen before.
				</p>
				  
			</div>
			 
		</div>	
   
		<div class="col-12 my-4">
		   <img src="/images/signature_z141/area2_logo.png"  >
		</div> 
		
		
		<div class="col-12 col-lg-6 my-4">
		   <img src="/images/signature_z141/area2_graph01_en.jpg" >
		</div>


		<div class="col-12 col-lg-6 my-4">
		   <img src="/images/signature_z141/area2_graph02_en.jpg" >
		</div>

			
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 





	<section class="pt-section d-flex flex-wrap text-center" style="background-color: #2F2F2F;">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<h2 class="pt-title my-4 my-lg-4 text-white">What is VAIO® TruePerformance？</h2>
							<p class="pt-content-wrapper-lg mx-auto text-white">
								VAIO® TruePerformance is a proprietary technology developed by VAIO that pushes the processor efficiency and maintains its peak performance over an extended period by uprating CPU power limits and optimizing the cooling mechanism.
							</p>
							<!--<a href="" class="btn white-btn mt-3">了解更多</a> -->
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 



 
	<section class="pt-section p-0 py-5 pc_only">
		<div class="container"  id="pt-2">
			<div class="innerWrapper">
				<div class="tabWrapper">
					<ul class="clearFix mb-0">
						<li><a href="#pt-1"  class="selling-pt">Pushes the Limit</a></li>
						<li class="current"><a href="#pt-2"  class="selling-pt">Natural Charm</a></li>
						<li><a href="#pt-3"  class="selling-pt">Superlative Craftsmanship</a></li>
					</ul>
				</div>
			</div>
		</div>
   </section>
 
 
	<section class="pt-section d-flex flex-wrap text-center"  >		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<div class="pt-content mx-auto">
								
								 						
								<p class="pt-content mb-1 text-white">
								 VAIO® Z | SIGNATURE EDITION
								</p> 
								<p class="pt-content mb-5 text-white">
								 The chassis of the premium VAIO® Z – SIGNATURE EDITION comes in two color options - Signature Black with a unique texture finish of carbon fiber, and Classic Black with a luscious yet classy pitch-black coating.
								</p>						
								
								<img src="/images/signature_z141/area1_ph00.png">
								
							</div>
						</div>
					</div>
				</div> 				
			</div><!-- row -->
		</div><!--container -->		
    </section> 

     

	<section class="pt-section d-flex flex-wrap text-center bg-vaio-logo" style="background-image: url('/images/signature_z141/carbon_bg.jpg')">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<div class="pt-content mx-auto">
								<h1 class="my-4 my-lg-3 text-white">Signature Black<br/>The natural charm of full carbon fiber chassis</h1> 							
								<p class="pt-content mt-4 text-white">
								 Three-dimensionally molded with carbon fiber, VAIO® Z is a  natural stunner that oozes full-throated charisma. It is not just about the visual. The unique material also gives a unique, luscious texture finish to individual laptops.
								</p> 
								 
							</div>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 



 
		
	<section class="pt-section d-flex flex-wrap text-center text-white">
	 
	<div class="container">   
		<div class="row">
			
		
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph01.jpg" >
		</div>


		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph02.jpg" >
		</div>
			
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph03.jpg" >
		</div>
 
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph04.png" >
		</div>	
			 
		<div class="col-12 py-5 order-1 order-lg-2">  
			<div class="pt-content-wrapper-lg mx-auto text-left"> 
				<p class="pt-content text-white">
					The sophisticated Classic Black finish complements the distinctive carbon fiber material. Its subtlety fits in most business occasions harmoniously and adds panache without being showy.
				</p> 
			</div> 
		</div>
			
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph05.jpg" >
		</div>
 
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph06.jpg" >
		</div>		
			
		<div class="col-12 pt-5 order-1 order-lg-2">  
			<div class="pt-content-wrapper-lg mx-auto text-left"> 
				<h2 class="pt-title my-4 my-lg-4 text-white text-center">Classic Black: Subtle yet sophisticated</h2>
				<p class="pt-content text-white">
					VAIO® Z's chassis comprises solely processed carbon fibers, which are layered and three-dimensionally molded into one seamless, sturdy piece. Crevices and overlaps may occur naturally due to the properties of the material or the manufacturing process, and do not affect laptop performance. As a result, returns or exchanges for reasons such as crevices, overlaps, textures or colors are not accepted. 
				</p> 
			</div> 
		</div>	
			 
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 	
 


	<section class="pt-section p-0 py-5 pc_only">
		<div class="container"  id="pt-3">
			<div class="innerWrapper">
				<div class="tabWrapper">
					<ul class="clearFix mb-0">
						<li><a href="#pt-1" class="selling-pt">Pushes the Limit</a></li>
						<li><a href="#pt-2" class="selling-pt">Natural Charm</a></li>
						<li class="current"><a href="#pt-3" class="selling-pt">Superlative Craftsmanship</a></li>
					</ul>
				</div>
			</div>
		</div>
   </section>



<section class="pt-section d-flex flex-wrap text-center p-0" >
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 py-5 order-1 order-lg-2">
					
					<h1 class="my-4 my-lg-3 text-white">Engraved keyboard that displays superlative craftsmanship</h1>

					<div class="pt-content-wrapper-lg mx-auto text-left"> 
						<p class="pt-content text-white mt-4">
							The extremely artsy engraved keyboard comes with black keycaps that are engraved with subtle black letters, giving the already arresting laptop a subtle yet more intriguing look.
						</p>

					</div>

				</div>
				
			</div><!-- row -->
		</div><!--container -->
	 
    </section> 
  
 
	<section class="pt-section d-flex flex-wrap text-center" >
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<div class="pt-content mx-auto">
								
								<img src="/images/signature_z141/basemodel_main.png">
								 						
								<p class="pt-content mt-5 text-white">
								 More details in Specifications.
								</p> 
								
								<a href="{{ route('product.overview_fuji_z') }}" class="btn white-btn linkWrapper mt-5">Specifications</a>
								 
							</div>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 


 
 
    <div class="support-center-wrap" style="background: #000;">
        <div class="container"> 
            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    
                     <p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">1. Multi-Core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel’s numbering is not a measurement of higher performance.</p>
					<p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">2. Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. Windows 10 is automatically updated, which is always enabled. ISP fees may apply and additional requirements may apply over time for updates. See http://www.microsoft.com.</p>
					<p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">3. ^Weights vary depending on configuration and manufacturing variability.</p>
					<p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">4. Battery life will vary depending on various factors including product model, configuration, loaded applications, features, use, wireless functionality, and power management settings. The maximum capacity of the battery will naturally decrease with time and usage.</p>
					<p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">5. In the event of a water spillage, users should wipe away the water, before bringing the laptop to a VAIO service center for inspection or repair.<br>
					The anti-spill feature is only available on the keyboard and is not applicable on water damage to other parts of the laptop.</p>
					<p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">6. Japanese keyboard version product shots for demonstration only.</p>
					<p class="spec-item-name w-100 text-white" style="font-size: 0.8rem;">
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

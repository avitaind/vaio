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
    			line-height: 1.1;
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
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 


		<!--
	<section class="section-menu">
        <div class="main-content container ">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center active ">
                    <h2>強勁遊戲效能</h2>
                </a>
                
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center ">
                    <h2>自然傾斜角度</h2>
                </a> 
				<a href="#pt-4" class="col-6 col-lg-4 selling-pt py-4 text-center ">
                    <h2>全天候續航力</h2>
                </a>  
				
            </div>
        </div>
   </section>
-->





	<section class="pt-section d-flex flex-wrap text-center bg-vaio-logo" style="background-image: url('/images/signature_z141/carbon_bg.jpg')">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<div class="pt-content mx-auto">
								<h2 class="pt-title my-4 my-lg-4 text-white">Natural charm of full carbon fiber chassis</h2> 							
								<p class="pt-content mt-4 text-white">
								 A natural stunner, VAIO® Z sports an all carbon fiber chassis that oozes full-throated charisma. It is not just about the visual. The unique material also gives a unique, luscious texture finish to individual laptops.
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
			 
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 	







		
<section class="pt-section d-flex flex-wrap text-center text-white" style="padding-top: 0px;">
	
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

                    <p class="spec-item-name text-white" style="font-size: 0.8rem;">
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

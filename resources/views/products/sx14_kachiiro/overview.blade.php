@extends('layout.app')

@section('title', 'NEW VAIO SX14 | KACHI-IRO EDITION')

<!-- @section('product_nav')
    @include('products.sx14_kachiiro.product_nav')
@stop -->

@section('content')

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_sx14_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_sx14_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_sx14_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
		  <!--
		<li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
			<a href="https://vaio.nexstmall.com/products/vaio-z-signature-edition?utm_source=brandsite&utm_medium=button&utm_campaign=buynow" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
		</li>  -->
    </ul>
</div>

<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/sx14_kachiiro/vaio_sx14_kachiiro_banner.jpg)">
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
            background-image: url(/images/sx14_kachiiro/vaio_sx14_kachiiro_banner.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/sx14_kachiiro/vaio_sx14_kachiiro_banner_mo.jpg);
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
			color: #fff;
		}
		
		h3{
			font-weight: bold;
			color: #fff;
		}
			
		
		.pt-title {
			font-size: 2.3rem;
			font-weight: bold; 
			color: #fff;
    		line-height: 45px;
		}
		
		.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
			width: calc(100% - 60px);
		}
		
		.pt-container-m{
			padding: 45px;
		}
		
		
		.pt-container-s{
			padding: 30px;
		}
		
		.pt-content,
		.spec-item-name{
			color: #fff;
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
		
		.black-btn{
			border: 1px solid #000;
			background-color: transparent;
			color: #000;
			border-radius: 0;
			padding: 1rem 1.5rem;
		}
		
		.black-btn:hover{
			border: 1px solid #000;
			background-color: transparent;
			color: #000;
			opacity: 0.7;
		}
		
		
		
		.txt_img img{			
			width: 200px; 
			position: absolute;
		}
		
		.txt_img .pt-content-area{ 
			float: right;
			padding-left: 215px;
		}
		
		.pt-title-blue{ 
			color: #18C5F4;
			font-weight: bold;
		}
		
		
		.pt-section,
		.support-center-wrap{ 
    		background: #0b113e;
		}
		
		.limited{
			border: 1px solid #fff;
			display: inline-block;
			font-weight: normal;
			padding: 5px 10px;
    		font-size: 16px;
			color: #fff;
		}
		
		.aboutStory{
			background-image: url(/images/sx14_kachiiro/intro_panel.png);
		    background-position: center;
			background-repeat: no-repeat;
			background-size: contain;
			padding: 80px 120px;	
		}
		
		.aboutStory .pt-content{
			color: #0b113e;
			padding-left: 25%;
			text-align: left;
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
    			line-height: 32px;
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

			.txt_img img{			
				width: 200px; 
				position:relative;
    			margin-left: calc((100% - 200px) / 2);
			}

			.txt_img .pt-content-area{ 
				padding-left: 0px;
				margin-top: 25px;
			}
			
			.limited{
				margin-top: 25px;
			}

			
        } 
		
        @media(max-width: 676px) {
			
			.aboutStory{
				background-image: url(/images/z_kachiiro/intro_panel_sp.png);
				background-position: top center;
				background-repeat: no-repeat;
				background-size: contain;
				padding: 100px 45px;
			}
			
			.aboutStory .pt-content{
				
    			padding-left: 0%;
			} 
		
		}
			
			
        @media(max-width:370px) {
			.aboutStory{
				background-position: -10px;
				background-repeat: no-repeat;
				background-size: cover;
				padding: 80px 15px 30px;
			}
			
			.aboutStory .pt-content{
				
    			padding: 0px 15px;
			}

		}

    </style>

@endpush 
 


<!---Page content here--------------------------------------------->

	<section class="pt-section d-flex flex-wrap text-center p-0">
		
		<div class="container">   
			<div class="row"> 
			<div class="col-12 mt-5 mb-3 order-1 order-lg-2" >
				<h3 class="my-4 my-lg-3">Traditional Lucky Color Bringing Good Fortune and Victory</h3>
				<h3 class="my-4 my-lg-3">Premium edition dyed in "Kachi-iro" color</h3>
				<h1 class="my-4 my-lg-3">NEW VAIO SX14 | KACHI-IRO SPECIAL EDITION</h1>
				 
				<span class="limited">Limited Stock</span>
					    
			</div>	 
			
			
			<div class="col-12 col-md-2" >
			  &nbsp;
			</div>	  
				
			
			<div class="col-12 col-md-8 mb-4" >
			 

				<div class="pt-content-wrapper-lg mx-auto mt-5"> 
					
					<h3 class="my-4 my-lg-3">NEW KACHI-IRO SPECIAL EDITION for new shape</h3>
					
					<p class="pt-content">
						Reborn to fit the usage of the age to come VAIO flagship model, New VAIO SX14
					</p> 
					
					<p class="pt-content">
						Its greatly evolved materials and shape, represented by the 3-D molded carbon top panel created based on the knowledge cultivated in the flagship mobile VAIO Z and the flat aluminum palm rest made of high-brightness aluminum material, have been dyed in "Kachi-iro" color, imbuing it with a sense of quality.
					</p> 
				</div>

			</div>	  
				
		</div><!-- row -->
	</div><!--container -->

</section> 





<!---Page content here--------------------------------------------->

	<section class="pt-section  flex-wrap text-center py-4 p-0">
		
		<div class="container">   
			<div class="row"> 
						
			<div class="col-12 col-md-1" >
			  &nbsp;
			</div>	  
				<div class="col-12 col-md-10 py-4" > 
					<div class="aboutStory">  
						<p class="pt-content">
							VAIO's corporate color is deep and deep indigo. In ancient Japan, this color was called "Kachiiro".
							It symbolizes fortune, luck and victory.<br/>
							Legend holds that their favored the hue because it led to “kachi”,
							or “victory”, so they referred to the hue of their indigo-dyed wear as “Kachi-iro”, “the color of victory”.
 
						</p> 
					</div> 
				</div>	  
			</div><!-- row -->
		</div><!--container -->

	</section> 

 


	<section class="pt-section d-flex flex-wrap text-left pt-3 p-0" >

		<div class="container">   
			<div class="row">
 
			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center ">

					<div class="pt-content text-left mx-auto">	
						
						<div class="hidden-md-up mb-5">
							<img src="/images/sx14_kachiiro/sec01_01.jpg" alt=""> 
						</div>	
						
					  <h2 class="pt-title">Deeper and more vivid "Kachi-iro" color made possible by high brightness aluminum material</h2>  				
					  <p class="pt-content mt-4 text-left">
						The flat aluminum palm rest, which consists of a single sheet plate with an even keyboard surface, is anodized and dyed in the perfect "Kachi-iro" color. The use of high-brightness aluminum material, which has a stronger brilliance than ordinary aluminum material, has succeeded in creating a "Kachi-iro" color that is deeper and more vivid than ever before.
					  </p>
					   
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2 hidden-md-down">
				<div class="d-flex flex-wrap flex-column align-items-center justify-content-center"> 
					<img src="/images/sx14_kachiiro/sec01_01.jpg" >
				</div> 
			</div>
 
			</div><!-- row -->
		</div><!--container -->
	</section>







	<section class="pt-section d-flex flex-wrap text-left  p-0" >

		<div class="container">   
			<div class="row">
				
			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center justify-content-center"> 
					<img src="/images/sx14_kachiiro/sec01_02.jpg" >
				</div> 
			</div>
 
 
			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center ">

					<div class="pt-content text-left mx-auto">	
						  <h2 class="pt-title">Kachi-iro carbon top panel providing a tactile experience that is also high class</h2>  				
						  <p class="pt-content mt-4 text-left">
								The 3-D molded carbon top panel, newly adopted in New VAIO SX14, is painted with a uniquely formulated Kachi-iro color paint with a marginal level of pearl powder to reproduce the same deep and vivid Kachi-iro color found in the palm rest. While the matte texture has a poised feel, it also has a high quality appearance that changes greatly depending on the angle of view and lighting. 
						  </p>
					   
					</div> 
				</div>
			</div>
		
		
			</div><!-- row -->
		</div><!--container -->
	</section>






	<section class="pt-section d-flex flex-wrap text-left pb-4 p-0" >

		<div class="container">   
			<div class="row">
				 
			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center ">

					<div class="pt-content text-left mx-auto">	
						
						<div class="hidden-md-up mb-5">
							<img src="/images/sx14_kachiiro/sec01_03.jpg" alt=""> 
						</div>
						
						  <h2 class="pt-title">Soft golden logo and ornamentation</h2>  				
						  <p class="pt-content mt-4 text-left">
								The VAIO logo on the top surface and the ornament on the back of the hinge that connects to the seamlessly molded carbon top panel are of a special gold color that highlights the "Kachi-iro" color., and makes it glow softly and elegantly in the light.
						  </p>
					   
					</div> 
				</div>
			</div>
				 
				
			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2 hidden-md-down">
				<div class="d-flex flex-wrap flex-column align-items-center justify-content-center"> 
					<img src="/images/sx14_kachiiro/sec01_03.jpg" >
				</div> 
			</div> 
		
			</div><!-- row -->
		</div><!--container -->
	</section>







<!---------------------      sx14_kachiiro  ---------------------->
 
    


 

  
  
	
 
    <div class="support-center-wrap">
        <div class="container"> 
            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                     <p class="spec-item-name w-100" style="font-size: 0.8rem;">1. Multi-Core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel’s numbering is not a measurement of higher performance.</p>
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

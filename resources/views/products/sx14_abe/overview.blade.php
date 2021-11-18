@extends('layout.app')

@section('title', 'NEW VAIO SX14 ALL BLACK EDITION')

<!-- @section('product_nav')
    @include('products.sx14_abe.product_nav')
@stop -->

@section('content')

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_sx14_abe') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_sx14_abe') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_sx14_abe') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
		  <!--
		<li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
			<a href="https://vaio.nexstmall.com/products/vaio-z-signature-edition?utm_source=brandsite&utm_medium=button&utm_campaign=buynow" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
		</li> 
-->
    </ul>
</div>
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/sx14_abe/vaio_sx14_abe_banner_en.jpg)">
				<div class="main-banner" title=""></div>
			</div>
		</a>
    </div>
</section>
@push('css')

    <style>
		
		.pt-section{
			background-color: #000;
		}
		
        .cms-banner:before {
            padding-top: 37.51%;
        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-5 .main-banner {
            background-image: url(/images/sx14_abe/vaio_sx14_abe_banner_en.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/sx14_abe/vaio_sx14_abe_banner_mo_en.jpg);
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
		
		.pt-section{
			padding-top: 40px;
			padding-bottom: 40px;
		}
		
		.p-80{
			padding: 80px 0px;
		}
		
		
		h1{
			font-size: 3rem;
			font-weight: bolder;
			letter-spacing: 2px;
		}
		
		h3{
			font-weight: bold;
		}
		
		h1,h2,h3,p,.pt-content,.pt-content-sm{
			color: #fff;			
		}
			
		
		.pt-title {
			font-size: 2rem;
			font-weight: bold; 
    		text-transform: initial;
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
		
		
		.support-center-wrap{
			background: #000;
		}
		
		p.spec-item-name{
			color: #fff;
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
		
			
        }
		
		
		
        @media(max-width: 767px) {
			
			.white-btn.mr-5{
				margin-right:0px !important;
			}
			
		}

    </style>

@endpush  



<!---Page content here--------------------------------------------->

	<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row"> 
			<div class="col-12 py-5 order-1 order-lg-2" >
				<h3 class="my-4 my-lg-3">Premium EDITION in which everything is dyed black</h3>
				<h1 class="my-4 my-lg-3">New VAIO<sup class="vtp">®</sup> SX14 | ALL BLACK EDITION</h1>

				
				<div class="pt-content-wrapper-lg mx-auto mt-4 col-md-8 .col-md-offset-2"> 
					<h2 class="pt-title my-4 my-lg-4">The new ALL BLACK EDITION, which fully utilizes materials and form</h2>
					<p class="pt-content">
						As VAIO®'s mainstream models, New VAIO<sup class="vtp">®</sup> SX14 have been reborn to fit the way people will use them in the age to come. In line with the change, we will also see the rebirth of the "ALL BLACK EDITION," which was popular in the previous generation model. The new "ALL BLACK EDITION" finishing makes the most of its material and shape characteristics, such as the special black paint that allows you to enjoy the texture derived from the carbon material, and the gunmetal ornamentation that attracts your eyes with its different shape and the way it shines.
					</p> 
					 
				</div>

			</div>	  
		</div><!-- row -->
	</div><!--container -->

</section> 
  
		  

<section class="pt-section d-flex flex-wrap text-center ">
		
		<div class="container">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2 ">
				<div class="d-flex flex-wrap flex-column align-items-center h-100"> 


					<div class="pt-content-wrapper-lg mx-auto text-left">
						<div class="hidden-md-up mb-4">
							<img src="/images/sx14_abe/feature_1.png" alt=""> 
						</div>
						
						<h2 class="pt-title my-4 my-lg-4">Accent added by the carbon fiber grain</h2>
						<p class="pt-content">
							UD carbon, which is stronger and lighter than metal, is used to cover the back and sides of the LCD display, creating a 3-D molded carbon top panel that is both strong and light. To make the product visually appealing, we have applied a special black coating that reveals the distinctive fiber grain.
						</p>
						 
					</div>
				</div>
			</div>
				

			<div class="col-12 col-lg-6 order-2 order-lg-1 px-0 hidden-md-down">
				<div class="fs-0">
					<img src="/images/sx14_abe/feature_1.png" alt="">
				</div>
			</div>
		  
				
			</div><!-- row -->
		</div><!--container -->
		
</section> 


<section class="pt-section d-flex flex-wrap text-center pt-0">
		
		<div class="container">   
			<div class="row">

   
		<div class="col-12 col-lg-6 order-2 order-lg-1 px-0">
			<div class="fs-0">
				<img src="/images/sx14_abe/feature_2.png" alt="">
			</div>
		</div>
		
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100 pb-4"> 
				
				
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title my-4 my-lg-4">The VAIO® logo on the top surface is a glossy black</h2>
					<p class="pt-content">
						The VAIO® logo on the top surface, common to all VAIO® PCs, has been dyed black. The lustrous shiny black stands out intensely in the matte black body, utilizing the texture of carbon fiber.
					</p>  
				</div>
			</div>
		</div>
		  
				
			</div><!-- row -->
		</div><!--container -->
		
</section> 




<section class="pt-section d-flex flex-wrap pt-0 pb-5 text-center">
		
		<div class="container">   
			<div class="row">

   		<div class="col-12 col-lg-12 order-2 order-lg-1 px-0">
			<div class="fs-0">
				<img src="/images/sx14_abe/feature_3.png" alt="">
			</div>
		</div>
				
		<div class="col-12 col-lg-2 pc_only ">
			&nbsp;
		</div>
		
		<div class="col-12 col-lg-8 py-4 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
				 
				<div class="pt-content-wrapper-lg mx-auto text-center"> 
					<h2 class="pt-title mt-0 mb-4">Back ornamentation with shiny gunmetal color</h2>
					<p class="pt-content">
						The ornamentation on the back of the hinge section uses gunmetal color. Compared to the black model with silver ornamentation, this model has a more integrated and seamless appearance.
					</p>
					 
				</div>
			</div>
		</div>
				 	
			</div><!-- row -->
		</div><!--container -->
		
</section> 




<section class="pt-section d-flex flex-wrap text-center">
		
		<div class="container">   
			<div class="row">

   
		<div class="col-12 col-lg-6 order-2 order-lg-1 px-0">
			<div class="fs-0">
				<img src="/images/sx14_abe/feature_4.png" alt="">
			</div>
		</div>
		
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
				
				
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title my-4 my-lg-4">A black palm rest that is pleasant to the touch</h2>
					<p class="pt-content">
						For the flat aluminium palm rest that covers the keyboard, a new high-brightness aluminium material has been adopted, which gives it a deeper black color.
					</p>
					 
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
								 
								<img src="/images/sx14_abe/feature_7.png">
								 						
								<p class="pt-content mt-5 text-white">
								 More details in Specifications.
								</p> 
								
								<a href="{{ route('product.overview_new_sx14') }}" class="btn white-btn mt-5 mr-5">New VAIO® SX14 Overview</a>
								
								<a href="{{ route('product.spec_new_sx14') }}" class="btn white-btn mt-5">New VAIO® SX14 Tech Spec</a>
								 
							</div>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 


 
 
 
    <div class="support-center-wrap p-80">
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

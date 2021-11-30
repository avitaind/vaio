@extends('layout.app')

@section('title', 'VAIO Z | KACHI-IRO SPECIAL EDITION')

<!-- @section('product_nav')
    @include('products.z_kachiiro.product_nav')
@stop -->


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


<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/z_kachiiro/vaio_z_kachiiro_banner.jpg)">
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
            background-image: url(/images/z_kachiiro/vaio_z_kachiiro_banner.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/z_kachiiro/vaio_z_kachiiro_banner_mo.jpg);
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
    		text-transform: none !important;
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
			background-image: url(/images/z_kachiiro/intro_panel.png);
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
		
		iframe,
		video{
			width: 100%;
			max-width: 800px;
			height: 450px;
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

			.txt_img img{			
				width: 200px; 
				position:relative;
    			margin-left: calc((100% - 200px) / 2);
			}

			.txt_img .pt-content-area{ 
				padding-left: 0px;
				margin-top: 25px;
			}


			
			.aboutStory{ 
				background-position: 20%; 
				background-size: cover;
				padding: 20px 50px 20px 0px;	
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
			
			iframe,
			video{
				height: 250px;
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
				<h3 class="my-4 my-lg-3">Premium Edition That Embodies “VAIO® Craftsmanship”</h3> 
				<h1 class="my-4 my-lg-3" style="text-transform: uppercase;">VAIO® Z | KACHI-IRO SPECIAL EDITION</h1>
				 
				<span class="limited mt-2">Limited Stock</span>
					    
			</div>	 
			
			
			<div class="col-12 col-md-2" >
			  &nbsp;
			</div>	  
				
			
			<div class="col-12 col-md-8 mb-4" >
			 

				<div class="pt-content-wrapper-lg mx-auto mt-5"> 
					
					<h3 class="my-4 my-lg-3">Beauty and appearance befitting a flagship model</h3>
					
					 
					<p class="pt-content">
						VAIO® Z's 3-D molded, full-carbon body is the result of the combined efforts of VAIO® and its partner manufacturers in Japan, bringing their technologies and expertise to bear. 
					</p> 
					<p class="pt-content">
						The body has been dyed in lustrous "Kachi-iro" color. The color and textures embody the aesthetic sense of Japanese, and this is a rare product that embodies VAIO® craftsmanship at limited supply.
					</p> 
			 
				</div>

			</div>	  
				
		</div><!-- row -->
	</div><!--container -->

</section> 




	<section class="pt-section  flex-wrap text-center py-4 p-0">
		
		<div class="container">   
			<div class="row"> 
						
			<div class="col-12 col-md-1" >
			  &nbsp;
			</div>	  
				<div class="col-12 col-md-10 py-4" > 
					<div class="aboutStory">  
						<p class="pt-content">
							VAIO's corporate color is deep and dark indigo. In ancient Japan, this color was called "Kachiiro". It symbolizes fortune, luck and victory.<br/>
							Legend holds that their favored the hue because it led to “kachi”, or “victory”, so they referred to the hue of their indigo-dyed wear as “Kachi-iro”, “the color of victory”. 
						</p> 
					</div> 
				</div>	  
			</div><!-- row -->
		</div><!--container -->

	</section> 



<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z_kachiiro/sec01_mv.jpg" style="width: 100%;"> 
</section>




<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row">

 
		<div class="col-12 pt-5 pb-0 order-1 order-lg-2">
			<h1 class="my-4 my-lg-3">Full Carbon body in "Kachi-iro" color that creates an expression as it catches the light</h1>
		</div>	 
		
		<div class="col-12 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
				
				
				<div class="mx-auto text-left">
					<p class="pt-content my-4 my-lg-4">
						The world's first* 3D molded full carbon body embodies the identity of the VAIO® Z. With the VAIO® Z | KACHI-IRO SPECIAL EDITION, we used a specially formulated Kachi-iro transparent paint that takes advantage of the unique fiber grain of UD carbon. Enjoy the deep expression of this material and the way it changes when it catches the light behind the glossy luster, which is reminiscent of lacquerware.
					</p> 
					<p class="pt-content mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						* Uses 3-D molded carbon continuous fiber material on all surfaces that make up the notebook PC chassis. As of January 6, 2021. Investigation by Stella Associa 
					</p>
				</div>
			</div>
		</div>
				 
		<div class="col-12 col-lg-6  my-4 my-lg-4">
				<div class="d-flex flex-wrap flex-column align-items-center mx-auto"> 
					<img src="/images/z_kachiiro/sec01_01.jpg" alt="">
					 
				</div>
			</div>

			<div class="col-12 col-lg-6  my-4 my-lg-4">
				<div class="d-flex flex-wrap flex-column align-items-centermx-auto"> 
					<img src="/images/z_kachiiro/sec01_02.jpg" alt="">
					 
				</div>
			</div>			
 
		<div class="col-12 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
				 
				<div class="mx-auto text-left"> 
					<p class="pt-content mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						* The chassis of the VAIO® Z is made of sheets of carbon fiber that are stacked and processed in 3-D. The gaps and overlaps in the fibers may appear as scratches due to the characteristics of the material and processing, but there are no issues with product performance. Please note that we cannot accept returns or exchanges due to gaps or overlaps in the fibers, patterns, or colors.
					</p>
				</div>
			</div>
		</div>
				 	
		 
				 
			</div><!-- row -->
		</div><!--container -->
		
</section>





<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row">

  
				 
		<div class="col-12 my-4 my-lg-4">
				<div class="d-flex flex-wrap flex-column align-items-center mx-auto"> 
					<img src="/images/z_kachiiro/sec01_03.png" alt="">
					 
				</div>
			</div>
 
				
			
		<div class="col-12 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
				 
				<div class="mx-auto text-left"> 
					<p class="pt-content my-4 my-lg-4">
						UD carbon improves robustness by combining layers of fibers arranged in a single direction, but at different angles. It has a different texture from cross carbon (shown in photo on left), where fibers are woven alternately, and can exhibit high rigidity against twisting and other forces in the required direction.
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
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center"> 
				<img src="/images/z_kachiiro/sec01_04.jpg" >
			</div> 
		</div> 

		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center ">

				<div class="pt-content text-left mx-auto">	 			
					  <p class="pt-content mt-0 text-left">
							In the KACHI-IRO SPECIAL EDITION, a glossy UV coating is applied on top of the paint to give it a luxurious glossy look and a scratch-resistant finish. 
					  </p>
					<p class="pt-content mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						* The photo shows the VAIO® SX14 | KACHI-IRO SPECIAL EDITION that was released in 2019.
					</p>

				</div> 
			</div>
		</div 

		</div><!-- row -->
	</div><!--container -->
</section>



<section class="pt-section d-flex flex-wrap text-center pb-4 p-0">
	  
	<div class="container">   
		<div class="row">
		
		<div class="col-12 pt-3 pb-2 order-1 order-lg-2">
			<h1 class="my-4 my-lg-3">Elegant shine emphasizing the Kachi-iro color</h1>
			 
		</div>	
			
			
		<div class="col-12 py-4 col-lg-6">
		   <img src="/images/z_kachiiro/sec02_01.jpg">
		</div>
  
		<div class="col-12 col-lg-6 order-1 order-lg-2   text-left">  
			<p class="pt-content my-4">
				Since ancient times, the Kachi-iro color have been used to bring good luck when decorating clothes and other items. VAIO® Z is a tool for the modern businessperson, and in honor of this, the body of VAIO® Z KACHI-IRO SPECIAL EDITION has been dyed in the Kachi-iro color, with a golden logo plate and ornament. The elegant and graceful sparkle of this product further emphasizes the beauty of the deep indigo color.
			</p> 
		</div>	
		
		
	 </div><!-- row -->
		
		 
		  
	</div><!--container--->
 </section>

 



<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z_kachiiro/sec05_mv@2x.jpg" style="width: 100%;"> 
</section>




<section class="pt-section d-flex flex-wrap text-center  p-0">
	  
	<div class="container">   
		<div class="row">
		
		<div class="col-12 pt-5 pb-2 order-1 order-lg-2">
			<h1 class="my-4 my-lg-3">High performance only found in the VAIO® Z | KACHI-IRO SPECIAL EDITION</h1> 
		</div>	
			
			
		<div class="col-12 col-lg-6 order-1 order-lg-2  text-left">  	
			<h2 class="pt-title">Equipped with desktop-grade high-performance processor</h2>  				
			<p class="pt-content my-4">
				Taking full advantage of the VAIO® TruePerformance, VAIO's proprietary technology, this is a mobile laptop PC weighed less than 1 kg and equipped with a desktop-grade high-performance processor, Intel® Core i7-11390H. Compliant with Intel's premium laptop PC standard, the Intel® Evo™ Platform, this ensures an exceptional user experience.
			</p> 
		</div>
			
		
			
		<div class="col-12 py-4 col-lg-6">
		   <img src="/images/z_kachiiro/sec05_05.png">
		</div>	
			
	  
	 </div><!-- row -->
		
		 
		  
	</div><!--container--->
 </section>






<section class="pt-section d-flex flex-wrap pb-5 text-center  p-0">
	  
	<div class="container">   
		<div class="row">
		  
		<div class="col-12 order-1 order-lg-2 pt-5 pb-2  text-left">  	
			<h2 class="pt-title">Leverages on the power of AI to make microphone audio clear and crisp</h2>  				
			<p class="pt-content my-4">
				It is equipped with an AI noise canceling function that removes only the environmental noise, which interferes with online communication. It delivers crystal clear, audible voice to other parties, and allowing you to hear the voice of the other parties clearly.
			</p> 
		</div>
			
			
		<div class="col-12 order-1 order-lg-2 py-4 text-center">  	 
			<video controls>
			  <source src="/videos/new_vaio_sx14_ai_noise_canceling.mp4" type="video/mp4">  
			</video>
		</div>
				 
	 </div><!-- row -->
		
		 
		  
	</div><!--container--->
 </section>


<!--------------Z -----------------> 

  
  
	
 
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

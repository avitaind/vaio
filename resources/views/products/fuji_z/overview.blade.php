@extends('layout.app')

@section('title', 'VAIO Z')

@section('product_nav')
    @include('products.fuji_z.product_nav')
@stop

@section('content')
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/z/vaio_z_kv_pc_en.jpg)">
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
            background-image: url(/images/z/vaio_z_kv_pc_en.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/z/vaio_z_kv_mo_en.jpg);
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
			
		
		.pt-title {
			font-size: 2.3rem;
			font-weight: bold; 
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

	<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row"> 
			<div class="col-12 py-5 order-1 order-lg-2" >
				<h3 class="my-4 my-lg-3">Push the limits, shatter the boundaries</h3>
				<h1 class="my-4 my-lg-3">Introducing VAIO<sub class="vtp">®</sub> Z</h1>

				<div class="pt-content-wrapper-lg mx-auto text-left mt-5"> 
					<p class="pt-content">
						VAIO heralds a new era of ultra-durable laptop designs by shattering physical boundaries. Capitalizing on the featherlight and extra-sturdy all carbon fiber chassis, VAIO® Z unleashes the premium performance and all the expanse you need in a laptop. The ultra-light and ultra-thin 14-inch device delivers boundary-breaking performance and astonishing battery life. VAIO® Z never ceases to push the limits and set the bar of lightweight laptops even higher.
					</p> 
				</div>

			</div>	  
		</div><!-- row -->
	</div><!--container -->

</section> 
 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec01-main.jpg"> 
</section> 

		  

<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row">

 
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">The World’s First Contoured Carbon Fiber Laptop</h1>
		</div>	 
		
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
				
				
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title my-4 my-lg-4">Shatter physical boundary</h2>
					<p class="pt-content">
						VAIO heralds a new era of ultra-durable laptop designs. Sporting a chassis comprising solely of carbon fiber – the material of the future previously only used in parts of a laptop, VAIO® Z unleashes the premium performance that hides within.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*Made with continuous carbon fiber material that has been three-dimensionally molded on all sides of a laptop PC housing as of January 6, 2021. Based on research by stella associa
					</p>
				</div>
			</div>
		</div>
		 
				
		<div class="col-12 col-lg-6 order-2 order-lg-1 px-0">
			<div class="fs-0">
				<img src="/images/z/z_01.jpg" alt="">
			</div>
		</div>
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 
		
		
	<section class="pt-section d-flex flex-wrap text-left p-0" >
 
		<div class="container bg-grey">   
			<div class="row">



			<div class="col-12 py-5 order-1 order-lg-2" >
				
				<div class="pt-content-wrapper-lg mx-auto">     
					
					<h2 class="pt-title my-4 my-lg-4">What is carbon fiber?</h2>
					<p class="pt-content mt-4" >
						Carbon fiber used to have limited usage for its manufacturing complexity. Now, it is deemed to be the next generation laptop material for its supreme strength and durability that surpass conventional materials. 
					</p>
				</div>
			</div>	


			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
					<img src="/images/z/z_02_en.jpg" alt="">
					
					<div class="pt-content mx-auto">        
						<h3 class="my-4"><b>Stronger, sturdier, better</b></h3>
						<p class="pt-content text-left">
							Carbon fiber is about two times stronger than magnesium and aluminium that are commonly used in average laptops.
						</p>
						
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
					<img src="/images/z/z_03_en.jpg" alt="">
					
					<div class="pt-content mx-auto">   
						<h3 class="my-4"><b>Carbon fiber chassis</b></h3>                        
					<p class="pt-content text-left">
						The strength of carbon fiber can easily be manipulated by altering the type, density and weaving direction of the fiber, making it one of the most customizable materials out there. Its flexibility allows the laptop to be freely adjusted to meet practical strength and weight criteria.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*Also known as unidirectional carbon fiber, strands of carbon fiber are aligned in the same direction to form a layer. Multiple layers are then woven with each other in a cross pattern and create an extremely strong and tensile carbon board that can withstand impact from and twists in all directions.
					</p>
					</div>
				</div>
			</div>	
				
				
			</div><!-- row -->
		</div><!--container -->
    </section> 	


 

	<section class="pt-section d-flex flex-wrap text-left p-0" >

		<div class="container pt-container-s">   
			<div class="row">
 
			<div class="col-12 col-lg-6 mb-4 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">Perfect natural stunner</h2>  				
					  <p class="pt-content  mt-4">
						  The svelte and minimalistic chassis is precisely crafted to boast the natural aesthetic of carbon fiber and what it has to offer. Complementing its stunning outlook is superlative performance, making VAIO® Z more desirable inside and out.
					  </p>
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6">
			   <img src="/images/z/z_04.jpg" >
			</div>

				
			</div><!-- row -->
		</div><!--container -->
	</section>




	

	<section class="pt-section d-flex flex-wrap text-left p-0" >

		<div class="container bg-grey pt-container-s">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">Unique texture finish</h2>  				
					  <p class="pt-content  mt-4">
						  Crowned the premium model of the series, VAIO® Z – SIGNATURE EDITION oozes charisma with its all-carbon chassis that gives a unique, luscious texture finish to individual laptops.
					  </p>
					  
						<a href="{{ route('product.overview_signature_z141') }}" class="btn black-btn mt-3">More details in「VAIO® Z | SIGNATURE EDITION」</a>
					   
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6">
			   <img src="/images/z/z_05.jpg" >
			</div>

				
			</div><!-- row -->
		</div><!--container -->
	</section>

 
	<section class="pt-section text-left p-0" id="pt-4"> 
		<div class="container  pt-container-s">   
				<div class="row">

				<div class="pt-content-wrapper mx-auto">	

				  <h2 class="pt-title my-4 my-lg-4">Pushing boundaries</h2> 
				  <p class="pt-content mt-4 my-lg-4">
					VAIO® Z capitalizes on the carbon chassis and enhances its prowess beyond physical limits. The ultra-light (1.06kg) and ultra-thin (12.2mm at the thinnest part) 14-inch laptop delivers boundary-breaking performance and astonishing battery life. VAIO® Z never ceases to push the limits and set the bar of lightweight laptops even higher.
				</p>
					
				<p class="pt-content mt-4 my-lg-4 text-center"> 
		   			<img src="/images/z/z_06_en.jpg" >
				</p>

				</div> 
			</div><!-- row -->
		</div>
	</section>




 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec02-main.jpg"> 
</section> 

		  


		
<section class="pt-section d-flex flex-wrap text-center  p-0 text-white" style="background-color: #1a1a1a;">
	  
	<div class="container">   
		<div class="row">
		
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">Unrivaled performance</h1>
			 
		</div>	
  
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center  h-100">  
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title">The only lightweight laptop powered by high-speed processor</h2>
					<p class="pt-content text-white mt-4">
						The powerful 11th Gen Intel® Core ™ H-series processor that VAIO® Z equips is boosted with VAIO’s proprietary VAIO TruePerformance® technology. A powerhouse in terms of performance, VAIO® Z is the only large-sized laptop in the industry that is powered by an ultra-fast processer and weighs under 1 kg.
					</p>
				</div>
			</div>
		</div>	
		
		
		<div class="col-12 py-4 col-lg-6">
		   <img src="/images/z/z_07.png" >
		</div>
	 </div><!-- row -->
		
		
	
	<div class="row">
		 
   		<div class="col-12 py-4  col-lg-6">
		   <img src="/images/z/z_07_2_en.jpg" >
		</div>
		
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_07_3_en.jpg" >
		</div>
	 </div><!-- row -->
		 
		
		 
	</div><!--container--->
 </section> 	





		
<section class="pt-section d-flex flex-wrap text-center  p-0 text-white" style="background-color: #1a1a1a;">
	 

	<div class="container pt-container-m">     
	<div class="box">
	<div class="row">
		 
	
		<div class="col-12 col-lg-6 order-1 order-lg-2" >
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto  text-left">	 	
				 <h2 class="pt-title text-white">What is VAIO® TruePerformance？</h2> 			
				  <p class="pt-content my-4 text-white">
					  VAIO® TruePerformance is a proprietary technology developed by VAIO that pushes the processor efficiency and maintains its peak performance over an extended period by uprating CPU power limits and optimizing the cooling mechanism. 
				  </p>
				</div> 
			</div>
		</div>
		 
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_08.png" >
		</div>
		
		
		
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto  text-left">	 	
				 <h2 class="pt-title text-white">Equipped with the fastest 5.00GHz processor</h2>
				  <p class="pt-content my-4 text-white">
					  Both the SIGNATURE and standard edition of VAIO® Z are powered by the special edition of the 11th Gen Intel® Core ™ H-series processor - i7-11375H. With a maximum speed of 5.00GHz, the high-performing processing core ensures smooth and seamless workflows that have never been seen before.
				  </p>
				</div> 
			</div>
		</div>
		 
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_05.jpg" >
		</div>
		
		
		 
		</div><!-- row -->	
		</div>	
		
	</div><!--container--->
 </section> 	


  
 

	<section class="pt-section d-flex flex-wrap text-center p-0 text-white text-left" style="background-color: #1a1a1a;">
				
		<div class="container">   
			<div class="row">
			
		<div class="col-12 order-1 order-lg-2" >
			
			<div class="pt-content-wrapper mx-auto text-left">	
			
			  <h2 class="pt-title my-4 my-lg-4">Lightning-fast storage</h2> 
				
			  <p class="pt-content mt-4 text-white">
				  Thanks to the ultra-speedy SSD and PCIe 4.0 interface, data read/write speed is doubled to 6GB per second. File sharing, app loads and most daily tasks can be done in an instant so you can spend less time waiting.
				</p>
				<p class="pt-content-sm mt-3 mb-5 text-left text-white" style="font-size: 0.8rem;">
					*Sequential read/write speed
				</p>
			                     
			</div>  
		</div>	
				
				
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
				
				<img src="/images/z/SSD_01_en.jpg" alt="">

				<div class="pt-content mx-auto">        
					<h3 class="mt-4 my-lg-4 text-left  text-white"><b>High-speed, high-capacity RAM</b></h3>
					<p class="pt-content text-left  text-white">
						High bus-width LPDDR4X memory up to 32 GB realizes stable, seamless workflows.
					</p>
				</div>
			</div>
		</div>
				
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
				<img src="/images/z/SSD_02_en.jpg" alt="">

				<div class="pt-content mx-auto">        
					<h3 class="mt-4 my-lg-4 text-left  text-white"><b>USB4™ and Thunderbolt™ 4</b></h3>
					<p class="pt-content text-left  text-white">
						The two USB Type-C™ ports on the sides support USB4™ and Thunderbolt™ 4. The uber-fast data transmission speed of up to 40 Gbps allows you to enjoy all the benefits and productivity that it brings, even when the laptop is connected to an external storage or any number of peripherals.
					</p>
				</div>
			</div>
		</div>		
		
  
		</div><!-- row -->
	</div>	 				
		 
    </section>




<!--
	<section class="pt-section d-flex flex-wrap text-left p-0 py-5 text-white text-left" style="background-color: #1a1a1a;">

		<div class="container ">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">Next generation 5G technology</h2>  				
					  <p class="pt-content  mt-4 text-white">
						  VAIO® Z harnesses the power of the next generation 5G technology, which is much faster, of much higher capacity and much lower latency than the previous 4G LTE network. With VAIO® Z, you can embark on your boundless journey on the Internet anytime, anywhere.
					  </p>
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6">
			   <img src="/images/z/5G_download.jpg">
			</div>

				
			</div>
		</div>
	</section>
-->




	<section class="pt-section d-flex flex-wrap text-left text-white text-left" style="background-color: #1a1a1a; padding-top: 0px;">

		<div class="container">   
			<div class="row">
				<!--
				<div class="col-12 col-lg-4 order-1 order-lg-2" >
					
					<div class="d-flex flex-wrap flex-column align-items-center text-left ">

						<div class="pt-content-wrapper mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left text-white">4G LTE</h3>  				
						  <p class="pt-content  mt-4 text-white">
							   Being outside 5G coverage is not a problem when VAIO® Z can go online via 4G LTE with a maximum download speed up to 150 Mbps* and upload speed up to 50 Mbps*. In areas where carrier aggregation technology is supported, the network speed can reach an impressive 450 Mbps* (theoretical value). Full-speed and lag-free internet experience is made possible virtually anywhere and everywhere.
						  </p>
						 <p class="pt-content-sm mt-3 mb-5 text-left text-white"  style="font-size: 0.8rem;">
							   *Highest possible speed. The actual performance may vary as a result of different service providers, network conditions and environmental factors.
						  </p>
						</div> 
					</div>
					 
				</div>

			-->



				<div class="col-12 col-lg-6 order-1 order-lg-2" >
					
					<div class="d-flex flex-wrap flex-column align-items-center text-left ">

						<div class="pt-content-wrapper mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left text-white">Wi-Fi 6 + MU-MIMO</h3>  				
						  <p class="pt-content  mt-4 text-white">
							  The latest Wi-Fi 6 technology adopted by VAIO® Z boosts up connection speed to 8 folds* while providing more stable network connections and outstanding security*. As well, MU-MIMO technology is also supported. Lag and buffering are not an option even multiple devices are sharing the same network.
						  </p>
						 <p class="pt-content-sm mt-3 mb-5 text-left text-white"  style="font-size: 0.8rem;">
							 *Compared to Wi-Fi 4 (IEEE802.11n).<br/>
							 *Connection to Wi-Fi 6 router required.
						  </p>
						</div> 
					</div>
					 
				</div> 
				
				
				
				<div class="col-12 col-lg-6 order-1 order-lg-2" >
					
					<div class="d-flex flex-wrap flex-column align-items-center text-left ">

						<div class="pt-content-wrapper mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left text-white">Improved antenna sensitivity</h3>  				
						  <p class="pt-content  mt-4 text-white">
							   VAIO incorporates two extra antennas beneath the palm rests besides the one at the upper bezel, further enhancing signal reception for a swift, more stable browsing experience.
						  </p>
						  
						</div> 
					</div>
					 
				</div>  
				
				
			</div><!-- row -->
		</div><!--container -->
	</section>


  

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec06-main.jpg"> 
</section> 

 

	<section class="pt-section text-left p-0 mb-5" id="pt-4">

		<div class="container">   
			<div class="row">
				
				<div class="col-12 py-5 order-1 order-lg-2 text-center">
					<h1 class="my-4 my-lg-3">The overwhelming laptop</h1>

				</div>
				

				<div class="pt-content-wrapper mx-auto">	

					<h2 class="pt-title my-4 my-lg-4">High-capacity battery*</h2> 

					<p class="pt-content mt-4">
						VAIO® Z helps you power through all day and night. Its newly-developed high-capacity battery keeps the laptop featherlight while providing non-stoppable power.
					</p>

					 
				</div> 
			</div><!-- row --> 
		</div>
	</section>




	<section class="pt-section d-flex flex-wrap text-left p-0 mt-5 text-left" >

		<div class="container ">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">Compatible with various charging devices</h2>  				
					  <p class="pt-content  mt-4">
						 Apart from VAIO’s self-developed 5V assisted charging*, VAIO® Z also supports various kinds of mobile phone chargers and portable power banks.
					  </p>
						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
							*May not applicable to all charging devices. Charging speed depends on the operational conditions. In some scenarios, power consumption may exceed the charging speed.
						</p>
					</div> 
				</div>
			</div> 
		
			<div class="col-12 col-lg-6">
				<img src="/images/z/z_powerbank.jpg" alt="">
			</div>

				
			</div>
		</div>
	</section>


	<section class="pt-section d-flex flex-wrap text-center p-0 text-left">
				
		<div class="container">   
			<div class="row">
 
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					
					<div class="d-flex flex-wrap flex-column align-items-center"> 
						<!--
						<img src="/images/z/z_chrge.jpg" alt="">
						
						<div class="pt-content-wrapper text-left mx-auto">	
							  <h3 class="mt-4 my-lg-4 text-left">Light adapter</h3>  				
							  <p class="pt-content  mt-4 ">
								  For added convenience, the new power adapter developed by VAIO is more compact than ever (weight and volume reduced by about 30%*) without compromising its charging efficiency. With it you can top up your VAIO® Z swiftly anytime, anywhere.
							  </p>
							<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
								*Compared to conventional 10.5V VJ8AC10V9 power adaptor.<br/>
								*Japanese version for demonstration only.
							</p>	
						  
						</div> 
						-->
						
						
						
						<div class="pt-content-wrapper text-left mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left">Wake up from sleep in no time</h3>  				
						  <p class="pt-content  mt-4 ">
							  You will not waste another second, thanks to the modern standby feature that allows VAIO® Z to wake up from sleep mode instantly. What is more, Internet access is uninterrupted during sleep mode, meaning the laptop will send and receive important e-mails as usual. Resuming to work is as simple as a single touch.
						  </p>
							<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
								*Applicable only to applications that support modern standby.
						</p>	
						  
						</div> 
 

					</div>
				</div>

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center"> 
 
						
						<div class="pt-content-wrapper text-left mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left">Smart charging with “battery protection” mode</h3>  				
						  <p class="pt-content  mt-4 ">
							  Constantly charging the battery to 100% shortens its life. Therefore, every VAIO® Z has a built-in “battery protection” mode that stops charging after reaching certain battery level to extend the battery's lifespan.
						  </p>
							  
						</div> 
						 

					</div>
				</div>

			</div><!-- row -->
		</div>	 
		
    </section>




 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec03-main.jpg"> 
</section> 

		  
 

		
<section class="pt-section d-flex flex-wrap text-center  p-0 ">
	 
	<div class="container">   
		<div class="row">
			 
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">Uncompromised productivity</h1>
			 
		</div>	
  
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column ">  
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title">Brand new keyboard</h2>
					<p class="pt-content mt-4">
						Embrace the freshly designed keyboard that lets you work in supreme comfort. The improved mechanics make every stroke noise-free, while each keycap and the ergonomic hinge are also re-engineered for the most comfortable typing position that further reduces the burden on your palms and wrists.
					</p>
					<p class="pt-content mt-4">
						For quieter and more responsive keystrokes, the full-sized keyboard preserves the 19mm key pitch while increasing* key travel from 1.2mm to 1.5mm.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*Compared to VAIO SX14.
					</p>
				</div>
			</div>
		</div>	
		
		
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_10.jpg">
		</div>
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 	




 




	
	<section class="pt-section d-flex flex-wrap text-left  p-0">
		  		
		<div class="container">   
			<div class="row">
	
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_11.jpg" alt="">  
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">Dished keycap for mistake-free typing</h3> 							
						    <p class="pt-content text-left">
							 Each keycap is engineered to have a 0.3mm dent to better fit your fingertips so your typing is less prone to mistakes.
						    </p> 
						</div> 
					</div>
				</div>

		
		
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_12.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">Smudge-proof keycaps and palm rest</h3> 							
						    <p class="pt-content text-left">
							 To retain their clean, smudge-free appearance all year along, all keycaps and the palm rest are coated with an abrasion resistance fluoride coating that is specially developed to keep fingerprints and smudges away.
						    </p> 
						</div> 
 
					</div>
				</div> 

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_13.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">Convenient backlit keyboard</h3> 							
						    <p class="pt-content text-left">
								The full-sized keyboard comes with backlit keys that illuminate the letters and give you the visibility you need in low light environments, from dim meeting rooms to aircraft cabins.
						    </p> 
						</div> 

						 
					</div>
				</div>



				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_14.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">VAIO exclusive font</h3> 							
						    <p class="pt-content text-left">
								The stunning visual of VAIO® Z deserves an equally appealing keyboard. That is why VAIO designed a new font exclusive to the series where the letters and symbols are composed of natural curves that make them clearer to read while preserving their elegance.
						    </p> 
						</div> 

 
					</div>
				</div>

				<!--

				<div class="col-12 col-lg-4 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_15.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">Different keyboard language options</h3> 							
						    <p class="pt-content text-left">
								To cater to the needs of different users, the series comes with several keyboard options of Japanese keyboard (with or without kana) and traditional QWERTY keyboard.
						    </p> 
						</div> 
 
					</div>
				</div> 

				<div class="col-12 col-lg-4 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_15.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">Special engraved font option</h3>
						    <p class="pt-content text-left">
								Other than the conventional keyboard, a special design option where black letters are engraved on black keys is also available, giving the already arresting laptop a more sophisticated, intriguing look.
						    </p> 
						</div>  
						
					</div>
				</div>

				-->
				
			</div><!-- row -->
		</div>	   
    </section> 

 


	<section class="pt-section d-flex flex-wrap text-center p-0">

		<div class="container">   
			<div class="row">
		
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center"> 

						
						<div class="pt-content-wrapper-lg mx-auto text-left">    
						<h2 class="pt-title">Full-sized touchpad</h2>                        
						<p class="pt-content mt-4 text-left">
							A touchpad about 190% larger than its predecessor* and carefully polished gives you smooth, precise and fuss-free control. It also features the left and right physical buttons to prevent unintentional clicks.
						</p>

						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
							*Compared to VAIO SX14.
						</p>		

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
						<img src="/images/z/z_16.jpg" alt="">  
					</div>
				</div>
			</div><!-- row -->
		</div>	 
    </section>



	<section class="pt-section d-flex flex-wrap p-0">
	 		
		<div class="container">   
			<div class="row">
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				  
				<div class="pt-content-wrapper-lg text-left mx-auto">   
				<h2 class="pt-title">4K display that delivers superb images</h2>                         
			  	<p class="pt-content mt-4 text-left">
					Immerse yourself in the vivid viewing experience offered by VAIO® Z’s 4K (3840 x 2160 pixels) display option that reproduces cinema-grade color gamut and deep contrasts of HDR visuals. The display enhances all images and videos by retaining real-life color accuracy and the finest details. Any kind of visual content stays vivid and impactful even when you watch it through plain naked eyes.
				</p>
				 	 
				<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem; ">
					*Applicable only to content that supports HDR. When the HDR feature is enabled, the display will automatically adjust the brightness according to the basic tone of the screen to reduce power consumption and increase contrast.
				</p>		
				 
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				<img src="/images/z/z_17.jpg" alt="">  
			</div>
		</div>
		
		 
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/z_18_1.png" alt="">   
				<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;"> 
					Color gamut of VAIO® Z (Dotted lines denote normal sRGB gamut)
				</p>
			</div>
		</div>
				
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap align-items-center">  
				<img src="/images/z/z_18_2.jpg" style="width: 50%;">  
				<img src="/images/z/z_18_3.jpg" style="width: 50%;">  
			</div>
		</div>		
		
	
		</div><!-- row -->
	</div>	 
    </section>




<!--

	<section class="pt-section d-flex flex-wrap text-left  p-0">

		<div class="container">   
			<div class="row">
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">  
				
				<div class="pt-content-wrapper-lg mx-auto  text-left">      
				<h2 class="pt-title">Triple 4K display made possible</h2>                      
			  	<p class="pt-content  mt-4">
					With VAIO® Z’s ability to connect to two external 4K displays through the separately sold Type-C 4K multi-display dock, you can construct a triple 4K display environment for both work and entertainment.
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				<img src="/images/z/z_20.jpg" alt="">  
			</div>
		</div>
		
		</div>
	</div>	   
    </section>
-->

 




	<section class="pt-section d-flex flex-wrap text-left p-0">
				
	<div class="container">   
		<div class="row">
			  
		
		<div class="pt-content-wrapper mx-auto">	

			<h2 class="pt-title my-4 my-lg-4">Premium webcam and microphones cater to your remote work plans</h2> 

			<p class="pt-content mt-4">
				VAIO® Z is designed to ease your work-from-home anxiety. A webcam of 2.07 megapixels captures clear and sharp images while the microphones deliver better sound recording with improved noise-canceling technology
			</p> 
		</div> 	

			
 
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center0"> 
				 <img src="/images/z/z_21.jpg"> 
				
				<div class="pt-content mx-auto text-left"> 
				<h3 class="my-4">Attention to the finest details</h3>                            
			  	<p class="pt-content text-left mt-4">
					The stereo microphones are tactfully placed on both sides of the webcam situated in the center of the upper bezel – the optimal position to capture the most accurate images and voice.
				</p>
				 
				 
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				 <img src="/images/z/z_22.jpg"> 
				
				<div class="pt-content mx-auto  text-left">
				<h3 class="my-4">Webcam slide cover for extra security</h3> 
			  	<p class="pt-content text-left mt-4">
					Instant privacy is achieved by sliding the cover over the webcam before your next business meeting, protecting you against unwanted disclosure of personal and business information.
				</p>
				  
				</div>
			</div>
		</div>
			
		</div><!-- row -->
	</div>	 			
		
    </section>






	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				
				<div class="pt-content mx-auto text-left">        
				<h3 class="my-4">Large-diameter speakers</h3>                    
			  	<p class="pt-content mt-4 text-left">
					Crystal-clear sound is delivered by the high-quality large-diameter speakers positioned in the front of the chassis. With top-notch Dolby AUDIO™ technology modified by VAIO, the laptop brings you clear dialogues in meetings and spectacular audio in videos.
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/z_23.jpg" alt="">  
				<div class="pt-content mx-auto text-left">  
					<h3 class="my-4">Simple shortcut to mute mics</h3>                           
					<p class="pt-content mt-4 text-left">
						For swift and easy control, new shortcut keys (Fn + Tab button) are introduced to mute the microphones. There is an indicator light on the top edge of the Tab button so you know if the mics are muted right away.
					</p>
				</div>
			</div>
			
		</div><!-- row -->
	</div>	 			
		
		  
    </section>
		
		 

	<section class="pt-section d-flex flex-wrap text-center  p-0">
				
	<div class="container">   
		<div class="row">
 
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/z_24.jpg"> 
				
				<div class="pt-content mx-auto text-left">     
				<h3 class="my-4">One-hand motion to open the screen</h3>                        
			  	<p class="pt-content mt-4 text-left">
					The hinge is engineered in a way that you can open the screen with one slick motion, one hand, effortlessly.
				</p> 
				 
				</div>
			</div>
			
			
			<div class="d-flex flex-wrap flex-column align-items-center"> 
			 
				
				<div class="pt-content mx-auto text-left">    
				<h3 class="my-4">USB Type-C™ ports on both sides</h3>                         
			  	<p class="pt-content mt-4 text-left">
					Both sides of the chassis are equipped with USB Type-C™ ports. Gone are the days when you need to move the laptop to accommodate the socket.
				</p> 
				</div>
			</div>
			
			
		</div>
		
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/z_25.jpg"> 
				
				<div class="pt-conteny mx-auto text-left">      
				<h3 class="my-4">180-degree lay-flat hinge</h3>                       
			  	<p class="pt-content mt-4 text-left">
					Lying flat on the table and sharing screen are made easy because VAIO® Z’s robust 180-degree hinge mechanism is designed just for that. Flip the content and touchpad control with a simple press of the dedicated shortcut keys (Fn + 2).
				</p>
				  
				</div>
			</div>
			
			<div class="d-flex flex-wrap flex-column align-items-center py-4 "> 
				 <img src="/images/z/z_26.jpg"> 
				
				<div class="pt-content-wrapper-lg mx-auto text-left">
				<h3 class="pt-title mt-4">Specially designed for better grip</h3>                            
			  	<p class="pt-content mt-4 text-left">
					The hinge end of the chassis is specially designed for better grip. Slips and drops are kept to a minimum even if you pick up the laptop hastily.
				</p>
			 
				</div>
			</div>
			
		</div>
			
		</div><!-- row -->
	</div>	 			
		
    </section>	

		
		
		


	<section class="pt-section d-flex flex-wrap text-center  py-5 p-0">
				
	<div class="container">   
		<div class="row">
			
			
			
		<div class="col-12 py-4 order-1 order-lg-2" >
			 <img src="/images/z/z_27.jpg">
			
			<div class="col-12 py-5 order-1 order-lg-2">
				<h1 class="my-4 my-lg-3">Multi-layer security</h1> 
			</div> 
			
			<div class="pt-content-wrapper-lg mx-auto text-left">   
			
			<h2 class="pt-title ">Comprehensive seamless login measures</h2> 
			<p class="pt-content mt-4 mx-auto">
				VAIO® Z offers comprehensive security measures – from fingerprint reader to face recognition sensor – for easy, hassle-free logins while providing utmost data protection. Without the need for a password, logging on to your laptop has never been easier.
			</p>
			
			</div>
		</div>	
 
			
 
		
		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/sec04-01-01.png"> 
				
				<div class="pt-conteny mx-auto text-left">      
					<h3 class="my-4">Button-less login</h3>                       
					<p class="pt-content mt-4 text-left">
						The smart proximity sensor in VAIO® Z detects and recognizes your face automatically. You don’t have to lift a finger to start your work.
					</p>
				</div>
 
			</div>
		</div>
		
		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/sec04-01-02.png"> 
				 
				<div class="pt-content mx-auto">    
				<h3 class="my-4">Auto-lock when away</h3>                          
			  	<p class="pt-content text-left">
					You can rest assured that your data is safe with your laptop when you leave your seat because the proximity sensor gets you covered and automatically locks the laptop. 
				</p> 
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/sec04-01-03.jpg"> 
				
				<div class="pt-conteny mx-auto text-left">        
					<h3 class="my-4">Smart detection that keeps laptop awake</h3>                     
					<p class="pt-content mt-4 text-left">
						As long as the proximity sensor detects your presence, the laptop stays awake and bars itself from entering sleep or screen-saving mode. Uninterrupted workflow is guaranteed.
					</p>
				</div>
				 
			</div>
		</div>
		<!--
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/sec04-01-04.jpg"> 
				<div class="pt-conteny mx-auto text-left">      
					<h3 class="my-4">Seamless, one-touch access</h3>                       
					<p class="pt-content mt-4 text-left">
						Integrated with a fingerprint reader, the power button does not only turn on the laptop but logs you in simultaneously, saving you the trouble of typing a password.
					</p>
				</div> 
			</div>
		</div> -->
			
		</div><!-- row -->
	</div>	 			
		
    </section>
		
		 

	<section class="pt-section d-flex flex-wrap text-left   p-0">
	  		
	<div class="container">   
		<div class="row">
			 
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				
				<div class="pt-content-wrapper-lg mx-auto text-left">   
				<h2 class="pt-title">Next-level BIOS authentication*</h2>                         
			  	<p class="pt-content  mt-4 text-left">
					VAIO® Z replaces the physical BIOS pre-boot password with alternative security measures, including fingerprint authentication, Bluetooth pairing, FIDO2 security key and USB port control. 
				</p>
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					* Built-in Phoenix PassKey™ function in BIOS. Phoenix PassKey™ is a registered trademark of Phoenix Technologies Ltd.
				</p>
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 order-1 py-5 order-lg-2">  
			<img src="/images/z/sec04-01-05_en.jpg" alt="">   
		</div>

		</div><!-- row -->
	</div>	 			
			
    </section>

		
		<!--
		
	<section class="pt-section d-flex flex-wrap text-left   p-0 ">
	  		
	<div class="container">   
		<div class="row">
			
			
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				
				<div class="pt-content-wrapper-lg mx-auto">  
				<h2 class="pt-title ">Tracking and remote data deletion</h2>                          
			  	<p class="pt-content mt-4 text-left">
					In case of loss or theft, the TRUST DELETE for VAIO® (user’s account) function lets you track the laptop, remotely lock it and clear data through your smartphone or other devices, further securing your important data.
				</p>
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;"> 
					*The supported languages might not be available in all regions.
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6  py-5 order-1 order-lg-2">
			<img src="/images/z/sec04-02-01.png" alt="">  
		</div>
			
		</div>
	</div>	 			
		 
    </section>

-->
	 






	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		<!--
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				<img src="/images/z/z_34.jpg" alt="">  
				
				<div class="pt-content-wrapper-lg mx-auto text-left">   
				<h3 class="my-4">VAIO專屬防窺膜</h2>                         
			  	<p class="pt-content mt-4">
					VAIO所研發的專屬防窺膜，經特別設計後，無需膠貼固定亦能緊貼邊框，無損外觀美感，移除亦簡單容易。
				</p>
			  
				</div>
			</div>
		</div> -->
		
		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 

			<div class="pt-content-wrapper-lg mx-auto  text-left">     
				<h3 class="my-4">BIOS self-healing function</h3>                        
				<p class="pt-content mt-4">
					VAIO® Z’s BIOS self-healing mechanism auto-repairs damages due to BIOS updates or tampering.
				</p>
			</div>
			</div>
		</div>
			
			
		
		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
  
				<div class="pt-content-wrapper-lg mx-auto  text-left">   
					
				<h3 class="my-4">Trusted Platform Module</h3> 
					
			  	<p class="pt-content mt-4">
					To enhance data encryption, VAIO® Z can be equipped with a TPM*1 chip that is independent of the operating system and other hardware. That means you no longer need to rely on HDD or SDD to protect your important data. TPM allows you to manage data encryption directly and Independently for added security *2.
				</p>
					
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*1 TPM︰Trusted Platform Module<br/>
					*2 TPM does not guarantee 100% protection of data and hardware.
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center "> 
				  
				<div class="pt-content-wrapper-lg mx-auto  text-left">     
				<h3 class="my-4">Physical lock slot for extra security</h3>                        
			  	<p class="pt-content mt-4">
					Equipped with a physical lock slot that prevents theft when your laptop is left unattended.
				</p>
					 
			</div>
		</div>
			
			
			
			
		</div><!-- row -->
	</div>	 
		
    </section>
		
		 <!--
	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
  
				<div class="pt-content-wrapper-lg mx-auto  text-left">   
					
				<h3 class="my-4">TPM保安晶片</h3> 
					
			  	<p class="pt-content mt-4">
					為了提供更強大的資料加密保護，VAIO® Z可搭載獨立於作業系統及其他硬件的TPM*1保安晶片，用家從此不再需要倚賴外接式硬碟（HDD）或高速固態硬碟（SDD），直接通過TPM獨立管理數據加密，處理重要資料就再無後顧之憂*2。
				</p>
					
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*1 TPM︰可信平台模塊<br/>
					*2 TPM並不保證資料和硬件得到百分百保護。
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center "> 
				  
				<div class="pt-content-wrapper-lg mx-auto  text-left">     
				<h3 class="my-4">實體防盜鎖槽   更添保障</h3>                        
			  	<p class="pt-content mt-4">
					機身設有實體防盜鎖槽，方便你將電腦固定於枱面。
				</p>
					 
			</div>
		</div>
		
		  
    </section>	 -->
			
			
 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec05-main.jpg"> 
</section> 
			
 
	<section class="pt-section d-flex flex-wrap text-center  p-0">
				
	<div class="container">   
		<div class="row">
			  
		<div class="col-12 py-5 order-1 order-lg-2">
			<h1 class="my-4 my-lg-3">Meticulous, from start to finish</h1> 
		</div>
			 
		<div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">
			<div class="pt-content-wrapper-lg mx-auto  text-left">    
				<h2 class="pt-title">Quality-tested durability, built to endure</h2> 
				<p class="pt-content mt-4 mx-auto">
					To strive for the best possible quality, VAIO sets up dozens of use scenarios, carries out a series of internal tests and makes sure that every laptop delivers top-notch reliability and durability. As well, VAIO® Z goes through the rigorous MIL-STD-810H military-grade tests established by the United States Department of Defense. The quality of our laptop will never let you down. 
				</p> 
			</div>
		</div>
		
		
		
		<div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">
			 <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				<img src="/images/z/z_36.jpg" alt="">  
			</div>
		</div>
			
		</div><!-- row -->
	</div>	 			
		 
    </section>
		
		
		
		
		
	
	

	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center ">  

						
					<div class="pt-content-wrapper-lg mx-auto  text-left">    
						<h2 class="pt-title">Second-to-none Japanese craftsmanship</h2>                        
						<p class="pt-content mt-4">
							Adhering to the highest Japanese craftsmanship’s spirit, VAIO is committed to bringing the best experience to our users. From design to production, VAIO gathers elites from all sectors at its headquarters in Azumino City in Nagano Prefecture, where they create laptops of remarkable quality by combining Japanese technology and aesthetics that we take pride in. The ultra-meticulous production process ensures that every laptop manufactured at the VAIO headquarters is an epitome of a product "Made in Japan" with uncompromised quality.
						</p>

						</div>
					</div>
				</div>


				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
						<img src="/images/z/z_35.jpg" alt="">  
				</div>
		 
			</div><!-- row -->
		</div>	 	  
    </section>	
		 
		<!--

	<section class="pt-section d-flex flex-wrap text-center  p-0">
	  		
		<div class="container">   
			<div class="row">
 
			<div class="col-12 mb-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center">  

					
					<div class="pt-content-wrapper-lg mx-auto  text-left">   
					<h2 class="pt-title">關懷環境</h2>                         
					<p class="pt-content  mt-4">
						VAIO在致力開發產品的同時亦顧及環境，進行並跟從嚴格的環境標準評估，旨在為建立一個可持續及有利資源循環的社會出一分力。

					</p>
					<p class="pt-content text-left">
						我們與Mirai化成有限公司（Mirai Kasei Co., Ltd. ）合作，該公司於碳纖物料的循環再生方面擁有出色的獨門技術，正正展現我們保護環境的決心。VAIO會繼續進行研發，創造更高增值的循環再生技術。
					</p>

					</div>
				</div>
			</div>

			</div>
		</div>	 			
		  
    </section>	 -->
		
 
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

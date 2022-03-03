@extends('layout.app')

@section('title', 'NEW VAIO SX14')

<!-- @section('product_nav')
    @include('products.new_sx14.product_nav')
@stop -->



@section('content')

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_new_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_new_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_new_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
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
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/new_sx14/VAIO_SX14_1920x720.jpg)">
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
            background-image: url(/images/new_sx14/VAIO_SX14_1920x720.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/new_sx14/VAIO_SX14_991x1050.jpg);
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
			color: #000;
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
				padding: 0.85rem 0.5rem;
				font-size: 12px;
				letter-spacing: 0px;
				width: auto;
				min-width: auto;
				max-width: 100%;
				margin-bottom: 0px;
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

			.white-btn{
				padding: 0.85rem 0.5rem;
				font-size: 12px;
			}

			.txt_img .pt-content-area{
    			float: left;
			}


			iframe#video_ifr,
			video{
    			height: 380px;
			}


        }

        @media(max-width: 767px) {

			iframe#video_ifr,
			video{
    			height: 220px;
			}
		}

    </style>

@endpush





<!---Page content here--------------------------------------------->

	<section class="pt-section d-flex flex-wrap text-center  p-0">

		<div class="container">
			<div class="row">
			<div class="col-12 py-5 order-1 order-lg-2" >
				<h3 class="my-4 my-lg-3">Visual enjoyment to the fullest, supported by an extended battery life!</h3>
				<h1 class="my-4 my-lg-3">New VAIO<sup class="vtp">®</sup> SX14</h1>

				<div class="pt-content-wrapper-lg mx-auto text-left mt-5">
					<p class="pt-content">
						The New VAIO® SX14 boasts a mesmerising 14-inch display, yet weighing only about 1086g in its lightest configuration. Its AI noise-canceling function empowers video calls with ultra clear voice. The PC of the next era is now fitted into a slim and robust body with a unique three-dimensional molded carbon top panel. Not to mention a wide variety of colors to choose from to match your vibrant lifestyle.
					</p>
				</div>

			</div>
		</div><!-- row -->
	</div><!--container -->

</section>


<section class="pt-section d-flex flex-wrap text-center  p-0">
 	<img src="/images/new_sx14/sec01_mv.jpg" style="width: 100%;">
</section>



<section class="pt-section d-flex flex-wrap text-center  p-0">

		<div class="container">
			<div class="row">


		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">Beautifully Tough. Sheer Brilliance.</h1>
		</div>

		<div class="col-12 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100">


				<div class="mx-auto text-left">
					<h2 class="pt-title mb-4">Unveiling a new era of form and function</h2>
					<p class="pt-content my-4 my-lg-4">
						With the newly-developed 3D molded carbon fiber cover and the improved hinge designs, the new series is re-engineered with an added level of sophistication for the perfect user experience.
					</p>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6  my-4 my-lg-4">
				<div class="d-flex flex-wrap flex-column align-items-center mx-auto">
					<img src="/images/new_sx14/sec01_01.jpg" alt="">

				</div>
			</div>

			<div class="col-12 col-lg-6  my-4 my-lg-4">
				<div class="d-flex flex-wrap flex-column align-items-centermx-auto">
					<img src="/images/new_sx14/sec01_02.jpg" alt="">

				</div>
			</div>


			</div><!-- row -->
		</div><!--container -->

    </section>





<section class="pt-section d-flex flex-wrap text-center mb-4  p-0">

		<div class="container">
			<div class="row ">

		<div class="col-12 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100">


				<div class="pt-content mx-auto text-left">
					<h2 class="pt-title my-4 my-lg-4">A robust notebook computer to carry around with full confidence</h2>
					<p class="pt-content">
						Stringent quality tests have been carried out on dozens of features of the New VAIO® under different usage scenarios. Furthermore, the New VAIO® has attained the MIL-STD-810H *standard established by the US Department of Defense to demonstrate its unsurpassed stiffness.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						* Based on the MIL-STD-810H standards, various tests have been conducted under conditions set by our company for testing of the notebook computer’s basic functions. Such tests are carried out for the sole purpose of collecting data regarding system reliability, and does not guarantee the unit will be free of damage or failure due to dropping, impact, vibration or other changes in the usage environment.
					</p>
				</div>
			</div>
		</div>




		<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center mx-auto">

					<iframe width="100%" height="315" src="https://www.youtube.com/embed/yxmc9X3rJEo?rel=0&amp;showinfo=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fstore.vaio.com" frameborder="0" allowfullscreen="" data-gtm-yt-inspected-2371208_136="true" id="637370525" data-gtm-yt-inspected-1_25="true"></iframe>


				</div>
			</div>

			<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center mx-auto">
					<img src="/images/new_sx14/sec01_01a-02.png" alt="">

				</div>
			</div>


			</div><!-- row -->
		</div><!--container -->

    </section>




	<section class="pt-section d-flex flex-wrap text-left p-0" >

		<div class="container bg-grey">
			<div class="row">

		<div class="col-12 py-5 order-1 order-lg-2 text-center">
			<h1 class="my-4 my-lg-3">Improved rigidity and weight reduction thanks to carbon fiber</h1>
		</div>

		<div class="col-12" >

			<div class="pt-content-wrapper-lg mx-auto">

				<h2 class="pt-title mb-4">Introducing three-dimensional molded carbon fiber cover</h2>
				<p class="pt-content my-4" >
					The carbon fiber cover is remarkably thinner and lighter, yet sturdier than conventional material. The bezels on either side of the screen is made with carbon fiber with a goal to enhance durability and reduce weight.
				</p>
			</div>
		</div>


			<div class="col-12 col-lg-6 my-4 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto">
					<img src="/images/new_sx14/sec01_01a-01_e.png" alt="">
				</div>
			</div>

			<div class="col-12 col-lg-6 my-4 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto">
					<img src="/images/new_sx14/sec01_01a-03_e.png" alt="">
				</div>
			</div>


			</div><!-- row -->
		</div><!--container -->
    </section>





	<section class="pt-section d-flex flex-wrap text-left  p-0" >

		<div class="container">
			<div class="row">

			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center ">

					<div class="pt-content text-left mx-auto">
					  <h2 class="pt-title">4 colors to match your lifestyle</h2>
					  <p class="pt-content mt-4 text-left">
						 Choose from the ultra "Fine White", luxury "Urban Bronze" with special gold plating on the back VAIO® logo and ornaments, standard "Fine Black" or "Bright Silver" for your favorite color
					  </p>
					  	<!--sx14_kachiiro -->
						<a href="{{ route('product.overview_sx14_kachiiro') }}" class="btn black-btn mt-3">More details in the "KACHI-IRO" SPECIAL EDITION</a>

					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
				<img src="/images/new_sx14/sec01_03.jpg" >
				</div>

			</div>

			</div><!-- row -->
		</div><!--container -->
	</section>




	<section class="pt-section d-flex flex-wrap text-left mb-5 p-0" >

		<div class="container bg-black">
			<div class="row">


			<div class="col-12 col-lg-6 py-5">
			   <img src="/images/new_sx14/sec01_sp01.jpg" >
			</div>


			<div class="col-12 col-lg-6 py-5">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content mx-auto">
					  <h2 class="pt-title text-white">The Color of Victory – the "KACHI-IRO" SPECIAL EDITION</h2>
					  <p class="pt-content  text-white mt-4">
						 The "KACHI-IRO" SPECIAL EDITION of VAIO® (first launched in July 2019), sporting a unique indigo blue color, has been revived to match the seamless design of the New VAIO® SX14.
					  </p>
					  <!--https://hk.vaio.com/en/product/z_kachiiro/overview -->
						<a href="{{ route('product.overview_sx14_kachiiro') }}" class="btn white-btn mt-3">More details in the "KACHI-IRO" SPECIAL EDITION</a>

					</div>
				</div>
			</div>

			</div><!-- row -->

		</div><!--container -->
	</section>





	<section class="pt-section d-flex flex-wrap text-left p-0" >

		<div class="container bg-black">
			<div class="row">

			<div class="col-12 col-lg-6 py-5">
			   <img src="/images/new_sx14/sec01_sp02.jpg" >
			</div>

			<div class="col-12 col-lg-6 py-5">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content mx-auto">
					  <h2 class="pt-title text-white">The "ALL BLACK EDITION"</h2>
					  <p class="pt-content  text-white mt-4">
						An "ALL BLACK EDITION" is also available, with the surface painted in a special black matte black color that complements the texture of carbon fiber, and the VAIO® logo also in black.
					  </p>
						<a href="{{ route('product.overview_sx14_abe') }}" class="btn white-btn mt-3">More details in the ALL BLACK EDITION</a>
					</div>
				</div>
			</div>

			</div><!-- row -->
		</div><!--container -->
	</section>







	<section class="pt-section d-flex flex-wrap text-left  p-0">

	<div class="container">
		<div class="row">

				<div class="col-12 col-lg-6 py-5 ">
					<div class="d-flex flex-wrap flex-column align-items-center ">


					<div class="pt-content mx-auto  text-left">
						<h2 class="pt-title">Second-to-none Japanese craftsmanship</h2>
						<p class="pt-content mt-4">
							Adhering to the highest Japanese craftsmanship’s spirit, VAIO® is committed to bringing the best experience to our users. From design to production, VAIO® gathers elites from all sectors at its headquarters in Azumino City in Nagano Prefecture, where they create laptops of remarkable quality by combining Japanese technology and aesthetics that we take pride in. The ultra-meticulous production process ensures that every laptop manufactured at the VAIO® headquarters is an epitome of a product "Made in Japan" with uncompromised quality.
						</p>

						<p class="pt-content m-0">
							<a href="{{ route('quality.azumino_finish') }}" class="btn black-btn mt-3">@lang('common.nav.quality.azumino_finish')</a>
						</p>

						</div>
					</div>
				</div>


				<div class="col-12 col-lg-6 py-5 ">
						<img src="/images/z/z_35.jpg" alt="">
				</div>

			</div><!-- row -->
		</div>
    </section>




<section class="pt-section d-flex flex-wrap text-center  p-0">
 	<img src="/images/new_sx14/sec02_mv.jpg" style="width: 100%;">
</section>



	<section class="pt-section d-flex flex-wrap text-center p-0">

		<div class="container">
			<div class="row">


		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">Unparalleled mobility to serve you anytime, anywhere</h1>
		</div>

		<div class="col-12 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center h-100">

				<div class="pt-content mx-auto text-left">
					<h2 class="pt-title mb-4">The New VAIO® SX14’s battery can last for a full day’s use, so you never have to worry about recharging </h2>
					<p class="pt-content my-4 my-lg-4">
						The new high-capacity battery and low power-consumption display panel combine to offer an outstanding operation time for all day, bringing you the peace of mind even when a power source is unavailable.
					</p>

				</div>

			</div>
		</div>



			</div><!-- row -->
		</div><!--container -->

    </section>





	<section class="pt-section text-left p-0 mb-5" >

		<div class="container">
			<div class="row">

				<div class="col-12 py-5 order-1 order-lg-2 text-center">
					<h1 class="my-4 my-lg-3">The overwhelming laptop</h1>

				</div>

				<div class="pt-content-wrapper mx-auto">

					<h2 class="pt-title mb-4">High-capacity battery*</h2>

					<p class="pt-content my-4 my-lg-4">
						New VAIO® SX14 helps you power through all day and night. Its newly-developed high-capacity battery keeps the laptop featherlight while providing non-stoppable power.
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
					  <h2 class="pt-title">The AC Adapter</h2>
					  <p class="pt-content  mt-4">
						 The New VAIO® SX14 can be conveniently recharged via an AC adaptor (weight and volume reduced by around 30%) or USB Power Delivery.
					  </p>
						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
							*In comparison with the standard 10.5V AC adapter "VJ8AC10V9" that comes with conventional models.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<img src="/images/new_sx14/sec02-01a-01.jpg" alt="">
			</div>


			</div>
		</div>
	</section>




	<section class="pt-section d-flex flex-wrap text-center p-0 text-left">

		<div class="container">
			<div class="row">

				<div class="col-12 col-lg-6 order-1 order-lg-2">

					<div class="d-flex flex-wrap flex-column align-items-center">


						<div class="pt-content-wrapper text-left mx-auto">
						  <h3 class="mt-4 my-lg-4 text-left">Supports quick charging</h3>
						  <p class="pt-content  mt-4 ">
							 The fast charging capability means you can recharge battery power in a short time.
						  </p>

						</div>

					</div>
				</div>


				<div class="col-12 col-lg-6 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<div class="pt-content-wrapper text-left mx-auto">
						  <h3 class="mt-4 my-lg-4 text-left">Smart charging with “battery protection” mode</h3>
						  <p class="pt-content  mt-4 ">
							  Constantly charging the battery to 100% shortens its life. Therefore, every New VAIO® SX14 has a built-in “battery protection” mode that stops charging after reaching certain battery level to extend the battery's lifespan.
						  </p>

						</div>
					</div>
				</div>

			</div><!-- row -->
		</div>

    </section>







	<section class="pt-section d-flex flex-wrap text-center p-0 mb-5 text-left">

		<div class="container">
			<div class="row">

				<div class="col-12 order-1 order-lg-2">

					<div class="d-flex flex-wrap flex-column align-items-center">


						<div class="pt-content-wrapper text-left mx-auto">
						  <h3 class="mt-4 my-lg-4 text-left">Wi-Fi 6 + MU-MIMO</h3>
						  <p class="pt-content  mt-4 ">
							 Enjoy ultra-fast Wi-Fi connection speed that is 8 times faster than previous models *1. Compatible with the latest Wi-Fi 6 standard for easy connection with excellent security *2, and the MU-MIMO (i Multi-user, multiple-input, multiple-output) technology, which does not slow down connection speed down even when a large number of people are connected to a router.
						  </p>
							<p class="pt-content my-4 text-left" style="font-size: 0.8rem;">
								*1 Compared with Wi-Fi 4 (IEEE802.11n).<br/>
								*2 A router that supports Wi-Fi 6 is required for Wi-Fi 6 connection
						</p>

						</div>

					</div>
				</div>

				<div class="col-12 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<div class="pt-content-wrapper text-left mx-auto">
						  <h3 class="mt-4 my-lg-4 text-left">Bluetooth 5.1</h3>
						  <p class="pt-content my-4 text-left">
							  The New VAIO® SX14 supports Bluetooth to let you connect various peripherals wirelessly, further reduce power consumption and delays of audio signal transmission.
						  </p>

						</div>

					</div>
				</div>

				<div class="col-12 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<div class="pt-content-wrapper text-left mx-auto">
						  <h3 class="mt-4 my-lg-4 text-left">High sensitivity antenna</h3>
						  <p class="pt-content my-4">
							  With the antenna above the display, which is the highest position of the unit, signal stability is enhanced.
						  </p>

						</div>

					</div>
				</div>

			</div><!-- row -->
		</div>

    </section>


<section class="pt-section d-flex flex-wrap text-center  p-0">
 	<img src="/images/new_sx14/sec03_mv.jpg" style="width: 100%;">
</section>



	<section class="pt-section d-flex flex-wrap text-center p-0" >

		<div class="container">
			<div class="row">

		<div class="col-12 py-5 order-1 order-lg-2 text-center">
			<h1 class="my-4 my-lg-3">Ease of use that puts VAIO® one step ahead</h1>
		</div>


			<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2 text-left">

				<h2 class="pt-title mb-4">Beautiful and spacious 14.0-inch wide display</h2>
				<p class="pt-content my-4 my-lg-4" >
					The slimmer bezels of the New VAIO® SX14 is less than half the width of those of conventional models. The New VAIO® SX14 comes in with a 13.3-inch mode, which is the same as the VAIO® S13, and a larger 14-inch  model. Text and tables are easy to read on the larger screens, reducing fatigue during extended periods of use.
				</p>


			</div>

			<div class="col-12 col-lg-6 mb-4">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto">
					<img src="/images/new_sx14/sec03_01_e.jpg" alt="">
				</div>
			</div>



			</div><!-- row -->
		</div><!--container -->
    </section>




<!--

	<section class="pt-section d-flex flex-wrap p-0">

		<div class="container">
			<div class="row">

		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content text-left mx-auto">
				<h2 class="pt-title">4K display that delivers superb images</h2>
			  	<p class="pt-content mt-4 text-left">
					Immerse yourself in the vivid viewing experience offered by VAIO® SX14’s 4K (3840 x 2160 pixels) display option that reproduces cinema-grade color gamut and deep contrasts of HDR visuals. The display enhances all images and videos by retaining real-life color accuracy and the finest details. Any kind of visual content stays vivid and impactful even when you watch it through plain naked eyes.
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
					Color gamut of VAIO® SX14 (Dotted lines denote normal sRGB gamut)
				</p>
			</div>
		</div>

		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap align-items-center">
				<img src="/images/z/z_18_2.jpg" style="width: 50%;">
				<img src="/images/z/z_18_3.jpg" style="width: 50%;">
			</div>
		</div>


		</div>
	</div>
    </section>

-->



<!--
<section class="pt-section d-flex flex-wrap text-center  p-0">
 	<img src="/images/z/sec03-main.jpg" style="width:100%;">
</section>
-->



	<section class="pt-section d-flex flex-wrap p-0">

		<div class="container">
			<div class="row">

			<div class="col-12 py-5 order-1 order-lg-2 text-center" >
				<h1 class="my-4 my-lg-3">Uncompromised productivity</h1>

			</div>
		<div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content text-left mx-auto">
				<h2 class="pt-title">Touch screen that is easy and intuitive to use</h2>
			  	<p class="pt-content mt-4 text-left">
					The New VAIO® SX14 can be operated via touchscreen commands. It also supports scrolling by pressing buttons on the screen, just like using a smartphone. You can also use a stylus pen for input.
				</p>

				<p class="pt-content my-4 text-left" style="font-size: 0.8rem;">
						*Stylus supports and will be bundled with dedicated models.
				</p>


				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
				<img src="/images/new_sx14/sec03_06.jpg" alt="">
			</div>
		</div>


		</div><!-- row -->
	</div>
    </section>




<section class="pt-section d-flex flex-wrap text-center  p-0 ">

	<div class="container">
		<div class="row">


		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column ">
				<div class="pt-content mx-auto text-left">
					<h2 class="pt-title">Brand new keyboard</h2>
					<p class="pt-content mt-4">
						Embrace the freshly designed keyboard that lets you work in supreme comfort. The improved mechanics make every stroke noise-free, while each keycap and the ergonomic hinge are also re-engineered for the most comfortable typing position that further reduces the burden on your palms and wrists.
					</p>
					<p class="pt-content mt-4">
						For quieter and more responsive keystrokes, the full-sized keyboard preserves the 19mm key pitch while increasing* key travel from 1.2mm to 1.5mm.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*Compared to VAIO® SX14.
					</p>
				</div>
			</div>
		</div>


		<div class="col-12 col-lg-6">
		   <img src="/images/new_sx14/SX14_13-4.jpg">
		</div>
	 </div><!-- row -->

	</div><!--container--->
 </section>






	<section class="pt-section d-flex flex-wrap text-center  p-0">

	<div class="container">
		<div class="row">

		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">

			<div class="d-flex flex-wrap flex-column align-items-center">
				 <img src="/images/new_sx14/SX14_13-15.jpg">

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

		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">

			<div class="d-flex flex-wrap flex-column align-items-center">
				 <img src="/images/new_sx14/SX14_13-25.jpeg">

				<div class="pt-conteny mx-auto text-left">
				<h3 class="my-4">180-degree lay-flat hinge</h3>
			  	<p class="pt-content mt-4 text-left">
					Lying flat on the table and sharing screen are made easy because New VAIO® SX14’s robust 180-degree hinge mechanism is designed just for that. Flip the content and touchpad control with a simple press of the dedicated shortcut keys (Fn + 2).
				</p>
				<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*Japanese keyboard version for demonstration only.
				</p>

				</div>
			</div>

			<!--

			<div class="d-flex flex-wrap flex-column align-items-center mt-5 mb-4  ">
				 <img src="/images/z/z_26.jpg">

				<div class="pt-content-wrapper-lg mx-auto text-left">
				<h3 class="pt-title mt-4">Specially designed for better grip</h3>
			  	<p class="pt-content mt-4 text-left">
					The hinge end of the chassis is specially designed for better grip. Slips and drops are kept to a minimum even if you pick up the laptop hastily.
				</p>

				</div>
			</div>
			 -->
		</div>

		</div>
	</div>

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

						<img src="/images/new_sx14/SX14_16-5.jpg" alt="">

						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">Smudge-proof keycaps and palm rest</h3>
						    <p class="pt-content text-left">
							 To retain their clean, smudge-free appearance all year along, all keycaps are coated with an abrasion resistance coating that is specially developed to keep fingerprints and smudges away.
						    </p>
						</div>

					</div>
				</div>

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/new_sx14/SX14_16-3.jpg" alt="">

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
							<h3 class="my-4">VAIO® exclusive font</h3>
						    <p class="pt-content text-left">
								The stunning visual of New VAIO® SX14 deserves an equally appealing keyboard. That is why VAIO® designed a new font exclusive to the series where the letters and symbols are composed of natural curves that make them clearer to read while preserving their elegance.
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



<!--
	<section class="pt-section d-flex flex-wrap text-center p-0">

		<div class="container">
			<div class="row">

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center">


						<div class="pt-content mx-auto text-left">
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
			</div>
		</div>
    </section>
 -->



	<section class="pt-section d-flex flex-wrap text-center p-0">

		<div class="container">
			<div class="row">

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center">


						<div class="pt-content mx-auto text-left">
						<h2 class="pt-title">Premium webcam and microphones cater to your remote work plans</h2>
						<p class="pt-content mt-4 text-left">
							New VAIO® SX14 is designed to ease your work-from-home anxiety. A webcam of 2.07 megapixels captures clear and sharp images while the microphones deliver better sound recording with improved noise-canceling technology
						</p>

						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
							*Compared to VAIO® SX14.
						</p>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
						<img src="/images/new_sx14/SX14_13-7.jpg" alt="">
					</div>
				</div>
			</div><!-- row -->
		</div>
    </section>




	<section class="pt-section d-flex flex-wrap p-0">

		<div class="container">
			<div class="row">

				<div class="col-12 mb-3 order-1 order-lg-2">

				<h2 class="pt-title my-4 my-lg-4">Crystal clear microphone capabilities thanks to AI</h2>
				<p class="pt-content mt-4" >
					The high-performance AI had learned and set proper elimination of noises to further improve the sound quality. By reducing the environmental noise, clear voice can be delivered to the recipient and vice versa.
				</p>


			</div>


			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
					<img src="/images/new_sx14/sec03_09.png" alt="">
				</div>
			</div>


			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center">


						<video controls>
						  <source src="https://hk.vaio.com/video/new_vaio_sx14_ai_noise_canceling.mp4" type="video/mp4">
						</video>

				</div>
			</div>

		</div><!-- row -->
	</div>
    </section>





	<section class="pt-section d-flex flex-wrap text-left   p-0">

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<div class="pt-content mx-auto text-left">
						<h2 class="pt-title">Sign in fast, secure, and password-less with Windows Hello.</h2>
						<p class="pt-content  mt-4 text-left">
							Security literally at your fingertips and face recognition login. Instantly login to your New VAIO® SX14 with the new fingerprint reader. Exceptional security to prevent malicious intent.
						</p>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6 order-1 py-5 order-lg-2">
					<img src="/images/new_sx14/sec03_10.png" alt="">
				</div>
			</div><!-- row -->
		</div>

    </section>




	<section class="pt-section d-flex flex-wrap text-center  mt-4 mb-5 p-0">

	<div class="container">
		<div class="row">



		<div class="col-12 py-4 order-1 order-lg-2" >
			 <img src="/images/new_sx14/SX14_13-2.jpg">

			<div class="col-12 py-5 order-1 order-lg-2">
				<h1 class="my-4 my-lg-3">Multi-layer security</h1>
			</div>

			<div class="pt-content mx-auto text-left">

			<h2 class="pt-title ">Comprehensive seamless login measures</h2>
			<p class="pt-content mt-4 mx-auto">
				New VAIO® SX14 offers comprehensive security measures – from fingerprint reader to face recognition sensor – for easy, hassle-free logins while providing utmost data protection. Without the need for a password, logging on to your laptop has never been easier.
			</p>

			</div>
		</div>




		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">
				 <img src="/images/z/sec04-01-01.png">

				<div class="pt-conteny mx-auto text-left">
					<h3 class="my-4">Button-less login</h3>
					<p class="pt-content mt-4 text-left">
						The smart proximity sensor in New VAIO® SX14 detects and recognizes your face automatically. You don’t have to lift a finger to start your work.
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


		</div><!-- row -->
	</div>

    </section>



	<section class="pt-section d-flex flex-wrap text-left   p-0">

	<div class="container">
		<div class="row">

		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto text-left">
				<h2 class="pt-title">Next-level BIOS authentication*</h2>
			  	<p class="pt-content  mt-4 text-left">
					New VAIO® SX14 replaces the physical BIOS pre-boot password with alternative security measures, including fingerprint authentication, Bluetooth pairing, FIDO2 security key and USB port control.
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




	<section class="pt-section d-flex flex-wrap text-center mb-3 p-0">

	<div class="container">
		<div class="row">

		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">

			<div class="pt-content mx-auto  text-left">
				<h3 class="my-4">BIOS self-healing function</h3>
				<p class="pt-content mt-4">
					New VAIO® SX14’s BIOS self-healing mechanism auto-repairs damages due to BIOS updates or tampering.
				</p>
			</div>
			</div>
		</div>



		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto  text-left">

				<h3 class="my-4">Trusted Platform Module</h3>

			  	<p class="pt-content mt-4">
					To enhance data encryption, New VAIO® SX14 can be equipped with a TPM*1 chip that is independent of the operating system and other hardware. That means you no longer need to rely on HDD or SDD to protect your important data. TPM allows you to manage data encryption directly and Independently for added security *2.
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

				<div class="pt-content mx-auto  text-left">
				<h3 class="my-4">Physical lock slot for extra security</h3>
			  	<p class="pt-content mt-4">
					Equipped with a physical lock slot that prevents theft when your laptop is left unattended.
				</p>

			</div>
		</div>


		</div><!-- row -->
	</div>

    </section>


	<section class="pt-section d-flex flex-wrap text-center  p-0">
		<img src="/images/new_sx14/sec02-main.jpg" style="width: 100%;">
	</section>


	<section class="pt-section d-flex flex-wrap text-center mb-5 p-0">

			<div class="container">
				<div class="row">

				<div class="col-12 py-5 order-1 order-lg-2 text-center" >
					<h1 class="my-4 my-lg-3">No compromise of performance on mobile devices</h1>
				</div>

				<div class="col-12 col-lg-6 mb-4 order-1 order-lg-2 text-left">

					<h2 class="pt-title mb-4">The latest OS: Windows 11</h2>
					<p class="pt-content my-4 my-lg-4">
						The New VAIO® SX14 is pre-installed with the latest OS, Windows 11, that is web- and mobile-friendly, while putting an emphasis on security. The latest PC experience is yours to enjoy.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*When using Windows 11 Home for the first time, an internet connection and a Microsoft account are required to complete the setup.
					</p>

				</div>

				<div class="col-12 col-lg-6 mb-4">
					<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto">
						<img src="/images/new_sx14/sec04_01.png" alt="">

					</div>
				</div>


			</div><!-- row -->
		</div><!--container -->

    </section>



	<section class="pt-section d-flex flex-wrap text-left   p-0">

		<div class="container">
			<div class="row">

				<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2">

					<h2 class="pt-title my-4 my-lg-4">Ready for the Intel® Evo™ platform</h2>
					<p class="pt-content">
						The New VAIO® SX14 is compliant with Intel's premium notebook PC standard, the  "Intel® Evo™ Platform", providing an outstanding user experience.
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*With a Core i5 or higher processor, 256GB or higher storage, a Full HD (non-touchscreen panel) display, a Windows Hello face recognition compatible camera, and a backlit keyboard.
					</p>

				</div>

				<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2">
						<img src="/images/new_sx14/sec04_06.png" alt="">
				</div>


			</div><!-- row -->
		</div><!--container -->

    </section>


 <section class="pt-section d-flex flex-wrap text-center  p-0">

	<div class="container">
		<div class="row">

		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">Unrivaled performance</h1>

		</div>

		<div class="col-12 col-lg-6 order-1 order-lg-2  text-left">
			<h2 class="pt-title">The only lightweight laptop powered by high-speed processor</h2>
			<p class="pt-content my-4">
				The powerful 11th Gen Intel® Core™ processor that New VAIO® SX14 equips is boosted with VAIO®’s proprietary VAIO® TruePerformance® technology. A powerhouse in terms of performance, New VAIO® SX14 is the only large-sized laptop in the industry that is powered by an ultra-fast processer and weighs under 1 kg.
			</p>
		</div>


		<div class="col-12 py-4 col-lg-6">
		   <img src="/images/z/z_07.png" >
		</div>
	 </div><!-- row -->



	<div class="row">

		<div class="col-12 mt-4 col-lg-6">
		   <div class="pt-content txt_img mx-auto text-left">

		   		<img src="/images/new_sx14/sec04_03.png" >

			   <div class="pt-content-area">
					<p class="pt-title-blue">Core i7-1195G7［New VAIO® SX14］</p>
					<p class="pt-content mt-3">
						The comparison with Core i7-1065G7 [Reference: VAIO® SX14 (announced in October 2020)]
					</p>
				   <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					 MAXON Cinebench Version23.200(Multi Core)
					</p>
			</div>
			</div>
		</div>



		<div class="col-12 mt-4  col-lg-6">
		   <div class="pt-content txt_img mx-auto text-left">

		   		<img src="/images/new_sx14/sec04_04.png" >

			   <div class="pt-content-area">
					<p class="pt-title-blue">Core i7-1195G7［New VAIO® SX14］</p>
					<p class="pt-content mt-3">
						The comparison with Core i7-1065G7 [Reference: VAIO® SX14 (announced in October 2020)]
					</p>
				   <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					 MAXON Cinebench Version15.038(OpenGL)
					</p>
			</div>
			</div>
		</div>

		<div class="col-12 mb-4  col-lg-12">
			<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
				 Researched by VAIO® Corporation. It is a measurement result with the prototype. Results may vary depending on your environment and spec configuration.
			</p>
		</div>

	 </div><!-- row -->



	</div><!--container--->
 </section>





<section class="pt-section d-flex flex-wrap text-left  p-0">

	<div class="container bg-grey">
	<div class="row">


		<div class="col-12 col-lg-6 my-5" >
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto">
				 <h2 class="pt-title">What is VAIO® TruePerformance？</h2>
				  <p class="pt-content my-4">
					  VAIO® TruePerformance is a proprietary technology developed by VAIO® that pushes the processor efficiency and maintains its peak performance over an extended period by uprating CPU power limits and optimizing the cooling mechanism.
				  </p>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6 my-5 text-center">
		   <img src="/images/new_sx14/sec04_05.png" style="max-width: 350px;" >
		</div>


		</div><!-- row -->

	</div><!--container--->
 </section>





 <section class="pt-section d-flex flex-wrap text-center p-0" >

	<div class="container">

		<div class="row">

		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">Other performance boosts</h1>

		</div>

		<div class="col-12 text-left">
			<h2 class="pt-title mb-4">The 4th Generation High-speed SSD</h2>
			<p class="pt-content my-4 my-lg-4">
				The New VAIO® SX14 comes with the 4th generation high-speed SSD with PCIe Gen.4 connection, boasting unprecedentedly higher read/write speed, making everyday tasks, such as copying files and launching applications, a breeze.
			</p>
			 <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
			 * in sequential read
			</p>
		</div>


	 </div><!-- row -->



	<div class="row">


		<div class="col-12 mt-4  col-lg-6">
		   <div class="pt-content txt_img mx-auto text-left">

		   		<img src="/images/new_sx14/sec04-01a-01.png" >

			   <div class="pt-content-area">
					<p class="pt-title-blue">The 4th Generation High-speed SSD (256GB)</p>
					<p class="pt-content mt-3">
						The comparison with standard SSD (256GB)
					</p>
				   <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					  CrystalDiskMark 7.0.0 / Sequential Read
					</p>
			</div>
			</div>
		</div>




		<div class="col-12 mt-4  col-lg-6">
		   <div class="pt-content txt_img mx-auto text-left">

		   		<img src="/images/new_sx14/sec04-01a-02.png" >

			   <div class="pt-content-area">
					<p class="pt-title-blue">The 4th Generation High-speed SSD（256GB）</p>
					<p class="pt-content mt-3">
						The comparison with standard SSD (256GB)
					</p>
				   <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					  Compare the processing time when copying one 10GB file from folder to folder
					</p>
			</div>
			</div>
		</div>

		<div class="col-12 mb-4  col-lg-12">
			<p class="pt-content-sm text-left" style="font-size: 0.8rem;">
				Researched by VAIO® Corporation. It is a measurement result with the prototype. Results may vary depending on your environment and spec configuration.
			</p>
		</div>


		<div class="col-12 mb-4 col-lg-12">
			<div class="d-flex flex-wrap flex-column align-items-center  h-100">
				<div class="pt-content mx-auto text-left">
					<h2 class="pt-title mb-4">High-speed, large-capacity memory</h2>
					<p class="pt-content mt-4">
						Up to 32GB of LPDDR4X wideband memory can be configured for The New VAIO® SX14, ensuring fast and stable opening of multiple applications at the same time.
					</p>
				</div>
			</div>
		</div>


	 </div><!-- row -->



	</div><!--container--->
 </section>




<section class="pt-section d-flex flex-wrap mb-5 pb-4 p-0">


	<div class="container">
	<div class="row">

		<div class="col-12 col-lg-12 order-1 order-lg-2" >
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto text-left">
				 <h2 class="pt-title mb-4">Connect to various peripherals with ease</h2>
				  <p class="pt-content my-4 my-lg-4">
					  In addition to one standard USB terminal (USB-A) on each side, The New VAIO® SX14 also has two USB Type-C™ terminals, an HDMI terminal, and a wired LAN terminal.
				  </p>
				  <p class="pt-content my-4 my-lg-4">
					  The two USB Type-C™ jacks support USB 4™ and Thunderbolt™ 4 connections with data transfer speed of up to 40 Gbps. Connect peripheral devices, such as, external storage devices, and transfer data in high speed.
				  </p>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-12 text-center">
		   <img src="/images/new_sx14/sec04_07_e.png" >
		</div>


		</div><!-- row -->

	</div><!--container--->
 </section>



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

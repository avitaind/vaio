@extends('layout.app')

@section('title', 'VAIO SE14 2021')

@section('product_nav')
    @include('products.se14.product_nav')

@stop

@section('content')

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
                <a href="@lang('common.se14_buy_now_url')" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif


    </ul>
</div>
<!--- Banner here------------------------------------>

<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">

        <div class="swiper-wrapper">
             <a href=""  target="_blank" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-1">
                    <div class="main-banner" title=""></div>
                </div>
            </a>

             <!-- <a href=""  target="_blank" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-2">
                    <div class="main-banner" title=""></div>
                </div>
            </a> -->

        </div>
        <!-- <div class="swiper-pagination"></div>   -->
    </div>
</section>


@push('css')

    <style>
        .cms-banner:before {
            padding-top: 37.51%;
        }


		.pt-title{
    		font-size: 2.5rem;
		}

		.pt-section.p-0{
			padding: 20px 0 !important;
		}

		.rect-banner{
			background-size: contain;
			background-repeat: no-repeat;
		}

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-1 .main-banner {
            background-image: url(/images/se2021/VAIO_SE14_Product_Creatives_1920X720px.jpg);
        }

		/* .cms-banner-2 .main-banner {
            background-image: url(/images/se2021/VAIO-SE14-Clack-II_2_pc_en.jpg);
        } */

		@media(min-width: 992px) {
			.mo{
			 	display:none;
			}
		}

        @media(max-width: 991px) {
            .cms-banner-1 .main-banner {
            	background-image: url(/images/se2021/VAIO_SE14_Product_Creatives_991X1050px.jpg);
            }

			/* .cms-banner-2 .main-banner {
            	background-image: url(/images/se2021/VAIO-SE14-Clack-II_2_mo_en.jpg);
            } */

			.pc{
				display:none !important;
			}


			h1{
				font-size: 2.0rem;
			}
			.pt-title {
				font-size: 1.5rem;
			}

			.py-5{
				padding-top: 1.0rem!important;
				padding-bottom: 1.0rem!important;
			}

			.pt-section{
				padding: 20px 0 !important;
			}

        }


    </style>

@endpush

<!---Page content here--------------------------------------------->

    <section id="vaio-product">
        <div class="main-content container-fluid">

			<section class="pt-section text-center">
				<div class="container">

						<h2 class="pt-title mt-4">WORK / PLAY．SMARTER</h2>
						<hr class="pt-title-hr">
						<div class="pt-content-wrapper mx-auto">
						<p class="pt-content text-left">
						The NEW VAIO SE14 empower you for enjoying the best of work and play. Prepare yourself for a more immersive experience with the 11th Gen Intel® Core™ Processor of the NEW VAIO SE14.
						</p>
						<p class="pt-content text-left">
						Boasting a 14” full High Definition resolution display, framed in a slim bezel, for stunning colours and visual details, and a 4-speaker system that offers dynamic audio reproduction – the NEW VAIO SE14 delivers true-to-life experiences and enhances efficiency, effortlessly.
						</p>


						</div>

				</div>
			</section>

			<section class="pt-section text-center" style="background-color: #fff; padding-top: 0px;">
                <div class="container">

					<div class="row">

                   <div class="col-12 pt-content-wrapper mx-auto">

						<h2 class="pt-title mt-4">VAIO SE14 with New 11th Gen Intel® Core™ Processor</h2>
						<hr class="pt-title-hr">

						<div class="fs-0 my-4 my-lg-5">
							<img src="/images/se2021/se14_2021_1.jpg" >
						</div>


						<div class="pt-content-wrapper mx-auto">
							<p class="pt-content text-left">SE14 is the first VAIO line-up to bring high performance laptop with 11th Gen Intel® Core™ Processor with Iris Xe Integrated GPUs for consumers who seek for high productivity and immersive entertainment. </p>
							<p class="pt-content text-left">Our New Airflow cooling enhancement and long battery life also help you to reach the best performance.</p>
						</div>


                    </div>
                    </div>
                </div>
            </section>



			<section class="pt-section text-center p-0">
                <div class="container">
					<div class="row">
                   <div class="pt-content-wrapper mx-auto">
						<h1 class="mt-4">Uncompromised Performance</h1>
						<hr class="pt-title-hr">
                    </div>
                </div>
                </div>
            </section>



			<section class="pt-section d-flex flex-wrap text-center  p-0" id="pt-1">

				<div class="container">
					<div class="row">


					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_2.jpg');"></div>
					</div>


					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">

							<div class="fs-0  my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_2.jpg" alt="">
                            </div>

							<h2 class="pt-title mt-4">Mobile Conference Centre</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">
								<p class="pt-content mx-auto text-left">
									SE14 is a veritable mobile conference centre with its high quality Web Cam with 2 digital array microphones to correctly receive the voice in front of the screen. The inbuilt AEC technology negates echo and noise to make your conference call smooth while its 4 high quality top and bottom firing speakers provide rich clear audio. You can also switch between single/multiple conference modes with just the press of a button.
								</p>
							</div>
						</div>
					</div>

				</div>
			  </div>

            </section>



			<section class="pt-section d-flex flex-wrap text-center p-0">

				<div class="container">

					<div class="row">

					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">

							<div class="fs-0  my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_3.jpg" alt="">
                            </div>

							<h2 class="pt-title mt-4">Uncompromising Productivity</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">
								<p class="pt-content mx-auto text-left" >
									SE14 is optimized for uninhibited work and play with its unparalleled battery life of 12 hours*. Its prowess is further exacerbated by its ultra-fast charging technology which enable 70% charge within just an hour. The preloaded Windows 10 Home ensures that your long hours spent on this powerful device is immensely fruitful whether it is work or entertainment.
								</p>
								<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
									* Under Test Conditions
								</p>

							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_3.jpg');"></div>
					</div>

					</div>
               </div>

            </section>

            <section class="pt-section text-center" id="pt-1">

				<div class="container">



                    <h2 class="pt-title mt-4">Stringent Security</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/se2021/se14_2021_4.jpg" alt="">
                    </div>
                        <p class="pt-content text-left">
                            SE14 comes with a chassis lock support slot which makes it a safehouse for all your important work and data.
                        </p>
                        <p class="pt-content text-left">
                            Its fingerprint reader integrated with power button allows you to login with just one touch making it a handy gadget ready to be unleashed at a moment’s notice.
                        </p>
                    </div>
                </div>
            </section>


			<section class="pt-section text-center p-0" >
                <div class="container">
					<div class="row">
                   <div class="pt-content-wrapper mx-auto">
						<h1 class="mt-4">Delightful  Entertainment Experience</h1>
						<hr class="pt-title-hr">
                    </div>
                </div>
                </div>
            </section>



			<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-2">

				<div class="container">
					<div class="row">

					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_5.jpg');"></div>
					</div>

					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
							<div class="fs-0  my-lg-5 mo">
								<img src="/images/se2021/se14_2021_5.jpg" alt="">
                            </div>
							<h2 class="pt-title mt-4">A Visual Treat</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">
								<p class="pt-content mx-auto text-left" >
									The wide angle FHD IPS display of SE14 comes with ultra-narrow bezels enabling a mesmeric visual experience. The 14-inch screen is easy on the eyes with inbuilt anti-glare technology. The amazing display feedback at a stable response time ensures that you never miss out on any details during work or play.
								</p>
							</div>
						</div>
					</div>
				</div>
				</div>
            </section>



			<section class="pt-section d-flex flex-wrap text-center p-0">

				<div class="container">
					<div class="row">

					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">

							<div class="fs-0  my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_6.jpg" alt="">
                            </div>


							<h2 class="pt-title mt-4">Lightning-Fast SSD</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">
								<p class="pt-content mx-auto text-left">
									SE14 is powered by SSD storage drive which acts as optimal storage for all your files and propels the laptop performance in top gear. The robust SSD facilitates easy multitasking and negates sudden breakdowns while working on CPU draining programs.
								</p>

							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_6.jpg');"></div>
					</div>


				</div>
				</div>

            </section>


			<section class="pt-section text-center p-0" >
				<div class="container">
                   <div class="pt-content-wrapper mx-auto">
						<h1 class="pt-title mt-4">Common features for work & play</h1>
						<hr class="pt-title-hr">
                    </div>
                </div>
            </section>



			<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-3">

				<div class="container">
					<div class="row">

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_7.jpg');"></div>
						</div>

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">

								<div class="fs-0  my-lg-5 mo">
									<img src="/images/se2021/se14_2021_7.jpg" alt="">
								</div>


								<h2 class="pt-title mt-4">Versatile Connectivity</h2>
								<hr class="pt-title-hr">
								<div class="pt-content-wrapper-lg mx-auto">
									<p class="pt-content mx-auto text-left">
										The comprehensive ports of SE14, including two USB Type-C™ Thunderbolt 4 ports, two USB type A 3.2 ports, an HDMI port and Wi-Fi 6 allow you to seamlessly connect with multiple devices at the same time. Now, turn your laptop into a multifarious device and simultaneously charge, transfer data, display, and connect to various devices.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
            </section>



			<section class="pt-section d-flex flex-wrap text-center p-0" >


				<div class="container">
					<div class="row">

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">

								<div class="fs-0  my-lg-5 mo">
									<img src="/images/se2021/se14_2021_8.jpg" alt="">
								</div>


								<h2 class="pt-title mt-4">Signature Ergonomic Hinge</h2>
								<hr class="pt-title-hr">
								<div class="pt-content-wrapper-lg mx-auto">
									<p class="pt-content mx-auto text-left">
										VAIO’s signature ergonomic hinge allows SE14 to form a natural slant angle with your tabletop. The stress to palm and wrist is greatly reduced while typing, providing comfortable and delightful user experience. It also increases the airflow and reduces body temperature for better performance.
									</p>

								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_8.jpg');"></div>
						</div>


					</div>
				</div>

            </section>




			<section class="pt-section d-flex flex-wrap text-center  p-0" >

				<div class="container">
					<div class="row">

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_9.jpg');"></div>
						</div>

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">

								<div class="fs-0  my-lg-5 mo">
									<img src="/images/se2021/se14_2021_2.jpg" alt="">
								</div>


								<h2 class="pt-title mt-4">Backlit Keyboard</h2>
								<hr class="pt-title-hr ">
								<div class="pt-content-wrapper-lg mx-auto">
									<p class="pt-content mx-auto text-left" >
										Input experience is fun, versatile and carefree with SE14’s backlit keyboard. Get convenient typing experience whether it is a dimly loot conference room or an aircraft cabin with backlit keys and stay nonchalant in any environment.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
            </section>



			<section class="pt-section d-flex flex-wrap text-center  p-0">

				<div class="container">
					<div class="row">

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">


								<div class="fs-0  my-lg-5 mo">
									<img src="/images/se2021/se14_2021_10.jpg" alt="">
								</div>


								<h2 class="pt-title mt-4">Minimalist Premium Design</h2>
								<hr class="pt-title-hr">
								<div class="pt-content-wrapper-lg mx-auto">
									<p class="pt-content mx-auto text-left">
										SE14 is packed in a stylish portable body that weighs just 1.39kg. The minimal and sleek design of the SE14 is complimented with an aluminium frame that offers superior build quality and premium feel to the hand.
									</p>

								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_10.jpg');"></div>
						</div>

					</div>
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
                <!---    * Azumino Finish and all Quality control Tests are applicable to VAIO S11, VAIO S13, VAIO A12 and VAIO SX14 only. ----> </p>

                </div>
            </div>
        </div>
    </div>


	</div>
</section>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    {{--  <script src="{{ asset('js/product.js') }}"></script>  --}}
	<script defer src="{{ asset('js/html5gallery.js') }}"></script>

@stop

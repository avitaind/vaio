@extends('layout.app')

@section('title', 'VAIO E15')
@section('product_nav')

@include('products.e15.product_nav')
   @stop

@section('content')

<!------>

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_e15') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="{{ $top_store_url }}" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif

    </ul>
</div>

<!--- ------->
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">

       <!--- 	<a href="https://vaio-sg.nexstmall.com" target="_blank"  class="swiper-slide"> --->
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/e15/E15.jpg)">
                            <div class="main-banner" title=""></div>
                        </div>
         <!---           </a>  ---->
        
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
            background-image: url(/images/e15/E15.jpg);
        }

        @media(max-width: 991px) {
            .cms-banner-5 .main-banner {
            background-image: url(/images/e15/E15-2.jpg);
            }
        }

        @media(max-width: 991px) {

            .feature-box{
            margin:5px 0px;
             }
       }


    </style>

@endpush
<!--- Banner end here------------------------------------>

<!---Page content here--------------------------------------------->

    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0 feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Premium Japanese Craftsmanship</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Robust Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Mesmerizing Audio and Visuals</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Durability</h2>
                </a>
            </div>

            <section class="pt-section text-center" style="background-color: #eeeeee" id="pt-1">
                <div class="container">
                     <h2 class="pt-title mt-4">Premium Japanese Craftsmanship</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/e15/Premium_Japanese_Craftmanship.jpg" alt="">
                    </div>
                    <p class="pt-content text-left">
                        The VAIO E15 is built keeping in mind the modern design sensibilities. Sleek lines and minimal aesthetics are combined into a body that is light and portable without compromising the premium feel. Work never looked more stylish.
                        </p>
                        <p class="pt-content text-left">
                        VAIO brings the premium Japanese craftsmanship not only from its built but also through vibrant color variants inspired by Japanese cultural elements. Our signature Azumino finish is bound to add an extra touch of elegance to your work.
                        </p>
                        
                    <div class="selling-pt-sm active px-3">Premium Japanese Craftsmanship</div>
                    <hr class="pt-title-hr">

						<p class="pt-content-title mx-auto">Blast From the Past</p>						
                        <p class="pt-content text-left">
                               Borrowing its signature DNA, the VAIO E15 is an elegant machine that is ergonomically designed to be comfortable in all situations.
                        </p>
                        <p class="pt-content text-left">
                        The natural tilt offers comfort to the hand and the wrist, all the while ensuring adequate airflow that keeps the laptop cool and quiet, so there are no distractions stopping you from finishing your final presentation.
                        </p>

                    </div>
                    
				
				<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/e15/se14pt01-2.png" class="w-50" alt=""><img src="/images/e15/se14pt01-3.png" class="w-50" alt="">
                    </div>
				

                    <div class="selling-pt-sm active px-3">Premium Japanese Craftsmanship</div>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">						
						<p class="pt-content-title mx-auto">Effortless Mobility</p>
                        <p class="pt-content text-left">
                              Weighing less than 1.70 kg* for the 15.6-inch model, packing it in your bag and taking it to work feels like breeze. Use it on the workstation of your office or a couch at the comfort of your home, it fits perfectly, no matter where you place it.
                        </p>
                        <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
                            *Specifications as per the 15.6" model.
                        </p>
							
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/e15/Effortless_Mobility.jpg" alt="">
                    </div>
                    </div>

                </div>
            </section>

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0 feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Premium Japanese Craftsmanship</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Robust Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Mesmerizing Audio and Visuals</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Durability</h2>
                </a>
            </div>


            <section class="pt-section text-center" id="pt-2">
                <div class="container">
                    <h2 class="pt-title mt-4">Robust Performance</h2>
                    <hr class="pt-title-hr">
                    <div class="fs-0 my-4 my-lg-5">
                        <img src="/images/e15/Robust_Performance.jpg" alt="">
                    </div>
                    <div class="pt-content-wrapper mx-auto">
						 <p class="pt-content text-left mb-5">E15 is a veritable powerhouse, housing the latest AMD Ryzen processors, the performance capabilities are unmatched. Be it intensive photo and video editing or a last-minute sales pitch, the E15 is always ready to take on any processing challenge you throw at it. Equipped with up to 16GB RAM, up to 512GB of SSD storage, and pre-installed Windows 10 Home, the VAIO E15 ensures a fluid and responsive interface.</p>	
                    </div>
					
					
        <div class="selling-pt-sm active px-3">Robust Performance</div>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">

                    <p class="pt-content-title mx-auto">Seamless Connectivity</p>

						 <p class="pt-content text-left">Carrying the right adaptor with you every single time is a task. Say goodbye to connectivity hassles since the VAIO E15 has all the ports right at your fingertips.  
                        The two USB Type-A ports ensure lightning-fast data transfers while the USB Type-C port improves scalability with peripherals and makes it futureproof. The VAIO E15 also features a microSD card slot and an HDMI v1.4 that add to the seamless experience of the laptop.</p>	
					 </div>
                    <div class="fs-0 my-4 my-lg-5">
                        <img src="/images/e15/se14pt01-2.png" class="w-50" alt=""><img src="/images/e15/se14pt01-3.png" class="w-50" alt="">
                    </div>
                    <div class="selling-pt-sm active px-3">Robust Performance</div>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">

                <p class="pt-content-title mx-auto">All-Day Battery Life</p>

                    <p class="pt-content text-left">Lasting up to 8 hours*, the VAIO E15 offers best-in-class battery life. Power through your workday without finding the need to find a charger. It can also be charged with the provided USB Type-C port so you eliminate the hassle of carrying multiple chargers for your devices.</p>	
                    <p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
                          *Data on battery life is obtained from tests deploying internal tools by engineers. The actual battery performances could vary from battery life tests, due to differences in operating environment and conditions.
                    </p>	
                </div>

                </div>


                
            </section>

            

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0 feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Premium Japanese Craftsmanship</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Robust Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Mesmerizing Audio and Visuals</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Durability</h2>
                </a>
            </div>

            <section class="pt-section text-center" id="pt-3">
                <div class="container">
                     <h2 class="pt-title mt-4">Mesmerizing Audio and Visuals</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/e15/Mesmerizing_Audio_and_Visuals.jpg" alt="">
                    </div>
                        <hr class="pt-title-hr">

						 <p class="pt-content text-left">The stunning design is tastefully coupled with an equally stunning display. The E15 boasts a large 15.6 inch Full-HD IPS display that allows you to see every detail. Thin bezels achieve modern elegance that fits the screen in a compact body.
                High-quality dual speakers are an essential part of the stellar media experience offered by the VAIO E15. The speakers feature superb quality capable of delivering impactful and vibrant sound. The VAIO E15 also comes with two microphones that work actively to remove any unnecessary sounds that might interfere with your video conferences.</p>
                    </div>
					
				</div>
				
            </section>

            

    <div class="d-flex flex-wrap nav-pt px-4 p-lg-0 feature-box">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Premium Japanese Craftsmanship</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Robust Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Mesmerizing Audio and Visuals</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Guaranteed Durability</h2>
                </a>
            </div>


<section class="pt-section d-flex flex-wrap text-center text-white p-0" id="pt-4">
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #808090;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">Guaranteed Durability</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content mx-auto" style="color: #ceced2"> Every VAIO laptop goes through rigorous quality testing that ensures that your device lasts longer. A strict quality control ensures the global standards are consistently met. VAIO’s arduous 3-point quality test ensures that every detail is carefully inspected before it reaches your hands. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0">
                    <div class="rect-banner" title="VAIO SE14 Thin and Lightweight Body" style="background-image: url('/images/e15/Guaranteed_Durability.jpg');"></div>
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
                    * Azumino Finish and all Quality control Tests are applicable to VAIO E15 only.<br/>
                    * Specifications may vary according to different configurations.
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

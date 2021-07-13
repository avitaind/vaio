@extends('layout.app')

@section('title', __('Product Range'))

@section('content')
<!--- Banner here VAIO z------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal">
		<a href="{{ route('product.overview_fuji_z') }}" target="_blank" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-6" style="background-image:url(/images/z/VAIO-Z-revel_1920-x-720.jpg)">
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
        .cms-banner-6 .main-banner {
            background-image: url(/images/z/VAIO-Z-revel_1920-x-720.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-6 .main-banner {
            background-image: url(/images/z/VAIO-Z-revel_991-x-1050.jpg);
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




			.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
				width: calc(100% - 30px);
			}

			.py-5 {
				padding-top: 2rem!important;
				padding-bottom: 2rem!important;
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


<!--- Banner here VAIO E15------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">

       <a href="{{ route('product.overview_e15') }}" target="_blank"  class="swiper-slide">
            <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/e15/E15.jpg)">
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




<!--- Banner here VAIO SE14 ------------------------------------>

<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
            <a href="{{ route('product.overview_se14') }}"  target="_blank" class="swiper-slide">
            <div class="main-banner-wrapper cms-banner cms-banner-1">
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

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
	<script defer src="{{ asset('js/html5gallery.js') }}"></script>

@stop


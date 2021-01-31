@extends('layout.app')

@section('title', 'Fuji Z')
@section('product_nav')


@section('content')

<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">

       <!--- 	<a href="https://vaio-sg.nexstmall.com" target="_blank"  class="swiper-slide"> --->
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/fuji-z/vaio_comingsoon_page_pc_en.jpg)">
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
            background-image: url(/images/fuji-z/vaio_comingsoon_page_pc_en.jpg);
        }

        @media(max-width: 991px) {
            .cms-banner-5 .main-banner {
            background-image: url(/images/fuji-z/vaio_comingsoon_page_mo_en.jpg);
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


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop

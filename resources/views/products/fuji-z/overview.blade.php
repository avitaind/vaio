@extends('layout.app')

@section('title', 'Fuji Z')
@section('product_nav')


@section('content')

<!--- Banner here------------------------------------>
<section class="main-section text-center">
  <a href="/login"><img src="/images/fuji-z/vaio_comingsoon_page_pc_en.jpg" id="desktop" alt="VAIO Fuji Z Launch" width="100%" /></a>
  <a href="/login"><img src="/images/fuji-z/vaio_comingsoon_page_mo_en.jpg" id="mobile" alt="VAIO Fuji Z Event" width="100%" /></a>

</section>



<!--- Banner end here------------------------------------>

@push('css')
   
<style>
		
		img.map, map area{
			outline: none;
		}
        
		main{
			background-color: #000; 
		}
		
		.main-section img{
			width: 100%; 
			margin: auto;
		}
		
       .mb_only {
				display:none;
        }
       .pc_only {
				display:block;
        }

        @media(max-width: 991px) {
		 
          .pc_only {
				display:none;
            }
          .mb_only {
				display:block;
            }
        }

    </style>

@endpush

<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
 
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop

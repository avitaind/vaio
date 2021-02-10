@extends('layout.app')

@section('title', 'COMING SOON')
@section('product_nav')


@section('content')

<!--- Banner here------------------------------------>


<section class="main-section text-center">
   <img src="/images/fuji-z/vaio_comingsoon_mo_en_v1.2.jpg" class="pc_only" usemap="#pc_img" hidefocus="true">
	  
	<map name="pc_img">
		<area href="{{ route('login') }}" coords="209,794,593,850" shape="rect">

	</map>
	
	
	<img src="/images/fuji-z/vaio_comingsoon_page_mo_en_v1.2.jpg" class="mb_only" usemap="#mo_img" hidefocus="true" style="">
	 
	<map name="mo_img">
		<area href="{{ route('login') }}" coords="208,797,598,855" shape="rect">
	</map>
	
	
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
  <!--
	   <script>
		$(document).ready(function(e) {
			$('img[usemap]').rwdImageMaps(); 
		});
	</script> 
----->

@stop

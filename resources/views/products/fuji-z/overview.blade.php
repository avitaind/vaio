@extends('layout.app')

@section('title', 'Fuji Z')
@section('product_nav')


@section('content')

<!--- Banner here------------------------------------>
<section class="main-section text-center">
   <img src="/images/fuji-z/vaio_comingsoon_page_pc_en.jpg" class="pc_only" usemap="#pc_img" hidefocus="true">
	  
	<map name="pc_img">
		<area href="/login" coords="596,853,207,787" shape="rect">
	</map>
	
	
	<img src="/images/fuji-z/vaio_comingsoon_page_mo_en.jpg" class="mb_only" usemap="#mo_img" hidefocus="true" style="">
	 
	<map name="mo_img">
		<area href="/login" coords="433,143,1264,155" shape="rect">
	</map>
	
	
</section>


<!--- Banner end here------------------------------------>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop

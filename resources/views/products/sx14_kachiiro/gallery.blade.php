@extends('layout.app')

@section('title', 'VAIO SX14 | KACHI-IRO EDITION Gallery')

@section('product_nav')
    @include('products.sx14_kachiiro.product_nav')
@stop

@section('content')


<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_sx14_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_sx14_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_sx14_kachiiro') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
		  <!--
		<li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
			<a href="https://vaio.nexstmall.com/products/vaio-z-signature-edition?utm_source=brandsite&utm_medium=button&utm_campaign=buynow" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
		</li>  -->
    </ul>
</div>

    <script src="https://hk.vaio.com/js/html5gallery.js"></script>

<style>
.html5gallery{
	width:100% !important;	
}

.html5gallery-thumbs-0{
   /* margin: auto !important;*/
}


@media(max-width: 991px){
	.html5gallery{
		margin:auto !important;
    	height: 500px !important;
	}
	
	.html5gallery-box,
	.html5gallery-car { 
		bottom:10px !important;
		
	}
	
	.html5gallery-elem-image{
		top:0px !important;		
	}
}
</style>
 

    <div style="text-align:center;">
    
     <div style="display:none;margin:0px auto 0px;" 
	class="html5gallery"
	data-responsive="true"
	data-responsivefullscreen="true"
    data-mobileresizeevent="true"
    data-enabletouchswipe="true" 
	data-html5player="true"
	data-autoslide="false" 
	data-skin="gallery" 
	data-showtitle="false" 
    data-thumbshowtitle="false" 
    data-thumbheight="120" 
	data-showsocialmedia="false" 
	data-showfullscreenbutton="false"   
	data-autoplayvideo="false" 
	data-width="800" 
	data-height="450" 
	data-effect="slide" 
	data-resizemode="fit" 
	data-padding="0"
	data-galleryshadow="false"
	data-slideshadow="false"
	data-carouselmargin="-150"
    data-showplaybutton="false"
	>
            
		<a href="/images/gallery/sx14_kachiiro/sx14_kachiiro_3.jpg">
			<img src="/images/gallery/sx14_kachiiro/sx14_kachiiro_3.jpg" >
		</a>
		 
		 <a href="/images/gallery/sx14_kachiiro/sx14_kachiiro_1.jpg">
			<img src="/images/gallery/sx14_kachiiro/sx14_kachiiro_1.jpg" >
		</a>
		 
		 <a href="/images/gallery/sx14_kachiiro/sx14_kachiiro_2.jpg">
			<img src="/images/gallery/sx14_kachiiro/sx14_kachiiro_2.jpg" >
		</a>
		 
		 <a href="/images/gallery/sx14_kachiiro/sx14_kachiiro_4.jpg">
			<img src="/images/gallery/sx14_kachiiro/sx14_kachiiro_4.jpg" >
		</a>
		 
		 <a href="/images/gallery/sx14_kachiiro/sx14_kachiiro_5.jpg">
			<img src="/images/gallery/sx14_kachiiro/sx14_kachiiro_5.jpg" >
		</a>
		 
		 <a href="/images/gallery/sx14_kachiiro/sx14_kachiiro_6.jpg">
			<img src="/images/gallery/sx14_kachiiro/sx14_kachiiro_6.jpg" >
		</a>
		  
 
        </div>
    
    </div>  

 


@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
	<script defer src="{{ asset('js/html5gallery.js') }}"></script>

@stop

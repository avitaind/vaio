@extends('layout.app')

@section('title', 'VAIO SX12')

@section('product_nav')
    @include('products.sx12.whl.product_nav')
@stop

@section('content')

    <script src="/js/html5gallery.js"></script>

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
 

    <div style="text-align:center; margin-top:50px;">
    
     <div style="display:none;margin:-150px auto 0px;" 
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
    
    <!--
            <a href="/images/gallery/sx12/kachiiro01.jpg">
                <img src="/images/gallery/sx12/kachiiro01.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/kachiiro02.jpg">
                <img src="/images/gallery/sx12/kachiiro02.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/kachiiro03.jpg">
                <img src="/images/gallery/sx12/kachiiro03.jpg" alt="VAIO SX12" >
            </a> -->
            <a href="/images/gallery/sx12/CN_SX12_SV_frontRight.jpg">
                <img src="/images/gallery/sx12/CN_SX12_SV_frontRight.jpg" alt="VAIO SX12" >
            </a>
           <!-- <a href="/images/gallery/sx12/CN_SX12_PK_frontRight.jpg">
                <img src="/images/gallery/sx12/CN_SX12_PK_frontRight.jpg" alt="VAIO SX12" >
            </a>-->
            <a href="/images/gallery/sx12/CN_SX12_BR_frontRight.jpg">
                <img src="/images/gallery/sx12/CN_SX12_BR_frontRight.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/CN_SX12_bk_frontRight.jpg">
                <img src="/images/gallery/sx12/CN_SX12_bk_frontRight.jpg" alt="VAIO SX12" >
            </a>
    
            <a href="/images/gallery/sx12/CN_SX12_bk_frontLeft.jpg">
                <img src="/images/gallery/sx12/CN_SX12_bk_frontLeft.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/CN_SX12_bk_Front.jpg">
                <img src="/images/gallery/sx12/CN_SX12_bk_Front.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/CN_SX12_bk_EN KB.jpg">
                <img src="/images/gallery/sx12/CN_SX12_bk_EN KB.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/CN_SX12_bk_Right_Open.jpg">
                <img src="/images/gallery/sx12/CN_SX12_bk_Right_Open.jpg" alt="VAIO SX12" >
            </a>
            <a href="/images/gallery/sx12/CN_SX12_bk_Left_Open.jpg">
                <img src="/images/gallery/sx12/CN_SX12_bk_Left_Open.jpg" alt="VAIO SX12" >
            </a>
           
        </div>
    
    </div>  

 


@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop

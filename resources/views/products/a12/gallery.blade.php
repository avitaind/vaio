@extends('layout.app')

@section('title', 'VAIO A12')

@section('product_nav')
    @include('products.a12.product_nav')
@stop

@section('content')

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
            <a href="https://hk.vaio.com/images/gallery/a12/a12-01.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-01.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-02.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-02.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-03.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-03.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-04.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-04.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-05.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-05.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-06.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-06.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-07.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-07.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-08.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-08.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-09.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-09.jpg" alt="VAIO A12" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/a12/a12-10.jpg">
                <img src="https://hk.vaio.com/images/gallery/a12/a12-10.jpg" alt="VAIO A12" >
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

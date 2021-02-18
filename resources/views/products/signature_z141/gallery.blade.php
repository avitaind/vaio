@extends('layout.app')

@section('title', 'VAIO Z SIGNATURE EDITION')

@section('product_nav')
    @include('products.signature_z141.product_nav')
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
            
		<a href="/images/gallery/z/z_1.jpg">
			<img src="/images/gallery/z/z_1.jpg" >
		</a>
		 
		 <a href="/images/gallery/z/z_2.jpg">
                <img src="/images/gallery/z/z_2.jpg" >
            </a>
		 
		 <a href="/images/gallery/z/z_3.jpg">
			<img src="/images/gallery/z/z_3.jpg" >
		</a>
		  
		 <a href="/images/gallery/z/z_7.jpg">
			<img src="/images/gallery/z/z_7.jpg" >
		</a>
		 
		 <a href="/images/gallery/z/z_8.jpg">
			<img src="/images/gallery/z/z_8.jpg" >
		</a>
		 
		 <a href="/images/gallery/z/z_9.jpg">
			<img src="/images/gallery/z/z_9.jpg" >
		</a>
		 
		 <a href="/images/gallery/z/z_4.jpg">
			<img src="/images/gallery/z/z_4.jpg" >
		</a>
		 
		 <a href="/images/gallery/z/z_5.jpg">
			<img src="/images/gallery/z/z_5.jpg" >
		</a>
		 
		 <a href="/images/gallery/z/z_6.jpg">
			<img src="/images/gallery/z/z_6.jpg" >
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

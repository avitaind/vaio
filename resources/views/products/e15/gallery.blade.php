@extends('layout.app')

@section('title', 'VAIO E15')

@section('product_nav')
    @include('products.e15.product_nav')
@stop

@section('content')

<!---

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

------->

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
            <a href="/images/gallery/e15/VAIO_E15-Silver01.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver01.jpg" alt="VAIO E15" >
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Silver02.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver02.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Silver03.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver03.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Silver04.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver04.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Silver05.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver05.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Silver06.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver06.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Silver07.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Silver07.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black01.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black01.jpg" alt="VAIO E15" >
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black02.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black02.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black03.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black03.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black04.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black04.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black05.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black05.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black06.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black06.jpg" alt="VAIO E15">
            </a>
            <a href="/images/gallery/e15/VAIO_E15-Black07.jpg">
                <img src="/images/gallery/e15/VAIO_E15-Black07.jpg" alt="VAIO E15">
            </a>


           
        </div>
    
    </div>  

 


@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
    <script src="{{ asset('js/html5gallery.js') }}"></script>

@stop

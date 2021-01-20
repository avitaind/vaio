@extends('layout.app')

@section('title', 'VAIO SE14')


@section('content')

<!----
------>

<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_se14') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_se14') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_se14') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>
        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="{{ $top_store_url }}" target="_blank" class="nav-link py-3 py-lg-2">@lang('common.buy_now')</a>
            </li>
        @endif

    </ul>
</div>
<!-----
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
            <a href="/images/gallery/se14/VAIO_SE14-Pink01.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-Pink01.jpg" alt="VAIO SE14" >
            </a>
            <a href="/images/gallery/se14/VAIO_SE14-Pink02.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-Pink02.jpg" alt="VAIO SE14">
            </a>
            <a href="/images/gallery/se14/VAIO_SE14-Pink03.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-Pink03.jpg" alt="VAIO SE14">
            </a>
            <a href="/images/gallery/se14/VAIO_SE14-Pink04.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-Pink04.jpg" alt="VAIO SE14">
            </a>
            <a href="/images/gallery/se14/VAIO_SE14-Pink05.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-Pink05.jpg" alt="VAIO SE14">
            </a>
            <a href="/images/gallery/se14/VAIO_SE14-Pink06.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-Pink06.jpg" alt="VAIO SE14">
            </a>
            <a href="/images/gallery/se14/VAIO_SE14-grey01.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-grey01.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-grey02.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-grey02.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-03.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-03.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-04.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-04.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-05.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-05.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-06.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-06.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-07.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-07.jpg" alt="VAIO SE14">
             </a>
            <a href="/images/gallery/se14/VAIO_SE14-08.jpg">
                <img src="/images/gallery/se14/VAIO_SE14-08.jpg" alt="VAIO SE14">
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

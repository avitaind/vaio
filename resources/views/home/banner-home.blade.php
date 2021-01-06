<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
             <div class="carousel-item active">
                <div class="responsive-block">
                    <div class="banner-block responsive-item  d-flex align-items-center">
                           <iframe width="100%" height="100%" src="/videos/VAIO-Launch-Date-v1.21.mp4?autoplay=1&mute=1" controls frameborder="0" allowfullscreen>
                    </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@section('css')
    <style type="text/css">
        #home_banner video{
            position: absolute;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            background-color:#000;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 200%;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
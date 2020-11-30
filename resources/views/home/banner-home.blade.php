<section class="top-nav-padding homepage-banner">

    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                       
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/banner-1-en.jpg')"></div>
                            	<div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/mobile-1-en.jpg')"></div>
                          
                       
                    </div>
                </div>
            </div>
 
            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                       
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/banner-2-en.jpg')"></div>
                            	<div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/mobile-2-en.jpg')"></div>
                          
                       
                    </div>
                </div>
            </div>
 
            
            
        <ol class="carousel-indicators">
            <li data-target="#home_banner" data-slide-to="0" class="active"></li>
            <li data-target="#home_banner" data-slide-to="1"></li>
        </ol>
    </div>
</section>

@section('css')
    <style type="text/css">
        #home_banner video{
            position: absolute;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
@endsection
@section('js')
    <script type="text/javascript">

        var imageTimer = null;

        $('video').on('ended', function(){
            $('#home_banner').carousel('next');
        });
        $('#home_banner').on('init slide.bs.carousel', function (e) {

            clearTimeout( imageTimer );

         $(this).find('video')[3].play();

            var new_video = $(e.relatedTarget).find('video')[3];

            if ( new_video ) {
                new_video.play();
            } else {

                imageTimer = setTimeout( function( ){
                    $('#home_banner').carousel('next');
                }, 5000 );

            }
        }).trigger('init');

    </script>
@endsection

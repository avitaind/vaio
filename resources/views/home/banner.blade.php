<section class="main-banner-section" style="height: fit-content; position: relative;">
    <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper">
      <span class="demo">
             Count Down <p id="demo"> </p> Stay Tuned!
     </span>
      

       <!---
        <div class="countdown">Count Down in XX Days. <span id="days"> 10 Days</span> <span id="hours">24 </span>Hours <span id="minutes">60 </span> Minutes <span id="second">60 </span> Second Stay Tuned! </div>
        --->

	  @foreach( $banners as $index => $banner )

              @if( $banner->url )
                    @php
                        $url_host = parse_url($banner->url, PHP_URL_HOST);

                        if ( $url_host == null ) {
                            $is_same_host = true;

                       } else {
                            $is_same_host = ( $url_host == request()->getHost() );
                        }

                    @endphp

                    <a href="{{ $banner->url }}" @if(!$is_same_host) target="_blank" @endif class="swiper-slide">
                        <div class="main-banner-wrapper cms-banner cms-banner-{{ $index }}">
                            <div class="main-banner" title=""></div>
                        </div>
                    </a>
                @else

                    <div class="swiper-slide">
                        <div class="main-banner-wrapper cms-banner cms-banner-{{ $index }}">
                            <div class="main-banner" title=""></div>
                        </div>
                    </div>
                @endif



            @endforeach

        </div>
        <div class="swiper-pagination"></div>

    </div>

</section>
@section('js')

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours "
  + minutes + " Minutes " + seconds + " Seconds ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endsection

@push('css')

    <style>

    span.demo {
        position: absolute;
        font-size:30px;
        font-style:poppins;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        color:#fff;
        text-align:center;
        z-index:1;
    }
        .cms-banner:before {
            padding-top: 37.51%;
           
        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
            span.demo {
        position: absolute;
        font-size:16px;
        font-style:poppins;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        color:#fff;
        text-align:center;
        z-index:1;
    }
        }


        @foreach( $banners as $index => $banner )
            .cms-banner-{{ $index }} .main-banner {
            background-image: url( {{ $banner->banner_url }} );
        }

        @media(max-width: 991px) {
            .cms-banner-{{ $index }} .main-banner {
                background-image: url( {{ $banner->mobile_banner_url }} );
            }
        }


        @endforeach
    </style>

@endpush

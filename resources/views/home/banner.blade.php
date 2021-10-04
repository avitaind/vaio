<section class="main-banner-section" style="height: fit-content; position: relative;">
    <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper">

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


@push('css')

    <style>


        .cms-banner:before {
            padding-top: 37.51%;

        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
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

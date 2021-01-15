@extends('layout.app')

@section('title', __('common.nav.where_to_buy'))

@section('content')

    <section class="top-nav-padding" style="background-color:white; margin-top: 50px;">

        <div class="container py-5">
          <!--- <h2 class="page-title mb-5">@lang('common.nav.where_to_buy')</h2> --->
          <!---  <h2 class="page-title mb-5">Stay Tuned For More</h2> ------>

            <div class="row">
            <a class="px-md-4 py-2" target="_blank" href="https://www.flipkart.com/vaio-laptops-store?otracker=clp_banner_1_4.banner.BANNER_laptops-store_I9MXHU2TP6HG"> <img src="images/flipkart-logo.jpeg" id="desktop" alt="Where to Buy" width="25%" /></a>
            <a class="px-md-4 py-2" target="_blank" href="https://www.flipkart.com/vaio-laptops-store?otracker=clp_banner_1_4.banner.BANNER_laptops-store_I9MXHU2TP6HG">    <img src="images/flipkart-logo.jpeg" id="mobile" alt="Where to Buy" width="50%" style="margin-left: 25%;"/></a>
                <!--<div class="col-12 col-md-12 col-lg-8 mt-3">
                    <div class="map-wrap embed-responsive embed-responsive-1by1">
                        <div id="gmap-embed" class="embed-responsive-item google_map" data-lng="114.181758" data-lat="22.278394" style="height:100%;"></div>
                    </div>
                </div>
                <div id="hk_info" class="col-12 col-md-12 col-lg-4 mt-3" style="background-color:  white;">
                    <div class="col-12 py-4" style="border:1px solid #f5f5f5">
                        <div class="row flex-no-wrap">
                            <div class="col pr-0">
                                <input id="search_field" placeholder="@lang('common.search')" type="text" class="form-control" style="min-height: 50px;">
                            </div>
                            <div class="col col-auto">
                                <button class="btn btn-primary support-search-btn-block" style="min-width: auto !important; min-height: 50px;"  >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                  {{--  <div class="col-12 d-flex p-3 ls-0"  style="border:1px solid #f5f5f5">
                        <div class="">Select Category</div>
                        <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>

                    </div>--}}
                    <div class="col-12" style="
                        height: 630.328px;
                        overflow-y: auto;
                        background-color: #f4f4f4;
                        ">
                        <ul id="shop_list" class="shops p-0">

                        </ul>
                    </div>
                </div>--> 
                
             	<div class="shopsList"></div> 
                
            </div>

            <div class="contact-enquire-wrapper mt-5 pt-0 pt-lg-4">
                <h2 class="page-title">@lang('common.contact_us.sales.title')</h2>
                <h3 class="content-text mt-3 mb-5">@lang('common.contact_us.sales.open_hour')</h3>
                <div class="row">
                    <div class="col-12 col-md-6 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/phone.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.sales.phone')</p>
                        <a href="tel:18001039635" class="sub-text">1800-103-9635</a>
                    </div>
                    <div class="col-12 col-md-6 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/email-icon.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.sales.email')</p>
                        <a href="mailto:salesin@in.vaio.com" class="sub-text">Salesin@in.vaio.com</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@stop

@section('js')

   <script>
        var maps;
        var icon = '/images/marker.png';

        function initMap() {

            // Get all lat lng
            $('.google_map').each(function (index, item) {

                var data = $(item).data();
                var location = new google.maps.LatLng(data.lat, data.lng);
                var map = new google.maps.Map(item, {
                    zoom: 18,
                    maxZoom: 18,
                    minZoom: 18,
                    disableDefaultUI: true,
                });
                maps = map;
            });



        }

        function loadShops( ) {

            $.ajax({
                url: "/data/shops",
                cache: false
            }).done(function (json) {
                $(json.shops).each(function ( index ) {
                    var location = new google.maps.LatLng(this.lat, this.long);
                    if(index==0){
                       // maps.setCenter(location); 
                    }
                    var marker = new google.maps.Marker({
                        position: location,
                        map: maps,
                        icon: icon
                    });
                    //$(".shops").append('<a href="#" class="shop" data-lng="' + this.long + '" data-lat="' + this.lat + '"><li class="shop-info ls-0 pl-5 py-2"><div class="sub-title shop-name">' + this.name + '</div><div class="sub-text">' + this.address + '</div><div class="sub-text">' + this.phone + '</div></li></a>');
					$(".shopsList").append('<div class="col-md-6"><h4>' + this.name + '</h4><span class="address">' + this.address + '</span><a class="tel" href="tel:' + this.phone + '">' + this.phone + '</a><div class="spacer-single"></div></div>');
                });
            });


        }

        $(function () {
            // Bind Click event
            $("ul").on("click", "a.shop", function () {

                var data = $(this).data();
                var location = new google.maps.LatLng(data.lat, data.lng);
                maps.setCenter(location);
            });

            loadShops();
        });
        $(document).ready(function(){
              $("#search_field").on("keyup", function() {
             var value = $(this).val().toLowerCase();
            $("#shop_list .shop-info").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
            });
        });
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_AK') }}&callback=initMap"></script>



@stop

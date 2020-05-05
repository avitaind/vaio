@php
    $centers = \App\ServiceCenter::orderBy('seq', 'asc')->get();
@endphp

<div id="support-center" class="support-center-wrap">
    <div class="container  ">
        <div class="row  ">
            <div class="row no-gutters my-4 col-12 mx-auto ml-0 ml-md-4">
                <div class="col-12 page-title mb-3 ls-0">@lang('common.contact_us.service_support.title')</div>

                
                  	<div class="shopsList">

                            @for( $i = 0 ; $i < count($centers) ; $i++ )

                                @php
                                    $center = $centers[$i];
                                @endphp
                                
                                <div class="col-md-6">
                                <h4>{{ $center->name }}</h4>
                                <span class="address">{{ $center->address }}</span>
                                <span class="openinghour">{{ $center->opening_hour }}</span> 
                                <a class="tel" href="tel:{{ $center->phone }}">{{ $center->phone }}</a>
                                <a class="email" href="mailto:{{ $center->email }}">{{ $center->email }}</a>
                                <div class="spacer-single"></div>
                                </div>
                                 
                            @endfor
                            
                            
                    </div><!--shopsList-->  
                
            </div>
        </div>
    </div>
</div>


@push('css')

    <style>
        /*#support-center-list {*/

            /*position: absolute;*/
            /*left: .5em;*/
            /*right: .5em;*/
            /*z-index: 1;*/
        /*}*/

        #support-center-list .list-group-item {

            background: #fff;

        }

        #tw_info {
            background-color:white;
            height: 600px;
            overflow-y: scroll;
        }

        @media (max-width: 992px) {

            #tw_info {
                height: 300px;
                overflow-y: scroll;
            }
        }


        .shop-info .sub-text {
            position: relative;
            padding-left: 30px;
        }

        .shop-info .sub-text .fa {
            position: absolute;
            left: 0px;
            top: 5px;
        }

    </style>

@endpush

@push('js')

    <script>


        var shops = @json($centers);

        var selected_shop_index = 0;

        function update_center_info ( center , scrollToSection ) {


            // $("#center_address").text( center.title );
            // $("#center_address").text(center.address);
            // $("#center_opening_hour").text(center.open_hour);
            // $("#center_phone").text(center.phone);
            // $("#center_mail").text(center.mail);

            // Update Center Pin.

            if ( maps ) {
                var location = new google.maps.LatLng(center.latitude, center.longitude);
                markers.setPosition(location);
                maps.setCenter(location);

                if ( scrollToSection ) {
                    $('html, body').animate({
                        scrollTop: $("#support-center").offset().top - 72
                    });
                }
            } 

        }


        function hideCenterPicker( ) {

            var list = $("#support-center-list");

            if ( list.hasClass('collapsing')) {
                return; // Do nothing.
            }

            if ( list.hasClass('show') ) {
                list.collapse('hide');
            }
        }

        // update_center_info( shops[0] );


        /*if the user clicks anywhere outside the select box, then close all select boxes:*/
        // document.addEventListener("click", function( ) {
        //     hideCenterPicker();
        // });

        $(function() {



            $("#support-center-list .shop-info").click(function( element ) {

                // hideCenterPicker();
console.log("SHOP CLICK!");

                var index = $(this).data('shop-index');
                selected_shop_index = index;
                update_center_info( shops[index] , true);
            });

            update_center_info( shops[0] , false );

        });






    </script>



@endpush
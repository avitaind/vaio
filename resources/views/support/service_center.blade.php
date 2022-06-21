@php
$centers = \App\NewServiceCenter::orderBy('id', 'asc')->paginate(10);
@endphp

<div id="support-center" class="support-center-wrap">
    <div class="container  ">
        <div class="row  ">



            <div class="container">
                <div class="mt-5 pt-0 pt-lg-4">
                    <!--- <h2 class="page-title mb-5">@lang('common.contact_us.headquarter.title')</h2> --->
                    <div class="row no-gutters my-4 col-12 mx-auto ml-0 ml-md-4">

                        <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                            <img class="info-icon" src="/images/icons/phone.png">
                            <p class="content-text mt-3 mb-0">@lang('common.contact_us.headquarter.general_phone')</p>
                            <a href="tel:18001039635" class="sub-text">0120-4761661</a>
                        </div>

                        <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                            <img class="info-icon" src="/images/icons/email-icon.png">
                            <p class="content-text mt-3 mb-0 ">@lang('common.contact_us.headquarter.general')</p>
                            <a href="mailto:Supportin@in.vaio.com" class="sub-text">Supportin@in.vaio.com</a>
                        </div>
                    </div>
                </div>

                <!---
                <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                    <img class="info-icon" src="/images/icons/phone.png">
                    <p class="content-text mt-3 mb-0">@lang('common.contact_us.headquarter.general_phone')</p>
                    <a href="tel:18001039635" class="sub-text">1800-103-9635</a>
                </div>

                <div class="col-12 col-md-4 text-center mb-4 mb-lg-0">
                    <img class="info-icon" src="/images/icons/email-icon.png">
                    <p class="content-text mt-3 mb-0 ">@lang('common.contact_us.headquarter.general')</p>
                    <a href="mailto:salesin@in.vaio.com" class="sub-text">Salesin@in.vaio.com</a>
                </div>

----->

                <div class="container">
                    <div class="alert alert-dismissible alert-info">
                        Due to the global outbreak of the coronavirus (COVID-19), the service center will adjust the
                        operation time or temporarily shut down for the time being. The adjustment will be subjected to
                        local regulations and will be updated as soon as possible. We thank you for your patience and
                        understanding.
                    </div>
                </div>
                <div class="col-12 page-title mb-3 ls-0">@lang('common.contact_us.service_support.title')</div>

                <div class="form-group">

                    <div class="input-group">

                    <input type="text" class="form-control" id="search" name="search" placeholder="Type your City / State or Postal Code Here"> </input>
                    <div class="input-group-addon overlay-addon"><i class="fa fa-search" aria-hidden="true"></i></div>

                    </div>
                </div>

             <div class="shopsList" id="shopsList">
                    @if (!empty($centers) && $centers->count())
                        @foreach ($centers as $search)
                            <div class="col-md-6">
                                <div>
                                    <span class="address">{{ $search->address }}</span>
                                </div>

                                <div>
                                    <i class="fa fa-clock-o icon"></i>
                                    <span class="openinghour">{{ $search->opening_hour }}</span>
                                </div>

                                <div>
                                    <a class="tel" href="tel:{{ $search->phone }}">{{ $search->phone }}</a>
                                </div>
                                <br><br>
                            </div>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">There are no data.</td>
                        </tr>
                    @endif
                    {{-- @for ($i = 0; $i < count($centers); $i++)

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

                            @endfor --}}


                </div>
                <!--shopsList-->

            </div>
        </div>
        {!! $centers->links() !!}
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
            background-color: white;
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

        function update_center_info(center, scrollToSection) {


            // $("#center_address").text( center.title );
            // $("#center_address").text(center.address);
            // $("#center_opening_hour").text(center.open_hour);
            // $("#center_phone").text(center.phone);
            // $("#center_mail").text(center.mail);

            // Update Center Pin.

            if (maps) {
                var location = new google.maps.LatLng(center.latitude, center.longitude);
                markers.setPosition(location);
                maps.setCenter(location);

                if (scrollToSection) {
                    $('html, body').animate({
                        scrollTop: $("#support-center").offset().top - 72
                    });
                }
            }

        }


        function hideCenterPicker() {

            var list = $("#support-center-list");

            if (list.hasClass('collapsing')) {
                return; // Do nothing.
            }

            if (list.hasClass('show')) {
                list.collapse('hide');
            }
        }

        // update_center_info( shops[0] );


        /*if the user clicks anywhere outside the select box, then close all select boxes:*/
        // document.addEventListener("click", function( ) {
        //     hideCenterPicker();
        // });

        $(function() {



            $("#support-center-list .shop-info").click(function(element) {

                // hideCenterPicker();
                console.log("SHOP CLICK!");

                var index = $(this).data('shop-index');
                selected_shop_index = index;
                update_center_info(shops[index], true);
            });

            update_center_info(shops[0], false);

        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/support.js') }}"></script>
    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    $('#shopsList').html(data);
                }
            })
        })
    </script>
@endpush

        var markers;
        var maps;

        function initMap() {

            // Get all lat lng

            $('.google_map').each(function(index, item) {

                var data = $(item).data();

                var location = new google.maps.LatLng(data.lat, data.lng);

                var map = new google.maps.Map(item, {
                    zoom: 18,
                    maxZoom: 18,
                    minZoom: 18,
                    disableDefaultUI: true,
                    center: location,
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                });
                maps = map;
                markers = marker;
            });
        }

        $(function() {
            $(".faq").click(function() {
                var jsonurl = $(this).data().json;
                var category_title = $(this).find('.faq-category').html();

                $('.faq-title').html(category_title);
                $('.list-group').html('');
                $('.faq-question-group').removeClass('d-none');
                $(".faq-back").removeClass('d-none');
                $('.faq-title').removeClass('d-none').addClass('d-flex');
                $('.faq-content').each(function() {
                    $(this).addClass('d-none');
                });

                $('html, body').animate({ scrollTop: $("#faq").offset().top  -  ( $('.header').length ? $('.header').innerHeight() : 0 ) }, 0);

                $.get(jsonurl, function(data){
                    $.each( data, function( index, value ) {
                        $('.list-group').append('<li class="list-group-item" style="cursor: pointer;">' +
                        '<div class="px-5 d-none d-sm-block faq-question-index">Q' + (value.question_no) + '</div>' +
                        '<div class="faq-question-text">' + value.question + '</div>' +
                        '<div class="faq-solution-text" style="display: none;">' + value.solution + '</div>' +
                        '</li>');
                    });
                })

            });


            // Show the question and answer
            $('.list-group').on("click", "li", function(event) {
                $('div.faq-back').data('backto', 'list');

                $('.faq-text').addClass('d-none');
                $('.list-group').addClass('d-none');

                $('.faq-question-no').html($(this).find('.faq-question-index').text()).removeClass('d-none');
                $('.faq-question').html($(this).find('.faq-question-text').text()).removeClass('d-none');
                $('.faq-solution').html($(this).find('.faq-solution-text').html()).removeClass('d-none');

                $('html, body').animate({ scrollTop: $("#faq").offset().top  -  ( $('.header').length ? $('.header').innerHeight() : 0 ) }, 0);
            });


            $('.faq-back').on('click', function() {
                var backTo =  $('div.faq-back').data('backto');
                switch (backTo){
                    case 'faq':
                        $('.faq-question-group').addClass('d-none');
                        $(".faq-back").addClass('d-none');
                        $('.faq-text').removeClass('d-none');
                        $('.faq-title').removeClass('d-flex').addClass('d-none');
                        $('.faq-content').each(function() {
                            $(this).removeClass('d-none');
                        });
                        $('html, body').animate({ scrollTop: $("#faq").offset().top  -  ( $('.header').length ? $('.header').innerHeight() : 0 ) }, 0);
                        break;
                    case 'list':
                        $('div.faq-back').data('backto', 'faq');
                        $('.faq-question-no').html('').addClass('d-none');
                        $('.faq-question').html('').addClass('d-none');
                        $('.faq-text').removeClass('d-none');
                        $('.faq-solution').html('').addClass('d-none');
                        $('.list-group').removeClass('d-none');
                        $('html, body').animate({ scrollTop: $("#faq").offset().top  -  ( $('.header').length ? $('.header').innerHeight() : 0 ) }, 0);
                        break;

                }
            });



            $(".map_hk").click(function() {
                var location = new google.maps.LatLng(22.313055, 114.219221);
                markers.setPosition(location);
                maps.setCenter(location);
                $(this).css({
                    backgroundColor: '#9897A5',
                    color: 'white'
                });
                $('#macau_info').addClass('d-none');
                $('#hk_info').removeClass('d-none');
                $(".map_macau").css({
                    backgroundColor: 'white',
                    color: 'black'
                });
            });
            $(".map_macau").click(function() {
                var location = new google.maps.LatLng(22.189158, 113.551367);
                markers.setPosition(location);
                maps.setCenter(location);
                $(this).css({
                    backgroundColor: '#9897A5',
                    color: 'white'
                });
                $('#hk_info').addClass('d-none');
                $('#macau_info').removeClass('d-none');
                $(".map_hk").css({
                    backgroundColor: 'white',
                    color: 'black'
                });
            });


            // menu bar
            var offset = jQuery(':target').offset();
            var scrollto = offset.top - ( $('.header').length ? $('.header').innerHeight() : 0 ); // minus fixed header height
            $('html, body').animate({scrollTop:scrollto }, 0);

            $('.dropdown .nav-item a').on('click', function(e) {

                var target = $(this.hash),
                    headerheight = $('.header').length ? ($('.header').innerHeight() < 100 )? $('.header').innerHeight() : 48 : 0;
                    target = target.length ? target : 0;
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({scrollTop: (target.offset().top - headerheight)}, 0);
                    return false;
                }
            });



        });

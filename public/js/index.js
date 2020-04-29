function debounce(fn, delay){
   var timer, context, args;
   return function(){
     context = this;
     args = arguments;
     clearTimeout(timer);

     timer = setTimeout( function(){
       fn.apply(context, args);
     }, delay);
   }
}
// declare youtube api
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player = [];
var mb_player = [];
function onYouTubeIframeAPIReady() {
    $('.normal-video').on('load',function(){
      var index = $(this).index('.normal-video');
      player[index] = new YT.Player($(this).attr('id'));
    });

    $('.video-mobile-page iframe').on('load', function(){
      var index = $(this).index('.video-mobile-page iframe');
      mb_player[index] = new YT.Player($(this).attr('id'));
    });
}

$(document).ready(function(){
  var delay = window.innerWidth > 991 ? 1000 : 800;
  var bLazy = new Blazy({
    breakpoints: [{
      width: 991,
      src: 'data-src-medium',
    }]
  });
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 1500,
    autoplay:{
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination:{
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  //open registration form
  if( pathname == lang + "/registration"){
    $("#regis").css("display", "block");
    $('#regis .regis-wrapper').animate({right: "0%"}, 1000);
    overlayOpen();
  }

  //scroll to that 4 sections
  $('.selling-pt').on('click', function(event){
    (event.preventDefault) ? event.preventDefault() : event.returnValue = false;
    var header_height = $('nav').height();
    $('html, body').animate({scrollTop: Math.ceil($($(this).attr("href")).offset().top) - header_height }, 1000);
  })

  //open the first video content at first
  if(window.innerWidth > 991){
    $('.video-content:eq(0)').show();
    $('.know-more:eq(0)').addClass('active');
    $('.upper-tri:eq(0)').show();
  }

  $('.know-more').on('click', function(){
    var index = $(this).index(".know-more");
    var target = $('.video-content:eq(' + index + ' )');
    var y = $(window).scrollTop();
    var t = 800;

    $('.know-more').each(function(i){

        if( $(this).hasClass('active') && index != i){
          $('.video-content:eq(' + i + ' )').hide();
          $(this).siblings('.upper-tri').hide();
          if($('.video-content:eq(' + i + ' )').parent().get(0) == $('.video-content:eq(' + index + ' )').parent().get(0)){
            t = 0;
          }
        }
    });

    $('.know-more').removeClass("active");
    target.closest('.pt-section').removeClass('pb-0');
    if( target.css('display') == 'none' ){
        $(this).addClass("active");

        if( index > 1){
          //remove padding bottom to let the background disappear when video content comes out
          target.closest('.pt-section').addClass('pb-0');
        }
    }

    if( !target.is(":animated")){
      $(this).siblings('.upper-tri').toggle();

      target.animate({height: 'toggle'}, t, function(){
        // if it is not closing open content
        if(target.offset().top != 0){
          $("html, body").animate({scrollTop: target.offset().top - window.innerHeight / 2}, 800);
        }
      });
     }
    });

    // mobile show up video and content
    $(".thumbnail, .play-btn").on('click',function(){
       var trigger_index = $(this).index(".thumbnail");
       var target = $(".video-mobile-page").eq(trigger_index);
       target.addClass("active");
       if( !target.find(".b-lazy").hasClass("b-loaded") ){
         bLazy.load(target.find(".b-lazy"));
       }
    });

    $(".video-mobile-page .cross").on("click",function(){
      var index = $(this).index(".video-mobile-page .cross");
      mb_player[index].pauseVideo();

      $(this).parent(".video-mobile-page").removeClass("active");
    });

    //stop or let main layer scrolling
    $(".thumbnail, .play-btn, .video-mobile-page .cross, .regis-btn, #regis .cross").on("click", function(){
      if( $('body').hasClass('overlay-open') ){
        overlayClose();
      }else{
        overlayOpen();
      }
    });

    // open form manually
    $(".regis-btn").on("click", function(event){
      if( $('#regis').length ){
        (event.preventDefault) ? event.preventDefault() : event.returnValue = false;
      }

      window.history.replaceState("","", lang + "/registration");
      $("#regis").css("display", "block");
      $('#regis .regis-wrapper').animate({right: "0%"}, delay);
    });

    // close form manually
    $('#regis .cross').on("click", function(){
      window.history.replaceState("","", lang ? lang : '/');

      $('#regis .regis-wrapper').animate({right: "-100%"}, delay);
      setTimeout(function(){
        $("#regis").css("display", "none");
      }, delay);
    });

    //focus on input field in q4, others will be chosen
    $(".form-control").on("focus", function(){
       $(this).siblings(".custom-control-radio").prop("checked", true);
    });

    //ajax form submit
    $("#regis-form").submit(function(event){
      (event.preventDefault) ? event.preventDefault() : event.returnValue = false;

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          },
      });

      $.ajax({
        type: 'POST',
        url: '/form',
        data: $("#regis-form").serialize(),
        success: function(response){
          if( response.status == "success" )
          {
            window.history.replaceState("","", lang ? lang : '/');
            $('.regis-left').scrollTop(0);
            $('#regis .regis-wrapper').css("right", "-100%");
            $("#regis, .warning-box").css("display", "none");
            $(".warning-box li").remove();
            $("#regis-form")[0].reset();
            overlayClose();

            $(".modal").modal("show");
          }else{
            $('.regis-left').scrollTop(0);
            $(".warning-box li").remove();
            $(".warning-box").css("display", "block");
            for(var i = 0; i < response.errors.length; i++){
              $(".warning-box ul").append("<li>" + response.errors[i] +"</li>");
            }
          }
        },
        error: function(jqxhr, message){
          
        }

      })
    });

    function overlayOpen(){
      //save window position
      $('body').attr( 'data-pos', $(window).scrollTop() );

      $("body, html").addClass("overlay-open");
    }

    function overlayClose(){
      $("body, html").removeClass("overlay-open");

      //get window position
      var pos = $('body').attr( 'data-pos' );
      $(window).scrollTop(pos);
    }

    function checkVideoContent(){
      if( window.innerWidth < 991 ){
        $('.video-content-wrapper').closest('.pt-section').removeClass('pb-0');
        $(".video-content, .upper-tri").css("display", "none");
        $(".know-more").removeClass('active');
        $('.normal-video').each(function(index){
          if( player[index] && typeof player[index].getPlayerState === "function" ){
            player[index].pauseVideo();
          }

        });
      }else{
        if( $(".video-mobile-page.active").length ){
          overlayClose();
          var index = $('.video-mobile-page.active').index(".video-mobile-page");
          mb_player[index].pauseVideo();
        }

        $(".video-mobile-page.active").removeClass("active");
      }

      bLazy.load($('.thumbnail, .normal-video, .play-btn'));
    }

    $(window).on('resize', debounce(checkVideoContent, 500));

});

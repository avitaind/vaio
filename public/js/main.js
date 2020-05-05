$(document).ready(function(){

  $(window).on('scroll', function(){
    if($(window).scrollTop() > 100 ){
      $('#back-to-top').fadeIn(500);
    }else{
      $('#back-to-top').fadeOut(500);
    }
  });

  $('#back-to-top').on('click', function(){
    $('html, body').animate({scrollTop: 0}, "slow");
  });

  if($(window).scrollTop() > 100 ){
    $('#back-to-top').fadeIn(500);
  }else{
    $('#back-to-top').fadeOut(500);
  }

  $('.color-pick').on('click', function(){
    $(this).siblings('.color-pick').removeClass("active");
    $(this).addClass('active');

    $(this).parent().siblings('img').attr('src', $(this).attr('data-src'));
  })
});

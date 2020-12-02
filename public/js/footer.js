    $(function () {
        $('#footerProduct').on('show.bs.collapse', function () {
            $('.footer-product').children().last().addClass('fa-chevron-up').removeClass('fa-chevron-down');
        });
        $('#footerProduct').on('hide.bs.collapse', function () {
            $('.footer-product').children().last().addClass('fa-chevron-down').removeClass('fa-chevron-up');
        });
        $('#footerQuality').on('show.bs.collapse', function () {
            $('.footer-quality').children().last().addClass('fa-chevron-up').removeClass('fa-chevron-down');
        });
        $('#footerQuality').on('hide.bs.collapse', function () {
            $('.footer-quality').children().last().addClass('fa-chevron-down').removeClass('fa-chevron-up');
        });
        $('#footerSupport').on('show.bs.collapse', function () {
            $('.footer-support').children().last().addClass('fa-chevron-up').removeClass('fa-chevron-down');
        });
        $('#footerSupport').on('hide.bs.collapse', function () {
            $('.footer-support').children().last().addClass('fa-chevron-down').removeClass('fa-chevron-up');
        });
        $('#footerAbout').on('show.bs.collapse', function () {
            $('.footer-about').children().last().addClass('fa-chevron-up').removeClass('fa-chevron-down');
        });
        $('#footerAbout').on('hide.bs.collapse', function () {
            $('.footer-about').children().last().addClass('fa-chevron-down').removeClass('fa-chevron-up');
        });
    });

    
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
      document.getElementById("demo").innerHTML = days + " Days " + hours + " Hrs "
      + minutes + " Min " + seconds + " Sec ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
   
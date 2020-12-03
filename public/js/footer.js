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

 
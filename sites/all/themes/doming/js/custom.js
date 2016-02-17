$(function() {
    $('.btn-show-hide-text-area').on('click', function () {
       if ($('.hidden-text-area').css('display') == 'none') {
           $(this).find('.glyphicon').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
       } else {
           $(this).find('.glyphicon').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
       }
       $('.hidden-text-area').slideToggle();
    });
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).show();
        $(this).addClass('focus');
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).hide();
        $(this).removeClass('focus');
    });
    $(document).ready(function() {
        $('.gallery-container').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery:{enabled:true}
        });
        $('.popup-youtube').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
      });
  });
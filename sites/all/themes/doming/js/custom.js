$(function() {
    $('.btn-show-hide-text-area').on('click', function () {
       if ($('.hidden-text-area').css('display') == 'none') {
           $(this).find('.glyphicon').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
       } else {
           $(this).find('.glyphicon').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
       }
       $('.hidden-text-area').slideToggle();
    });
  });
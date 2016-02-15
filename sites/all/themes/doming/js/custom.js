$(function() {
    $('.btn-show-hide-text-area').on('click', function () {
       if ($('.hidden-text-area').css('display') == 'none') {
           $(this).find('.glyphicon').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
       } else {
           $(this).find('.glyphicon').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
       }
       $('.hidden-text-area').slideToggle();
    });
    $( "#slider-vertical" ).slider({
        orientation: "vertical",
        range: "min",
        min: -360,
        max: 360,
        value: 0,
        slide: function( event, ui) {
            rotate(event, ui.value, $("#image").width(), $("#image").height());
        }
    });
    $(".change-color-product").on("click", function () {
       $(".overlay-img").attr("src", $(this).data('src')); 
    });
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).show();
        $(this).addClass('focus');
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).hide();
        $(this).removeClass('focus');
    });
  });
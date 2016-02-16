/***************** LAYOUT MAKER ****************/
$(function() {
    $( "#slider-vertical" ).slider({
        orientation: "vertical",
        range: "min",
        min: -180,
        max: 180,
        value: 0,
        slide: function( event, ui) {
            rotate(event, ui.value, $("#image").width(), $("#image").height());
        }
    });

    $(".change-color-product").on("click", function () {
       $(".overlay-img").attr("src", $(this).data('src')); 
    });
});
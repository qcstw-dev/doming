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

    $('.change-product').on('click', function () {
        $('.change-color-product-block').show();
        $('.preview-color').hide();
        $('.'+$(this).data('product-ref')).show();
        
        $('.white-image').attr('src', $('.'+$(this).data('product-ref')).find('.custom-white-image').attr('src'));
        $('.overlay-img').attr('src', $('.'+$(this).data('product-ref')).find('img').attr('src')); 
    });

    $('.change-color-product').on('click', function () {
       $('.overlay-img').attr('src', $(this).attr('src')); 
    });
});
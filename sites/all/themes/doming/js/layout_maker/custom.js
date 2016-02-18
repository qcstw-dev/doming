/***************** LAYOUT MAKER ****************/
$(function() {
    $( "#slider-vertical" ).slider({
        orientation: "vertical",
        range: "min",
        min: -180,
        max: 180,
        value: 0,
        slide: function( event, ui) {
            try {
                rotate(event, ui.value, $("#image").width(), $("#image").height());
            }
            catch(err) {}
        }
    });

    $('.change-product').on('click', function () {
        $('.btn-show-hide-text-area').trigger('click');
        $('.change-color-product-block').show();
        $('.preview-color').hide();
        $('.'+$(this).data('product-ref')).show();
        
        $('.white-image').attr('src', $('.'+$(this).data('product-ref')).find('.custom-white-image').attr('src'));
        $('.overlay-img').attr('src', $('.'+$(this).data('product-ref')).find('img').attr('src')); 
    });

    $('.change-color-product').on('click', function () {
       $('.overlay-img').attr('src', $(this).attr('src')); 
    });
    
    var drop = document.getElementById("component");
    drop.addEventListener("dragover", dashing_component, false);
    drop.addEventListener("dragleave", undashing_component,false);
    drop.addEventListener("drop", undashing_component,false);

    function dashing_component() {
      drop.style.border = '3px dashed #D9534F';
    };
    function undashing_component() {
      drop.style.border = '3px solid #E8E8E8';
    };
});
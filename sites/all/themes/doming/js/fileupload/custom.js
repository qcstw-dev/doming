$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : 'server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
        previewMaxWidth: 800,
        previewMaxHeight: 900,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {

        data.context = $('#files');

    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
                file = data.files[index],
                node = $(data.context);
        if (file.preview && !file.error) {
            var dataURL = file.preview.toDataURL();

            $(".resize-image").attr("src", dataURL).removeClass('hidden');

            // Kick everything off with the target image
            resizeableImage($('.resize-image'));
            
            if ($('.file-error')) {
                $('.file-error').remove();
            }
        }
        if (file.error) {
            node.append($('<p class="file-error text-danger margin-top-20"/>').text(file.error));
        }
    });
});
jQuery(document).ready(function($) {
    // Media Uploader
    var mediaUploader;

    // Click event for the "Add Image" button
    $(document).on('click', '.category_media_button', function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#category_image_id').val(attachment.id);
            $('#image_wrapper').html('<img src="' + attachment.url + '" style="max-width:150px; height:auto;" />');
            $('.category_media_remove').show();
        });

        mediaUploader.open();
    });

    // Click event for the "Remove Image" button
    $(document).on('click', '.category_media_remove', function(e) {
        e.preventDefault();
        $('#category_image_id').val('');
        $('#image_wrapper').html('');
        $('.category_media_remove').hide();
    });

    // Show/Hide "Remove Image" button on page load
    if ($('#category_image_id').val() === '') {
        $('.category_media_remove').hide();
    } else {
        $('.category_media_remove').show();
    }
});


//hình ảnh 
jQuery(document).ready(function($) {
    var customImageFrame;
    var imageIdsInput = $('#custom_image_ids');
    var imagePreviewDiv = $('#custom_image_preview');

    $('#custom_image_upload').on('click', function(e) {
        e.preventDefault();

        if (customImageFrame) {
            customImageFrame.open();
            return;
        }

        customImageFrame = wp.media({
            title: 'Chọn ảnh',
            button: {
                text: 'Chọn ảnh'
            },
            multiple: false//thay false để chọn 1 ảnh 
        });

        customImageFrame.on('select', function() {
            var attachments = customImageFrame.state().get('selection').toJSON();
            var ids = [];

            imagePreviewDiv.empty();

            $.each(attachments, function(index, attachment) {
                ids.push(attachment.id);
                imagePreviewDiv.append('<div class="custom-image-item"><img src="' + attachment.sizes.thumbnail.url + '"><a href="#" class="remove-custom-image" data-image-id="' + attachment.id + '">Xóa</a></div>');
            });

            imageIdsInput.val(ids.join(','));
        });

        customImageFrame.open();
    });

    $(document).on('click', '.remove-custom-image', function(e) {
        e.preventDefault();
        var imageId = $(this).data('image-id');
        var imageIds = imageIdsInput.val().split(',');

        var index = imageIds.indexOf(imageId.toString());
        if (index !== -1) {
            imageIds.splice(index, 1);
            imageIdsInput.val(imageIds.join(','));
        }

        $(this).parent('.custom-image-item').remove();
    });
});

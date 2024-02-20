<?php 
///thêm hình ảnh khác ảnh đại diện trong bài viết 
function custom_image_meta_box() {
    add_meta_box(
        'custom_image_box',
        'Chọn ảnh',
        'custom_image_meta_box_callback',
        'senpai',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'custom_image_meta_box');

function custom_image_meta_box_callback($post) {
    wp_nonce_field(basename(__FILE__), 'custom_image_nonce');

    $custom_images = get_post_meta($post->ID, '_custom_images', true);
    ?>
    <label for="custom_images">Chọn ảnh:</label><br>
    <input type="button" class="button" id="custom_image_upload" value="Chọn ảnh">
    <div id="custom_image_preview">
        <?php if (!empty($custom_images)) {
            foreach ($custom_images as $image_id) {
                echo '<div class="custom-image-item">';
                echo wp_get_attachment_image($image_id, 'thumbnail');
                echo '<a href="#" class="remove-custom-image" data-image-id="' . $image_id . '">Xóa</a>';
                echo '</div>';
            }
        } ?>
    </div>
    <input type="hidden" id="custom_image_ids" name="custom_image_ids" value="<?php echo esc_attr(implode(',', $custom_images)); ?>">
    <?php
}

function save_custom_image_meta_box($post_id) {
    if (!isset($_POST['custom_image_nonce']) || !wp_verify_nonce($_POST['custom_image_nonce'], basename(__FILE__))) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['custom_image_ids'])) {
        $image_ids = array_map('intval', explode(',', $_POST['custom_image_ids']));
        update_post_meta($post_id, '_custom_images', $image_ids);
    } else {
        delete_post_meta($post_id, '_custom_images');
    }
}
add_action('save_post', 'save_custom_image_meta_box');




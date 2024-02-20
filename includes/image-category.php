<?php
// Thêm trường hình ảnh vào chuyên mục trong trang quản lý
add_action('category_add_form_fields', 'add_category_image', 10, 2);
function add_category_image($taxonomy)
{
?>
    <div class="form-field term-group">
        <label for="category_image_id"><?php _e('Image'); ?></label>
        <input type="hidden" id="category_image_id" name="category_image_id" class="custom_media_url" value="">
        <div id="image_wrapper"></div>
        <p>
            <input type="button" class="button button-secondary category_media_button" id="category_media_button" name="category_media_button" value="<?php _e('Add Image'); ?>">
            <input type="button" class="button button-secondary category_media_remove" id="category_media_remove" name="category_media_remove" value="<?php _e('Remove Image'); ?>">
        </p>
    </div>
<?php
}

add_action('created_category', 'save_category_image', 10, 2);
function save_category_image($term_id, $tt_id)
{
    if (isset($_POST['category_image_id']) && '' !== $_POST['category_image_id']) {
        $image = $_POST['category_image_id'];
        add_term_meta($term_id, 'category_image_id', $image, true);
    }
}

add_action('category_edit_form_fields', 'update_category_image', 10, 2);
function update_category_image($term, $taxonomy)
{
?>
    <tr class="form-field term-group-wrap">
        <th scope="row">
            <label for="category_image_id"><?php _e('Image'); ?></label>
        </th>
        <td>
            <?php $image_id = get_term_meta($term->term_id, 'category_image_id', true); ?>
            <input type="hidden" id="category_image_id" name="category_image_id" value="<?php echo $image_id; ?>">
            <div id="image_wrapper">
                <?php if ($image_id) { ?>
                    <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
                <?php } ?>
            </div>
            <p>
                <input type="button" class="button button-secondary category_media_button" id="category_media_button" name="category_media_button" value="<?php _e('Add Image', 'taxt-domain'); ?>">
                <input type="button" class="button button-secondary category_media_remove" id="category_media_remove" name="category_media_remove" value="<?php _e('Remove Image', 'taxt-domain'); ?>">
            </p>
        </td>
    </tr>
<?php
}

add_action('edited_category', 'updated_category_image', 10, 2);
function updated_category_image($term_id, $tt_id)
{
    if (isset($_POST['category_image_id']) && '' !== $_POST['category_image_id']) {
        $image = $_POST['category_image_id'];
        update_term_meta($term_id, 'category_image_id', $image);
    } else {
        update_term_meta($term_id, 'category_image_id', '');
    }
}

add_action('admin_enqueue_scripts', 'load_media');
function load_media()
{
    wp_enqueue_media();
}

add_filter('manage_edit-category_columns', 'display_image_column_heading');
function display_image_column_heading($columns)
{
    $columns['category_image'] = __('Image');
    return $columns;
}

function display_category_image($category_id) {
    $image_id = get_term_meta($category_id, 'category_image_id', true);
    return $image_id;
}	
// end chuyên mục image
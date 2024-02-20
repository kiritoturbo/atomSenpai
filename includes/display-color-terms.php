<?php 
// Hiển thị trường chọn màu sắc cho taxonomy term
function custom_taxonomy_color_field() {
    ?>
    <div class="form-field term-color-wrap">
        <label for="term-color"><?php _e('Màu sắc', 'text-domain'); ?></label>
        <input type="text" name="term-color" class="term-color-field" value="#ffffff">
        <p class="description"><?php _e('Chọn màu sắc cho term này.', 'text-domain'); ?></p>
    </div>
    <?php
}

function add_custom_taxonomy_color_field() {
    $taxonomies = array('recruit-type', 'recruit-corporate', 'recruit-facility', 'recruit-area','senpai-facility','senpai-type','senpai-cat');
    foreach ($taxonomies as $taxonomy) {
        add_action($taxonomy . '_add_form_fields', 'custom_taxonomy_color_field', 10, 2);
        add_action($taxonomy . '_edit_form_fields', 'custom_taxonomy_color_field', 10, 2);
    }
}
add_action('admin_init', 'add_custom_taxonomy_color_field');

// Lưu dữ liệu của trường chọn màu sắc khi người dùng tạo hoặc chỉnh sửa term
function save_custom_taxonomy_color_field($term_id) {
    if (isset($_POST['term-color'])) {
        $term_color = sanitize_hex_color($_POST['term-color']);
        update_term_meta($term_id, 'term-color', $term_color);
    }
}

function add_save_custom_taxonomy_color_field() {
    $taxonomies = array('recruit-type', 'recruit-corporate', 'recruit-facility', 'recruit-area','senpai-facility','senpai-type','senpai-cat');
    foreach ($taxonomies as $taxonomy) {
        add_action('edited_' . $taxonomy, 'save_custom_taxonomy_color_field', 10, 2);
        add_action('create_' . $taxonomy, 'save_custom_taxonomy_color_field', 10, 2);
    }
}
add_action('admin_init', 'add_save_custom_taxonomy_color_field');

// Hiển thị màu sắc trong danh sách các term của taxonomy
function show_custom_taxonomy_color_column($columns) {
    $columns['term-color'] = __('Màu sắc', 'text-domain');
    return $columns;
}

function add_custom_taxonomy_color_column($taxonomy) {
    add_filter('manage_edit-' . $taxonomy . '_columns', 'show_custom_taxonomy_color_column');
}

add_action('admin_init', function () {
    $taxonomies = array('recruit-type', 'recruit-corporate', 'recruit-facility', 'recruit-area','senpai-facility','senpai-type','senpai-cat');
    foreach ($taxonomies as $taxonomy) {
        add_custom_taxonomy_color_column($taxonomy);
    }
});

function show_custom_taxonomy_color_content($content, $column_name, $term_id) {
    if ('term-color' === $column_name) {
        $term_color = get_term_meta($term_id, 'term-color', true);
        if ($term_color) {
            $content = '<div style="width: 20px; height: 20px; display: inline-block; background-color: ' . esc_attr($term_color) . '"></div>';
        }
    }
    return $content;
}

function add_show_custom_taxonomy_color_content() {
    $taxonomies = array('recruit-type', 'recruit-corporate', 'recruit-facility', 'recruit-area','senpai-facility','senpai-type','senpai-cat');
    foreach ($taxonomies as $taxonomy) {
        add_filter('manage_' . $taxonomy . '_custom_column', 'show_custom_taxonomy_color_content', 10, 3);
    }
}
add_action('admin_init', 'add_show_custom_taxonomy_color_content');

// Thêm mã JavaScript để kích hoạt color picker
function add_color_picker_script() {
    ?>
    <script>
        jQuery(document).ready(function ($) {
            // Kích hoạt color picker cho trường input có class là 'term-color-field'
            $('.term-color-field').wpColorPicker();
        });
    </script>
    <?php
}
add_action('admin_footer', 'add_color_picker_script');


function load_color_picker_script() {
    // Đăng ký thư viện color picker của WordPress
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');

    // Nạp mã JavaScript chứa mã kích hoạt color picker
    wp_enqueue_script('custom-color-picker', get_stylesheet_directory_uri() . '/js/custom-color-picker.js', array('wp-color-picker'), false, true);
}
add_action('admin_enqueue_scripts', 'load_color_picker_script');

//lấy màu ra ngoài giao diện 
function get_custom_taxonomy_color($term_id) {
    // Lấy giá trị của trường màu sắc cho taxonomy term
    $term_color = get_term_meta($term_id, 'term-color', true);

    // Trả về giá trị màu sắc (hoặc một giá trị mặc định nếu trường màu sắc trống)
    return !empty($term_color) ? $term_color : '#f23';
}

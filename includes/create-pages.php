<?php 
// create page 
function create__pages()
{
    $page_check_junpuu = get_page_by_path('junpuu');
    if (!isset($page_check_junpuu->ID)) {
        $page_id = wp_insert_post(
            array(
                'post_title' => 'junpuu',
                'post_name' => 'junpuu',
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );
        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'template-parts/page-junpuu.php');
        }
    }
    $page_check_hakuju = get_page_by_path('hakuju');
    if (!isset($page_check_hakuju->ID)) {
        $page_id = wp_insert_post(
            array(
                'post_title' => 'hakuju',
                'post_name' => 'hakuju',
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );
        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'template-parts/page-hakuju.php');
        }
    }
    $page_check_izumi = get_page_by_path('izumi');
    if (!isset($page_check_izumi->ID)) {
        $page_id = wp_insert_post(
            array(
                'post_title' => 'izumi',
                'post_name' => 'izumi',
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );
        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'template-parts/page-izumi.php');
        }
    }
    $page_check_matsuyama = get_page_by_path('matsuyama');
    if (!isset($page_check_matsuyama->ID)) {
        $page_id = wp_insert_post(
            array(
                'post_title' => 'matsuyama',
                'post_name' => 'matsuyama',
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );
        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'template-parts/page-matsuyama.php');
        }
    }
    // Tạo trang bài viết (page_for_posts)
    $page_recruit = get_page_by_path('recruit');
    if (!$page_recruit) {
        $page_id = wp_insert_post(
            array(
                'post_title'   => 'Recruit',
                'post_name'    => 'recruit',
                'post_content' => '',
                'post_status'  => 'publish',
                'post_type'    => 'page'
            )
        );
        if (!is_wp_error($page_id)) {
            update_option('page_for_posts', $page_id);
        }
    }

    // Tạo trang chủ
    $page_home = get_page_by_path('trang-chu');
    if (!$page_home) {
        $page_id = wp_insert_post(
            array(
                'post_title'   => 'Trang chủ',
                'post_name'    => 'trang-chu',
                'post_content' => '',
                'post_status'  => 'publish',
                'post_type'    => 'page'
            )
        );
        if (!is_wp_error($page_id)) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_id);
            update_post_meta($page_id, '_wp_page_template', 'default');
        }
    }

    
}
add_action('init', 'create__pages');
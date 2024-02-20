<?php 
// Hàm tạo post type "senpai"
if ( ! function_exists( 'custom_post_type_senpai' ) ) {
    function custom_post_type_senpai() {
        // Các labels (nhãn) cho post type "senpai"
        $labels = array(
            'name'               => 'Senpais',
            'singular_name'      => 'Senpai',
            'menu_name'          => 'Senpais',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Senpai',
            'edit_item'          => 'Edit Senpai',
            'new_item'           => 'New Senpai',
            'view_item'          => 'View Senpai',
            'search_items'       => 'Search Senpais',
            'not_found'          => 'No Senpais found',
            'not_found_in_trash' => 'No Senpais found in Trash',
        );
    
        // Các cài đặt cho post type "senpai"
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'publicly_queryable' => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'senpai' ),
            'capability_type'    => 'post',
            'menu_icon'          => 'dashicons-groups', 
            'hierarchical'       => false,
            'menu_position'      => 5,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        );
    
        register_post_type( 'senpai', $args );
    
        // Tạo taxonomy "senpai-type"
        $taxonomy_labels_type = array(
            'name'                       => 'Senpai Types',
            'singular_name'              => 'Senpai Type',
            'search_items'               => 'Search Senpai Types',
            'all_items'                  => 'All Senpai Types',
            'edit_item'                  => 'Edit Senpai Type',
            'update_item'                => 'Update Senpai Type',
            'add_new_item'               => 'Add New Senpai Type',
            'new_item_name'              => 'New Senpai Type Name',
            'menu_name'                  => 'Senpai Types',
            'not_found'                  => 'No Senpai Types found',
            'no_terms'                   => 'No Senpai Types',
            'items_list_navigation'      => 'Senpai Types list navigation',
            'items_list'                 => 'Senpai Types list',
        );
    
        $taxonomy_args_type = array(
            'labels'                     => $taxonomy_labels_type,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'query_var'                  => true,
            'rewrite'                    => array( 'slug' => 'senpai-type' ),
        );
    
        register_taxonomy( 'senpai-type', 'senpai', $taxonomy_args_type );
    
         // Tạo taxonomy "senpai-cat"
         $taxonomy_labels_cat = array(
            'name'                       => 'Senpai Cats',
            'singular_name'              => 'Senpai Cat',
            'search_items'               => 'Search Senpai Cats',
            'all_items'                  => 'All Senpai Cats',
            'edit_item'                  => 'Edit Senpai Cats',
            'update_item'                => 'Update Senpai Cats',
            'add_new_item'               => 'Add New Senpai Cats',
            'new_item_name'              => 'New Senpai Cats Name',
            'menu_name'                  => 'Senpai Cats',
            'not_found'                  => 'No Senpai Cats found',
            'no_terms'                   => 'No Senpai Cats',
            'items_list_navigation'      => 'Senpai Cats list navigation',
            'items_list'                 => 'Senpai Cats list',
        );
    
        $taxonomy_args_cat = array(
            'labels'                     => $taxonomy_labels_cat,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'query_var'                  => true,
            'rewrite'                    => array( 'slug' => 'senpai-cat' ),
        );
    
        register_taxonomy( 'senpai-cat', 'senpai', $taxonomy_args_cat );
    
    
        // Tạo taxonomy "senpai-facility"
        $taxonomy_labels_facility = array(
            'name'                       => 'Senpai Facilitys',
            'singular_name'              => 'Senpai Facility',
            'search_items'               => 'Search Senpai Facilitys',
            'all_items'                  => 'All Senpai Facilitys',
            'edit_item'                  => 'Edit Senpai Facilitys',
            'update_item'                => 'Update Senpai Facilitys',
            'add_new_item'               => 'Add New Senpai Facilitys',
            'new_item_name'              => 'New Senpai Facilitys Name',
            'menu_name'                  => 'Senpai Facilitys',
            'not_found'                  => 'No Senpai Facilitys found',
            'no_terms'                   => 'No Senpai Facilitys',
            'items_list_navigation'      => 'Senpai Facilitys list navigation',
            'items_list'                 => 'Senpai Facilitys list',
        );
    
        $taxonomy_args_facility = array(
            'labels'                     => $taxonomy_labels_facility,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'query_var'                  => true,
            'rewrite'                    => array( 'slug' => 'senpai-facility' ),
        );
    
        register_taxonomy( 'senpai-facility', 'senpai', $taxonomy_args_facility );
    
        // Tạo taxonomy "senpai-tag"
        $taxonomy_labels_tag = array(
            'name'                       => 'Tags',
            'singular_name'              => 'Tag',
            'search_items'               => 'Tìm kiếm Tags',
            'popular_items'              => 'Tags phổ biến',
            'all_items'                  => 'Tất cả Tags',
            'parent_item'                => 'Tag cha',
            'edit_item'                  => 'Chỉnh sửa Tag',
            'update_item'                => 'Cập nhật Tag',
            'add_new_item'               => 'Thêm mới Tag',
            'new_item_name'              => 'Tên Tag mới',
            'separate_items_with_commas' => 'Ngăn cách các Tag bằng dấu phẩy',
            'add_or_remove_items'        => 'Thêm hoặc xóa Tag',
            'choose_from_most_used'      => 'Chọn từ Tags phổ biến',
            'not_found'                  => 'Không tìm thấy Tag nào.',
            'menu_name'                  => 'Tags',
        );
    
        $taxonomy_args_tag = array(
            'labels'                     => $taxonomy_labels_tag,
            'hierarchical'               => false,// Set false để có hiển thị như tags (không phân cấp)
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'query_var'                  => true,
            'rewrite'                    => array( 'slug' => 'senpai-tag' ),
        );
    
        register_taxonomy( 'senpai-tag', 'senpai', $taxonomy_args_tag );
       
    }
    }
    add_action( 'init', 'custom_post_type_senpai' );
    
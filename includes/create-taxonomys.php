<?php
// Tạo custom taxonomy "Recruit Type", "Recruit Facility", "Recruit Area" và "Company" thuộc nhiều post type
function create_custom_taxonomies() {
    $post_types = array('post'); 

    // Tạo taxonomy "Recruit Type"
    $recruit_type_args = array(
        'labels' => array(
            'name' => 'Recruit Types',
            'singular_name' => 'Recruit Type',
        ),
        'hierarchical' => true,
    );
    register_taxonomy('recruit-type', $post_types, $recruit_type_args);
    // Tạo taxonomy "Recruit corporate"
    $recruit_corporate_args = array(
        'labels' => array(
            'name' => 'Recruit Corporates',
            'singular_name' => 'Recruit Corporate',
        ),
        'hierarchical' => true,
    );
    register_taxonomy('recruit-corporate', $post_types, $recruit_corporate_args);

    // Tạo taxonomy "Recruit Facility"
    $recruit_facility_args = array(
        'labels' => array(
            'name' => 'Recruit Facilities',
            'singular_name' => 'Recruit Facility',
        ),
        'hierarchical' => true,
    );
    register_taxonomy('recruit-facility', $post_types, $recruit_facility_args);

    // Tạo taxonomy "Recruit Area"
    $recruit_area_args = array(
        'labels' => array(
            'name' => 'Recruit Areas',
            'singular_name' => 'Recruit Area',
        ),
        'hierarchical' => true,
    );
    register_taxonomy('recruit-area', $post_types, $recruit_area_args);
}
add_action('init', 'create_custom_taxonomies');

function add_corporate_terms() {
    $taxonomy = 'recruit-corporate';
    $corporate_terms = array(
        'matsuyama',
        'junpuu',
        'hakuju',
        'izumi',
    );

    foreach ($corporate_terms as $term_name) {
        if (!term_exists($term_name, $taxonomy)) {
            wp_insert_term($term_name, $taxonomy);
        }
    }
}
add_action('init', 'add_corporate_terms');
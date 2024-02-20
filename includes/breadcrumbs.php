<?php
//breadcrumbs
function custom_breadcrumbs() {
    // Home page link
    $home_link = home_url('/');
    echo '<a href="' . $home_link . '">Top</a>  > ';

    // Check if it's a single post (post, page, custom post type)
    if (is_singular('post') || is_singular('page') || is_singular('your_custom_post_type')) {
        the_title();
    } elseif (is_category()) { 
        single_cat_title();
    } elseif (is_tag()) { 
        single_tag_title();
    } elseif (is_author()) { 
        echo 'Author: ' . get_the_author();
    } elseif (is_search()) { 
        echo 'Search results for: ' . get_search_query();
    } elseif (is_404()) { 
        echo 'Page not found';
    } else {
        the_archive_title();
    }
}
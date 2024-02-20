<?php 
///phân trang 
function paginationPage($current_taxonomy_posts){
    $current_page = max(1, get_query_var('paged'));
        $total_pages = $current_taxonomy_posts->max_num_pages; 
        $paginate_args = array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%', 
            'total' => $total_pages,
            'current' => $current_page,
            'show_all' => false,
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => '',
            'next_text' => '',
        );
        echo '<div class="pagination-list flex-col text-center">';
        echo '<div class="pagination-list flex-col text-center">';
        echo '<ul class="wp-pagenavi" role="navigation">';
        echo paginate_links($paginate_args);
        echo '</ul>';
        echo '</div>';
        echo '</div>';
}
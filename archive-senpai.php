<?php get_header(); ?>

<main class="page-senpai">

    <section>
        <div class="top-senpai pt-40 pt-sm-30">
            <div class="container container-1000">
                <h2 class="fs-28 ff-baby text-center color-4 ls-100 fs-sm-14 lh-1">Work Style</h2>
                <div class="title-jp fs-40 text-center color-4d fs-sm-23"><span class="color-4">“<span>十</span><span class="color-3">人</span><span class="color-2">十</span><span class="color-1">色</span>” </span> の働き方</div>
                <p class="fs-18 text-center color-4d pt-10 fs-sm-13">先輩社員紹介</p>
                <div class="breadcrums hide-for-small">
                    <ul>
                        <li><?php custom_breadcrumbs(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sidebar pt-15 pt-sm-40">
        <div class="container container-1000">
            <div class="box-sidebar">
                <div class="box-sidebar-inner">
                    <div class="senpai-filter">
                        <div class="row row-xlarge row-sm-collapse">
                            <div class="col-12 large-3-5 sidebar-item sidebar-cat">
                                <div class="label color-12">
                                    <h2>職種</h2>
                                </div>
                                <div class="select ">
                                    <?php selectTaxonomy('senpai-type'); ?>
                                </div>
                            </div>
                            <div class="col-12 large-3-5  sidebar-item sidebar-arc">
                                <div class="label color-8">
                                    <h2>施設</h2>
                                </div>
                                <div class="select">
                                    <?php selectTaxonomy('senpai-facility'); ?>
                                </div>
                            </div>
                            <div class="col-12 large-5-2 sidebar-item sidebar-arc">
                                <div class="label color-4">
                                    <h2>新卒・<br class="show-for-small">キャリア</h2>
                                </div>
                                <div class="select">
                                    <?php selectTaxonomy('senpai-cat'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="recruit-list-inner pt-45 pb-20 pt-sm-25 pb-sm-0">
            <div class="container container-1220">
                <p class="fs-17 fs-sm-14 ls-100 lh-2 lh-sm-1-75 text-sm-left text-center color-4d">アトムグループでは、ワークライフバランスに考慮した様々な働き方で、<br class="hide-for-small"> 数多くの職員が活躍しています。
                </p>
                <div class="row pt-55 row-small">
                <?php 
                    $paged =(get_query_var('paged')) ?  get_query_var('paged') : 1;
					// $taxonomyCurrent = get_queried_object();
                    $term = get_queried_object(); // Lấy đối tượng của taxonomy hiện tại
					// Lấy bài viết mới nhất
					$args = array(
						'post_type'      => 'senpai', 
                        'paged'=> $paged
					);
                    if ($term instanceof WP_Term) {
                        // Lấy thông tin về taxonomy của term hiện tại
                        $taxonomy = $term->taxonomy;
                    
                        // Thêm điều kiện tax_query vào truy vấn nếu có term
                        $args['tax_query'] = array(
                            array(
                                'taxonomy' => $taxonomy,
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        );
                    }
					$latest_posts = new WP_Query($args);
                   
					if ($latest_posts->have_posts()) {
						while ($latest_posts->have_posts()) {
							$latest_posts->the_post();
							$senpai_cats = get_the_terms(get_the_ID(), 'senpai-cat');
                            
					?>
                            <div class="large-3 col-12">
                                <div class="col-inner">
                                    <div class="box-slide-work biggerlink bl-hot" style="cursor: pointer;">
                                        <a href="<?php echo get_permalink(); ?>" class="bl-bigger">
                                            <div class="box-img-slide-work">
                                                <div class="box-img-slide-work-inner">
                                                    <div class="image-cover image-1-1">
                                                        <?php echo get_the_post_thumbnail( get_the_id(),'full', 'thumbnail', array( 'class' =>'thumnail') ); ?>
                                                    </div>
                                                </div>
                                                <div class="cat-work-ab cat-work-ab-48" style="background-color: <?php echo get_custom_taxonomy_color($senpai_cats[0]->term_id) ?>;">
                                                    <?php echo ($senpai_cats[0]->name); ?>
                                                </div>
                                            </div>
                                            <div class="box-slide-work-meta">
                                                <div class="cat-work">在職施設</div>
                                                <div class="cont-work">
                                                    <?php echo the_title()  ?>
                                                </div>
                                                <div class="cat-work cat-work-id-2">職種</div>
                                                <p class="fs-15 color-4d fs-sm-13">
                                                    <?php echo the_excerpt() ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
					<?php
						}
						// Đặt lại vị trí của bài viết sau khi loop kết thúc
						wp_reset_postdata();
					} else {
						// Nếu không có bài viết nào
						echo 'Không có bài viết nào được tìm thấy.';
					}
					?>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="page-navi">
        <div class="page-navi pt-55 pt-sm-25 pb-70 pb-sm-85">
            <div class="container container-1000">
                <?php paginationPage($latest_posts);?>
                <!-- muốn sử dụng hàm trên phải thêm 'paged'=> $paged ở $args và $paged =( get_query_var('paged'))?  get_query_var('paged') : 1; ở đầu vòng lặp -->
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
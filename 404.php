<?php get_header(); ?>

<main>
	<section>
		<div class="news-important box-list-recruit pt-55 pt-sm-20">
			<div class="container container-1000">
				<div class="title-news-important">採用強化中!</div>
				<div class="news-list mt-35 mt-sm-20">
				<?php 
					// Lấy bài viết mới nhất
					$args = array(
						'post_type'      => 'post', 
						'posts_per_page' => 3,      
						'orderby'        => 'date', 
						'order'          => 'DESC', 
						'category_name' => 'in-progress'
					);

					$latest_posts = new WP_Query($args);

					// Kiểm tra xem có bài viết nào không
					if ($latest_posts->have_posts()) {
						while ($latest_posts->have_posts()) {
							$latest_posts->the_post();

							$recruit_types = get_the_terms(get_the_ID(), 'recruit-type');
							if ($recruit_types && !is_wp_error($recruit_types)) {
								$recruit_type = $recruit_types[0];
								$recruit_type_link = get_term_link($recruit_type);
							}
					?>
							<div class="news-item item-list biggerlink bl-hot" style="cursor: pointer;">
								<a href="<?php echo get_permalink(); ?>" class="bl-bigger"></a>
								<div class="date"><span><?php echo get_the_date('Y.m.d'); ?></span></div>
								<div class="cat catid-<?php echo $recruit_types[0]->term_id; ?>">
									<a style="background-color: <?php echo get_custom_taxonomy_color($recruit_type->term_id) ?>" href="<?php echo $recruit_type_link; ?>" class="" title="">
										<?php echo ($recruit_types[0]->name); ?>
									</a>
								</div>
								<div class="title">
									<a href="<?php echo get_permalink(); ?>" title=""><?php echo the_title(); ?></a>
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
				<div class="btn-wrap mt-50 mt-sm-20">
					<a href="<?php echo home_url()?>/category/in-progress/" class="btn btn-main btn-home btn-hot">採用強化中一覧へ</a>
				</div>
			</div>
		</div>
	</section>
	<section class="sidebar pt-100 pt-sm-60 pb-50 pb-sm-30">
		<div class="container container-1100">
			<div class="box-sidebar">
				<div class="box-sidebar-inner">
					<div class="box-icon-search">
						<img src="https://atom-recruit.comotec.website/assets/images/index/icon-search.png" alt="">
					</div>
					<div class="sidebar-title">求人検索</div>
					<div class="news-filter">
						<div class="row row-xlarge row-sm-collapse">
							<div class="col-12 large-3 color-9 sidebar-item sidebar-cat">
								<div class="label ">
									<h2>職 種</h2>
									<p>からさがす</p>
								</div>
								<div class="select ">
									<?php selectTaxonomy('recruit-type'); ?>
								</div>
							</div>
							<div class="col-12 large-3 color-8  sidebar-item sidebar-arc">
								<div class="label ">
									<h2>施 設</h2>
									<p>からさがす</p>
								</div>
								<div class="select">
									<?php selectTaxonomy('recruit-facility'); ?>
								</div>
							</div>
							<div class="col-12 large-3 color-10  sidebar-item sidebar-arc">
								<div class="label ">
									<h2>勤 務エリア</h2>
									<p>からさがす</p>
								</div>
								<div class="select">
									<?php selectTaxonomy('recruit-area'); ?>
								</div>
							</div>
							<div class="col-12 large-3 color-11  sidebar-item sidebar-arc">
								<div class="label ">
									<h2>こだわり条件</h2>
									<p>からさがす</p>
								</div>
								<div class="select">
									<?php selectTaxonomy('post_tag'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="recruit-list-inner pt-50 pb-80 pt-sm-40 pb-sm-50">
			<div class="container container-1000">
				<div class="sub-title">
				<?php
				// Lấy thông tin về taxonomy hiện tại
				$taxonomy = get_queried_object();

				// echo '<pre>';
				// print_r($taxonomy->taxonomy);
				// echo '</pre>';

				if ($taxonomy instanceof WP_Term) {
					// Lấy tên của taxonomy hiện tại
					$taxonomy_name = $taxonomy->name;

					echo '<span>'.$taxonomy_name.'の採用情報一覧</span>' ;
				} else {
					echo "Không có taxonomy hiện tại.";
				}
				?>

					
				</div>
				<div class="box-list-recruit pt-50 pt-sm-20">
					<div class="news-list">
					<?php
					// Lấy thông tin về custom taxonomy "recruit-type"
					$taxonomyCurrent = get_queried_object();
					// echo '<pre>';
					// print_r($taxonomyCurrent->taxonomy);
					// echo '</pre>';
					// echo $taxonomyCurrent->taxonomy;
					$taxonomy = ($taxonomyCurrent->taxonomy)? $taxonomyCurrent->taxonomy : 'recruit-type' ;
					$term = get_queried_object(); // Lấy đối tượng của taxonomy hiện tại
					// $term_color = get_custom_taxonomy_color($term->term_id);
					?>
					<!-- // <div style="width: 50px; height: 50px; background-color: <?php echo esc_attr($term_color); ?>"></div> -->
					<?php
					// echo '<pre>';
					// print_r($taxonomy);
					// print_r($term->term_id);
					// echo '</pre>';
					if ($term instanceof WP_Term) {
						// Hiển thị tên của taxonomy hiện tại
						// Truy vấn các bài viết có taxonomy hiện tại
						$args = array(
							'post_type' => 'post',
							'tax_query' => array(
								array(
									'taxonomy' => $taxonomy,
									'field' => 'slug',
									'terms' => $term->slug,
								),
							),
						);

						$current_taxonomy_posts = new WP_Query($args);

						if ($current_taxonomy_posts->have_posts()) {
							while ($current_taxonomy_posts->have_posts()) {
								$current_taxonomy_posts->the_post();
								$recruit_types = get_the_terms(get_the_ID(), 'recruit-type');
								if ($recruit_types && !is_wp_error($recruit_types)) {
									$recruit_type = $recruit_types[0];
									$recruit_type_link = get_term_link($recruit_type);
								}
								?>
								<div class="news-item item-list biggerlink bl-hot" style="cursor: pointer;">
									<a href="<?php echo get_permalink(); ?>" class="bl-bigger"></a>
									<div class="date"><span><?php echo get_the_date('Y.m.d'); ?></span></div>
									<div class="cat catid-<?php echo $recruit_types[0]->term_id; ?>">
										<a style="background-color: <?php echo get_custom_taxonomy_color($recruit_type->term_id) ?>" href="<?php echo $recruit_type_link; ?>" class="" title="">
											<?php echo ($recruit_types[0]->name); ?>
										</a>
									</div>
									<div class="title">
										<a href="<?php echo get_permalink(); ?>" title=""><?php echo the_title(); ?></a>
									</div>
								</div>
							<?php
							}
							wp_reset_postdata();
						} else {
							echo "Không có bài viết nào có taxonomy này.";
						}
					} else {
						echo "Không có taxonomy hiện tại.";
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="page-navi" class="page-navi  pt-55 pt-sm-25 pb-70 pb-sm-85">
		<div class="container container-1000">
		<?php paginationPage($current_taxonomy_posts);?>
			
		</div>
	</section>

</main>

<?php
get_footer();

<?php

/**
 * Template Name: hakuju 
 */
?>
<?php get_header() ?>

<main>


    <section id="page-heaeder">
        <div class="page-header">
            <div class="container container-1000">
                <div class="page-header-top">
                    <div class="page-header-top-left">
                        <div class="title-page">
                            <h2>Environment</h2>
                            <p>社会福祉法人白寿会</p>
                        </div>
                    </div>
                    <div class="page-header-top-right">

                    </div>
                </div>
                <div class="breadcrums hide-for-small">
                    <div class="container ">
                        <ul>
                            <li><?php custom_breadcrumbs(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="page-anchor">
        <div class="page-anchor pt-45 pb-50 pt-sm-35 pb-sm-20">
            <div class="container container-800">
                <div class="list-anchor-group">
                    <ul class="list-anchor">
                        <li><a href="#news-environment">最新採用情報</a></li>
                        <li><a href="#envi-message">採用メッセージ</a></li>
                        <li><a href="#envi-about">白寿会について</a></li>
                        <li><a href="#envi-support">福利厚生/サポート体制</a></li>
                        <li><a href="#envi-edu">教育制度/キャリアアップ</a></li>
                        <li><a href="#envi-senpai">先輩社員インタビュー</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="news-environment">
        <div class="news-environment pt-60 pb-65 pt-sm-30 pb-sm-45 box-list-recruit">
            <div class="container container-1000">
                <div class="sub-title">最新採用情報</div>
                <div class="news-list mt-40 mt-sm-30" data="block" loaded="true">
                    <?php
                        $args = array(
                            'post_type' => array('post'),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'recruit-corporate',
                                    'field' => 'slug',
                                    'terms' => get_queried_object()->post_name,
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) :
                                $query->the_post();
                                $recruit_types = get_the_terms(get_the_ID(), 'recruit-type');// Hiển thị tên chuyên mục từ các taxonomy
                                
                                ?>
                                    <div class="news-item item-list biggerlink bl-hot" style="cursor: pointer;">
                                        <a href="<?php the_permalink() ?>" class="bl-bigger"></a>
                                        <div class="date"><span><?php echo get_the_date('Y/m/d') ?></span></div>
                                        <div class="cat catid-<?php echo $recruit_types[0]->term_id; ?>">
                                            <?php  
                                            if ($recruit_types) {
                                                foreach ($recruit_types as $term) {
                                                    echo '<a href="' . get_term_link($term) . '" style="background-color:'.get_custom_taxonomy_color($recruit_types[0]->term_id).'" title="">' . $term->name . '</a>';
                                                }
                                            } ?>
                                        </div>
                                        <div class="title">
                                            <a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>

                </div>
                <div class="box-btn-main pt-20">
                    <?php
                    // Lấy đường dẫn của term "hakuju" trong taxonomy "recruit-corporate"
                    $term_link = get_term_link(get_queried_object()->post_name, 'recruit-corporate');
                    if (!is_wp_error($term_link)) {
                        // Tạo liên kết "採用情報一覧へ" tới term "hakuju" trong taxonomy "recruit-corporate"
                        echo '<a href="' . $term_link . '" class="btn btn-main">採用情報一覧へ</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section id="envi-message">
        <div class="envi-message pt-80 pt-sm-50">
            <div class="container container-1000">
                <div class="sub-title">採用メッセージ</div>
                <p class="text-center fs-30 color-10 pt-50 pt-sm-25 fs-sm-17 text-sm-left lh-sm-1-6">人として総合的な知性と感性の豊かな人材育成へ</p>
                <p class="lh-2-1 color-4d pt-45 fs-17 lh-sm-1-75 pt-sm-10 fs-sm-14">
                    現在の日本社会は高齢化社会から超高齢社会へシフトしています。驚くべきスピードで社会的な変革が進むなかで、介護・福祉においてもAIやICT化が加速しています。<br> しかしながら、介護・福祉サービスはAIやロボットにはできない「共感」、「創造」や複雑で臨機応変な対応が多くの場面で求められる仕事です。
                    <br> そのような複雑化・多様化されるニーズのなかで、人として総合的な知性と感性を備え、ご利用者や仲間たちと泣いたり、笑ったりできるEQ（感情指数）を共に磨いていきたいと考えています。
                    <br>
                </p>
            </div>
        </div>
    </section>
    <section id="envi-about">
        <div class="envi-about pt-120 pb-70 pt-sm-65">
            <div class="container">
                <div class="sub-title">白寿会について</div>
                <div class="row row-xxxlarge pt-50 pt-sm-25">
                    <div class="large-6 col-12">
                        <div class="col-inner envi-about-left">
                            <p class=" fs-30 color-10 pt-20 fs-sm-17 lh-1-5 pt-sm-0 lh-sm-1-6">ご意向を尊重し、多彩で総合的な<br> 福祉サービスの提供を。
                            </p>
                            <p class="lh-2-1 color-4d pt-45 fs-17 fs-sm-14 pt-sm-20">
                                多様な福祉サービスをご利用者・ご家族のご意向を尊重し、総合的に提供されるよう創意工夫することにより、個人の尊厳を保持しつつ、その有する能力に応じ自立した日常生活を地域社会において営むことが出来るよう支援していきます。
                                <br>また、地域・行政との関わりを積極的に行い、行動する社会福祉法人として、地域包括ケアシステムの実現を目指します。
                            </p>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner pt-sm-30">
                            <div class="envi-about-img">
                                <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-envi-about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-1000">
                <div class="box-group-envi-cs pt-15 pt-sm-90">
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">施設(法人)名</div>
                        <div class="box-envi-custom-right">社会福祉法人 白寿会</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">所在地</div>
                        <div class="box-envi-custom-right">愛媛県松山市東石井1丁目11番30号</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">設　立</div>
                        <div class="box-envi-custom-right">昭和54年 9月7日</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">理事長</div>
                        <div class="box-envi-custom-right">宇都宮　一泰</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">事業内容</div>
                        <div class="box-envi-custom-right">
                            <p class="fs-16 lh-1-7 fs-sm-13 ">
                                （１）第一種社会福祉事業 <br>
                                <span class="pl-50 d-block pl-sm-0">特別養護老人ホームの経営</span> <br> （２）第二種社会福祉事業
                                <br>
                                <span class="pl-50 d-block pl-sm-0">生計困難者に対して、無料又は低額な費用で介護保険法に規定する介護老人保健施設を利用させる事業の経営　/　老人短期入所事業の経営　/　老人居宅介護等事業の経営　/　老人デイサービス事業の経営　/　老人デイサービスセンターの経営　/　老人介護支援センターの経営　/　認知症対応型老人共同生活援助事業の経営　/　障害福祉サービス事業の経営　/　移動支援事業の経営</span>
                                <br>（３）公益事業 <br>
                                <span class="pl-50 d-block pl-sm-0">通所リハビリテーション・介護予防通所リハビリテーション事業の経営　/　短期入所療養介護・介護予防短期入所療養介護事業の経営　/　訪問リハビリテーション事業の経営　/　居宅介護支援事業の経営　/　介護予防支援業務の一部受託　/　要介護認定申請にかかる訪問調査の受託　/　介護老人保健施設の経営　/　介護予防・日常生活支援総合事業の経営　/　地域包括支援センターの経営　/　松山市高齢者いきいき支援事業の経営　/　有料老人ホームの経営　/　サービス付き高齢者向け住宅事業の経営　/　温泉を活用した介護予防・地域交流事業の経営</span>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="envi-about-2 pt-45 pb-45">
            <div class="container container-1000">
                <div class="sub-title-line">施設一覧</div>
                <div class="row row-xlarge row-sm-26  pt-35">
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-link-envi-1.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">介護老人福祉施設 <br class="show-for-small">白寿荘</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-link-envi-2.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">老人保健施設 <br class="show-for-small">れんげ荘</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-link-envi-3.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">デイサービス<br class="show-for-small">センター和泉</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-link-envi-4.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">介護老人保健施設 <br class="show-for-small">西安</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-link-envi-5.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">高齢者総合福祉施設<br> サンシティ北条
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-link-envi-6.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">松山市地域包括支援センター<br> 石井・浮穴・久谷<br class="show-for-small">(松山市委託)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="envi-support">
        <div class="envi-support mt-105 pb-25 mt-sm-80">
            <div class="container container-1000">
                <div class="sub-title">福利厚生/サポート体制</div>
                <div class="row row-xxlarge pt-115 pt-sm-60">
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-1.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>医療費助成</h2>
                                    <p>保険診療の受診の要した医療費及び薬局調剤医療費に係る健康管理費の助成を受けることができます。（条件あり）</p>
                                </div>
                                <p class="show-for-small">保険診療の受診の要した医療費及び薬局調剤医療費に係る健康管理費の助成を受けることができます。（条件あり）</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-2.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>子育て支援制度<br><span class="fs-16 fs-sm-13">（病児一時見守り/お迎えタクシー他）</span></h2>
                                    <p>産前産後/育児休暇制度<br> グループ内天山病院小児科の病児一時見守りサービスを無料で利用いただけます。（食事代別）
                                    </p>
                                </div>
                                <p class="show-for-small">産前産後/育児休暇制度<br> グループ内天山病院小児科の病児一時見守りサービスを無料で利用いただけます。（食事代別）
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-3.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>社宅制度</h2>
                                    <p>社宅利用の場合、家賃の一部を事業所にて負担します。</p>
                                </div>
                                <p class="show-for-small">社宅利用の場合、家賃の一部を事業所にて負担します。</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-4.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>年次有給休暇</h2>
                                    <p>法令に基づく所定日数を取得できます。</p>
                                </div>
                                <p class="show-for-small">法令に基づく所定日数を取得できます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-5.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>各種祝金</h2>
                                    <p>結婚・出産・入学祝金（中学校まで）</p>
                                </div>
                                <p class="show-for-small">結婚・出産・入学祝金（中学校まで）</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-6.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>無料駐車場</h2>
                                    <p>従業員専用の駐車場をご利用いただけます。</p>
                                </div>
                                <p class="show-for-small">従業員専用の駐車場をご利用いただけます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sm-10.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>OJT（全事業所）</h2>
                                    <p>経験豊富な上司や先輩による指導で、知識や技術を身に付けていただきます。</p>
                                </div>
                                <p class="show-for-small">経験豊富な上司や先輩による指導で、知識や技術を身に付けていただきます。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="envi-edu">
        <div class="envi-edu pt-80 pb-30 pt-sm-40">
            <div class="container container-950">
                <div class="sub-title">教育制度/キャリアアップ支援</div>
                <div class="row row-xxlarge pt-50 pt-sm-25">
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-envi-edu-1.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>介護福祉士/介護支援専門員<br> 資格取得のための支援<br class="show-for-small">（介護事業所等）
                                    </h2>
                                    <p>受験料・交通費等に関する支援を実施。（支援上限額あり）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-envi-edu-2.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>生活援助従事者研修、初任者研修、<br> 実務者研修受講支援<br class="show-for-small">（介護事業所等）
                                    </h2>
                                    <p>受講料や勤務等支援（条件あり）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-envi-edu-3.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>各種内部研修体制（全事業所）</h2>
                                    <p>入職時研修、IT基礎研修、感染防止対策研修、防災対策研修、接遇研修、虐待防止研修、他</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/hakuju/img-envi-edu-4.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>外部研修</h2>
                                    <p>業務に必要な外部研修や学会等への参加</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="envi-senpai">
        <div class="envi-senpai pt-55 pb-40 pt-sm-30 pb-sm-70">
            <div class="container container-1220">
                <div class="sub-title">先輩社員インタビュー</div>
                <a href="<?php echo home_url()?>/senpai/" class="btn btn-more hide-for-small">一覧へ</a>
                <div class="row row-small row-sm-small pt-50 pt-sm-35 slide-work-sm">
                <?php 
					// Lấy bài viết mới nhất
					$args = array(
						'post_type'      => 'senpai', 
                        'showposts'=>4
					);
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
						wp_reset_postdata();
					} else {
						echo 'Không có bài viết nào được tìm thấy.';
					}
					?>
                </div>
                <div class="box-btn-work pt-sm-10 show-for-small">
                    <a href="<?php echo home_url() ?>/senpai/" class="btn btn-main">一覧へ</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="envi-bottom">
            <div class="container">
                <div class="row row-collapse align-middle">
                    <div class="large-6 col-12">
                        <div class="col-inner pr-90 text-right text-sm-center pr-sm-0">
                            <h2 class="fs-42 fs-sm-20 color-10">社会福祉法人白寿会</h2>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner pt-sm-25">
                            <div class="box-btn-single">
                                <a href="<?php echo home_url() ?>/recruit-corporate/hakuju" class="btn btn-main bdcl-12">この施設の<span class="color-10 fs-sm-16 ls-sm-50 lh-sm-1-2 fs-28">募集要項</span>はこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
<?php

/**
 * Template Name: matsuyama
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
                            <p>学校法人松山学園</p>
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
                        <li><a href="#envi-about">松山学園について</a></li>
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
                <p class="text-center fs-30 color-8 pt-50 pt-sm-25 fs-sm-17 text-sm-left lh-sm-1-6">先進的な教育・保育を学びたい方を<br class="show-for-small">歓迎します。</p>
                <p class="lh-2-1 color-4d pt-45 fs-17 lh-sm-1-75 pt-sm-10 fs-sm-14">
                    圏域内でも有数の大規模園と小規模園の2園を運営しています。
                    <br>大規模園においては、「遊びは生活、遊びは科学、遊びは学び」をテーマに、子ども達が自分自身で作り出せる遊びの環境を整えた、遊びを教育として提供する認定こども園で、保育士・保育教諭にとっても学びの多い園となっています。意欲や向上心のある方をお待ちしています。
                    <br>大規模園は大変そうなイメージがあり敬遠されがちですが、職員配置数も多く、多人数ゆえに仕事内容も分担され、フォローも効きやすいのが特徴です。
                    <br>小規模園については、少人数で、手厚く家庭的な保育を提供する園です。一人の子どもに深くかかわり、成長を見守りたいと感じる方はこちらの園がお勧めです。
                    <br>対照的な職場ですが、ご自身の特性に合わせて、採用後の異動等も可能です。是非ご検討下さい。
                </p>
            </div>
        </div>
    </section>
    <section id="envi-about">
        <div class="envi-about pt-120 pb-70 pt-sm-65">
            <div class="container">
                <div class="sub-title">松山学園について</div>
                <div class="row row-xxxlarge pt-50 pt-sm-25">
                    <div class="large-6 col-12">
                        <div class="col-inner envi-about-left">
                            <p class=" fs-30 color-8 pt-20 fs-sm-17 lh-1-5 pt-sm-0 lh-sm-1-6">豊かな人間形成を行うことが<br> できるよう、多角的な教育を
                                <br> 行ないます。
                            </p>
                            <p class="lh-2-1 color-4d pt-45 fs-17 fs-sm-14 pt-sm-20">
                                学校法人松山学園は、幼保連携型認定こども園教育・保育要領に基づき、子ども子育て支援法により規定される「特定・教育保育」を行うことを目的とした学校法人です。<br> 私たちは、子供たちにとって最も重要な期間をお預かりしていることを自覚し、子供たちがすくすくと健やかに育ちながら、豊かな人間形成を行うことができるよう、多角的な教育を行ないます。
                            </p>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner pt-sm-30">
                            <div class="envi-about-img">
                                <img src="https://atom-recruit.comotec.website/assets/images/matsu/img-envi-about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-1000">
                <div class="box-group-envi-cs pt-60 pt-sm-90">
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">施設(法人)名</div>
                        <div class="box-envi-custom-right">学校法人 松山学園</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">所在地</div>
                        <div class="box-envi-custom-right">愛媛県松山市星岡町二丁目22番7号</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">設　立</div>
                        <div class="box-envi-custom-right">昭和53年11月2日</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">理事長</div>
                        <div class="box-envi-custom-right">大城　慎也</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">学園長</div>
                        <div class="box-envi-custom-right">西宮　京子</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">事業内容</div>
                        <div class="box-envi-custom-right">1.幼保連携型認定こども園の運営<br>
                            2.小規模保育事業Ａ型の運営 （付随事業）<br>
                            　1.放課後児童健全育成事業（放課後児童クラブ） （収益事業）<br>
                            　1. 教育用品小売業<br>
                            　2. 英語教室・サッカー教室・体操教室・モダンバレエ<br>
                            　3. 小学生対象英会話教室の開設</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="envi-about-2 pt-45 pb-45">
            <div class="container container-1000">
                <div class="sub-title-line">施設一覧</div>
                <div class="row row-xlarge row-sm-26 justify-center  pt-35">
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/matsu/img-link-envi-1.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p>松山認定こども園 <br class="show-for-small">星岡</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/matsu/img-link-envi-2.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p>小規模保育事業A型 <br class="show-for-small">天山保育園</p>
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
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-11.svg" alt="">
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
                <div class="row pt-50 pt-sm-25">
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/izumi/img-envi-edu-1.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>キャリアアップ研修</h2>
                                    <p>大学等の講師による、保育のスキルアップの講座を受講します。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/izumi/img-envi-edu-2.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>各種内部研修体制（全事業所）</h2>
                                    <p>入職時研修、IT基礎研修、感染防止対策研修、防災対策研修、接遇研修、虐待防止研修、他</p>
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
                <a href="https://atom-recruit.comotec.website/senpai/" class="btn btn-more hide-for-small">一覧へ</a>
                <div class="row row-small row-sm-small pt-50 pt-sm-35 slide-work-sm">
                    <div class="large-3 col-6">
                        <div class="col-inner">
                            <div class="box-slide-work biggerlink bl-hot" style="cursor: pointer;">
                                <a href="https://atom-recruit.comotec.website/senpai/300/" class="bl-bigger"></a>
                                <div class="box-img-slide-work">
                                    <div class="box-img-slide-work-inner">
                                        <div class="image-cover image-1-1">
                                            <img width="844" height="844" src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5532-1-scaled-e1681092787360.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5532-1-scaled-e1681092787360.jpg 844w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5532-1-scaled-e1681092787360-300x300.jpg 300w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5532-1-scaled-e1681092787360-150x150.jpg 150w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5532-1-scaled-e1681092787360-768x768.jpg 768w" sizes="(max-width: 844px) 100vw, 844px">
                                        </div>
                                    </div>
                                    <div class="cat-work-ab cat-work-ab-48">
                                        キャリア </div>
                                </div>
                                <div class="box-slide-work-meta">
                                    <div class="cat-work">在職施設</div>
                                    <div class="cont-work">
                                        高齢者総合福祉施設<br>サンシティ北条 </div>
                                    <div class="cat-work cat-work-id-2">職種</div>
                                    <p class="">
                                        介護福祉士・介護職 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 col-6">
                        <div class="col-inner">
                            <div class="box-slide-work biggerlink bl-hot" style="cursor: pointer;">
                                <a href="https://atom-recruit.comotec.website/senpai/341/" class="bl-bigger"></a>
                                <div class="box-img-slide-work">
                                    <div class="box-img-slide-work-inner">
                                        <div class="image-cover image-1-1">
                                            <img width="947" height="947" src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5909-1-scaled-e1681105479923.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5909-1-scaled-e1681105479923.jpg 947w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5909-1-scaled-e1681105479923-300x300.jpg 300w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5909-1-scaled-e1681105479923-150x150.jpg 150w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5909-1-scaled-e1681105479923-768x768.jpg 768w" sizes="(max-width: 947px) 100vw, 947px">
                                        </div>
                                    </div>
                                    <div class="cat-work-ab cat-work-ab-48">
                                        キャリア </div>
                                </div>
                                <div class="box-slide-work-meta">
                                    <div class="cat-work">在職施設</div>
                                    <div class="cont-work">
                                        天山病院 </div>
                                    <div class="cat-work cat-work-id-2">職種</div>
                                    <p class="">
                                        看護師 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 col-6">
                        <div class="col-inner">
                            <div class="box-slide-work biggerlink bl-hot" style="cursor: pointer;">
                                <a href="https://atom-recruit.comotec.website/senpai/252/" class="bl-bigger"></a>
                                <div class="box-img-slide-work">
                                    <div class="box-img-slide-work-inner">
                                        <div class="image-cover image-1-1">
                                            <img width="873" height="873" src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5746-scaled-e1681101673869.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5746-scaled-e1681101673869.jpg 873w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5746-scaled-e1681101673869-300x300.jpg 300w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5746-scaled-e1681101673869-150x150.jpg 150w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_5746-scaled-e1681101673869-768x768.jpg 768w" sizes="(max-width: 873px) 100vw, 873px">
                                        </div>
                                    </div>
                                    <div class="cat-work-ab cat-work-ab-47">
                                        新 卒 </div>
                                </div>
                                <div class="box-slide-work-meta">
                                    <div class="cat-work">在職施設</div>
                                    <div class="cont-work">
                                        高齢者総合福祉施設<br>サンシティ北条 </div>
                                    <div class="cat-work cat-work-id-2">職種</div>
                                    <p class="">
                                        相談員（社会福祉士） </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 col-6">
                        <div class="col-inner">
                            <div class="box-slide-work biggerlink bl-hot" style="cursor: pointer;">
                                <a href="https://atom-recruit.comotec.website/senpai/314/" class="bl-bigger"></a>
                                <div class="box-img-slide-work">
                                    <div class="box-img-slide-work-inner">
                                        <div class="image-cover image-1-1">
                                            <img width="832" height="832" src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6492-1-scaled-e1681094306739.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6492-1-scaled-e1681094306739.jpg 832w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6492-1-scaled-e1681094306739-300x300.jpg 300w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6492-1-scaled-e1681094306739-150x150.jpg 150w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6492-1-scaled-e1681094306739-768x768.jpg 768w" sizes="(max-width: 832px) 100vw, 832px">
                                        </div>
                                    </div>
                                    <div class="cat-work-ab cat-work-ab-48">
                                        キャリア </div>
                                </div>
                                <div class="box-slide-work-meta">
                                    <div class="cat-work">在職施設</div>
                                    <div class="cont-work">
                                        介護老人保健施設 長安 </div>
                                    <div class="cat-work cat-work-id-2">職種</div>
                                    <p class="">
                                        看護師 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-work pt-sm-10 show-for-small">
                    <a href="https://atom-recruit.comotec.website/senpai/" class="btn btn-main">一覧へ</a>
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
                            <h2 class="fs-42 fs-sm-20 color-8">学校法人松山学園</h2>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner pt-sm-25">
                            <div class="box-btn-single">
                                <a href="https://atom-recruit.comotec.website/recruit-corporate/matsuyama" class="btn btn-main bdcl-12">この施設の<span class="color-8 fs-sm-16 ls-sm-50 lh-sm-1-2 fs-28">募集要項</span>はこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main> 

<?php get_footer(); ?>
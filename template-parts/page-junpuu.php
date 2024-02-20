<?php

/**
 * Template Name: junpuu
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
                            <p>医療法人順風会</p>
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
                        <li><a href="#envi-about">順風会について</a></li>
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
                <p class="text-center fs-30 color-12 pt-50 pt-sm-25 fs-sm-17 text-sm-left lh-sm-1-6">医療法人順風会は地域と連携し、<br class="show-for-small">地域包括ケアシステムの深化・推進、<br> 健康長寿社会の実現に<br class="show-for-small">取り組みます！
                </p>
                <p class="lh-2-1 color-4d pt-45 fs-17 lh-sm-1-75 pt-sm-20 fs-sm-14 text-center text-sm-left">
                    団塊の世代が75歳以上となる2025年（令和7年）以降、医療や介護の需要がさらに増加することが見込まれています。<br> 私たちは、住み慣れた地域で、自分らしい暮らしを続けられるようサポートします。
                    <br> 地域のニーズに応えられる良質なサービスを提供します。
                    <br> 信頼される心のこもったサービスの実践を心がけます。
                    <br> スキルアップをしながら、一緒に地域貢献をしてみませんか？
                </p>
            </div>
        </div>
    </section>
    <section id="envi-about">
        <div class="envi-about pt-120 pb-70 pt-sm-65">
            <div class="container">
                <div class="sub-title">順風会について</div>
                <div class="row row-xxxlarge pt-50 pt-sm-25">
                    <div class="large-6 col-12">
                        <div class="col-inner envi-about-left">
                            <p class=" fs-30 color-12 pt-20 fs-sm-17 lh-1-5 pt-sm-0 lh-sm-1-6">地域と共に支え合う町づくり<br> 「健康まちづくり」
                            </p>
                            <p class="lh-2-1 color-4d pt-45 fs-17 fs-sm-14 pt-sm-20">地域と共に支え合う町づくりを目標に、「健康まちづくり」をテーマとして医療・健診・福祉サービスを提供しています。<br> 子どもから大人まで皆様が安全・安心に生活することができる地域包括ケア社会の実現に向け、良質なサービスを提供させて頂きます。
                            </p>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner pt-sm-30">
                            <div class="envi-about-img">
                                <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-1000">
                <div class="box-group-envi-cs pt-15 pt-sm-90">
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">施設(法人)名</div>
                        <div class="box-envi-custom-right">医療法人 順風会</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">所在地</div>
                        <div class="box-envi-custom-right">愛媛県松山市天山二丁目3番30号</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">設　立</div>
                        <div class="box-envi-custom-right">昭和54年4月4日</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">理事長</div>
                        <div class="box-envi-custom-right">宇都宮　一泰</div>
                    </div>
                    <div class="box-envi-custom">
                        <div class="box-envi-custom-left">事業内容</div>
                        <div class="box-envi-custom-right">病院、診療所、介護医療院、介護老人保健施設 (訪問リハビリ・通所リハビリ・短期入所療養介護)、訪問介護、訪問看護、通所介護、短期入所生活介護、認知症対応型共同生活介護、居宅介護支援事業、総合事業、病児・病後児保育事業</div>
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
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-link-envi-1.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">天山病院</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-link-envi-2.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">八倉医院</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-link-envi-3.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">天山歯科クリニック</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-link-envi-4.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">介護老人保健施設 <br class="show-for-small">長安</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-link-envi-5.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">在宅介護複合施設<br>康復センター星岡
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 col-6">
                        <div class="col-inner">
                            <div class="box-img-link-envi">
                                <div class="box-img-cont">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-link-envi-6.png" alt="">
                                </div>
                                <div class="box-img-link-text">
                                    <p href="#">順風会 健診センター</p>
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
                                    <h2>子育て支援制度<br><span class="fs-16 fs-sm-13">（病児一時見守り/お迎えタクシー他）</span>
                                    </h2>
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
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-7.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>日本人間ドック学会への<br class="show-for-small">参加<br class="hide-for-small"><span class="fs-16 fs-sm-13">（健診センター）</span>
                                    </h2>
                                    <p>総会の聴講のみならず学会発表も責任者医師のサポートのもと行うことが出来ます。</p>
                                </div>
                                <p class="show-for-small">総会の聴講のみならず学会発表も責任者医師のサポートのもと行うことが出来ます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-8.svg" alt="">
                                </div>
                                <div class="box-envi-sp-cont">
                                    <h2>愛媛県歯科衛生士会入会<br class="show-for-small">支援<br class="hide-for-small"><span class="fs-16 fs-sm-13">（歯科）</span></h2>
                                    <p>歯科衛生士として常勤で1年以上勤務した場合、一般社団法人愛媛県歯科衛生士会の年会費を、事業所で負担します。</p>
                                </div>
                                <p class="show-for-small">歯科衛生士として常勤で1年以上勤務した場合、一般社団法人愛媛県歯科衛生士会の年会費を、事業所で負担します。</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-sp">
                                <div class="box-envi-sp-img">
                                    <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-sp-9.svg" alt="">
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
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-1.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>ISMS（健診）</h2>
                                    <p>受診者様における個人情報の取り扱いに際し、毎年1回職員教育を行っております。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-2.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>認定看護管理者教育課程<br> ファーストレベル　受講支援<br class="show-for-small">(病院)
                                    </h2>
                                    <p>保健・医療・福祉施設等の看護管理に必要な基本的知識・技術習得のため、愛媛県看護協会主催の研修を事業所負担で受講出来ます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-3.png" alt="">
                                    </div>
                                </div>
                                <div class="box-envi-edu-cont">
                                    <h2>認定看護師資格　取得支援<br class="show-for-small">（病院）</h2>
                                    <p>特定の看護分野における熟練した看護技術及び知識を用いて、水準の高い看護実践のできる認定看護師を取得してもらうため、研修受講を支援いたします。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-envi-edu">
                                <div class="box-envi-edu-img">
                                    <div class="image-cover">
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-4.png" alt="">
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
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-5.png" alt="">
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
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-6.png" alt="">
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
                                        <img src="https://atom-recruit.comotec.website/assets/images/junpuu/img-envi-edu-7.png" alt="">
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
                                <a href="https://atom-recruit.comotec.website/senpai/327/" class="bl-bigger"></a>
                                <div class="box-img-slide-work">
                                    <div class="box-img-slide-work-inner">
                                        <div class="image-cover image-1-1">
                                            <img width="742" height="742" src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6146-1-scaled-e1681094649167.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6146-1-scaled-e1681094649167.jpg 742w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6146-1-scaled-e1681094649167-300x300.jpg 300w, https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6146-1-scaled-e1681094649167-150x150.jpg 150w" sizes="(max-width: 742px) 100vw, 742px">
                                        </div>
                                    </div>
                                    <div class="cat-work-ab cat-work-ab-48">
                                        キャリア </div>
                                </div>
                                <div class="box-slide-work-meta">
                                    <div class="cat-work">在職施設</div>
                                    <div class="cont-work">
                                        松山認定こども園 星岡 </div>
                                    <div class="cat-work cat-work-id-2">職種</div>
                                    <p class="">
                                        保育士・保育教論 </p>
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
                            <h2 class="fs-42 fs-sm-20 color-12">医療法人順風会</h2>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner pt-sm-25">
                            <div class="box-btn-single">
                                <a href="https://atom-recruit.comotec.website/recruit-corporate/junpuu" class="btn btn-main bdcl-12">この施設の<span class="color-12 fs-sm-16 ls-sm-50 lh-sm-1-2 fs-28">募集要項</span>はこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
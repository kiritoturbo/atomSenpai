<?php
get_header(); ?>

<main class="page-senpai-single">

    <section>
        <div class="top-senpai pt-40 pt-sm-30 pb-sm-20">
            <div class="container container-1000">
                <h2 class="fs-13 ff-baby text-center color-4 fs-sm-14">Work Style</h2>
                <div class="title-jp fs-26 text-center color-4d fs-sm-23"><span class="color-4">“<span>十</span><span class="color-3">人</span><span class="color-2">十</span><span class="color-1">色</span>” </span>の働き方</div>
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
    <section>
        <div class="senpai-single-cont pt-60 pt-sm-25">
            <div class="container container-875">
                <div class="box-senpai-single-top">
                    <?php 
                    $recruit_cats = get_the_terms(get_the_ID(), 'senpai-cat');
                    if ($recruit_cats && !is_wp_error($recruit_cats)) {
                        $recruit_cat = $recruit_cats[0];
                        $recruit_cat_link = get_term_link($recruit_cat);
                    }
                    ?>
                    <div class="box-senpai-single-top-cont">
                        <div class="cat-work-ab cat-work-ab-48" style="<?php echo get_custom_taxonomy_color($recruit_cat->term_id); ?>">
                            <?php echo $recruit_cat->name ?> </div>
                        <div class="box-img-single-senpai">
                            <?php
                            $custom_images = get_post_meta(get_the_ID(), '_custom_images', true);
                            if (!empty($custom_images)) {
                                foreach ($custom_images as $image_id) {
                                    ?>
                                    <div class="image-cover">
                                        <?php 
                                            if($image_id){
                                                echo wp_get_attachment_image($image_id, 'full'); 
                                            }
                                            else{
                                                echo '<img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6422-scaled-e1681103126226.jpg" alt="">';
                                            }
                                        ?>
                                    </div>
                                    <?php 
                                }
                            }
                            ?>


                        </div>
                        <div class="box-bottom-single-senpai hide-for-small">
                            <div class="box-text-single-senpai">
                                <div class="cat-work">在職施設</div>
                                <div class="cont-work fs-22 fs-sm-14 color-4d">
                                    松山認定こども園和泉 和泉保育園 </div>
                                <div class="cat-work cat-work-id-2">職種・役職</div>

                                <div class="cont-work fs-22 fs-sm-14 color-4d">
                                    保育士 </div>
                            </div>
                            <?php
                            if (has_term('', 'senpai-tag')) {
                                $tags = get_the_terms(get_the_ID(), 'senpai-tag');
                                if ($tags && !is_wp_error($tags)) {
                                    echo '<ul class="list-field-senpai pt-10">';
                                    foreach ($tags as $tag) {
                                        $tag_link = get_term_link($tag);
                                        echo '<li><a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a></li>';
                                    }
                                    echo '</ul>';
                                }
                            }
                            ?>

                        </div>

                    </div>
                </div>
                <div class="box-bottom-single-senpai show-for-small">
                    <div class="box-text-single-senpai">
                        <div class="cat-work">在職施設</div>
                        <div class="cont-work">
                            松山認定こども園和泉 和泉保育園 </div>

                        <div class="cat-work cat-work-id-2">職種・役職</div>

                        <div class="cont-work fs-22 fs-sm-14 color-4d">
                            保育士 </div>
                    </div>
                    <ul class="list-field-senpai pt-10">
                        <li>井上 結以菜さん</li>
                        <li>2020年入社</li>
                        <li>聖カタリナ大学短期大学部卒</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="interview-senpai mt-170 mt-sm-50">
            <div class="container container-1100">
                <div class="title-ab ff-baby">Interview</div>
                <div class="sub-title mb-30">インタビュー</div>
                <div class="box-qna-senpai">

                    <div class="qna-senpai-title">
                        <span>Q1.</span>
                        <p>今の職場を選んだ理由について教えて下さい。</p>
                    </div>
                    <div class="qna-senpai-cont">
                        <div class="qna-senpai-cont-left">
                            <div class="img-senpai-qna">
                                <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6379-scaled.jpg" alt="">
                            </div>
                        </div>

                        <div class="qna-senpai-cont-right">
                            保育士を離れて別の仕事をしていましたが、もう一度保育士をするか悩んでいた時、園見学をさせていただきました。<br>
                            園の雰囲気がよく、子どもたちだけでなく、保育士の方々も楽しそうに過ごしている姿を見て、私もこの園でもう一度、保育士がしたいと思って就職させていただきました。 </div>
                    </div>
                </div>

                <div class="box-qna-senpai">

                    <div class="qna-senpai-title">
                        <span>Q2.</span>
                        <p>職場の魅力について教えて下さい。</p>
                    </div>
                    <div class="qna-senpai-cont">

                        <div class="qna-senpai-cont-right">
                            相談がしやすい環境が整っているところです。わからないことや悩みなど先輩方に相談がしやすく、親身になって聞いていただけるので、安心して働くことができます。<br>
                            また、サポートをしていただけるため、積極的に行事などを担当し、たくさんの経験ができ、自信にも繋がり、自分自身がスキルアップできる環境でもあります。 </div>
                    </div>
                </div>

                <div class="box-qna-senpai">

                    <div class="qna-senpai-title">
                        <span>Q3.</span>
                        <p>仕事においてどんな時にやりがいを感じますか？</p>
                    </div>
                    <div class="qna-senpai-cont">
                        <div class="qna-senpai-cont-left">
                            <div class="img-senpai-qna">
                                <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6264-scaled.jpg" alt="">
                            </div>
                        </div>

                        <div class="qna-senpai-cont-right">
                            日々子どもの成長やその過程を間近で見られるところです。<br>
                            子どもたちと過ごす中で、小さな成長に気づき、その成長を保護者や子どもと一緒に感じて喜べることは、保育士として、とても魅力的だと思います。<br>
                            また、子どもたちと行事を成功させた時の達成感にやりがいを感じます。 </div>
                    </div>
                </div>

                <div class="box-qna-senpai">

                    <div class="qna-senpai-title">
                        <span>Q4.</span>
                        <p>休日はどのように過ごしていますか？</p>
                    </div>
                    <div class="qna-senpai-cont">

                        <div class="qna-senpai-cont-right">
                            休みの日には、ドライブをしたり、友だちとご飯を食べに行ったりしています。家でゆっくり過ごすことも好きです。<br>
                            休暇が取りやすく、連休もあるため、コロナが落ち着いたら、いろんな所に旅行に行きたいと考えています。 </div>
                    </div>
                </div>

                <div class="box-qna-senpai">

                    <div class="qna-senpai-title">
                        <span>Q5.</span>
                        <p>就活中の方にメッセージをお願いします。</p>
                    </div>
                    <div class="qna-senpai-cont">
                        <div class="qna-senpai-cont-left">
                            <div class="img-senpai-qna">
                                <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6390-scaled.jpg" alt="">
                            </div>
                        </div>

                        <div class="qna-senpai-cont-right">
                            保育士は、日々成長していく子どもの姿を間近で感じられる素敵な仕事です。<br>
                            大変な部分もありますが、その分、幸せや充実感も多いので、みなさんの｢子どもが好き｣な気持ちを大切にして頑張ってください。応援しています。 </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="home-work">
        <div class="home-work pt-70 pb-120 pt-sm-40 pb-sm-15">
            <div class="container container-1000">
                <div class="sub-title">一日のスケジュール</div>
                <div class="box-group-timeline mt-55 mt-sm-25">
                    <div class="box-time-line">
                        <div class="box-time-line-left">8:30～9:00</div>
                        <div class="box-time-line-right">登園バッグ荷物片づけ・子ども受け入れ<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">9:00～10:50</div>
                        <div class="box-time-line-right">園庭、室内・ホール・小栗第一公園での活動<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">10:50～11:10</div>
                        <div class="box-time-line-right">給食準備・トイレ援助<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">11:10～12:00</div>
                        <div class="box-time-line-right">給食援助<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">12:00～12:30</div>
                        <div class="box-time-line-right">トイレ援助<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">12:30～13:40</div>
                        <div class="box-time-line-right">休憩<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">13:40～15:00</div>
                        <div class="box-time-line-right">午睡見守り・職員ミーティング・トイレ援助援助・おやつ準備<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">15:00～15:30</div>
                        <div class="box-time-line-right">おやつ援助<br>
                        </div>
                    </div>
                    <div class="box-time-line">
                        <div class="box-time-line-left">15:30～17:40</div>
                        <div class="box-time-line-right">荷物片づけ・園児見送り・終業<br>
                        </div>
                    </div>

                </div>
                <div class="row pt-50 row-xxxlarge">
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-img-senpai">
                                <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6323-scaled.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="large-6 col-12">
                        <div class="col-inner">
                            <div class="box-img-senpai">
                                <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/Z06_6347-scaled.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="senpai-single-btn pt-60 pb-60 pt-sm-40 pb-sm-40">
        <div class="container container-1100">
            <div class="row row-xxxxxlarge">
                <div class="large-6 col-12">
                    <div class="col-inner">
                        <div class="box-btn-single">
                            <a href="https://atom-recruit.comotec.website/recruit-type/hoikushi/" class="btn btn-main bdcl-8">この職種の<span class="color-8 fs-sm-16 ls-sm-50 lh-sm-1-2 fs-28">募集要項</span>はこちら</a>
                        </div>
                    </div>
                </div>
                <div class="large-6 col-12">
                    <div class="col-inner pt-sm-40">
                        <div class="box-btn-single">

                            <a href="https://atom-recruit.comotec.website/izumi" class="btn btn-main bdcl-12">この職種の<span class="color-12 fs-sm-16 ls-sm-50 lh-sm-1-2 fs-28">勤務施設</span>はこちら</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="page-navi">
        <div class="page-navi pt-55 pt-sm-25 pb-70 pb-sm-85">
            <div class="container container-1000">
            <div class="pagination-list flex-col text-center">
                <ul class="wp-pagenavi" role="navigation">
                <?php
                $previous_post = get_previous_post();
                $next_post = get_next_post();
                ?>

                <li>
                    <?php if ($previous_post) : ?>
                    <a href="<?php echo get_permalink($previous_post); ?>" class="previouspostslink" aria-label="Trước"></a>
                    <?php endif; ?>
                </li>

                <li>
                    <a class="btn btn-main btn-home" rel="next" aria-label="一覧へ" href="https://atom-recruit.comotec.website/recruit">一覧へ</a>
                </li>

                <li>
                    <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="nextpostslink" aria-label="Tiếp"></a>
                    <?php endif; ?>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </section>



</main>

<?php
get_footer();
?>
<?php get_header(); ?>


<main>
    <section id="banner-home">
        <div class="banner-home pb-95 pb-sm-0">
            <div class="box-banner-home">
                <div class="banner-home-left">
                <div class="slide-banner-home ">
                        <div class="slide-item slide-item-1 "></div>
                        <div class="slide-item slide-item-2 " ></div>
                        <div class="slide-item slide-item-3 " ></div>
                </div>
                </div>
                <div class="banner-home-right">
                    <h2 class="ff-baby fs-67 fs-sm-26 ls-100 lh-1 color-1 anim fadeup is-animated">Forward <br> to the Future !</h2>
                    <p class="fs-22 fs-sm-14 ff-klee ls-200 lh-1-35 lh-sm-1-5 pt-20 pt-sm-10 anim fadeup is-animated">あなたらしく、<br> このまちの健康と未来を支える。
                    </p>
                    <div class="box-popup-banner mt-40 hide-for-small">
                        <div class="popup-pc popup-banner">
                            <div class="popup-hd">
                                <div class="title-popup">職 種</div>
                                <p>からさがす</p>
                            </div>
                            <div class="popup-cont" style="display: none;">
                                <div class="popup-cont-inner-wrap">
                                    <div class="popup-cont-inner">
                                        <div class="close-popup"></div>
                                        <div class="sub-title-popup"><span>職種</span>からさがす</div>
                                        <div class="box-list-link-cms mt-45 mb-sm-60">
                                            <?php
                                            $args = array(
                                                'taxonomy' => 'category',
                                                'hide_empty' => false,
                                                'parent'     => 1,
                                            );
                                            $categories = get_categories($args);
                                            foreach ($categories as $category) { ?>
                                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                                    <a href="<?php echo get_term_link($category->slug, 'category'); ?>" class="bl-bigger">

                                                        <div class="box-img-link-cms">
                                                            <div class="image-cover">
                                                                <?php
                                                                $image_id = get_term_meta($category->term_id, 'category_image_id', true); 

                                                                if ($image_id) {
                                                                    echo wp_get_attachment_image($image_id, 'thumbnail'); 
                                                                } else {
                                                                    echo '<img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-5.png" alt="">';
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="title-link-cms"><?php echo $category->name; ?></div>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-pc popup-banner mt-20">
                            <div class="popup-hd">
                                <div class="title-popup">施 設</div>
                                <p>からさがす</p>
                            </div>
                            <div class="popup-cont" style="display: none;">
                                <div class="popup-cont-inner">
                                    <div class="close-popup"></div>
                                    <div class="sub-title-popup"><span>施設</span>からさがす</div>
                                    <div class="box-list-link-cms box-list-link-cms-3 mt-45 mb-sm-60">
                                        <?php
                                        $args = array(
                                            'taxonomy' => 'category',
                                            'hide_empty' => false,
                                        );
                                        $categories = get_categories($args);
                                        foreach ($categories as $category) { ?>
                                            <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                                <a href="<?php echo get_term_link($category->slug, 'category'); ?>" class="bl-bigger">

                                                    <div class="box-img-link-cms">
                                                        <div class="image-cover">
                                                            <?php
                                                            $image_id = get_term_meta($category->term_id, 'category_image_id', true); 

                                                            if ($image_id) {
                                                                echo wp_get_attachment_image($image_id, 'thumbnail'); 
                                                            } else {
                                                                echo '<img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-5.png" alt="">';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="title-link-cms"><?php echo $category->name; ?></div>
                                                </a>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <div class="box-link-sub-cms">
                                        <div class="row row-large">
                                            <div class="large-6 col-12">
                                                <div class="col-inner">
                                                    <div class="box-list-link-sub">
                                                        <div class="title-line-link">高齢者介護</div>
                                                        <div class="list-sub-link">
                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e4%bb%8b%e8%ad%b7%e8%80%81%e4%ba%ba%e4%bf%9d%e5%81%a5%e6%96%bd%e8%a8%ad-%e9%95%b7%e5%ae%89/">
                                                                介護老人保健施設 長安</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%9c%a8%e5%ae%85%e4%bb%8b%e8%ad%b7%e8%a4%87%e5%90%88%e6%96%bd%e8%a8%ad-%e5%ba%b7%e5%be%a9%e3%82%bb%e3%83%b3%e3%82%bf%e3%83%bc%e6%98%9f%e5%b2%a1/">
                                                                在宅介護複合施設 <ruby>康復<rp></rp>
                                                                    <rt>カンフー</rt>
                                                                    <rp></rp>
                                                                </ruby>センター星岡</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e4%bb%8b%e8%ad%b7%e8%80%81%e4%ba%ba%e7%a6%8f%e7%a5%89%e6%96%bd%e8%a8%ad-%e7%99%bd%e5%af%bf%e8%8d%98/">
                                                                介護老人福祉施設 白寿荘</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e8%80%81%e4%ba%ba%e4%bf%9d%e5%81%a5%e6%96%bd%e8%a8%ad-%e3%82%8c%e3%82%93%e3%81%92%e8%8d%98/">
                                                                老人保健施設 れんげ荘</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e3%83%87%e3%82%a4%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e3%82%bb%e3%83%b3%e3%82%bf%e3%83%bc%e5%92%8c%e6%b3%89/">
                                                                デイサービスセンター和泉</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e4%bb%8b%e8%ad%b7%e8%80%81%e4%ba%ba%e4%bf%9d%e5%81%a5%e6%96%bd%e8%a8%ad-%e8%a5%bf%e5%ae%89/">
                                                                介護老人保健施設 西安</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e9%ab%98%e9%bd%a2%e8%80%85%e7%b7%8f%e5%90%88%e7%a6%8f%e7%a5%89%e6%96%bd%e8%a8%ad-%e3%82%b5%e3%83%b3%e3%82%b7%e3%83%86%e3%82%a3%e5%8c%97%e6%9d%a1/">
                                                                高齢者総合福祉施設 サンシティ北条</a>


                                                        </div>
                                                    </div>
                                                    <div class="box-list-link-sub">
                                                        <div class="title-line-link">障がい者支援</div>
                                                        <div class="list-sub-link">
                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e6%8c%87%e5%ae%9a%e9%9a%9c%e5%ae%b3%e8%80%85%e6%94%af%e6%8f%b4%e6%96%bd%e8%a8%ad-%e5%b8%8c%e6%9c%9b%e3%82%b1%e4%b8%98/">
                                                                指定障害者支援施設 希望ケ丘</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e9%9a%9c%e5%ae%b3%e8%80%85%e5%b0%b1%e5%8a%b4%e6%94%af%e6%8f%b4%e3%82%bb%e3%83%b3%e3%82%bf%e3%83%bc-%e3%82%a2%e3%83%ab%e3%83%a0%e3%81%ae%e9%87%8c/">
                                                                障害者就労支援センター アルムの里</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%85%ab%e5%b9%a1%e6%b5%9c%e5%b8%82%e9%9a%9c%e5%ae%b3%e8%80%85%e6%96%bd%e8%a8%ad-%e3%81%84%e3%81%8d%e3%81%84%e3%81%8d%e3%83%97%e3%83%81%e3%83%95%e3%82%a1%e3%83%bc%e3%83%a0/">
                                                                八幡浜市障害者施設 いきいきプチファーム</a>


                                                        </div>
                                                    </div>
                                                    <div class="box-list-link-sub">
                                                        <div class="title-line-link">医療機関</div>
                                                        <div class="list-sub-link">
                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%a4%a9%e5%b1%b1%e7%97%85%e9%99%a2/">
                                                                天山病院</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%85%ab%e5%80%89%e5%8c%bb%e9%99%a2/">
                                                                八倉医院</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%a4%a9%e5%b1%b1%e6%ad%af%e7%a7%91%e3%82%af%e3%83%aa%e3%83%8b%e3%83%83%e3%82%af/">
                                                                天山歯科クリニック</a>


                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="large-6 col-12">
                                                <div class="col-inner">
                                                    <div class="box-list-link-sub">
                                                        <div class="title-line-link">健診施設</div>
                                                        <div class="list-sub-link">
                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e9%a0%86%e9%a2%a8%e4%bc%9a-%e5%81%a5%e8%a8%ba%e3%82%bb%e3%83%b3%e3%82%bf%e3%83%bc/">順風会 健診センター</a>
                                                        </div>
                                                    </div>
                                                    <div class="box-list-link-sub">
                                                        <div class="title-line-link">保育園</div>
                                                        <div class="list-sub-link">
                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e6%9d%be%e5%b1%b1%e8%aa%8d%e5%ae%9a%e3%81%93%e3%81%a9%e3%82%82%e5%9c%92-%e6%98%9f%e5%b2%a1/">松山認定こども園 星岡</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%b0%8f%e8%a6%8f%e6%a8%a1%e4%bf%9d%e8%82%b2%e4%ba%8b%e6%a5%ad%e6%89%80%ef%bd%81%e5%9e%8b-%e5%a4%a9%e5%b1%b1%e4%bf%9d%e8%82%b2%e5%9c%92/">小規模保育事業所Ａ型 天山保育園</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e6%9d%be%e5%b1%b1%e8%aa%8d%e5%ae%9a%e3%81%93%e3%81%a9%e3%82%82%e5%9c%92%e5%92%8c%e6%b3%89-%e5%92%8c%e6%b3%89%e4%bf%9d%e8%82%b2%e5%9c%92/">松山認定こども園和泉 和泉保育園</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e6%b5%ae%e7%a9%b4%e4%bf%9d%e8%82%b2%e5%9c%92/">浮穴保育園</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e9%81%93%e5%be%8c%e4%bf%9d%e8%82%b2%e5%9c%92/">道後保育園</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e7%99%bd%e6%b5%9c%e4%bf%9d%e8%82%b2%e6%89%80/">白浜保育所</a>

                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e5%85%ab%e5%b9%a1%e6%b5%9c%e5%b8%82%e7%97%85%e5%85%90%e3%83%bb%e7%97%85%e5%be%8c%e5%85%90%e4%bf%9d%e8%82%b2%e6%96%bd%e8%a8%ad-%e3%82%ad%e3%83%83%e3%82%ba%e3%82%b1%e3%82%a2%e3%83%bb%e3%81%97%e3%82%89/">八幡浜市病児・病後児保育施設 キッズケア・しらはま</a>
                                                        </div>
                                                    </div>
                                                    <div class="box-list-link-sub">
                                                        <div class="title-line-link">その他</div>
                                                        <div class="list-sub-link">
                                                            <a href="https://atom-recruit.comotec.website/recruit-facility/%e6%9d%be%e5%b1%b1%e5%b8%82%e5%9c%b0%e5%9f%9f%e5%8c%85%e6%8b%ac%e6%94%af%e6%8f%b4%e3%82%bb%e3%83%b3%e3%82%bf%e3%83%bc%e7%9f%b3%e4%ba%95%e3%83%bb%e6%b5%ae%e7%a9%b4%e3%83%bb%e4%b9%85%e8%b0%b7/">松山市地域包括支援センター石井・浮穴・久谷</a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-pc popup-banner mt-20">
                            <div class="popup-hd">
                                <div class="title-popup">勤 務 エリア</div>
                                <p>からさがす</p>
                            </div>
                            <div class="popup-cont" style="display: none;">
                                <div class="popup-cont-inner">
                                    <div class="close-popup"></div>
                                    <div class="sub-title-popup"><span>エリア</span>からさがす</div>
                                    <div class="box-800 mt-70">
                                        <div class="row row-collapse">
                                            <div class="large-4-4 col-12">
                                                <div class="col-inner box-home-link-left">
                                                    <div class="title-dot">松山市エリア</div>
                                                    <div class="box-list-link-cms-2 mt-20">
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/chuushinbu/" style="border-color: #0071b7">中心部</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/jounan/" style="border-color: #39b04a">城南</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/jousai/" style="border-color: #00A498">城西</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/jouhoku/" style="border-color: #29a6dd">城北</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/joutou/" style="border-color: #87c13f">城東</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/hojo/" style="border-color: #f28e1e">北条</a>
                                                    </div>
                                                    <div class="title-dot mt-45">その他エリア</div>
                                                    <div class="box-list-link-cms-2 mt-20">
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/toon/" style="border-color: #ec5a24">東温</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/tobe/" style="border-color: #2e318d">砥部</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/yawatahama/" style="border-color: #006837">八幡浜</a>
                                                        <a href="https://atom-recruit.comotec.website/recruit-area/others/" style="border-color: #aeaeae">その他</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-7-6 col-12">
                                                <div class="col-inner">
                                                    <div class="box-img-home-link text-right" id="box_img_map">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="480" height="620" viewBox="0 0 480 620" class="svg-img replaced-svg">
                                                            <defs>
                                                                <style>
                                                                    .cls-1,
                                                                    .cls-11,
                                                                    .cls-14 {
                                                                        fill: none;
                                                                    }

                                                                    .cls-2 {
                                                                        clip-path: url(#clip-path);
                                                                    }

                                                                    .cls-3 {
                                                                        fill: #bee8f4;
                                                                    }

                                                                    .cls-4 {
                                                                        fill: #d9edc8;
                                                                    }

                                                                    .cls-5 {
                                                                        fill: #f28e1e;
                                                                    }

                                                                    .cls-6 {
                                                                        fill: #00a498;
                                                                    }

                                                                    .cls-7 {
                                                                        fill: #87c13f;
                                                                    }

                                                                    .cls-8 {
                                                                        fill: #0071b7;
                                                                    }

                                                                    .cls-9 {
                                                                        fill: #29a6dd;
                                                                    }

                                                                    .cls-10 {
                                                                        fill: #39b04a;
                                                                    }

                                                                    .cls-11 {
                                                                        stroke: #fff;
                                                                        stroke-width: 2px;
                                                                    }

                                                                    .cls-11,
                                                                    .cls-14 {
                                                                        stroke-linecap: round;
                                                                        stroke-linejoin: round;
                                                                    }

                                                                    .cls-12 {
                                                                        opacity: 0.25;
                                                                    }

                                                                    .cls-13 {
                                                                        fill: #fff;
                                                                    }

                                                                    .cls-14 {
                                                                        stroke: #000;
                                                                    }
                                                                </style>
                                                                <clipPath id="clip-path">
                                                                    <rect class="cls-1" width="480" height="620"></rect>
                                                                </clipPath>
                                                                <image id="image" width="155" height="103" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJsAAABnCAYAAAAXMTDuAAAACXBIWXMAAAsSAAALEgHS3X78AAAP50lEQVR4Xu2dXXbrNhKES7LzMzvKqrKDPGUHs6rsaHJzbWke7I5LpepGg6IkKlGdg9MNECTIxscGKdvy7ng84qmnbqH9qMNTT62lJ2xP3Uyvow5b0y+//rYb9fm36I///v5Qz0C7rT6zPaFarq1CuBnYFsK1ZJ9H1/SEbQW+u8LWBKzTR7Vkn61pycQM97kneDeHrQFYtn20n9OSfe6t2Qmp+pfHujV4N4NtAJnb1m3rbHt0zQLVbQNwO+iuDlsBmbZfWnfq9NmaOhOifS6tA7g+dFeFLQGN2zKAsj6j43XaH0HZpFTQzPquflXgrgLbJGQVYLPwPTJgmWYBUztqUx/AdaBbHTYD2ggUZ6ttbNV39UdWB7TKjvpU/urArQpbE7QMqlmfrfqu/kiahewSn636qwK3GmwFaB3IuHTaUdjQPxG2DDRXr9phfGcBrAfcKrAJaM7vwDRTYHy2oUcErgNaBddscccM/e2vAdzFsCWgOVuV/aDeAc9Z1pbBc5PgIAvbKYfEnwEv6gAuB+4i2BqgOdj2xs9s5WfjsA1tGbSQTsQSyA4DW/kONrUXAbcYtiZorjBQ6mfbZqGLOmvLwHVBC18hcXAdBnV3HC0wdjFwi2BbCFoGV6fo/hVwzqq2AF4W+Aw0VxQmBatTRtDB2EXATcO2ALQRYC9i1c/Ay6B255fVtyCdgA5sVSY7AHhv+JdAB2AeuKnf1G38MN2BxoA4oF6o7I0/Cx2MZW0JODdZChn7XcjY7snfic86UF+nIz72mQKMNQWbiCe0Ai3LYt1SQeeAg/hR72qm70gzE8N9HWgVZAHQu/hcImYB2vvn8Tl2AVoLuF9+/W03k93ay2ixfIbPk96F7FWs+g48B5wrIKt+pW6/jnrBPQctrBYHWwbYm/G5TUtnaYWx7eV0jcwWPoPGwCloDNhrUs/g0yzH42XAQfyq7VZyk+Mm08GWZTQF7YX8/afVeDlF9nI37Elmm1Ursw2y2iWQvQL4wbRl4ClwOq4L0gi6eyvLamGzjFZlszcp300bl1GWc+CDbCu7zWa2DDQGTpdPBe2Hwmqbg02XVAWNC8iGtgScTtAoq4V1S6eD6DvOHz+q61fwI7YHagMWZrdhZmtktSqjaTZTsEalAk7BrkDbInAVaGGzzKawZZnsuyl/ybYqy40yHMgOs9tsZgPyrKbgKXQM3I/4AurHxI4ynC6nO/FhrOoe0GUTopCFP1pCeekMeF5xntVcXEIuk0bRG1j3a6uErfhtDm3rgKZZ60dTFETNcFV2c/CDrPpbkS5dYbPMVmW1H/ABGcfKwRaqIHPAxT6snWmzms1sbkIVNF5OuWhmi/ITzqHLgBvBFhY4D+4WQQspcK5kLwa6dGqcRpnJjbM37TuxEH/4uVsXNneiOqn6DKXLpy6hAdpPOIUubCe7/dthiyX0O76ymsbHwabH1ePzNk0sAVwcB9ReKoVt4le89ZlJl1G3lGoW+0mKy2767Mbj6HlwcKvruLd0go5kM9BcZnvFeVZz8aiO+yr1mEvuz3EdwqXqZraQTiKXuLgRaAxcwPUzPGwMXAWbC2wGW9Z2a7nJqmA7Iv/I4xX5xxwMRwZaHPdF2vcYZ7c4NoB6Ke3Alk2WA40zW/a8lj2zdbPb0mU02rYml91cyZbRgI1vQo6DHlcBezf+XkoG3JQ6sKl0Mhk4Lgqay3BuGf0ZpxDOwgacgpbdLPfWTGYbwfaGcVbLluEfyI+4MnAR1wAupMANAbQf6pqPPDKwNHsxGJyxYpn8z6f/86fPdS76ljpaRjmrKWQK1hZAC7mspvaAGhb+gPYvKt8A/Plp//fp/0k+t0X5JsfgD315zDiPOC/g66YA4D/gXZrZOlnNwVhlN/fCMJvZuICs+lsTT0yW3bLMVmWzKLxM8mdy/FIRLxk6l1lMI5MNM1poBFs1QQ66KutlLwoZcPqS4DLbDGysLYA3WkbDVrDxTcfXpPu5ZdeB5m7iDLgWYKwRbCodlNv0BBW66tmtAq6T2Rz0wOl5srYOW/gZbPFc9QY/JwqaQhY/ZeCbt1ot9jh/SQDOoSshnIFNJ8hNsIL3YkoGXZb1Mtiyuw/ih7YAWCadoICF/YMUl3G0r8toDJqDLAMOxp/Kbh3YqonLIHOZrQIuQMvaeZsGaAcfFLaqLYCXTVS2lCpsGWic0fi5TMsLzuPpVgsHNSugG8K314bmH7UApwMrdA68LnTdwsfQY7qxuttvVUbn4a7r0pId3yUJhS5LMCD7txxHr9rQlIMrg2wEnAtAFiAuo4CEqptna9JntrCRrfQ6eXv04VjqB75Z/Lju5hQ4H3daS2ELVdBV4I2g65RRcCD+o0iBi7LDF3DaX0FzsRrFMWKZxTW0GLoZ2HZi3fZZ6DIQR300QBqURwUuoGLfAcf9NXYOohexHDu2VTwzyOIch6pgyw6sfnZSejF6QZdAlh0fxj6SHGgMHC+le5zDNiou7rxNC8iqqnYL30xmY7kTcb6Dz4EyCoQGxIGm55QF45EV1wx8gZiVCrJqv6qAbPitrAYsh03FJ1KdYBaU0UWOLr4KxqOJl1Ktd+OoMe3GmMdw6vRJtcflGp2AuxiuZ314m/Zz27iu/R5JLla8Tftl/au4uzhzXfutorUym5M7WVcfXbDrV23L1OlzL7WXokIan2ybtmXgsVaJ3RqZ7amnWlozs+ndGW9Qrg9b97lS5XN9R+2ju2+N7LFlaXzYd9sy67RK7NaArYKKt2eg6Xa3Tdu5viMfmANwa3JxrOKypGBgXf9VtAZsLL2g2RI/ZM7a99IOsgyZqz+SOhDMlkNidayOvyiuS2HLTnBU3IVG/YDzfq5vtAEf8DGEnMm0/ihyMQXqmB2kzZUs/u4Gx8APsV+1Aahhc5PlBuU27afBcQF5F//dtHPht6cAjduP4kffrcvFMKyCsWapoHNzG3LwlZrJbBl8YTPA+CK4rmApdGH5k+93nCrepndUYGw7IHcWn2cXNo2hFo13dhN3oLsojjOwsXhgDcpBbPhZMEaFYQM88PEJeWyvPnPashS2qGtMRzHjkv1l1MHUO5Athm4pbKHsxDg47oKqwGR/eMHQvHzaI75eBKrMptoCgNmEVTdxFkP353bc9ibtDJ6bnwq8UAmd+1O+sw91B1/oxgNoMBSyKjAakJmi+7m6G2s0Obcq1dgZMFW7ls5XmmbnMMpuDjqYulUns8WB9E1PrQPtHaewOTg4SK84/SYezWjAxxgvn7b6LQaYfbeQ0VhuktxNzPHlmGagfTdtGXQKWpXdQDaUtZ+pA1voiK8lK+ouIBlo2V3JX173ig94XnD+7AWcj6G/QjOzlI62XUvVpGhsgdMJ17hyHOMv2Pmv4/UrTh1ws9kN4rc1AxtwCpxClgE3gkx/R16zlY4TUL5T35nsFroHaCE3UdzWuZE1pvr1CxlwHeiq7KbnySoBHMEWcFXbXTAq0BSyAM29DLiAv3wes/oVZxir/lbkJm8WNgZJv69DAVToeDnVVcmdh4OupRFsTjrYCLg3fIyTLZ3VWyfkuAGZ/q69LqOdpfSe4LmJOho7upEdbPGlMu5LYhg4zWyc4arMpjprn/p+tj/++/tR/u6Pd3ZL2x5fJ6VZLS7kBR8XqaAwMDqmBjhbcpc8t20ZNvY5ri62AY4uo99MGWW4DLQqy7XVyWxHnEOgyxwD54JSweaWPr2jGbQMNvfcxscM3RMyFU/W0dgRbO6ZjZdSl+EUtk5260A2BK8Dm5MbXO+ICMwbvjJYAJc9Z8WxNbBv8F8s414oOsBlbbdSNVmd2I6W0Sy76XL6JoVBC3sRYKzyP7zQUsqWAYmJ5smP7KPfUJR9nal+tan7Tt1XeNhibF1CHw02zXAd2DgbVUtptqR+k+0K4XcZR89BITwC9Q8FLslsYSMYMbkckIAxsptCwdLg8t0bH/bq26tmNvfMxuPcE7BMDrTwD2I56zAIChu/KGiWc0upLqEMl4Nf1cpwXdiO+JqoOPAO+V34jvMM+IY82/D+LpCc1WZfEP7JsOlS+obzpVKf2RQ4t4R2slgGXqqZf5SmE6gwZcupLqn8xX/uSwC5Dy+f7uWA32S7y+iWgFPQwrob2D2zMWwOOF1WGTLNbu5lgZ/dskyHsGv+o7QjzidKA8TL6TvOJ13lAsqB1OVz9CaqwAGnY7vzuCV8bjIUOI4pT24FW1heThk2hYv97OVAx9e5DpWAsWZgC2UBq4ADTgHI9osLjQAoZN3nNQebjn1LyFQaw6OxLjad7JZB54qCli2lChzEb2m4jALpV9WHr5PNIDAgr6bo15u6ZXP0rMbAuQKyoXuCFqqAc6WCzQGn0DF8rm8F3BGn0EH84RIKLMtswMcgO/KBj5PZ4+vEgK/sxqqCyMung2zpEqo3y1bkMoVO5mgpPeAUFgcSA6eAKWiayU6g+tQQLKdWZgOG2S2Ke2HQFwd9gdCsp9tGoDFk4YPaQg6ye4DnAp6BpjdlBpzLcgreu/E7y6eDD2RbWQ1YntmAj8F2yO/OyG6sLIgcvBd8BUMhU9hcRsuym/ojzfRVtYL/qSx+VayOOIVjBF0G1yxoF6md2YDW/4vvZrks27ksNspoDjaIH/UZzfZn9YOawxaWQVMboKkdFbefgsZjgdpAtp3VgEnYgIuBq8BTsLJsxqCNYGPLugSktaSBV+hGwLGvWY6hy4BUwBxowOn4IDsFGnDZMgp8DLxDficf8AFDnDjwdeJ7stzvHWPIFLD957EVuGhjbQG0UAacA62CLisOwgwwBs2ND7KLNJ3ZgDK7hR1lOZftqrITfyajVXDdA7ws4Nyuk82+Zh8HXQfEDLKDjOfOazqrAQthA9rAhe8ykQLU8TPI3LhRZ90DrpF0AjSLZJmmgm7kZ/u7sUIXgQZcABuQAhe+AuBgy3y1M5CpZT0CbNzmIOO6y0oViNl+VwcNuBA24CLgRhCuAdnWgatAY99B1ykOqiqL6Xgn/iWgASvABgyBCzsLXgVXBZnCtCW4RrKTjHMo2J8tbl8UFsDloAErwQbYf4w1gmEE0qgfCht6JNBCHeDCjuCp2vQYUWcLYB3QgBVhA0rg2M+gm/GdVb9q26rcZDgAMuBc26gvW/VXAw1YGTZgCBzX17Lqu/ojSiemykCXWvUBrAsacAXYgPR/lo6gc20ZUP900EId4NjvAFn5ANaHLHQV2EKT0HX9Tr27bWuqJqMCT+sOsKzPia4FGnBl2IDWf2a+pJ61zWzfkkaT4bbPQOjqAK4LWejqsIUmocvaqvbRtkfVTLbL2tNj3AKy0M1gYw3AA5aBlmnJPvfS7GQsARHAbSEL3QU2VgM8YBkwS/bZipZMynCfewDGujtsrCZ4Tkv3eyQtmqh7A8baFGyqC+D712pLcKk2DVumJ4TbhirTQ8L21GNqP+rw1FNr6QnbUzfTE7anbqb/A1D27EhqbBsNAAAAAElFTkSuQmCC"></image>
                                                            </defs>
                                                            <g id="レイヤー">
                                                                <g class="cls-2">
                                                                    <rect class="cls-3" x="-69" y="-48" width="480" height="694"></rect>
                                                                    <path class="cls-4" d="M990.68,317.16c-5.23-8.37-10.46-22-10.46-22H959.29l-16.75-20.93s8.38-8.37,8.38-14.65-5.24-18.83-8.38-24.06-13.6-13.61-11.51-24.07,14.65-12.56,14.65-12.56V186.35l-4.18-20.92-16.75-5.24V139.1c-1,.43-2.1.84-3.13,1.21C907,145.54,856.74,152.87,841,160.19s-68,16.75-68,16.75l-7.32-12.56-22-9.42-50.23-31.41c-8.37-5.25-24.06-30.73-24.06-30.73s-.59-2.19-1.47-5.42c-2.45-9-7.18-26.41-8-28.77-1-3.2-34.53-55.4-36.63-61.68S615-35.49,615-42.81s-25.11-17.3-25.11-17.3-25.12-17.24-25.12-24.56S547-131.76,547-131.76l-22-4.94-17.79-13.9-15.7-28.25L459.09-136.7l-13.6-7.62H424.56l4.19,15.7,40.81,5.81s3.14,30.81,0,39.19-9.42-2.1-14.65,0,0,35.57,0,35.57a274.93,274.93,0,0,1-31.4,0c-14.65-1-61.73,10.47-61.73,10.47s-13.61,23-15.7,26.16-45,34.53-53.37,39.76c-.54.35-1.31.77-2.24,1.27l7.47,9.2,13.61,12.56,14.65,7.26s16.74-6.22,26.16-.46,0,10.17,0,10.17h39.76S411,70.2,412,79.62s-6.27,17.79-6.27,17.79l1,42.9S427.7,145.54,434,155s23,26.16,23,26.16v40.81l-7.32,14.65-24.07,10.47-23,14.65s-10.47,15.69-10.47,20.93,10.47,23,10.47,26.16-7.33,16.74-8.38,23S366,381,366,381h-9.42s-9.41,12.56-14.73,19.88-25,0-25,0l3.14,16.18s9.42,7.89,11.22,13.12a14,14,0,0,1,0,9.42l10.67,4.19,4.27,10.46v13.6L366,476.22s11.51,15.69,18.84,19.88,0,24.07,0,27.21a12.26,12.26,0,0,1-.92,3.66c-1.35,3.64-3.87,8.61-5.36,13.08-2.09,6.28-27.21,26.59-27.21,26.59V584a55.86,55.86,0,0,1-20.17,4.18,137.62,137.62,0,0,1-16.55-1.5C319.1,584,326.2,584,326.2,584l-9.42-17.36-6.28-8.8v-23l-6.28-25.12s-6.28-19.88-6.28-23-27.2-27.21-27.2-27.21V429.13l-9.42-6.28-20.88-5.8,1-2.05-14.36-3.85,6-4a235.62,235.62,0,0,0-35.57-18.54C178.65,381,164,381,164,381H107l-1.57,2.09v16.75l18.84,24.06v26.17l-9.42,18.83s-19.88,19.88-23.55,22-5.75,7.32-7.84,11.51S83.43,539,69.3,561s-49.71,32.44-49.71,32.44L4.94,609.11-5.52,625.86s-38.72,19.88-58.6,24.06c-13.15,2.77-40.91,12-64.88,21.47l17.79,17.25,18.84,18.84v14.65h13.6l14.65-14.65,18.83-18.84,19.94,6.07,4.13,1.26s14.65,15.69,20.93,27.2,25.12,52.32,25.12,52.32L15.41,789.1l9.18,6.28L36.34,821l-9.42,12s-5.23,13.6,0,34.27,22,11.63,22,11.63l-8.37,20s19.88-6.28,30.35-2.09,9.42,18.84,9.42,18.84l30.34-30.35s8.37-2.09,20.93,4.19,20.93,0,20.93,0,1-10.47,5.23-17.79S182.84,854,182.84,854h16.74c7.32,0,28.25-9.42,28.25-9.42S231,834.09,240.39,832s9.42,12.56,9.42,12.56,7.32,5.23,22,3.14S277,831,277,831h11.52c5.23,0,9.41-9.94,9.41-9.94s10.47-4.71,17.79,0c3.66,2.35,9.93,18.67,15.41,34.81l.29-1.85s27.21,32.44,30.35,33.48,26.16,10.47,26.16,10.47,23,6.28,26.16,6.28c1.79,0,5.27.34,7.94.63l3.57.41V919.9l-12.46,30c2.91.52,5.71,1,8.27,1.43,25.12,4.19,34.53-3.13,45-5.23s17.79-2.09,22,6.28,29.3,0,29.3,0,22-3.14,39.77-10.46,42.9-15.7,42.9-15.7l1-17.79s17.79-23,25.11-31.39,8.37-28.26,8.37-28.26,17.79-8.37,23-12.55,10.46-20.93,11.51-35.58-16.75-20.93-19.89-30.35,3.14-14.65,7.33-30.34,24.07-17.79,24.07-17.79,6.28-7.33,2.09-10.47-6.28-28.25-6.28-28.25,4.19-14.65,4.19-20.93,7.32-20.93,19.88-26.16S750,630,756.28,620.62s1.05-39.76,2.09-51.27,28.26-17.79,28.26-17.79,3.14-17.79,3.14-22,12.55-12.55,25.11-22c6.4-4.8,7.08-11.78,6.22-18.57-.82-6.54-3.08-12.91-3.08-17,0-8.37,16.74-14.65,29.3-29.3s17.79-41.86,17.79-41.86l29.3,10.47s9.42,12.55,15.69,12.55,15.7-8.37,34.54-18.83,24.06-34.53,26.16-48c1.7-10.92,11-15.25,21.71-17.05C993.28,331.59,993.45,321.59,990.68,317.16Z"></path>
                                                                    <path class="cls-5" d="M327,167l62,16,17.65-47.66-.92-37.93S413.05,89,412,79.62s-19.88-11.28-19.88-11.28H352.36s9.42-4.42,0-10.17-26.16.46-26.16.46l-14.65-7.26L297.94,38.81l-7.47-9.2c-13.39,7.13-63.68,29-63.68,29L237.25,70.2,236.2,92.82s-5.23,43.31-6.27,47.49c-.84,3.34-9.67,27.35-14.8,44.36l51.29,35.09Z"></path>
                                                                    <path class="cls-6" d="M184.75,296.05,161,253l-19.36-37.43-1.71,4.27s0,14.65-1,24.07-8.38,18.83-8.38,18.83l12.56,1.05-7.32,40.81-15.7,4.19s1,22-5.23,37.67,0,24.07,0,24.07L107,381h57s14.65,0,33.49,7.62a233.46,233.46,0,0,1,31.51,16V367l-33-7Z"></path>
                                                                    <path class="cls-7" d="M434,155c-6.28-9.42-27.21-14.65-27.21-14.65l-.12-5L389,183l-62-16-60.58,52.76L277,227l-12,22.58-6.53,12.31L323,301l9.14-3.32L367,285l31.44,34.94c2.09-4.89,4.15-9.49,4.15-11.15,0-3.14-10.47-20.93-10.47-26.16s10.47-20.93,10.47-20.93l23-14.65,24.07-10.47L457,221.93V181.12S440.26,164.38,434,155Z"></path>
                                                                    <polygon class="cls-8" points="325 283 258.47 261.89 226 277 184.75 296.05 191 362 229 367 305 367 331 317 332.14 297.68 325 283"></polygon>
                                                                    <path class="cls-9" d="M266.42,219.76l-51.29-35.09c-1.3,4.29-2.36,8.15-3,11.1-3.14,14.65-11.51,18.84-22,23-6.84,2.74-25.29.11-37.26-2-6.35-1.14-10.87-2.14-10.87-2.14l-.39,1L161,253l23.75,43.05L232,281l26.47-19.11L265,249.58,277,227Z"></path>
                                                                    <path class="cls-10" d="M341.81,400.87c5.32-7.32,14.73-19.88,14.73-19.88H366s27.21-42.9,28.25-49.18c.5-2.95,2.38-7.53,4.23-11.87L367,285l-34.86,12.68L331,317l-19.76,38L230,367h-1v37.62c2.58,1.56,4.06,2.53,4.06,2.53L229,409.87v1.8L241.44,415l-1,2.05,20.88,5.8,9.42,6.28v30.34s27.2,24.07,27.2,27.21,6.28,23,6.28,23l6.28,25.12v23l6.28,8.8L326.2,584s-7.1,0-11.61,2.68a137.62,137.62,0,0,0,16.55,1.5A55.86,55.86,0,0,0,351.31,584V566.64s25.12-20.31,27.21-26.59c1.49-4.47,4-9.44,5.36-13.08a12.26,12.26,0,0,0,.92-3.66c0-3.14,7.32-23,0-27.21S366,476.22,366,476.22l-19.88-8.38v-13.6l-4.27-10.46-10.67-4.19a14,14,0,0,0,0-9.42c-1.8-5.23-11.22-13.12-11.22-13.12l-3.14-16.18S336.49,408.2,341.81,400.87Z"></path>
                                                                </g>
                                                                <path class="cls-11" d="M68.5,72.5s5,6,12-3c0,1,1,12,11,1,0,2-3,12,10-1"></path>
                                                                <path class="cls-11" d="M127.5,124.5s5,6,12-3c0,1,1,12,11,1,0,2-3,12,10-1"></path>
                                                                <path class="cls-11" d="M52.5,162.5s5,6,12-3c0,1,1,12,11,1,0,2-3,12,10-1"></path>
                                                                <use class="cls-12" transform="translate(233.08 69.31)" xlink:href="#image"></use>
                                                                <rect class="cls-13" x="261.24" y="97.16" width="98.51" height="46.18" rx="18" id="pageid_01"></rect>
                                                                <path d="M285.2,129.19a1,1,0,0,1-.66-.26.88.88,0,0,1-.28-.68v-3.68l-1.53.66-1.65.69c-.53.22-1,.4-1.4.54a.89.89,0,0,1-.75,0,1,1,0,0,1-.49-.51.82.82,0,0,1,0-.7,1,1,0,0,1,.58-.46l1.09-.41,1.42-.56,1.46-.61c.47-.19.88-.36,1.23-.52v-4.78h-4.7a.85.85,0,0,1-.64-.27.92.92,0,0,1-.26-.65,1,1,0,0,1,.26-.66.88.88,0,0,1,.64-.26h4.7V112a.86.86,0,0,1,.28-.67.92.92,0,0,1,.66-.26.91.91,0,0,1,.94.93v16.25a.91.91,0,0,1-.27.68A.94.94,0,0,1,285.2,129.19Zm7.52-.4a7.82,7.82,0,0,1-2.34-.29,2,2,0,0,1-1.26-1,4,4,0,0,1-.38-1.89V112a.86.86,0,0,1,.27-.67.91.91,0,0,1,.65-.25.87.87,0,0,1,.64.25.89.89,0,0,1,.26.67v5.72c.49-.28,1-.59,1.54-.92l1.53-1q.74-.51,1.23-.9a1,1,0,0,1,.71-.29.81.81,0,0,1,.67.31.93.93,0,0,1,.26.66.78.78,0,0,1-.34.64c-.45.36-1,.75-1.67,1.18s-1.34.83-2,1.23-1.33.73-1.9,1v5.8a1.37,1.37,0,0,0,.46,1.23,3.53,3.53,0,0,0,1.7.28,2.2,2.2,0,0,0,1.53-.43,2.76,2.76,0,0,0,.67-1.53.88.88,0,0,1,.42-.62,1,1,0,0,1,.78-.09.87.87,0,0,1,.66,1.1,3.86,3.86,0,0,1-1.23,2.61A4.38,4.38,0,0,1,292.72,128.79Z"></path>
                                                                <path d="M299.56,120.91a.93.93,0,0,1-.71-.12.76.76,0,0,1-.35-.54.71.71,0,0,1,.14-.59,1,1,0,0,1,.64-.33,28.88,28.88,0,0,0,3.53-.87,28.26,28.26,0,0,0,3.19-1.25,14.57,14.57,0,0,1-2.6-2.36,18.87,18.87,0,0,1-2.78,1.94,1.06,1.06,0,0,1-.69.11.77.77,0,0,1-.53-.4.71.71,0,0,1-.07-.59.81.81,0,0,1,.41-.5,17.62,17.62,0,0,0,1.94-1.29,21.88,21.88,0,0,0,1.84-1.59,15.43,15.43,0,0,0,1.44-1.62.77.77,0,0,1,.57-.33.81.81,0,0,1,.59.19.67.67,0,0,1,.31.52.83.83,0,0,1-.17.58c-.09.13-.2.26-.31.4s-.22.27-.33.42h4.22a2.72,2.72,0,0,1,1.76.47,1.21,1.21,0,0,1,.48,1.19,2.61,2.61,0,0,1-1,1.48c-.29.25-.6.49-.92.73s-.66.46-1,.69a19.75,19.75,0,0,0,3.13,1.21,32,32,0,0,0,3.55.79.93.93,0,0,1,.62.35.81.81,0,0,1,.14.63.78.78,0,0,1-.39.55,1.16,1.16,0,0,1-.75.09,29.72,29.72,0,0,1-4.23-1,20,20,0,0,1-3.71-1.62,29.79,29.79,0,0,1-3.78,1.57A36,36,0,0,1,299.56,120.91Zm7.94,8.58a.92.92,0,0,1-.64-.25.9.9,0,0,1-.26-.66v-4.43a17.7,17.7,0,0,1-1.87,1.55q-1.1.78-2.31,1.5a23.24,23.24,0,0,1-2.44,1.23,1.48,1.48,0,0,1-.78.1.68.68,0,0,1-.56-.45.78.78,0,0,1,0-.73,1,1,0,0,1,.56-.48,23.88,23.88,0,0,0,2.17-1c.77-.41,1.51-.85,2.23-1.32a18.84,18.84,0,0,0,1.86-1.35h-5.74a.74.74,0,0,1-.55-.24.8.8,0,0,1-.23-.56.79.79,0,0,1,.23-.56.75.75,0,0,1,.55-.22h6.88v-1.38a.86.86,0,0,1,.26-.65.94.94,0,0,1,1.28,0,.86.86,0,0,1,.26.65v1.38h6.86a.75.75,0,0,1,.56.22.78.78,0,0,1,.22.56.79.79,0,0,1-.22.56.73.73,0,0,1-.56.24h-5.74a17.58,17.58,0,0,0,1.93,1.42c.73.46,1.48.89,2.27,1.29s1.53.72,2.24,1a.84.84,0,0,1,.52.47.79.79,0,0,1,0,.67.87.87,0,0,1-.59.49,1.27,1.27,0,0,1-.77-.06,20.07,20.07,0,0,1-2.36-1.13,25.84,25.84,0,0,1-2.34-1.5,19.24,19.24,0,0,1-2-1.68v4.43a.9.9,0,0,1-.26.66A.92.92,0,0,1,307.5,129.49Zm.12-13.12a19.19,19.19,0,0,0,1.94-1.3c.35-.27.5-.5.47-.68s-.28-.28-.75-.28h-4.4a13.56,13.56,0,0,0,1.29,1.22A17.23,17.23,0,0,0,307.62,116.37Z"></path>
                                                                <polyline class="cls-14" points="330.18 121.03 342.83 121.03 340.25 117.67"></polyline>
                                                                <circle class="cls-14" cx="341.03" cy="120.25" r="6.97"></circle>
                                                                <use class="cls-12" transform="translate(284.08 173.31)" xlink:href="#image"></use>
                                                                <rect class="cls-13" x="312.24" y="201.16" width="98.51" height="46.18" rx="18" id="pageid_02"></rect>
                                                                <path d="M331.34,229.65a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86H331a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25h1.52v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H334.1v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88,1.6,1.6,0,0,0-.05-.21c0-.08,0-.15-.05-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4H340a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c.05-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58,11,11,0,0,1-1,2.75,12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82V222a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54-.05-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23H344c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,340.66,232.89Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                                <path d="M359.5,233.39a.91.91,0,0,1-.64-.24.85.85,0,0,1-.26-.64v-4.72a15.89,15.89,0,0,1-2,1.82,23.83,23.83,0,0,1-2.39,1.62,20.66,20.66,0,0,1-2.54,1.26,1.11,1.11,0,0,1-.75.08.86.86,0,0,1-.53-.46.79.79,0,0,1,0-.7.8.8,0,0,1,.49-.46,18.5,18.5,0,0,0,2.2-1,20.34,20.34,0,0,0,2.14-1.35,19.26,19.26,0,0,0,1.8-1.48h-.3a7.79,7.79,0,0,1-2.41-.29,1.81,1.81,0,0,1-1.13-1.08,6.72,6.72,0,0,1-.3-2.27,6.64,6.64,0,0,1,.3-2.27,1.76,1.76,0,0,1,1.13-1.08,7.49,7.49,0,0,1,2.41-.29h1.88v-1.3h-7.24a.68.68,0,0,1-.53-.24.8.8,0,0,1-.21-.54.77.77,0,0,1,.21-.55.67.67,0,0,1,.53-.23h7.24v-1.3a.84.84,0,0,1,.26-.64.91.91,0,0,1,.64-.24.88.88,0,0,1,.62.24.84.84,0,0,1,.26.64V217h7.24a.65.65,0,0,1,.54.23.81.81,0,0,1,.2.55.84.84,0,0,1-.2.54.66.66,0,0,1-.54.24h-7.24v1.3h1.92a7.48,7.48,0,0,1,2.42.29,1.75,1.75,0,0,1,1.12,1.08,6.64,6.64,0,0,1,.3,2.27,6.72,6.72,0,0,1-.3,2.27,1.79,1.79,0,0,1-1.12,1.08,7.77,7.77,0,0,1-2.42.29H362a17.78,17.78,0,0,0,1.8,1.47,23.16,23.16,0,0,0,2.13,1.34,17.69,17.69,0,0,0,2.19,1,.85.85,0,0,1,.5.45.74.74,0,0,1,0,.69.91.91,0,0,1-.53.49,1.05,1.05,0,0,1-.75-.07,20.74,20.74,0,0,1-2.54-1.27,21.7,21.7,0,0,1-2.41-1.64,17.85,17.85,0,0,1-2-1.83v4.76a.85.85,0,0,1-.26.64A.88.88,0,0,1,359.5,233.39Zm-4.84-10.62h3.94v-1.46h-1.86a5.69,5.69,0,0,0-1.24.1.88.88,0,0,0-.62.41A2.24,2.24,0,0,0,354.66,222.77Zm2.08,2.86h1.86v-1.46h-3.94a2.36,2.36,0,0,0,.22.94.92.92,0,0,0,.62.42A6.41,6.41,0,0,0,356.74,225.63Zm3.64-2.86h4a2.24,2.24,0,0,0-.22-1,.86.86,0,0,0-.61-.41,5.59,5.59,0,0,0-1.23-.1h-1.9Zm0,2.86h1.9a6.29,6.29,0,0,0,1.23-.1.9.9,0,0,0,.61-.42,2.36,2.36,0,0,0,.22-.94h-4Z"></path>
                                                                <polyline class="cls-14" points="381.09 225.03 393.75 225.03 391.16 221.67"></polyline>
                                                                <circle class="cls-14" cx="391.94" cy="224.25" r="6.97"></circle>
                                                                <image class="cls-12" width="156" height="103" transform="translate(132.08 186.31)" xlink:href="data:image/png;base64,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"></image>
                                                                <rect class="cls-13" x="160.74" y="214.16" width="98.51" height="46.18" rx="18" id="pageid_03"></rect>
                                                                <path d="M176.84,242.65a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86h-1.52a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25H178v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H179.6v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88A1.6,1.6,0,0,0,189,241c0-.08,0-.15,0-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4h-2.4a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c0-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58,11,11,0,0,1-1,2.75,12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82V235a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54,0-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23h-3.72c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,186.16,245.89Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                                <path d="M202.7,246.19a1,1,0,0,1-.66-.26.88.88,0,0,1-.28-.68v-3.68l-1.53.66-1.65.69c-.53.22-1,.4-1.4.55a1,1,0,0,1-.75,0,1,1,0,0,1-.49-.52.79.79,0,0,1,0-.69,1,1,0,0,1,.58-.47l1.09-.41,1.42-.56,1.46-.6,1.23-.53v-4.78h-4.7a.85.85,0,0,1-.64-.27.92.92,0,0,1-.26-.65.91.91,0,0,1,.26-.65.85.85,0,0,1,.64-.27h4.7V229a.87.87,0,0,1,.28-.68.92.92,0,0,1,.66-.26.91.91,0,0,1,.94.94v16.24a.91.91,0,0,1-.27.68A.94.94,0,0,1,202.7,246.19Zm7.52-.4a8.21,8.21,0,0,1-2.34-.28,2.07,2.07,0,0,1-1.26-1,4,4,0,0,1-.38-1.89V229a.86.86,0,0,1,.27-.67.91.91,0,0,1,.65-.25.87.87,0,0,1,.64.25.89.89,0,0,1,.26.67v5.72c.49-.28,1-.59,1.54-.92l1.53-1q.74-.51,1.23-.9a1,1,0,0,1,.71-.29.81.81,0,0,1,.67.31.93.93,0,0,1,.26.66.78.78,0,0,1-.34.64c-.45.36-1,.75-1.67,1.18s-1.34.83-2,1.23-1.33.73-1.9,1v5.8a1.37,1.37,0,0,0,.46,1.23,3.51,3.51,0,0,0,1.7.29,2.2,2.2,0,0,0,1.53-.44,2.76,2.76,0,0,0,.67-1.52.88.88,0,0,1,.42-.63,1,1,0,0,1,.78-.09.87.87,0,0,1,.66,1.1,3.91,3.91,0,0,1-1.23,2.62A4.44,4.44,0,0,1,210.22,245.79Z"></path>
                                                                <polyline class="cls-14" points="228.09 238.03 240.75 238.03 238.16 234.67"></polyline>
                                                                <circle class="cls-14" cx="238.94" cy="237.25" r="6.97"></circle>
                                                                <use class="cls-12" transform="translate(251.08 355.31)" xlink:href="#image"></use>
                                                                <rect class="cls-13" x="279.24" y="383.16" width="98.51" height="46.18" rx="18" id="pageid_06"></rect>
                                                                <path d="M295.34,411.65a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86H295a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25h1.52v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H298.1v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88,1.6,1.6,0,0,0-.05-.21c0-.08,0-.15-.05-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4H304a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c.05-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58,11,11,0,0,1-1,2.75,12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82V404a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54-.05-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23H308c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,304.66,414.89Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                                <path d="M316.64,415.43a.92.92,0,0,1-.64-.25.89.89,0,0,1-.26-.65v-8.34a5.63,5.63,0,0,1,.39-2.36,2.14,2.14,0,0,1,1.33-1.14,8.12,8.12,0,0,1,2.58-.32h2.46v-1.72h-7.44a.76.76,0,0,1-.56-.26.85.85,0,0,1-.24-.58.78.78,0,0,1,.24-.58.77.77,0,0,1,.56-.24h7.44v-1.2a.91.91,0,0,1,.29-.69,1,1,0,0,1,.67-.27.94.94,0,0,1,.68.27.9.9,0,0,1,.28.69V399h7.52a.75.75,0,0,1,.57.24.82.82,0,0,1,.23.58.89.89,0,0,1-.23.58.73.73,0,0,1-.57.26h-7.52v1.72h2.5a8.18,8.18,0,0,1,2.6.32,2.14,2.14,0,0,1,1.33,1.14,5.63,5.63,0,0,1,.39,2.36v6.08a3.09,3.09,0,0,1-.77,2.38,3.77,3.77,0,0,1-2.51.68.92.92,0,0,1-1-.9.85.85,0,0,1,.24-.65.91.91,0,0,1,.64-.29,2.3,2.3,0,0,0,1.24-.3,1.43,1.43,0,0,0,.32-1.1v-5.9a3.68,3.68,0,0,0-.21-1.43,1.08,1.08,0,0,0-.75-.62,6.18,6.18,0,0,0-1.56-.15h-.32a.88.88,0,0,1,.35.46.74.74,0,0,1-.05.56c-.09.18-.22.43-.39.73l-.49.87h1.64a.7.7,0,0,1,.54.23.77.77,0,0,1,.22.57.79.79,0,0,1-.22.56.73.73,0,0,1-.56.24h-3.28v1.42h3.3a.7.7,0,0,1,.54.23.82.82,0,0,1,0,1.12.75.75,0,0,1-.56.23h-3.28v3a.87.87,0,0,1-.88.9.92.92,0,0,1-.64-.25.89.89,0,0,1-.26-.65v-3h-3.42a.76.76,0,0,1-.55-.23.78.78,0,0,1-.23-.55.75.75,0,0,1,.24-.57.78.78,0,0,1,.58-.23h3.38v-1.42h-3.42a.74.74,0,0,1-.55-.24.8.8,0,0,1-.23-.56.75.75,0,0,1,.24-.57.78.78,0,0,1,.58-.23h1.62l-.43-.73q-.22-.39-.45-.75a.72.72,0,0,1-.06-.64.84.84,0,0,1,.44-.5H320a6.2,6.2,0,0,0-1.55.15,1.07,1.07,0,0,0-.76.62,3.68,3.68,0,0,0-.21,1.43v8.34a.87.87,0,0,1-.88.9Zm5.84-8.82h1.6c.17-.34.37-.73.58-1.19l.52-1.13a1.22,1.22,0,0,1,.24-.3h-4.2a.93.93,0,0,1,.36.32c.13.2.3.47.49.82a8.53,8.53,0,0,1,.43.84A.64.64,0,0,1,322.48,406.61Z"></path>
                                                                <polyline class="cls-14" points="347.09 407.02 359.75 407.02 357.16 403.67"></polyline>
                                                                <circle class="cls-14" cx="357.94" cy="406.25" r="6.97"></circle>
                                                                <image class="cls-12" width="155" height="103" transform="translate(45.08 281.31)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJsAAABnCAYAAAAXMTDuAAAACXBIWXMAAAsSAAALEgHS3X78AAAPYElEQVR4Xu2da5YiuQ6EA6r6cXc0q5odzK/ZwaxqdtRzbxdwf1RpCIKQrEwSKqGJc3xkO50v+UvJVNPJ5nA44KmnbqHtaMBTTy2lJ2xP3UxP2J66mV5HA9ak337/YzMa86vp77/+vJtF92aNHxCeUF2uNUK4CthmwjVnn0fR5ElbA3yfBlsTsM4Y1Zx91qo5kzPc57PAuzlsA8iybXMAmrPPWjRnUrJ90mPdGrqbwDYDsG5fZ9ujqJoot63bB+A24F0dtgQ07bu07dQZs1Z1JkXHXNq+OnBXg20GZK6ebXft7rZ70ZRIxu2D2Kru2leD7iqwGdCydgVYZkOj9iNpBIgCltms76x9DeAWha0RzUYgbZpjQr8CcFOimLOdMaGrRrnFYBtEsy5cru3qbLXu2veoqZBV9SnwaX0x4BaBrQBNgXBgZX0j+JwNPTJsHdBccdt1/2izBbAMcBfD1gCtA9OUAlNnG7pn4DqgdQCbUlBYAJcDdxFsApqrZ5BsZZv2ue0VeM6y7gE8NxEVBKOyT+quT48Jsif1S4CbDdsANAebA0sBy/q1rseGsaF7AC2kk1FBFu0Mqj3ZrF8BdPCFLgZuFmyD1JmBpiCx5aJ9FXzuvNF29bXLTi48BCO4XHsEYAXcCShzgFvi+2wVaA4ShatbKuhQWNYawXOTphOskz+CbFTCb7FvHHuPow44+ivqkwFjTY5sSfqsQKsgezF17utApwVkQ2uETKUToYBp6UC2S2xWHMwwdQDTo9sk2ArQwo5AU7hepK5tt587fgY9a83AjUDj+t5YBWmHU8Bc28Hnju9AmwXcpWl0BFoWyV5MeTV9DrwqwkHq0e6oO26OuhPC4xxoDrIRYG84+myHo392YvGx7/bDqj8OH33dezlTO7IN0qfCFhC4SKZwZTYDr4JNoWM7UnfcHPWc7COIliyi7Ux5I/tm+l3Uc1FOC8i2o1sLtsY6jSe9imQMlNZfTT9bhY2hy4CD1F37M6XOd5HNwaYRLeybsa64sVVqZfBgbAu4S9MocAqfgqCgBThfcAqXtjPwHHAa4SD1aK9dDjSuu/SZgRYlW4L8RC6FJs4bPhxClWkI24T0yUXTpgL0hWxWV+A0pY6iG8hqfW1S0MJ2opqmzSg/yaqvgPMHMsTnV3/quA2NH2oIm5GeWCEbRbYvRfmKc/AccBzhNmQdaGsHLgMtrItsbp2moL3gHDTnJz3Xi7Td2DP99vsfm1EqnQKbTpqDjOsusilYlXWpNYtuDBzgoWOtATo3MTrxUc9SaAZa5iu9bz2PK6E9/P7t6FZ+QGik0CyKVZHsa1EUOk2pU1IpjF2zqqimoGWw/ZTyv6L8FMupVz+t6rkVxn8hqqLblMgGnE9oBp6usbLI9hXAN5xDlwGXrd2yawLZe1AVZWKSNYVyVNMs4B5Glh7b2S2OESw7Rktd2NyEjaBjyCrQvlGdLUc5l0rjHHHOe4eNJ20ObJE+M9D42GE1YkV5+djuQNvQMUKu70xpGjUpNNq8RsrSZwDC0Hwrynecw8Zrt04q7YC2RvB0Alx00zXbKIVGqvyvKf+YPk2vnE4jpfIHE74m4HidAPJU2o1soVGEcwDqIj+Lblw0nf7qsGkUcrBpVGM/hBy4elxuh2/jGjiyxbGHES3UgW0EmAMti3ajNOqAc59Mp6RRSH2t4klT0BgSjjLVH3DVBw5YBfeV+ngu9zj3rULm+k7UgY3lJlSB00V8tm7Lott36hvB9qtGtgy2DLIqMr5KO+Zwh3OfjoArZddsyXpNocpSpVunfZfyn4/ynWwUjW66bnNp1F0jyIbuGbYAJotsvF7TNdo/AH4Y+4O2uzUc/ysEAxnQumsE4NdtUyMbUJPuUqgCqZGNI5ymVk6lUyIbyGp9reLJccC5yKYPXtyn28+t8b5Q3aXiOGY3lZYawVZFhgw0hY4BcSn1a1G+0bgKtg1ZGMtaE3husg7G7nEKjltX8X25aPiWFM4Wo6UJP8xOJYAj2Jw0emTQvUhdQcvWcS7q8Xj3NLNjYCzrHmFj4CKNZaDpPg40909aGXDqW1C7hEvVgS2bOAecXmSVTrvQfcHp2CzU65Onzlm7Rmk04NniFDYHmn6IiHSpf/h1Dy/71gUTx8GBbKoObIAHa1Qq4BQ6LZo2XWSbAhtrTeBlk1PBFsVNPEez+KTJ6zKGLAMt5o5tF7hSW+1ovus2VEHmShe6EYzqMOe87FyjMbcsnet5lfqr9I/8pcdy58zmK4MLRT8Az9GrG9iQniijfwSac2zlLHZO2Oqpm/LgrEWaTjlFRR04vbfYVvm0got9WUWzCr6hpsBW0Z1B5qBT+LS+NfVqOzsIZLV+L8rWbnucbov+l49t2QNc+VR92AFttirYsgNX/Rl0ekMKXQfArIwccpGDbiyOXNEOwLY4B5EjGn9oqMAa+dH51GlDdrheA6ZFNuD0xHyyTlHgXF9285WDeCyMvSfFNfPkxWRGdNvSmOhTP4385nznINM5BtmoK2iuD8B02ELVhOoFZsXdsG7PtukxnDPctd27tjj/S/4IsMpfroBsVp/l27mwqaqJHt3cJUWPD7KhWY75JEVEyK450uzcghnbFtMWlyubZKcKiOwmtZ5tG429By11f26c+jazTov4cQnYMnUme+Swjal3NGXso8jdc9cP3XEX6Zqw8Scp7huNcduqcU5Txj6Ksj+ZdNQdd5GWgG10Y/wRHVJ3Y3S71rNto7H3IHd/GUTqUx3vxrp50PFad+1ZWuoDwujGOuPmlA0dUxWpYRFH3VgKgPPpyDcH5F9wHB0HUl9Ec2FTZ2R1d9Puu1kH6XP1zJlLROe1Sf2r95z5M/O3+m/k1zgvkjr3tTUVtuzEVd3dtKu7oo7RT1Tu706huI6bLH4XUuXfzJ+XlOzYXGDqIa5XfQBq2A7wE5UdrAIrc47+1zHtj68+x7dSHVQbHKObXnOVZtcqncy5kOn/F8h8zXNVAady8JWaEtkcfNUFdgHbmaL9W5z+bx9WAJWBeE9S0MI6fzq/VcUBOBW6EYClpsDG0hNmoIXtAPYm9RdqZymSIYvothHLWiN8buIcaB3Y+KvflX8diF3wZutscT14x1YXsr3UnXPYKW/Sp0XH6P4jZ04Zc6sygkK36b1OLe6YO/hgUEGmD4LVJf+VLyIItzPQGDK+GedkdkZ8P/4Np1+LyVJ39o/NLrKtMaKxdGJ0QtW36k/3fg72awZfBVwGHsiGSvBCHdgCtCnAVaBlkL3i+MZEhojFx99+jI0U6kBbcyrNJseB5nzrYHOlglGjHAOXza8DraUObCo9oTqiSp0MGkPGX10egfaKI2w7Gsv73ANsgJ+oDLYAgB9ifWirF/8pgA46N4cMXigDr9QItgPOo9mG6q5kwFWQMWi82A/pcd03Tx8tjWa+nQIbv5KhC1wnumUq4RvB5pRdgALhoplLn+778Aq4Ho+/Ou7WbFlkWxt0bnJ4Qke+HcFWvXstrEujLspNgc6q8zJAthF1uAQsEaH4f7G7l/7xy2W4zi8FvPRdH/cK28HYAI0fOo1sHLH0RYD/mPJD2tlLZTgCKox8XSfXvdTLAIE6srFD4u9kbzgCGY5x/wnDRTQ+noPNfUBQ4CD1NYonJ4tqFWwusmVvlszeLlmt3VxE81GqUAe2A84nK4NMQ32AFvYnTtOf+zCgxwsHMGgVrI8S2Sr/6hLFRTYFzkUtF7kUOIZdgWMN4evAxooDbnDuiA1OnREQvOEUCoZDQYMck5/eCjYX3YDzYz8ybFl0czaLbgyZS5UMWgZdqu7vILCNMlq7xfpNX4vVebUpr9X0lVkM2qOkUeB0EsMyaPwAujTKsLm1m0utWbSrPjw4ABF2id9BOGBaKo3IFlajm4s87ullJ86F7R5AA+bBpj6qgGM7d80GsqxWhOvCFtKDqkM2ZHc4BYGBcMfIQBul0M6abe3AOdDCMmgulbro5oCrPiTwsRQ2vgZX2hr+3ugglQZELp3qn0P0zyKcXl0/7zeCjWEGxpHts+GrooOLbCPY3NrNQecs7+fWb1X6PAFuyR9KO+B9kvSAcREhBnGH84l3kU0duIN/r5im0M6HAz7fZ0Omcr4M62ALm6VSl1IdeAwX10drMwtZV8PIBrSim0a4ACEgCeveNMl1fcukA62TQu8BtBBPgMIW9U4q7UKXRTKGrVq3KWwHYBzVgGmRDcijW2zjpxB4v+hsXNTVea84j2hhGWSXQrMIulbQQhVw7FPnLy4OOgVLI9kcyE5A62oqbKo4WQDI6TT6M42e1A5oWVSrQFsLeDpRCpxCN4puCl0W7RSysB3A3EPRimpAE7a///rzQKn0gCNc3Bdy0LH04p3jXvDuhGydlq3VXArtwtUdN1WticB5tKhgC8uQVFHOWY1mo6gW6t7PmVprtlDxS3062QqEwqJrsCjZB4EsoilskHq0O+qOm6qug92EusjiIhwDM6VkkFXRDWTbUQ1oRrZCBxyjnPbv8Q7DnvoOeAdHncfFAZZFtGqtpvBcC6ZL5Xyn1gGn0Ck8DsC91LPSAm2qJkU2YPhT3lzfSj0rLupV411Ec9GNtVbQQhVwWt9LPSu7Rl0By0CDsZOiGjADNmAScC4KVSBNgYzrKCxrbdA553Ofg02hYzu1uONcBTTg8jQKvF/ABscL4TrwfhMMgDosg6oDmQM92q6+ZilkWncgjKCr2hVgi4MGYF5kA9LoFnWFQEsG0QiuqOuxYWzoHmHTtk5+BlwGn7NuX5g629mgARfABgyBC+vg0+hUAVYVFJa1duDcJChsYTPwKohc2xUU9iLQgAthA+zPxlQQLFFg6mxDawcsk05IBcGlBUU92gAuBw1YADagBVzUM/Bc3xTAHgW00FTguJ7BlPWhsACWAQ1YCDagBI7rzjrYsm26b+hXgY3rXfDcNu3T/n+1FGjAgrAB6S/6daEL2xkTejTInBwQXO/YKnJl9UVBAxaGLTSIctyeCiJr1H4U6QRl7QqkSZABy4MGXAk2oBXltF2Bp3XX7m67B1WTUsFXgVaN+VfXgCx0NdhCM6Cb03bqjFmrRpPSjXbdNoDrggbcADZg+OvMHRizvs62R1E2Ud3+dKKvDVnoJrCxZoBX9Veas89aNHVSusCd6FaQhW4OW6j5W/SdMao5+6xVUydnOP7WgLE+DTZWEzzVnH0eQZMn7DMBY60CNtVM+J760FrgUq0StkxPCE+1Vqgy3RVsT923tqMBTz21lJ6wPXUzPWF76mb6P6TFtk6mypRRAAAAAElFTkSuQmCC"></image>
                                                                <rect class="cls-13" x="73.24" y="309.66" width="98.51" height="46.18" rx="18" id="pageid_05"></rect>
                                                                <path d="M89.34,338.15a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86H89a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25h1.52v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H92.1v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88,1.6,1.6,0,0,0,0-.21c0-.08,0-.15-.05-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4H98a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c0-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58A11,11,0,0,1,95,339a12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82v-1.62a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54,0-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23H102c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,98.66,341.39Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                                <path d="M115.24,341a10.6,10.6,0,0,1-3.47-.45A2.93,2.93,0,0,1,110,339a7.19,7.19,0,0,1-.5-3v-1.84a7.23,7.23,0,0,1,.45-2.81,2.88,2.88,0,0,1,1.53-1.54,8,8,0,0,1,3-.55v-3.06h-5.42a.75.75,0,0,1-.58-.24.79.79,0,0,1-.22-.56.77.77,0,0,1,.22-.57.75.75,0,0,1,.58-.23H125.9a.75.75,0,0,1,.58.23.77.77,0,0,1,.22.57.79.79,0,0,1-.22.56.75.75,0,0,1-.58.24H120v3a9.82,9.82,0,0,1,3.36.48,2.88,2.88,0,0,1,1.69,1.53,7,7,0,0,1,.49,2.91v1.84a7.19,7.19,0,0,1-.5,3,2.91,2.91,0,0,1-1.74,1.52,10.54,10.54,0,0,1-3.46.45Zm-.08-1.66h4.74a7.9,7.9,0,0,0,2.35-.28,1.9,1.9,0,0,0,1.16-1,4.63,4.63,0,0,0,.33-2v-1.4a2.23,2.23,0,0,1-1,1.37,3.82,3.82,0,0,1-1.88.41,3.24,3.24,0,0,1-2-.5,2.32,2.32,0,0,1-.6-1.84V331h-2a8.5,8.5,0,0,1-.88,3.66,6.87,6.87,0,0,1-2.32,2.46,1.31,1.31,0,0,1-.74.21.77.77,0,0,1-.64-.35.86.86,0,0,1-.1-.69.93.93,0,0,1,.42-.55,6.45,6.45,0,0,0,1.41-1.22,4.3,4.3,0,0,0,.79-1.48,8.55,8.55,0,0,0,.32-2,5.13,5.13,0,0,0-1.94.35,1.72,1.72,0,0,0-1,1,5.07,5.07,0,0,0-.27,1.84v2a4.63,4.63,0,0,0,.33,2,1.89,1.89,0,0,0,1.17,1A8,8,0,0,0,115.16,339.35Zm1.08-10h2v-3h-2Zm4.7,5.44a1.35,1.35,0,0,0,.88-.23,2.05,2.05,0,0,0,.42-1,.74.74,0,0,1,.38-.51.88.88,0,0,1,.72-.05.77.77,0,0,1,.32.18,2.54,2.54,0,0,0-.51-1.29,2,2,0,0,0-1.16-.66,8.56,8.56,0,0,0-2-.19v2.88a1.06,1.06,0,0,0,.18.73A1.29,1.29,0,0,0,120.94,334.77Z"></path>
                                                                <polyline class="cls-14" points="141.09 333.52 153.75 333.52 151.16 330.17"></polyline>
                                                                <circle class="cls-14" cx="151.94" cy="332.75" r="6.97"></circle>
                                                                <image class="cls-12" width="173" height="103" transform="translate(173.08 264.31)" xlink:href="data:image/png;base64,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"></image>
                                                                <rect class="cls-13" x="201" y="292.32" width="116" height="46.18" rx="18" id="pageid_04"></rect>
                                                                <path d="M226.74,324.36a1,1,0,0,1-.69-.22.82.82,0,0,1-.25-.64v-5.72h-3.14a7.24,7.24,0,0,1-2.46-.34,2.22,2.22,0,0,1-1.31-1.18,5.61,5.61,0,0,1-.39-2.32,5.34,5.34,0,0,1,.42-2.35,2.35,2.35,0,0,1,1.33-1.16,7.25,7.25,0,0,1,2.41-.33h3.14V307a.86.86,0,0,1,.25-.63,1.14,1.14,0,0,1,1.37,0,.79.79,0,0,1,.26.63v3.14h3.16a7.25,7.25,0,0,1,2.43.33,2.27,2.27,0,0,1,1.32,1.16,5.36,5.36,0,0,1,.41,2.35,5.1,5.1,0,0,1-.43,2.32,2.32,2.32,0,0,1-1.35,1.18,6.86,6.86,0,0,1-2.38.34h-3.16v5.72a.76.76,0,0,1-.26.64A1,1,0,0,1,226.74,324.36ZM222.66,316h3.14v-4.1h-3.14a6.06,6.06,0,0,0-1.36.13,1.07,1.07,0,0,0-.71.56,3.27,3.27,0,0,0-.21,1.35,3.63,3.63,0,0,0,.19,1.31,1,1,0,0,0,.68.6A5.11,5.11,0,0,0,222.66,316Zm5,0h3.16a4.8,4.8,0,0,0,1.34-.15,1.13,1.13,0,0,0,.73-.6,2.85,2.85,0,0,0,.23-1.31,3.27,3.27,0,0,0-.21-1.35,1,1,0,0,0-.71-.56,6.06,6.06,0,0,0-1.38-.13h-3.16Z"></path>
                                                                <path d="M237.76,320.08a.81.81,0,0,1-.42-.55.94.94,0,0,1,.12-.69,14.12,14.12,0,0,0,1-1.6,19.61,19.61,0,0,0,.86-1.79c.26-.6.48-1.17.65-1.69a.82.82,0,0,1,.51-.52,1.08,1.08,0,0,1,.73,0,.88.88,0,0,1,.5.48.9.9,0,0,1,0,.72c-.18.54-.41,1.12-.68,1.74s-.56,1.25-.88,1.86a14.62,14.62,0,0,1-1,1.68,1,1,0,0,1-.61.43A.9.9,0,0,1,237.76,320.08Zm10.34,3.58a8.81,8.81,0,0,1-2.64-.31,2.19,2.19,0,0,1-1.36-1.09,4.89,4.89,0,0,1-.4-2.16v-7.74a.87.87,0,0,1,.27-.67,1,1,0,0,1,.67-.25.93.93,0,0,1,.66.25.87.87,0,0,1,.26.67v7.56a2.73,2.73,0,0,0,.22,1.2,1.19,1.19,0,0,0,.79.58,6.25,6.25,0,0,0,1.63.16,6.75,6.75,0,0,0,1.54-.13,1.32,1.32,0,0,0,.83-.55,3.59,3.59,0,0,0,.49-1.28.85.85,0,0,1,.51-.58,1.08,1.08,0,0,1,.77,0,.89.89,0,0,1,.54.45,1,1,0,0,1,0,.71,4.92,4.92,0,0,1-.8,2,2.69,2.69,0,0,1-1.48,1A9.19,9.19,0,0,1,248.1,323.66Zm.34-12.88c-.34-.28-.75-.58-1.23-.91l-1.43-.95c-.48-.3-.9-.55-1.28-.74a.77.77,0,0,1-.41-.55.9.9,0,0,1,.11-.65.93.93,0,0,1,1.26-.36,14.29,14.29,0,0,1,1.31.73l1.47.93c.5.32.94.63,1.32.92a.93.93,0,0,1,.41.61.88.88,0,0,1-.17.71.9.9,0,0,1-.62.42A.79.79,0,0,1,248.44,310.78Zm7.3,7.9a.92.92,0,0,1-.77.19.9.9,0,0,1-.65-.41,17.68,17.68,0,0,0-1-1.47c-.4-.52-.83-1-1.27-1.55a17.75,17.75,0,0,0-1.24-1.3.81.81,0,0,1-.24-.63,1,1,0,0,1,.28-.63,1,1,0,0,1,.67-.27.92.92,0,0,1,.67.27q.69.64,1.38,1.41c.47.52.91,1,1.32,1.54s.77,1,1.06,1.43a1,1,0,0,1,.21.76A.92.92,0,0,1,255.74,318.68Z"></path>
                                                                <path d="M258.12,315.82a.79.79,0,0,1-.78-.78.77.77,0,0,1,.23-.56.82.82,0,0,1,.55-.22h2.58a1,1,0,0,1-.36-.38c-.06-.18-.16-.42-.28-.7l-.37-.85a6.74,6.74,0,0,0-.35-.71.93.93,0,0,1,0-.64.69.69,0,0,1,.4-.46,1.19,1.19,0,0,1,.66-.08.71.71,0,0,1,.5.4,7.66,7.66,0,0,1,.37.72c.14.31.28.61.41.91a5.85,5.85,0,0,1,.28.69.88.88,0,0,1,.06.63.68.68,0,0,1-.42.47h1.8c.14-.3.29-.67.47-1.1s.36-.84.52-1.26.3-.74.39-1a.88.88,0,0,1,1.16-.48.78.78,0,0,1,.48.42.72.72,0,0,1,0,.64c-.13.35-.32.79-.56,1.31s-.46,1-.68,1.45h2.26a.78.78,0,0,1,.55.22.73.73,0,0,1,.23.56.79.79,0,0,1-.78.78Zm.52-5.56a.75.75,0,0,1-.76-.76.75.75,0,0,1,.76-.76h3.26v-1.68a.92.92,0,0,1,.28-.68,1,1,0,0,1,.66-.26.94.94,0,0,1,.67.26.91.91,0,0,1,.27.68v1.68H267a.75.75,0,0,1,.76.76.75.75,0,0,1-.76.76Zm4.18,13.58a6.71,6.71,0,0,1-2.25-.3,1.88,1.88,0,0,1-1.13-1,6.63,6.63,0,0,1,0-4.07,1.92,1.92,0,0,1,1.13-1,8.63,8.63,0,0,1,4.51,0,1.88,1.88,0,0,1,1.12,1,6.63,6.63,0,0,1,0,4.07,1.84,1.84,0,0,1-1.12,1A6.65,6.65,0,0,1,262.82,323.84Zm0-1.62a4.61,4.61,0,0,0,1.2-.12.8.8,0,0,0,.57-.5,4.37,4.37,0,0,0,0-2.27.87.87,0,0,0-.57-.5,5.6,5.6,0,0,0-2.4,0,.87.87,0,0,0-.57.5,4.37,4.37,0,0,0,0,2.27.8.8,0,0,0,.57.5A4.61,4.61,0,0,0,262.82,322.22Zm6.7,2.32a.85.85,0,0,1-.63-.25.89.89,0,0,1-.25-.65V309.48a3.86,3.86,0,0,1,.28-1.6,1.63,1.63,0,0,1,1-.81,7.87,7.87,0,0,1,2.15-.23c1.5,0,2.46.27,2.88.8s.41,1.3-.06,2.3c-.18.4-.38.81-.58,1.23s-.37.77-.52,1a7.21,7.21,0,0,0-.32.81.69.69,0,0,0,.06.53,5.26,5.26,0,0,0,.52.66,7.38,7.38,0,0,1,1.28,1.88,5.1,5.1,0,0,1,.46,2.2,3.44,3.44,0,0,1-.95,2.69,4,4,0,0,1-2.77.87,1,1,0,0,1-.67-.22.9.9,0,0,1-.31-.66.93.93,0,0,1,.23-.67A1,1,0,0,1,272,320a2.57,2.57,0,0,0,1.54-.43,1.8,1.8,0,0,0,.42-1.39,3.9,3.9,0,0,0-.37-1.69,8.23,8.23,0,0,0-1-1.59,6.7,6.7,0,0,1-.76-1.16,1.49,1.49,0,0,1-.11-.91,6.89,6.89,0,0,1,.43-1.25q.21-.45.42-1c.15-.33.3-.67.44-1s.21-.73.06-.91-.55-.27-1.22-.27a2.12,2.12,0,0,0-1.21.23,1.29,1.29,0,0,0-.27,1v14a.82.82,0,0,1-.26.65A.86.86,0,0,1,269.52,324.54Z"></path>
                                                                <polyline class="cls-14" points="286.09 316.18 298.75 316.18 296.16 312.83"></polyline>
                                                                <circle class="cls-14" cx="296.94" cy="315.41" r="6.97"></circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-hot-news">
                    <a href="https://atom-recruit.comotec.website/hot-news" class="btn btn-cms hide-for-small"></a>
                    <div class="title-hot-news">Hot News</div>
                    <div class="news-list">
                        <?php
                        $args = array(
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'post_type' => 'post',
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                            $recruit_types = get_the_terms(get_the_ID(), 'recruit-type');
                            if ($recruit_types && !is_wp_error($recruit_types)) {
                                $recruit_type = $recruit_types[0];
                                $recruit_type_link = get_term_link($recruit_type);
                                $term_color =get_custom_taxonomy_color($recruit_type->term_id);
                            }
                        ?>
                                <div class="news-item item-list biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="<?php the_permalink(); ?>" class="bl-bigger"></a>
                                    <div class="date"><span><?php echo get_the_date('Y/m/d') ?></span></div>
                                    <div class="cat catid-<?php echo $recruit_types[0]->term_id; ?>">
                                        <a style="background-color:<?php echo esc_attr($term_color);?> " href="<?php echo $recruit_type_link ?>" class="" title="">
                                            <span><?php echo ($recruit_types[0]->name)?></span>
                                        </a>
                                    </div>
                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'Không có bài viết nào.';
                        endif;
                        ?>
                    </div>
                </div>
                <div class="box-btn-news pt-15 show-for-small">
                    <a href="https://atom-recruit.comotec.website/hot-news" class="btn btn-main">一覧へ</a>
                </div>
            </div>
            <a href="#home-01" class="scroll">
                <span class="scroll-text">Scroll</span>
                <span class="scroll-line"></span>
            </a>
            <div class="box-popup-banner pt-30 pb-30 mt-40 show-for-small">
                <div class="popup-pc popup-banner">
                    <div class="popup-hd">
                        <div class="title-popup">職 種</div>
                        <p>からさがす</p>
                    </div>
                    <div class="popup-cont" style="display: none;">
                        <div class="popup-cont-inner">
                            <div class="close-popup"><img src="" alt=""></div>
                            <div class="sub-title-popup"><span>職種</span>からさがす</div>
                            <div class="box-list-link-cms mt-45 mb-sm-60">
                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-type/nurse/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-5.png" alt="">
                                        </div>
                                    </div>
                                    <div class="title-link-cms">
                                        看護師 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-pc popup-banner mt-20">
                    <div class="popup-hd">
                        <div class="title-popup">施 設</div>
                        <p>からさがす</p>
                    </div>
                    <div class="popup-cont" style="display: none;">
                        <div class="popup-cont-inner">
                            <div class="close-popup"></div>
                            <div class="sub-title-popup"><span>施設</span>からさがす</div>
                            <div class="box-list-link-cms box-list-link-cms-3 mt-45 mb-sm-60">
                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-facility/nursing/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-11.png" alt="">
                                        </div>
                                    </div>

                                    <div class="title-link-cms">高齢者介護 </div>
                                </div>


                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-facility/welfare/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-12.png" alt="">
                                        </div>
                                    </div>

                                    <div class="title-link-cms">障がい者支援 </div>
                                </div>


                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-facility/medical/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-13.png" alt="">
                                        </div>
                                    </div>

                                    <div class="title-link-cms">医療機関 </div>
                                </div>


                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-facility/health-checkup/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-14.png" alt="">
                                        </div>
                                    </div>

                                    <div class="title-link-cms">健診施設 </div>
                                </div>


                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-facility/child-rearing/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/03/img-link-cms-15.png" alt="">
                                        </div>
                                    </div>

                                    <div class="title-link-cms">保育園 </div>
                                </div>


                                <div class="box-link-cms biggerlink bl-hot" style="cursor: pointer;">
                                    <a href="https://atom-recruit.comotec.website/recruit-facility/others/" class="bl-bigger"></a>

                                    <div class="box-img-link-cms">
                                        <div class="image-cover">
                                            <img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/05/img-link-cms-16.png" alt="">
                                        </div>
                                    </div>

                                    <div class="title-link-cms">その他 </div>
                                </div>
                            </div>

                            <div class="box-link-sub-cms">
                                <div class="row row-large">
                                    <div class="large-6 col-12">
                                        <div class="col-inner">
                                            <div class="box-list-link-sub">
                                                <div class="title-line-link">高齢者介護</div>
                                                <div class="list-sub-link">
                                                </div>
                                            </div>
                                            <div class="box-list-link-sub">
                                                <div class="title-line-link">障がい者支援</div>
                                                <div class="list-sub-link">
                                                </div>
                                            </div>
                                            <div class="box-list-link-sub">
                                                <div class="title-line-link">医療機関</div>
                                                <div class="list-sub-link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-6 col-12">
                                        <div class="col-inner">
                                            <div class="box-list-link-sub">
                                                <div class="title-line-link">健診施設</div>
                                                <div class="list-sub-link">
                                                </div>
                                            </div>
                                            <div class="box-list-link-sub">
                                                <div class="title-line-link">保育園</div>
                                                <div class="list-sub-link">
                                                </div>
                                            </div>
                                            <div class="box-list-link-sub">
                                                <div class="title-line-link">その他</div>
                                                <div class="list-sub-link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-pc popup-banner mt-20">
                    <div class="popup-hd">
                        <div class="title-popup">勤 務 エリア</div>
                        <p>からさがす</p>
                    </div>
                    <div class="popup-cont" style="display: none;">
                        <div class="popup-cont-inner">
                            <div class="close-popup"><img src="" alt=""></div>
                            <div class="sub-title-popup"><span>エリア</span>からさがす</div>
                            <div class="box-800 mt-70">
                                <div class="row row-collapse">
                                    <div class="large-4-4 col-12">
                                        <div class="col-inner box-home-link-left">
                                            <div class="title-dot">松山市エリア</div>
                                            <div class="box-list-link-cms-2 mt-20">
                                                <a href="https://atom-recruit.comotec.website/recruit-area/chuushinbu/" style="border-color: #0071b7">中心部</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/jounan/" style="border-color: #39b04a">城南</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/jousai/" style="border-color: #00A498">城西</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/jouhoku/" style="border-color: #29a6dd">城北</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/joutou/" style="border-color: #87c13f">城東</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/hojo/" style="border-color: #f28e1e">北条</a>
                                            </div>
                                            <div class="title-dot mt-45">その他エリア</div>
                                            <div class="box-list-link-cms-2 mt-20">
                                                <a href="https://atom-recruit.comotec.website/recruit-area/toon/" style="border-color: #ec5a24">東温</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/tobe/" style="border-color: #2e318d">砥部</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/yawatahama/" style="border-color: #006837">八幡浜</a>
                                                <a href="https://atom-recruit.comotec.website/recruit-area/others/" style="border-color: #aeaeae">その他</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-7-6 col-12">
                                        <div class="col-inner">
                                            <div class="box-img-home-link text-right" id="box_img_map">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="480" height="620" viewBox="0 0 480 620" class="svg-img replaced-svg">
                                                    <defs>
                                                        <style>
                                                            .cls-1,
                                                            .cls-11,
                                                            .cls-14 {
                                                                fill: none;
                                                            }

                                                            .cls-2 {
                                                                clip-path: url(#clip-path);
                                                            }

                                                            .cls-3 {
                                                                fill: #bee8f4;
                                                            }

                                                            .cls-4 {
                                                                fill: #d9edc8;
                                                            }

                                                            .cls-5 {
                                                                fill: #f28e1e;
                                                            }

                                                            .cls-6 {
                                                                fill: #00a498;
                                                            }

                                                            .cls-7 {
                                                                fill: #87c13f;
                                                            }

                                                            .cls-8 {
                                                                fill: #0071b7;
                                                            }

                                                            .cls-9 {
                                                                fill: #29a6dd;
                                                            }

                                                            .cls-10 {
                                                                fill: #39b04a;
                                                            }

                                                            .cls-11 {
                                                                stroke: #fff;
                                                                stroke-width: 2px;
                                                            }

                                                            .cls-11,
                                                            .cls-14 {
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                            }

                                                            .cls-12 {
                                                                opacity: 0.25;
                                                            }

                                                            .cls-13 {
                                                                fill: #fff;
                                                            }

                                                            .cls-14 {
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                        <clipPath id="clip-path">
                                                            <rect class="cls-1" width="480" height="620"></rect>
                                                        </clipPath>
                                                        <image id="image" width="155" height="103" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJsAAABnCAYAAAAXMTDuAAAACXBIWXMAAAsSAAALEgHS3X78AAAP50lEQVR4Xu2dXXbrNhKES7LzMzvKqrKDPGUHs6rsaHJzbWke7I5LpepGg6IkKlGdg9MNECTIxscGKdvy7ng84qmnbqH9qMNTT62lJ2xP3Uyvow5b0y+//rYb9fm36I///v5Qz0C7rT6zPaFarq1CuBnYFsK1ZJ9H1/SEbQW+u8LWBKzTR7Vkn61pycQM97kneDeHrQFYtn20n9OSfe6t2Qmp+pfHujV4N4NtAJnb1m3rbHt0zQLVbQNwO+iuDlsBmbZfWnfq9NmaOhOifS6tA7g+dFeFLQGN2zKAsj6j43XaH0HZpFTQzPquflXgrgLbJGQVYLPwPTJgmWYBUztqUx/AdaBbHTYD2ggUZ6ttbNV39UdWB7TKjvpU/urArQpbE7QMqlmfrfqu/kiahewSn636qwK3GmwFaB3IuHTaUdjQPxG2DDRXr9phfGcBrAfcKrAJaM7vwDRTYHy2oUcErgNaBddscccM/e2vAdzFsCWgOVuV/aDeAc9Z1pbBc5PgIAvbKYfEnwEv6gAuB+4i2BqgOdj2xs9s5WfjsA1tGbSQTsQSyA4DW/kONrUXAbcYtiZorjBQ6mfbZqGLOmvLwHVBC18hcXAdBnV3HC0wdjFwi2BbCFoGV6fo/hVwzqq2AF4W+Aw0VxQmBatTRtDB2EXATcO2ALQRYC9i1c/Ay6B255fVtyCdgA5sVSY7AHhv+JdAB2AeuKnf1G38MN2BxoA4oF6o7I0/Cx2MZW0JODdZChn7XcjY7snfic86UF+nIz72mQKMNQWbiCe0Ai3LYt1SQeeAg/hR72qm70gzE8N9HWgVZAHQu/hcImYB2vvn8Tl2AVoLuF9+/W03k93ay2ixfIbPk96F7FWs+g48B5wrIKt+pW6/jnrBPQctrBYHWwbYm/G5TUtnaYWx7eV0jcwWPoPGwCloDNhrUs/g0yzH42XAQfyq7VZyk+Mm08GWZTQF7YX8/afVeDlF9nI37Elmm1Ursw2y2iWQvQL4wbRl4ClwOq4L0gi6eyvLamGzjFZlszcp300bl1GWc+CDbCu7zWa2DDQGTpdPBe2Hwmqbg02XVAWNC8iGtgScTtAoq4V1S6eD6DvOHz+q61fwI7YHagMWZrdhZmtktSqjaTZTsEalAk7BrkDbInAVaGGzzKawZZnsuyl/ybYqy40yHMgOs9tsZgPyrKbgKXQM3I/4AurHxI4ynC6nO/FhrOoe0GUTopCFP1pCeekMeF5xntVcXEIuk0bRG1j3a6uErfhtDm3rgKZZ60dTFETNcFV2c/CDrPpbkS5dYbPMVmW1H/ABGcfKwRaqIHPAxT6snWmzms1sbkIVNF5OuWhmi/ITzqHLgBvBFhY4D+4WQQspcK5kLwa6dGqcRpnJjbM37TuxEH/4uVsXNneiOqn6DKXLpy6hAdpPOIUubCe7/dthiyX0O76ymsbHwabH1ePzNk0sAVwcB9ReKoVt4le89ZlJl1G3lGoW+0mKy2767Mbj6HlwcKvruLd0go5kM9BcZnvFeVZz8aiO+yr1mEvuz3EdwqXqZraQTiKXuLgRaAxcwPUzPGwMXAWbC2wGW9Z2a7nJqmA7Iv/I4xX5xxwMRwZaHPdF2vcYZ7c4NoB6Ke3Alk2WA40zW/a8lj2zdbPb0mU02rYml91cyZbRgI1vQo6DHlcBezf+XkoG3JQ6sKl0Mhk4Lgqay3BuGf0ZpxDOwgacgpbdLPfWTGYbwfaGcVbLluEfyI+4MnAR1wAupMANAbQf6pqPPDKwNHsxGJyxYpn8z6f/86fPdS76ljpaRjmrKWQK1hZAC7mspvaAGhb+gPYvKt8A/Plp//fp/0k+t0X5JsfgD315zDiPOC/g66YA4D/gXZrZOlnNwVhlN/fCMJvZuICs+lsTT0yW3bLMVmWzKLxM8mdy/FIRLxk6l1lMI5MNM1poBFs1QQ66KutlLwoZcPqS4DLbDGysLYA3WkbDVrDxTcfXpPu5ZdeB5m7iDLgWYKwRbCodlNv0BBW66tmtAq6T2Rz0wOl5srYOW/gZbPFc9QY/JwqaQhY/ZeCbt1ot9jh/SQDOoSshnIFNJ8hNsIL3YkoGXZb1Mtiyuw/ih7YAWCadoICF/YMUl3G0r8toDJqDLAMOxp/Kbh3YqonLIHOZrQIuQMvaeZsGaAcfFLaqLYCXTVS2lCpsGWic0fi5TMsLzuPpVgsHNSugG8K314bmH7UApwMrdA68LnTdwsfQY7qxuttvVUbn4a7r0pId3yUJhS5LMCD7txxHr9rQlIMrg2wEnAtAFiAuo4CEqptna9JntrCRrfQ6eXv04VjqB75Z/Lju5hQ4H3daS2ELVdBV4I2g65RRcCD+o0iBi7LDF3DaX0FzsRrFMWKZxTW0GLoZ2HZi3fZZ6DIQR300QBqURwUuoGLfAcf9NXYOohexHDu2VTwzyOIch6pgyw6sfnZSejF6QZdAlh0fxj6SHGgMHC+le5zDNiou7rxNC8iqqnYL30xmY7kTcb6Dz4EyCoQGxIGm55QF45EV1wx8gZiVCrJqv6qAbPitrAYsh03FJ1KdYBaU0UWOLr4KxqOJl1Ktd+OoMe3GmMdw6vRJtcflGp2AuxiuZ314m/Zz27iu/R5JLla8Tftl/au4uzhzXfutorUym5M7WVcfXbDrV23L1OlzL7WXokIan2ybtmXgsVaJ3RqZ7amnWlozs+ndGW9Qrg9b97lS5XN9R+2ju2+N7LFlaXzYd9sy67RK7NaArYKKt2eg6Xa3Tdu5viMfmANwa3JxrOKypGBgXf9VtAZsLL2g2RI/ZM7a99IOsgyZqz+SOhDMlkNidayOvyiuS2HLTnBU3IVG/YDzfq5vtAEf8DGEnMm0/ihyMQXqmB2kzZUs/u4Gx8APsV+1Aahhc5PlBuU27afBcQF5F//dtHPht6cAjduP4kffrcvFMKyCsWapoHNzG3LwlZrJbBl8YTPA+CK4rmApdGH5k+93nCrepndUYGw7IHcWn2cXNo2hFo13dhN3oLsojjOwsXhgDcpBbPhZMEaFYQM88PEJeWyvPnPashS2qGtMRzHjkv1l1MHUO5Athm4pbKHsxDg47oKqwGR/eMHQvHzaI75eBKrMptoCgNmEVTdxFkP353bc9ibtDJ6bnwq8UAmd+1O+sw91B1/oxgNoMBSyKjAakJmi+7m6G2s0Obcq1dgZMFW7ls5XmmbnMMpuDjqYulUns8WB9E1PrQPtHaewOTg4SK84/SYezWjAxxgvn7b6LQaYfbeQ0VhuktxNzPHlmGagfTdtGXQKWpXdQDaUtZ+pA1voiK8lK+ouIBlo2V3JX173ig94XnD+7AWcj6G/QjOzlI62XUvVpGhsgdMJ17hyHOMv2Pmv4/UrTh1ws9kN4rc1AxtwCpxClgE3gkx/R16zlY4TUL5T35nsFroHaCE3UdzWuZE1pvr1CxlwHeiq7KbnySoBHMEWcFXbXTAq0BSyAM29DLiAv3wes/oVZxir/lbkJm8WNgZJv69DAVToeDnVVcmdh4OupRFsTjrYCLg3fIyTLZ3VWyfkuAGZ/q69LqOdpfSe4LmJOho7upEdbPGlMu5LYhg4zWyc4arMpjprn/p+tj/++/tR/u6Pd3ZL2x5fJ6VZLS7kBR8XqaAwMDqmBjhbcpc8t20ZNvY5ri62AY4uo99MGWW4DLQqy7XVyWxHnEOgyxwD54JSweaWPr2jGbQMNvfcxscM3RMyFU/W0dgRbO6ZjZdSl+EUtk5260A2BK8Dm5MbXO+ICMwbvjJYAJc9Z8WxNbBv8F8s414oOsBlbbdSNVmd2I6W0Sy76XL6JoVBC3sRYKzyP7zQUsqWAYmJ5smP7KPfUJR9nal+tan7Tt1XeNhibF1CHw02zXAd2DgbVUtptqR+k+0K4XcZR89BITwC9Q8FLslsYSMYMbkckIAxsptCwdLg8t0bH/bq26tmNvfMxuPcE7BMDrTwD2I56zAIChu/KGiWc0upLqEMl4Nf1cpwXdiO+JqoOPAO+V34jvMM+IY82/D+LpCc1WZfEP7JsOlS+obzpVKf2RQ4t4R2slgGXqqZf5SmE6gwZcupLqn8xX/uSwC5Dy+f7uWA32S7y+iWgFPQwrob2D2zMWwOOF1WGTLNbu5lgZ/dskyHsGv+o7QjzidKA8TL6TvOJ13lAsqB1OVz9CaqwAGnY7vzuCV8bjIUOI4pT24FW1heThk2hYv97OVAx9e5DpWAsWZgC2UBq4ADTgHI9osLjQAoZN3nNQebjn1LyFQaw6OxLjad7JZB54qCli2lChzEb2m4jALpV9WHr5PNIDAgr6bo15u6ZXP0rMbAuQKyoXuCFqqAc6WCzQGn0DF8rm8F3BGn0EH84RIKLMtswMcgO/KBj5PZ4+vEgK/sxqqCyMung2zpEqo3y1bkMoVO5mgpPeAUFgcSA6eAKWiayU6g+tQQLKdWZgOG2S2Ke2HQFwd9gdCsp9tGoDFk4YPaQg6ye4DnAp6BpjdlBpzLcgreu/E7y6eDD2RbWQ1YntmAj8F2yO/OyG6sLIgcvBd8BUMhU9hcRsuym/ojzfRVtYL/qSx+VayOOIVjBF0G1yxoF6md2YDW/4vvZrks27ksNspoDjaIH/UZzfZn9YOawxaWQVMboKkdFbefgsZjgdpAtp3VgEnYgIuBq8BTsLJsxqCNYGPLugSktaSBV+hGwLGvWY6hy4BUwBxowOn4IDsFGnDZMgp8DLxDficf8AFDnDjwdeJ7stzvHWPIFLD957EVuGhjbQG0UAacA62CLisOwgwwBs2ND7KLNJ3ZgDK7hR1lOZftqrITfyajVXDdA7ws4Nyuk82+Zh8HXQfEDLKDjOfOazqrAQthA9rAhe8ykQLU8TPI3LhRZ90DrpF0AjSLZJmmgm7kZ/u7sUIXgQZcABuQAhe+AuBgy3y1M5CpZT0CbNzmIOO6y0oViNl+VwcNuBA24CLgRhCuAdnWgatAY99B1ykOqiqL6Xgn/iWgASvABgyBCzsLXgVXBZnCtCW4RrKTjHMo2J8tbl8UFsDloAErwQbYf4w1gmEE0qgfCht6JNBCHeDCjuCp2vQYUWcLYB3QgBVhA0rg2M+gm/GdVb9q26rcZDgAMuBc26gvW/VXAw1YGTZgCBzX17Lqu/ojSiemykCXWvUBrAsacAXYgPR/lo6gc20ZUP900EId4NjvAFn5ANaHLHQV2EKT0HX9Tr27bWuqJqMCT+sOsKzPia4FGnBl2IDWf2a+pJ61zWzfkkaT4bbPQOjqAK4LWejqsIUmocvaqvbRtkfVTLbL2tNj3AKy0M1gYw3AA5aBlmnJPvfS7GQsARHAbSEL3QU2VgM8YBkwS/bZipZMynCfewDGujtsrCZ4Tkv3eyQtmqh7A8baFGyqC+D712pLcKk2DVumJ4TbhirTQ8L21GNqP+rw1FNr6QnbUzfTE7anbqb/A1D27EhqbBsNAAAAAElFTkSuQmCC"></image>
                                                    </defs>
                                                    <g id="レイヤー">
                                                        <g class="cls-2">
                                                            <rect class="cls-3" x="-69" y="-48" width="480" height="694"></rect>
                                                            <path class="cls-4" d="M990.68,317.16c-5.23-8.37-10.46-22-10.46-22H959.29l-16.75-20.93s8.38-8.37,8.38-14.65-5.24-18.83-8.38-24.06-13.6-13.61-11.51-24.07,14.65-12.56,14.65-12.56V186.35l-4.18-20.92-16.75-5.24V139.1c-1,.43-2.1.84-3.13,1.21C907,145.54,856.74,152.87,841,160.19s-68,16.75-68,16.75l-7.32-12.56-22-9.42-50.23-31.41c-8.37-5.25-24.06-30.73-24.06-30.73s-.59-2.19-1.47-5.42c-2.45-9-7.18-26.41-8-28.77-1-3.2-34.53-55.4-36.63-61.68S615-35.49,615-42.81s-25.11-17.3-25.11-17.3-25.12-17.24-25.12-24.56S547-131.76,547-131.76l-22-4.94-17.79-13.9-15.7-28.25L459.09-136.7l-13.6-7.62H424.56l4.19,15.7,40.81,5.81s3.14,30.81,0,39.19-9.42-2.1-14.65,0,0,35.57,0,35.57a274.93,274.93,0,0,1-31.4,0c-14.65-1-61.73,10.47-61.73,10.47s-13.61,23-15.7,26.16-45,34.53-53.37,39.76c-.54.35-1.31.77-2.24,1.27l7.47,9.2,13.61,12.56,14.65,7.26s16.74-6.22,26.16-.46,0,10.17,0,10.17h39.76S411,70.2,412,79.62s-6.27,17.79-6.27,17.79l1,42.9S427.7,145.54,434,155s23,26.16,23,26.16v40.81l-7.32,14.65-24.07,10.47-23,14.65s-10.47,15.69-10.47,20.93,10.47,23,10.47,26.16-7.33,16.74-8.38,23S366,381,366,381h-9.42s-9.41,12.56-14.73,19.88-25,0-25,0l3.14,16.18s9.42,7.89,11.22,13.12a14,14,0,0,1,0,9.42l10.67,4.19,4.27,10.46v13.6L366,476.22s11.51,15.69,18.84,19.88,0,24.07,0,27.21a12.26,12.26,0,0,1-.92,3.66c-1.35,3.64-3.87,8.61-5.36,13.08-2.09,6.28-27.21,26.59-27.21,26.59V584a55.86,55.86,0,0,1-20.17,4.18,137.62,137.62,0,0,1-16.55-1.5C319.1,584,326.2,584,326.2,584l-9.42-17.36-6.28-8.8v-23l-6.28-25.12s-6.28-19.88-6.28-23-27.2-27.21-27.2-27.21V429.13l-9.42-6.28-20.88-5.8,1-2.05-14.36-3.85,6-4a235.62,235.62,0,0,0-35.57-18.54C178.65,381,164,381,164,381H107l-1.57,2.09v16.75l18.84,24.06v26.17l-9.42,18.83s-19.88,19.88-23.55,22-5.75,7.32-7.84,11.51S83.43,539,69.3,561s-49.71,32.44-49.71,32.44L4.94,609.11-5.52,625.86s-38.72,19.88-58.6,24.06c-13.15,2.77-40.91,12-64.88,21.47l17.79,17.25,18.84,18.84v14.65h13.6l14.65-14.65,18.83-18.84,19.94,6.07,4.13,1.26s14.65,15.69,20.93,27.2,25.12,52.32,25.12,52.32L15.41,789.1l9.18,6.28L36.34,821l-9.42,12s-5.23,13.6,0,34.27,22,11.63,22,11.63l-8.37,20s19.88-6.28,30.35-2.09,9.42,18.84,9.42,18.84l30.34-30.35s8.37-2.09,20.93,4.19,20.93,0,20.93,0,1-10.47,5.23-17.79S182.84,854,182.84,854h16.74c7.32,0,28.25-9.42,28.25-9.42S231,834.09,240.39,832s9.42,12.56,9.42,12.56,7.32,5.23,22,3.14S277,831,277,831h11.52c5.23,0,9.41-9.94,9.41-9.94s10.47-4.71,17.79,0c3.66,2.35,9.93,18.67,15.41,34.81l.29-1.85s27.21,32.44,30.35,33.48,26.16,10.47,26.16,10.47,23,6.28,26.16,6.28c1.79,0,5.27.34,7.94.63l3.57.41V919.9l-12.46,30c2.91.52,5.71,1,8.27,1.43,25.12,4.19,34.53-3.13,45-5.23s17.79-2.09,22,6.28,29.3,0,29.3,0,22-3.14,39.77-10.46,42.9-15.7,42.9-15.7l1-17.79s17.79-23,25.11-31.39,8.37-28.26,8.37-28.26,17.79-8.37,23-12.55,10.46-20.93,11.51-35.58-16.75-20.93-19.89-30.35,3.14-14.65,7.33-30.34,24.07-17.79,24.07-17.79,6.28-7.33,2.09-10.47-6.28-28.25-6.28-28.25,4.19-14.65,4.19-20.93,7.32-20.93,19.88-26.16S750,630,756.28,620.62s1.05-39.76,2.09-51.27,28.26-17.79,28.26-17.79,3.14-17.79,3.14-22,12.55-12.55,25.11-22c6.4-4.8,7.08-11.78,6.22-18.57-.82-6.54-3.08-12.91-3.08-17,0-8.37,16.74-14.65,29.3-29.3s17.79-41.86,17.79-41.86l29.3,10.47s9.42,12.55,15.69,12.55,15.7-8.37,34.54-18.83,24.06-34.53,26.16-48c1.7-10.92,11-15.25,21.71-17.05C993.28,331.59,993.45,321.59,990.68,317.16Z"></path>
                                                            <path class="cls-5" d="M327,167l62,16,17.65-47.66-.92-37.93S413.05,89,412,79.62s-19.88-11.28-19.88-11.28H352.36s9.42-4.42,0-10.17-26.16.46-26.16.46l-14.65-7.26L297.94,38.81l-7.47-9.2c-13.39,7.13-63.68,29-63.68,29L237.25,70.2,236.2,92.82s-5.23,43.31-6.27,47.49c-.84,3.34-9.67,27.35-14.8,44.36l51.29,35.09Z"></path>
                                                            <path class="cls-6" d="M184.75,296.05,161,253l-19.36-37.43-1.71,4.27s0,14.65-1,24.07-8.38,18.83-8.38,18.83l12.56,1.05-7.32,40.81-15.7,4.19s1,22-5.23,37.67,0,24.07,0,24.07L107,381h57s14.65,0,33.49,7.62a233.46,233.46,0,0,1,31.51,16V367l-33-7Z"></path>
                                                            <path class="cls-7" d="M434,155c-6.28-9.42-27.21-14.65-27.21-14.65l-.12-5L389,183l-62-16-60.58,52.76L277,227l-12,22.58-6.53,12.31L323,301l9.14-3.32L367,285l31.44,34.94c2.09-4.89,4.15-9.49,4.15-11.15,0-3.14-10.47-20.93-10.47-26.16s10.47-20.93,10.47-20.93l23-14.65,24.07-10.47L457,221.93V181.12S440.26,164.38,434,155Z"></path>
                                                            <polygon class="cls-8" points="325 283 258.47 261.89 226 277 184.75 296.05 191 362 229 367 305 367 331 317 332.14 297.68 325 283"></polygon>
                                                            <path class="cls-9" d="M266.42,219.76l-51.29-35.09c-1.3,4.29-2.36,8.15-3,11.1-3.14,14.65-11.51,18.84-22,23-6.84,2.74-25.29.11-37.26-2-6.35-1.14-10.87-2.14-10.87-2.14l-.39,1L161,253l23.75,43.05L232,281l26.47-19.11L265,249.58,277,227Z"></path>
                                                            <path class="cls-10" d="M341.81,400.87c5.32-7.32,14.73-19.88,14.73-19.88H366s27.21-42.9,28.25-49.18c.5-2.95,2.38-7.53,4.23-11.87L367,285l-34.86,12.68L331,317l-19.76,38L230,367h-1v37.62c2.58,1.56,4.06,2.53,4.06,2.53L229,409.87v1.8L241.44,415l-1,2.05,20.88,5.8,9.42,6.28v30.34s27.2,24.07,27.2,27.21,6.28,23,6.28,23l6.28,25.12v23l6.28,8.8L326.2,584s-7.1,0-11.61,2.68a137.62,137.62,0,0,0,16.55,1.5A55.86,55.86,0,0,0,351.31,584V566.64s25.12-20.31,27.21-26.59c1.49-4.47,4-9.44,5.36-13.08a12.26,12.26,0,0,0,.92-3.66c0-3.14,7.32-23,0-27.21S366,476.22,366,476.22l-19.88-8.38v-13.6l-4.27-10.46-10.67-4.19a14,14,0,0,0,0-9.42c-1.8-5.23-11.22-13.12-11.22-13.12l-3.14-16.18S336.49,408.2,341.81,400.87Z"></path>
                                                        </g>
                                                        <path class="cls-11" d="M68.5,72.5s5,6,12-3c0,1,1,12,11,1,0,2-3,12,10-1"></path>
                                                        <path class="cls-11" d="M127.5,124.5s5,6,12-3c0,1,1,12,11,1,0,2-3,12,10-1"></path>
                                                        <path class="cls-11" d="M52.5,162.5s5,6,12-3c0,1,1,12,11,1,0,2-3,12,10-1"></path>
                                                        <use class="cls-12" transform="translate(233.08 69.31)" xlink:href="#image"></use>
                                                        <rect class="cls-13" x="261.24" y="97.16" width="98.51" height="46.18" rx="18" id="pageid_01"></rect>
                                                        <path d="M285.2,129.19a1,1,0,0,1-.66-.26.88.88,0,0,1-.28-.68v-3.68l-1.53.66-1.65.69c-.53.22-1,.4-1.4.54a.89.89,0,0,1-.75,0,1,1,0,0,1-.49-.51.82.82,0,0,1,0-.7,1,1,0,0,1,.58-.46l1.09-.41,1.42-.56,1.46-.61c.47-.19.88-.36,1.23-.52v-4.78h-4.7a.85.85,0,0,1-.64-.27.92.92,0,0,1-.26-.65,1,1,0,0,1,.26-.66.88.88,0,0,1,.64-.26h4.7V112a.86.86,0,0,1,.28-.67.92.92,0,0,1,.66-.26.91.91,0,0,1,.94.93v16.25a.91.91,0,0,1-.27.68A.94.94,0,0,1,285.2,129.19Zm7.52-.4a7.82,7.82,0,0,1-2.34-.29,2,2,0,0,1-1.26-1,4,4,0,0,1-.38-1.89V112a.86.86,0,0,1,.27-.67.91.91,0,0,1,.65-.25.87.87,0,0,1,.64.25.89.89,0,0,1,.26.67v5.72c.49-.28,1-.59,1.54-.92l1.53-1q.74-.51,1.23-.9a1,1,0,0,1,.71-.29.81.81,0,0,1,.67.31.93.93,0,0,1,.26.66.78.78,0,0,1-.34.64c-.45.36-1,.75-1.67,1.18s-1.34.83-2,1.23-1.33.73-1.9,1v5.8a1.37,1.37,0,0,0,.46,1.23,3.53,3.53,0,0,0,1.7.28,2.2,2.2,0,0,0,1.53-.43,2.76,2.76,0,0,0,.67-1.53.88.88,0,0,1,.42-.62,1,1,0,0,1,.78-.09.87.87,0,0,1,.66,1.1,3.86,3.86,0,0,1-1.23,2.61A4.38,4.38,0,0,1,292.72,128.79Z"></path>
                                                        <path d="M299.56,120.91a.93.93,0,0,1-.71-.12.76.76,0,0,1-.35-.54.71.71,0,0,1,.14-.59,1,1,0,0,1,.64-.33,28.88,28.88,0,0,0,3.53-.87,28.26,28.26,0,0,0,3.19-1.25,14.57,14.57,0,0,1-2.6-2.36,18.87,18.87,0,0,1-2.78,1.94,1.06,1.06,0,0,1-.69.11.77.77,0,0,1-.53-.4.71.71,0,0,1-.07-.59.81.81,0,0,1,.41-.5,17.62,17.62,0,0,0,1.94-1.29,21.88,21.88,0,0,0,1.84-1.59,15.43,15.43,0,0,0,1.44-1.62.77.77,0,0,1,.57-.33.81.81,0,0,1,.59.19.67.67,0,0,1,.31.52.83.83,0,0,1-.17.58c-.09.13-.2.26-.31.4s-.22.27-.33.42h4.22a2.72,2.72,0,0,1,1.76.47,1.21,1.21,0,0,1,.48,1.19,2.61,2.61,0,0,1-1,1.48c-.29.25-.6.49-.92.73s-.66.46-1,.69a19.75,19.75,0,0,0,3.13,1.21,32,32,0,0,0,3.55.79.93.93,0,0,1,.62.35.81.81,0,0,1,.14.63.78.78,0,0,1-.39.55,1.16,1.16,0,0,1-.75.09,29.72,29.72,0,0,1-4.23-1,20,20,0,0,1-3.71-1.62,29.79,29.79,0,0,1-3.78,1.57A36,36,0,0,1,299.56,120.91Zm7.94,8.58a.92.92,0,0,1-.64-.25.9.9,0,0,1-.26-.66v-4.43a17.7,17.7,0,0,1-1.87,1.55q-1.1.78-2.31,1.5a23.24,23.24,0,0,1-2.44,1.23,1.48,1.48,0,0,1-.78.1.68.68,0,0,1-.56-.45.78.78,0,0,1,0-.73,1,1,0,0,1,.56-.48,23.88,23.88,0,0,0,2.17-1c.77-.41,1.51-.85,2.23-1.32a18.84,18.84,0,0,0,1.86-1.35h-5.74a.74.74,0,0,1-.55-.24.8.8,0,0,1-.23-.56.79.79,0,0,1,.23-.56.75.75,0,0,1,.55-.22h6.88v-1.38a.86.86,0,0,1,.26-.65.94.94,0,0,1,1.28,0,.86.86,0,0,1,.26.65v1.38h6.86a.75.75,0,0,1,.56.22.78.78,0,0,1,.22.56.79.79,0,0,1-.22.56.73.73,0,0,1-.56.24h-5.74a17.58,17.58,0,0,0,1.93,1.42c.73.46,1.48.89,2.27,1.29s1.53.72,2.24,1a.84.84,0,0,1,.52.47.79.79,0,0,1,0,.67.87.87,0,0,1-.59.49,1.27,1.27,0,0,1-.77-.06,20.07,20.07,0,0,1-2.36-1.13,25.84,25.84,0,0,1-2.34-1.5,19.24,19.24,0,0,1-2-1.68v4.43a.9.9,0,0,1-.26.66A.92.92,0,0,1,307.5,129.49Zm.12-13.12a19.19,19.19,0,0,0,1.94-1.3c.35-.27.5-.5.47-.68s-.28-.28-.75-.28h-4.4a13.56,13.56,0,0,0,1.29,1.22A17.23,17.23,0,0,0,307.62,116.37Z"></path>
                                                        <polyline class="cls-14" points="330.18 121.03 342.83 121.03 340.25 117.67"></polyline>
                                                        <circle class="cls-14" cx="341.03" cy="120.25" r="6.97"></circle>
                                                        <use class="cls-12" transform="translate(284.08 173.31)" xlink:href="#image"></use>
                                                        <rect class="cls-13" x="312.24" y="201.16" width="98.51" height="46.18" rx="18" id="pageid_02"></rect>
                                                        <path d="M331.34,229.65a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86H331a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25h1.52v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H334.1v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88,1.6,1.6,0,0,0-.05-.21c0-.08,0-.15-.05-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4H340a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c.05-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58,11,11,0,0,1-1,2.75,12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82V222a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54-.05-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23H344c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,340.66,232.89Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                        <path d="M359.5,233.39a.91.91,0,0,1-.64-.24.85.85,0,0,1-.26-.64v-4.72a15.89,15.89,0,0,1-2,1.82,23.83,23.83,0,0,1-2.39,1.62,20.66,20.66,0,0,1-2.54,1.26,1.11,1.11,0,0,1-.75.08.86.86,0,0,1-.53-.46.79.79,0,0,1,0-.7.8.8,0,0,1,.49-.46,18.5,18.5,0,0,0,2.2-1,20.34,20.34,0,0,0,2.14-1.35,19.26,19.26,0,0,0,1.8-1.48h-.3a7.79,7.79,0,0,1-2.41-.29,1.81,1.81,0,0,1-1.13-1.08,6.72,6.72,0,0,1-.3-2.27,6.64,6.64,0,0,1,.3-2.27,1.76,1.76,0,0,1,1.13-1.08,7.49,7.49,0,0,1,2.41-.29h1.88v-1.3h-7.24a.68.68,0,0,1-.53-.24.8.8,0,0,1-.21-.54.77.77,0,0,1,.21-.55.67.67,0,0,1,.53-.23h7.24v-1.3a.84.84,0,0,1,.26-.64.91.91,0,0,1,.64-.24.88.88,0,0,1,.62.24.84.84,0,0,1,.26.64V217h7.24a.65.65,0,0,1,.54.23.81.81,0,0,1,.2.55.84.84,0,0,1-.2.54.66.66,0,0,1-.54.24h-7.24v1.3h1.92a7.48,7.48,0,0,1,2.42.29,1.75,1.75,0,0,1,1.12,1.08,6.64,6.64,0,0,1,.3,2.27,6.72,6.72,0,0,1-.3,2.27,1.79,1.79,0,0,1-1.12,1.08,7.77,7.77,0,0,1-2.42.29H362a17.78,17.78,0,0,0,1.8,1.47,23.16,23.16,0,0,0,2.13,1.34,17.69,17.69,0,0,0,2.19,1,.85.85,0,0,1,.5.45.74.74,0,0,1,0,.69.91.91,0,0,1-.53.49,1.05,1.05,0,0,1-.75-.07,20.74,20.74,0,0,1-2.54-1.27,21.7,21.7,0,0,1-2.41-1.64,17.85,17.85,0,0,1-2-1.83v4.76a.85.85,0,0,1-.26.64A.88.88,0,0,1,359.5,233.39Zm-4.84-10.62h3.94v-1.46h-1.86a5.69,5.69,0,0,0-1.24.1.88.88,0,0,0-.62.41A2.24,2.24,0,0,0,354.66,222.77Zm2.08,2.86h1.86v-1.46h-3.94a2.36,2.36,0,0,0,.22.94.92.92,0,0,0,.62.42A6.41,6.41,0,0,0,356.74,225.63Zm3.64-2.86h4a2.24,2.24,0,0,0-.22-1,.86.86,0,0,0-.61-.41,5.59,5.59,0,0,0-1.23-.1h-1.9Zm0,2.86h1.9a6.29,6.29,0,0,0,1.23-.1.9.9,0,0,0,.61-.42,2.36,2.36,0,0,0,.22-.94h-4Z"></path>
                                                        <polyline class="cls-14" points="381.09 225.03 393.75 225.03 391.16 221.67"></polyline>
                                                        <circle class="cls-14" cx="391.94" cy="224.25" r="6.97"></circle>
                                                        <image class="cls-12" width="156" height="103" transform="translate(132.08 186.31)" xlink:href="data:image/png;base64,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"></image>
                                                        <rect class="cls-13" x="160.74" y="214.16" width="98.51" height="46.18" rx="18" id="pageid_03"></rect>
                                                        <path d="M176.84,242.65a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86h-1.52a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25H178v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H179.6v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88A1.6,1.6,0,0,0,189,241c0-.08,0-.15,0-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4h-2.4a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c0-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58,11,11,0,0,1-1,2.75,12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82V235a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54,0-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23h-3.72c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,186.16,245.89Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                        <path d="M202.7,246.19a1,1,0,0,1-.66-.26.88.88,0,0,1-.28-.68v-3.68l-1.53.66-1.65.69c-.53.22-1,.4-1.4.55a1,1,0,0,1-.75,0,1,1,0,0,1-.49-.52.79.79,0,0,1,0-.69,1,1,0,0,1,.58-.47l1.09-.41,1.42-.56,1.46-.6,1.23-.53v-4.78h-4.7a.85.85,0,0,1-.64-.27.92.92,0,0,1-.26-.65.91.91,0,0,1,.26-.65.85.85,0,0,1,.64-.27h4.7V229a.87.87,0,0,1,.28-.68.92.92,0,0,1,.66-.26.91.91,0,0,1,.94.94v16.24a.91.91,0,0,1-.27.68A.94.94,0,0,1,202.7,246.19Zm7.52-.4a8.21,8.21,0,0,1-2.34-.28,2.07,2.07,0,0,1-1.26-1,4,4,0,0,1-.38-1.89V229a.86.86,0,0,1,.27-.67.91.91,0,0,1,.65-.25.87.87,0,0,1,.64.25.89.89,0,0,1,.26.67v5.72c.49-.28,1-.59,1.54-.92l1.53-1q.74-.51,1.23-.9a1,1,0,0,1,.71-.29.81.81,0,0,1,.67.31.93.93,0,0,1,.26.66.78.78,0,0,1-.34.64c-.45.36-1,.75-1.67,1.18s-1.34.83-2,1.23-1.33.73-1.9,1v5.8a1.37,1.37,0,0,0,.46,1.23,3.51,3.51,0,0,0,1.7.29,2.2,2.2,0,0,0,1.53-.44,2.76,2.76,0,0,0,.67-1.52.88.88,0,0,1,.42-.63,1,1,0,0,1,.78-.09.87.87,0,0,1,.66,1.1,3.91,3.91,0,0,1-1.23,2.62A4.44,4.44,0,0,1,210.22,245.79Z"></path>
                                                        <polyline class="cls-14" points="228.09 238.03 240.75 238.03 238.16 234.67"></polyline>
                                                        <circle class="cls-14" cx="238.94" cy="237.25" r="6.97"></circle>
                                                        <use class="cls-12" transform="translate(251.08 355.31)" xlink:href="#image"></use>
                                                        <rect class="cls-13" x="279.24" y="383.16" width="98.51" height="46.18" rx="18" id="pageid_06"></rect>
                                                        <path d="M295.34,411.65a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86H295a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25h1.52v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H298.1v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88,1.6,1.6,0,0,0-.05-.21c0-.08,0-.15-.05-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4H304a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c.05-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58,11,11,0,0,1-1,2.75,12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82V404a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54-.05-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23H308c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,304.66,414.89Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                        <path d="M316.64,415.43a.92.92,0,0,1-.64-.25.89.89,0,0,1-.26-.65v-8.34a5.63,5.63,0,0,1,.39-2.36,2.14,2.14,0,0,1,1.33-1.14,8.12,8.12,0,0,1,2.58-.32h2.46v-1.72h-7.44a.76.76,0,0,1-.56-.26.85.85,0,0,1-.24-.58.78.78,0,0,1,.24-.58.77.77,0,0,1,.56-.24h7.44v-1.2a.91.91,0,0,1,.29-.69,1,1,0,0,1,.67-.27.94.94,0,0,1,.68.27.9.9,0,0,1,.28.69V399h7.52a.75.75,0,0,1,.57.24.82.82,0,0,1,.23.58.89.89,0,0,1-.23.58.73.73,0,0,1-.57.26h-7.52v1.72h2.5a8.18,8.18,0,0,1,2.6.32,2.14,2.14,0,0,1,1.33,1.14,5.63,5.63,0,0,1,.39,2.36v6.08a3.09,3.09,0,0,1-.77,2.38,3.77,3.77,0,0,1-2.51.68.92.92,0,0,1-1-.9.85.85,0,0,1,.24-.65.91.91,0,0,1,.64-.29,2.3,2.3,0,0,0,1.24-.3,1.43,1.43,0,0,0,.32-1.1v-5.9a3.68,3.68,0,0,0-.21-1.43,1.08,1.08,0,0,0-.75-.62,6.18,6.18,0,0,0-1.56-.15h-.32a.88.88,0,0,1,.35.46.74.74,0,0,1-.05.56c-.09.18-.22.43-.39.73l-.49.87h1.64a.7.7,0,0,1,.54.23.77.77,0,0,1,.22.57.79.79,0,0,1-.22.56.73.73,0,0,1-.56.24h-3.28v1.42h3.3a.7.7,0,0,1,.54.23.82.82,0,0,1,0,1.12.75.75,0,0,1-.56.23h-3.28v3a.87.87,0,0,1-.88.9.92.92,0,0,1-.64-.25.89.89,0,0,1-.26-.65v-3h-3.42a.76.76,0,0,1-.55-.23.78.78,0,0,1-.23-.55.75.75,0,0,1,.24-.57.78.78,0,0,1,.58-.23h3.38v-1.42h-3.42a.74.74,0,0,1-.55-.24.8.8,0,0,1-.23-.56.75.75,0,0,1,.24-.57.78.78,0,0,1,.58-.23h1.62l-.43-.73q-.22-.39-.45-.75a.72.72,0,0,1-.06-.64.84.84,0,0,1,.44-.5H320a6.2,6.2,0,0,0-1.55.15,1.07,1.07,0,0,0-.76.62,3.68,3.68,0,0,0-.21,1.43v8.34a.87.87,0,0,1-.88.9Zm5.84-8.82h1.6c.17-.34.37-.73.58-1.19l.52-1.13a1.22,1.22,0,0,1,.24-.3h-4.2a.93.93,0,0,1,.36.32c.13.2.3.47.49.82a8.53,8.53,0,0,1,.43.84A.64.64,0,0,1,322.48,406.61Z"></path>
                                                        <polyline class="cls-14" points="347.09 407.02 359.75 407.02 357.16 403.67"></polyline>
                                                        <circle class="cls-14" cx="357.94" cy="406.25" r="6.97"></circle>
                                                        <image class="cls-12" width="155" height="103" transform="translate(45.08 281.31)" xlink:href="data:image/png;base64,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"></image>
                                                        <rect class="cls-13" x="73.24" y="309.66" width="98.51" height="46.18" rx="18" id="pageid_05"></rect>
                                                        <path d="M89.34,338.15a1,1,0,0,1-.78,0,.86.86,0,0,1-.44-.56.93.93,0,0,1,.07-.7.82.82,0,0,1,.61-.42l.79-.23.89-.27v-5.86H89a.81.81,0,0,1-.61-.25.88.88,0,0,1-.23-.59.84.84,0,0,1,.23-.59.78.78,0,0,1,.61-.25h1.52v-3.6a.75.75,0,0,1,.24-.6.79.79,0,0,1,.56-.22.81.81,0,0,1,.58.22.75.75,0,0,1,.24.6v3.6h1.26a.78.78,0,0,1,.61.25.84.84,0,0,1,.23.59.88.88,0,0,1-.23.59.81.81,0,0,1-.61.25H92.1v5.3l.56-.21.5-.19a.74.74,0,0,1,1,.48.9.9,0,0,1,0,.65,1,1,0,0,1-.52.45l-1.33.53-1.61.6Zm9.32,3.24a1.18,1.18,0,0,1-.69.17.77.77,0,0,1-.57-.35.76.76,0,0,1-.14-.59.74.74,0,0,1,.4-.51,12.9,12.9,0,0,0,2.17-1.56,14.49,14.49,0,0,0,1.73-1.88,1.6,1.6,0,0,0,0-.21c0-.08,0-.15-.05-.21-.23-.95-.43-2.05-.61-3.29s-.32-2.58-.43-4H98a2,2,0,0,0-1.31.32,1.62,1.62,0,0,0-.37,1.26v.54h.82a4.3,4.3,0,0,1,1.48.21,1.39,1.39,0,0,1,.81.82,4.27,4.27,0,0,1,.19,1.79,11.57,11.57,0,0,1-.36,2.7,2.27,2.27,0,0,1-.87,1.31,3.44,3.44,0,0,1-1.65.41.91.91,0,0,1-.58-.22.76.76,0,0,1-.28-.54.85.85,0,0,1,.18-.59.68.68,0,0,1,.54-.27,5.69,5.69,0,0,0,.68-.11.73.73,0,0,0,.41-.3,2,2,0,0,0,.22-.73c0-.34.09-.8.13-1.4a5,5,0,0,0,0-1,.47.47,0,0,0-.26-.41,1.81,1.81,0,0,0-.67-.09h-.8a18.4,18.4,0,0,1-.39,3.58A11,11,0,0,1,95,339a12.72,12.72,0,0,1-1.56,2.27.89.89,0,0,1-.61.31.93.93,0,0,1-.65-.19.78.78,0,0,1-.28-.56.81.81,0,0,1,.2-.6,9.28,9.28,0,0,0,2-3.32,15,15,0,0,0,.66-4.82v-1.62a3.08,3.08,0,0,1,.75-2.41,3.75,3.75,0,0,1,2.49-.65h2.36c0-.54,0-1.07-.06-1.6s0-1.07,0-1.6a.75.75,0,0,1,.24-.6.87.87,0,0,1,1.16,0,.75.75,0,0,1,.24.6c0,.53,0,1.07,0,1.61s0,1.07.06,1.59h3.8a.75.75,0,0,1,.58.23.82.82,0,0,1,0,1.12.78.78,0,0,1-.58.23H102c.07,1.12.16,2.17.29,3.17s.27,1.89.43,2.69a15.15,15.15,0,0,0,.9-1.92c.25-.66.47-1.31.66-2a.75.75,0,0,1,.42-.53.83.83,0,0,1,.62,0,.68.68,0,0,1,.48.39.9.9,0,0,1,0,.65,23.1,23.1,0,0,1-1.07,2.83,18.16,18.16,0,0,1-1.49,2.65,13.46,13.46,0,0,0,.56,1.37,9.71,9.71,0,0,0,.6,1.09c.27.38.48.36.64-.08.07-.19.14-.39.21-.61s.14-.41.19-.55a.66.66,0,0,1,.37-.44.8.8,0,0,1,.59,0,.72.72,0,0,1,.46.34.73.73,0,0,1,.06.62c-.07.26-.16.57-.28.93s-.25.68-.38,1c-.33.73-.75,1.12-1.25,1.17a1.85,1.85,0,0,1-1.51-.83,7.43,7.43,0,0,1-.76-1.11,12.09,12.09,0,0,1-.66-1.35,15.29,15.29,0,0,1-1.61,1.61A13.28,13.28,0,0,1,98.66,341.39Zm6.8-14.64a.91.91,0,0,1-.59.21.75.75,0,0,1-.55-.27l-.65-.7c-.27-.3-.49-.52-.65-.68a.73.73,0,0,1-.22-.53.69.69,0,0,1,.22-.53.9.9,0,0,1,.55-.25.71.71,0,0,1,.57.21,5,5,0,0,1,.42.41l.52.54c.17.18.31.32.4.43a.8.8,0,0,1,0,1.16Z"></path>
                                                        <path d="M115.24,341a10.6,10.6,0,0,1-3.47-.45A2.93,2.93,0,0,1,110,339a7.19,7.19,0,0,1-.5-3v-1.84a7.23,7.23,0,0,1,.45-2.81,2.88,2.88,0,0,1,1.53-1.54,8,8,0,0,1,3-.55v-3.06h-5.42a.75.75,0,0,1-.58-.24.79.79,0,0,1-.22-.56.77.77,0,0,1,.22-.57.75.75,0,0,1,.58-.23H125.9a.75.75,0,0,1,.58.23.77.77,0,0,1,.22.57.79.79,0,0,1-.22.56.75.75,0,0,1-.58.24H120v3a9.82,9.82,0,0,1,3.36.48,2.88,2.88,0,0,1,1.69,1.53,7,7,0,0,1,.49,2.91v1.84a7.19,7.19,0,0,1-.5,3,2.91,2.91,0,0,1-1.74,1.52,10.54,10.54,0,0,1-3.46.45Zm-.08-1.66h4.74a7.9,7.9,0,0,0,2.35-.28,1.9,1.9,0,0,0,1.16-1,4.63,4.63,0,0,0,.33-2v-1.4a2.23,2.23,0,0,1-1,1.37,3.82,3.82,0,0,1-1.88.41,3.24,3.24,0,0,1-2-.5,2.32,2.32,0,0,1-.6-1.84V331h-2a8.5,8.5,0,0,1-.88,3.66,6.87,6.87,0,0,1-2.32,2.46,1.31,1.31,0,0,1-.74.21.77.77,0,0,1-.64-.35.86.86,0,0,1-.1-.69.93.93,0,0,1,.42-.55,6.45,6.45,0,0,0,1.41-1.22,4.3,4.3,0,0,0,.79-1.48,8.55,8.55,0,0,0,.32-2,5.13,5.13,0,0,0-1.94.35,1.72,1.72,0,0,0-1,1,5.07,5.07,0,0,0-.27,1.84v2a4.63,4.63,0,0,0,.33,2,1.89,1.89,0,0,0,1.17,1A8,8,0,0,0,115.16,339.35Zm1.08-10h2v-3h-2Zm4.7,5.44a1.35,1.35,0,0,0,.88-.23,2.05,2.05,0,0,0,.42-1,.74.74,0,0,1,.38-.51.88.88,0,0,1,.72-.05.77.77,0,0,1,.32.18,2.54,2.54,0,0,0-.51-1.29,2,2,0,0,0-1.16-.66,8.56,8.56,0,0,0-2-.19v2.88a1.06,1.06,0,0,0,.18.73A1.29,1.29,0,0,0,120.94,334.77Z"></path>
                                                        <polyline class="cls-14" points="141.09 333.52 153.75 333.52 151.16 330.17"></polyline>
                                                        <circle class="cls-14" cx="151.94" cy="332.75" r="6.97"></circle>
                                                        <image class="cls-12" width="173" height="103" transform="translate(173.08 264.31)" xlink:href="data:image/png;base64,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"></image>
                                                        <rect class="cls-13" x="201" y="292.32" width="116" height="46.18" rx="18" id="pageid_04"></rect>
                                                        <path d="M226.74,324.36a1,1,0,0,1-.69-.22.82.82,0,0,1-.25-.64v-5.72h-3.14a7.24,7.24,0,0,1-2.46-.34,2.22,2.22,0,0,1-1.31-1.18,5.61,5.61,0,0,1-.39-2.32,5.34,5.34,0,0,1,.42-2.35,2.35,2.35,0,0,1,1.33-1.16,7.25,7.25,0,0,1,2.41-.33h3.14V307a.86.86,0,0,1,.25-.63,1.14,1.14,0,0,1,1.37,0,.79.79,0,0,1,.26.63v3.14h3.16a7.25,7.25,0,0,1,2.43.33,2.27,2.27,0,0,1,1.32,1.16,5.36,5.36,0,0,1,.41,2.35,5.1,5.1,0,0,1-.43,2.32,2.32,2.32,0,0,1-1.35,1.18,6.86,6.86,0,0,1-2.38.34h-3.16v5.72a.76.76,0,0,1-.26.64A1,1,0,0,1,226.74,324.36ZM222.66,316h3.14v-4.1h-3.14a6.06,6.06,0,0,0-1.36.13,1.07,1.07,0,0,0-.71.56,3.27,3.27,0,0,0-.21,1.35,3.63,3.63,0,0,0,.19,1.31,1,1,0,0,0,.68.6A5.11,5.11,0,0,0,222.66,316Zm5,0h3.16a4.8,4.8,0,0,0,1.34-.15,1.13,1.13,0,0,0,.73-.6,2.85,2.85,0,0,0,.23-1.31,3.27,3.27,0,0,0-.21-1.35,1,1,0,0,0-.71-.56,6.06,6.06,0,0,0-1.38-.13h-3.16Z"></path>
                                                        <path d="M237.76,320.08a.81.81,0,0,1-.42-.55.94.94,0,0,1,.12-.69,14.12,14.12,0,0,0,1-1.6,19.61,19.61,0,0,0,.86-1.79c.26-.6.48-1.17.65-1.69a.82.82,0,0,1,.51-.52,1.08,1.08,0,0,1,.73,0,.88.88,0,0,1,.5.48.9.9,0,0,1,0,.72c-.18.54-.41,1.12-.68,1.74s-.56,1.25-.88,1.86a14.62,14.62,0,0,1-1,1.68,1,1,0,0,1-.61.43A.9.9,0,0,1,237.76,320.08Zm10.34,3.58a8.81,8.81,0,0,1-2.64-.31,2.19,2.19,0,0,1-1.36-1.09,4.89,4.89,0,0,1-.4-2.16v-7.74a.87.87,0,0,1,.27-.67,1,1,0,0,1,.67-.25.93.93,0,0,1,.66.25.87.87,0,0,1,.26.67v7.56a2.73,2.73,0,0,0,.22,1.2,1.19,1.19,0,0,0,.79.58,6.25,6.25,0,0,0,1.63.16,6.75,6.75,0,0,0,1.54-.13,1.32,1.32,0,0,0,.83-.55,3.59,3.59,0,0,0,.49-1.28.85.85,0,0,1,.51-.58,1.08,1.08,0,0,1,.77,0,.89.89,0,0,1,.54.45,1,1,0,0,1,0,.71,4.92,4.92,0,0,1-.8,2,2.69,2.69,0,0,1-1.48,1A9.19,9.19,0,0,1,248.1,323.66Zm.34-12.88c-.34-.28-.75-.58-1.23-.91l-1.43-.95c-.48-.3-.9-.55-1.28-.74a.77.77,0,0,1-.41-.55.9.9,0,0,1,.11-.65.93.93,0,0,1,1.26-.36,14.29,14.29,0,0,1,1.31.73l1.47.93c.5.32.94.63,1.32.92a.93.93,0,0,1,.41.61.88.88,0,0,1-.17.71.9.9,0,0,1-.62.42A.79.79,0,0,1,248.44,310.78Zm7.3,7.9a.92.92,0,0,1-.77.19.9.9,0,0,1-.65-.41,17.68,17.68,0,0,0-1-1.47c-.4-.52-.83-1-1.27-1.55a17.75,17.75,0,0,0-1.24-1.3.81.81,0,0,1-.24-.63,1,1,0,0,1,.28-.63,1,1,0,0,1,.67-.27.92.92,0,0,1,.67.27q.69.64,1.38,1.41c.47.52.91,1,1.32,1.54s.77,1,1.06,1.43a1,1,0,0,1,.21.76A.92.92,0,0,1,255.74,318.68Z"></path>
                                                        <path d="M258.12,315.82a.79.79,0,0,1-.78-.78.77.77,0,0,1,.23-.56.82.82,0,0,1,.55-.22h2.58a1,1,0,0,1-.36-.38c-.06-.18-.16-.42-.28-.7l-.37-.85a6.74,6.74,0,0,0-.35-.71.93.93,0,0,1,0-.64.69.69,0,0,1,.4-.46,1.19,1.19,0,0,1,.66-.08.71.71,0,0,1,.5.4,7.66,7.66,0,0,1,.37.72c.14.31.28.61.41.91a5.85,5.85,0,0,1,.28.69.88.88,0,0,1,.06.63.68.68,0,0,1-.42.47h1.8c.14-.3.29-.67.47-1.1s.36-.84.52-1.26.3-.74.39-1a.88.88,0,0,1,1.16-.48.78.78,0,0,1,.48.42.72.72,0,0,1,0,.64c-.13.35-.32.79-.56,1.31s-.46,1-.68,1.45h2.26a.78.78,0,0,1,.55.22.73.73,0,0,1,.23.56.79.79,0,0,1-.78.78Zm.52-5.56a.75.75,0,0,1-.76-.76.75.75,0,0,1,.76-.76h3.26v-1.68a.92.92,0,0,1,.28-.68,1,1,0,0,1,.66-.26.94.94,0,0,1,.67.26.91.91,0,0,1,.27.68v1.68H267a.75.75,0,0,1,.76.76.75.75,0,0,1-.76.76Zm4.18,13.58a6.71,6.71,0,0,1-2.25-.3,1.88,1.88,0,0,1-1.13-1,6.63,6.63,0,0,1,0-4.07,1.92,1.92,0,0,1,1.13-1,8.63,8.63,0,0,1,4.51,0,1.88,1.88,0,0,1,1.12,1,6.63,6.63,0,0,1,0,4.07,1.84,1.84,0,0,1-1.12,1A6.65,6.65,0,0,1,262.82,323.84Zm0-1.62a4.61,4.61,0,0,0,1.2-.12.8.8,0,0,0,.57-.5,4.37,4.37,0,0,0,0-2.27.87.87,0,0,0-.57-.5,5.6,5.6,0,0,0-2.4,0,.87.87,0,0,0-.57.5,4.37,4.37,0,0,0,0,2.27.8.8,0,0,0,.57.5A4.61,4.61,0,0,0,262.82,322.22Zm6.7,2.32a.85.85,0,0,1-.63-.25.89.89,0,0,1-.25-.65V309.48a3.86,3.86,0,0,1,.28-1.6,1.63,1.63,0,0,1,1-.81,7.87,7.87,0,0,1,2.15-.23c1.5,0,2.46.27,2.88.8s.41,1.3-.06,2.3c-.18.4-.38.81-.58,1.23s-.37.77-.52,1a7.21,7.21,0,0,0-.32.81.69.69,0,0,0,.06.53,5.26,5.26,0,0,0,.52.66,7.38,7.38,0,0,1,1.28,1.88,5.1,5.1,0,0,1,.46,2.2,3.44,3.44,0,0,1-.95,2.69,4,4,0,0,1-2.77.87,1,1,0,0,1-.67-.22.9.9,0,0,1-.31-.66.93.93,0,0,1,.23-.67A1,1,0,0,1,272,320a2.57,2.57,0,0,0,1.54-.43,1.8,1.8,0,0,0,.42-1.39,3.9,3.9,0,0,0-.37-1.69,8.23,8.23,0,0,0-1-1.59,6.7,6.7,0,0,1-.76-1.16,1.49,1.49,0,0,1-.11-.91,6.89,6.89,0,0,1,.43-1.25q.21-.45.42-1c.15-.33.3-.67.44-1s.21-.73.06-.91-.55-.27-1.22-.27a2.12,2.12,0,0,0-1.21.23,1.29,1.29,0,0,0-.27,1v14a.82.82,0,0,1-.26.65A.86.86,0,0,1,269.52,324.54Z"></path>
                                                        <polyline class="cls-14" points="286.09 316.18 298.75 316.18 296.16 312.83"></polyline>
                                                        <circle class="cls-14" cx="296.94" cy="315.41" r="6.97"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="home-01">
        <div class="home-01 pt-30 pt-sm-25">
            <div class="container container-900">
                <div class="row row-sm-small anim fadeup is-animated">
                    <?php
                    $args = array(
                        'taxonomy' => 'post_tag',
                        'number' => 4,
                        'hide_empty' => false,
                    );

                    $tags = get_terms($args);

                    if (!empty($tags) && !is_wp_error($tags)) {
                        $css_classes = array('color-13', 'color-14', 'color-15', 'color-8'); // Các lớp CSS tương ứng với từng thẻ tag
                        $url_images = array(
                            'https://atom-recruit.comotec.website/assets/images/index/img-link-1.png',
                            'https://atom-recruit.comotec.website/assets/images/index/img-link-2.png',
                            'https://atom-recruit.comotec.website/assets/images/index/img-link-4.png',
                            'https://atom-recruit.comotec.website/assets/images/index/img-link-3.png'
                        );

                        foreach ($tags as $index => $tag) {
                            $css_class = $css_classes[$index];
                            $url_image = $url_images[$index];

                    ?>
                            <div class="large-3 col-6">
                                <div class="col-inner">
                                    <div class="box-img-link <?php echo $css_class; ?> biggerlink bl-hot" style="cursor: pointer;">
                                        <div class="img-link">
                                            <img src="<?php echo $url_image; ?>" alt="">
                                        </div>
                                        <a href="<?php echo get_term_link($tag); ?>" class="<?php echo $css_class; ?> pt-10 bl-bigger"><?php echo $tag->name ?></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="container container-1100">
                <div class="box-list-tag-border mt-45 anim fadeup is-animated">
                    <div class="box-list-tag">
                        <div class="title-list-tag"><span>~ </span>アトムで見つけよう、<br class="show-for-small">あなたらしい働き方<span> ~</span></div>
                        <div class="list-tag mt-25 mt-sm-10">
                            <?php
                            $taxonomy = 'post_tag'; 
                            $tags = get_terms($taxonomy);
                            if (!empty($tags) && !is_wp_error($tags)) {
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_term_link($tag) . '">' . $tag->name . '</a><br />';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-recruit">
        <div class="home-recruit pt-80 pt-sm-55">
            <div class="container container-1000">
                <div class="main-title">
                    <div class="title-en">Recruit</div>
                    <div class="title-jp">最新 採用情報</div>
                </div>
                <p class="fs-17 lh-2 ls-100 ls-sm-normal lh-sm-1-75 pt-sm-20 text-center pt-30 color-4d fs-sm-14">アトムグループでは、地域に根ざした多彩な職<br class="show-for-small">場があります。<br class="hide-for-small"> あなたの力を募集しています。
                </p>
                <div class="list-recruit-cms pt-90 pt-sm-50">
                    <!-- <select id="colorselector" class="show-for-small select-recruit">
                            <option value="id-50" selected="">医療法人順風会</option>
                            <option value="id-51">社会福祉法人白寿会</option>
                            <option value="id-49">社会福祉法人和泉蓮華会</option>
                            <option value="id-4">学校法人松山学園</option>
                    </select> -->
                    <select id="colorselector" class="show-for-small select-recruit">
                        <?php
                        $args_company = array(
                            'taxonomy' => 'recruit-corporate',
                            'hide_empty' => false,
                        );
                        $companies = get_terms($args_company);

                        if (!empty($companies) && !is_wp_error($companies)) {
                            foreach ($companies as $company) {
                                $company_id = $company->term_id;
                                $company_name = $company->name;
                                $company_link = get_term_link($company_id);

                                // Set selected for the current company option
                                $selected = $company_id === get_query_var('recruit-corporate') ? 'selected' : '';
                        ?>
                                <option value="id-<?php echo $company_id; ?>" <?php echo $selected; ?>><?php echo $company_name; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                    <?php
                    // Lấy danh sách các công ty từ taxonomy "recruit-corporate"
                    $args_company = array(
                        'taxonomy' => 'recruit-corporate',
                        'hide_empty' => false,
                    );
                    $companies = get_terms($args_company);

                    if (!empty($companies) && !is_wp_error($companies)) {
                        $first_post = true;

                        foreach ($companies as $company) {
                            $company_id = $company->term_id;
                            $company_name = $company->name;
                            $company_link = get_term_link($company_id);

                            // Lấy danh sách bài viết cho từng công ty thuộc taxonomy "recruit-type"
                            $args_posts = array(
                                'post_type' => 'post',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'recruit-corporate',
                                        'field' => 'term_id',
                                        'terms' => $company_id,
                                    ),
                                ),
                                'posts_per_page' => 4, 
                            );

                            $company_posts = new WP_Query($args_posts);
                            if ($company_posts->have_posts()) {
                                $term_color_company =get_custom_taxonomy_color($company_id);
                    ?>
                                <div id="id-<?php echo $company_id; ?>" class="box-list-recruit <?php if($first_post) { echo 'mt-50';} else{echo 'mt-120';}  ?>      anim fadeup">
                                    <div class="box-title-recruit"><span class="" style="color:<?php echo $term_color_company; ?>;"><?php echo $company_name; ?></span></div>
                                    <div class="news-list mt-50 mt-sm-20">
                                        <?php 
                                            while ($company_posts->have_posts()) : $company_posts->the_post(); 
                                            $first_post = false;
                                        ?>
                                            <div class="news-item item-list biggerlink bl-hot" style="cursor: pointer;">
                                                <a href="<?php the_permalink(); ?>" class="bl-bigger"></a>
                                                <div class="date"><span><?php echo get_the_date('Y/m/d'); ?></span></div>
                                                <?php
                                                // Hiển thị các term của bài viết thuộc taxonomy "recruit-type"
                                                $post_terms = get_the_terms(get_the_ID(), 'recruit-type');
                                                if ($post_terms && !is_wp_error($post_terms)) {
                                                    foreach ($post_terms as $term) {
                                                        $term_name = $term->name;
                                                        $term_color =get_custom_taxonomy_color($post_terms[0]->term_id);
                               
                                                ?>
                                                        <div class="cat catid-<?php echo $term->term_id; ?>"><a style="background-color: <?php echo $term_color; ?>" href="<?php echo get_term_link($term); ?>" class="" title=""><?php echo $term_name; ?></a></div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <div class="title">
                                                    <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                    <a href="<?php echo esc_url($company_link); ?>" class="btn btn-more hide-for-small">一覧へ</a>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
                <div class="box-btn-main pt-50 pt-sm-30">
                    <a href="./recruit/" class="btn btn-main">採用情報一覧へ</a>
                </div>
            </div>
        </div>
    </section>
    <section id="home-environment">
        <div class="home-environment pt-90 pt-sm-65">
            <div class="container container-1270">
                <div class="main-title">
                    <div class="title-en">Environment</div>
                    <div class="title-jp">働く環境</div>
                </div>
                <p class="fs-17 lh-2 ls-100 text-center pt-30 pt-sm-15 color-4d fs-sm-14 pl-sm-15 pr-sm-15 text-sm-left">各施設ごとの、様々な特色や福利厚生をご紹介いたします。</p>
                <div class="row pt-50 pt-sm-20 row-small row-sm-xsmall anim fadeup">
                    <div class="large-3 col-6">
                        <div class="col-inner">
                            <div class="box-home-envi color-5">
                                <div class="title-home-envi">医療法人<br> 順風会
                                </div>
                                <p>医療・介護を中心とした職種が活躍しています。</p>
                                <div class="box-btn-main pt-35 pt-sm-5">
                                    <a href="./junpuu" class="btn btn-main">詳細へ</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="large-3 col-6">
                        <div class="col-inner">
                            <div class="box-home-envi color-6">
                                <div class="title-home-envi">社会福祉法人<br>白寿会
                                </div>
                                <p>介護を中心とした職種が活躍しています。</p>
                                <div class="box-btn-main pt-35 pt-sm-5">
                                    <a href="./hakuju" class="btn btn-main">詳細へ</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="large-3 col-6">
                        <div class="col-inner pt-sm-10">
                            <div class="box-home-envi color-7">
                                <div class="title-home-envi">社会福祉法人<br>和泉蓮華会
                                </div>
                                <p>保育を中心とした職種が活躍しています。</p>
                                <div class="box-btn-main pt-35 pt-sm-5">
                                    <a href="./izumi" class="btn btn-main">詳細へ</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="large-3 col-6">
                        <div class="col-inner pt-sm-10">
                            <div class="box-home-envi color-8">
                                <div class="title-home-envi">学校法人<br>松山学園
                                </div>
                                <p>保育を中心とした職種が活躍しています。</p>
                                <div class="box-btn-main pt-35 pt-sm-5">
                                    <a href="./matsuyama" class="btn btn-main">詳細へ</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-work">
        <div class="home-work mt-100 pt-65 pb-80 mt-sm-45 pt-sm-35 pb-sm-50">
            <div class="container container-1230">
                <div class="main-title">
                    <div class="title-en">Work Style</div>
                    <div class="title-jp">アトムグループ <br class="show-for-small"><span class="color-4">“<span>十</span><span class="color-3">人</span><span class="color-2">十</span><span class="color-1">色</span>”</span>の働き方</div>
                </div>
                <p class="fs-17 lh-2 lh-sm-1-75 ls-100 text-center pt-30 color-4d fs-sm-14 text-sm-left ls-sm-normal pl-sm-15 pr-sm-15">アトムグループでは、ワークライフバランスに<br class="show-for-small">考慮した様々な働き方で、<br class="hide-for-small"> 数多くの職員が活躍しています。
                </p>
                <div class="box-home-slide-work anim fadeup pt-50 ">
                <?php 
					$args = array(
						'post_type'      => 'senpai', 
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
                <div class="box-btn-work pt-sm-10">
                        <a href="./senpai/" class="btn btn-main">先輩社員紹介一覧へ</a>
                    </div>
            </div>
        </div>
    </section>
    <section id="home-about">
        <div class="home-about pt-95 color-white pt-sm-45 ">
            <div class="container container-960 anim fadeup is-animated">
                <div class="box-title-about">
                    <div class="box-img-title-about">
                        <img src="https://atom-recruit.comotec.website/assets/images/index/logo-about.svg" alt="">
                    </div>
                    <div class="box-text-title-about">
                        <h2 class="ff-baby fs-27 fs-sm-13">About Us</h2>
                        <p class="fs-40 fs-sm-20 pt-sm-10">アトムグループ<br class="show-for-small">について</p>
                    </div>
                </div>
                <div class="row pt-50 row-xxxxlarge pt-sm-40">
                    <div class="large-7 col-12">
                        <div class="col-inner pr-10 pr-sm-15 pl-sm-15">
                            <p class="fs-20 lh-1-65 lh-sm-1-75 fs-sm-14">アトムグループは、医療をはじめ様々な事業を通じて、少子高齢社会のサポート・子育て支援に取り組み、現代社会・地域社会の問題の解消と、明るい未来をつくることを目指しています。</p>
                        </div>
                    </div>
                    <div class="large-5 col-12">
                        <div class="col-inner pl-10 pt-sm-50 pl-sm-0">
                            <div class="box-btn-home-about">
                                <a href="https://www.atomgroup.jp/" target="_blank" class="btn btn-about">アトムグループについて</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
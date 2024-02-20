<!doctype html>
<html <?php language_attributes(); ?>>
<!-- trả về đúng ngôn ngữ của nó  -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="home page-template page-template-page-home page-template-page-home-php page page-id-5">
    <?php wp_body_open(); ?>
    <header>
        <div class="header-wrapper">
            <div id="masthead" class="header-main container">
                <div class="header-inner flex-row  logo-left logo-sm-left" role="navigation">
                    <!-- Logo -->
                    <div id="logo" class="flex-col flex-left logo">
                        <h3>
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<a href="' . esc_url( home_url( '/' ) ). '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                                } else {
                                    echo '<a href="' . esc_url( home_url( '/' ) ). '"><img width="" src="https://atom-recruit.comotec.website/assets/images/index/logo.svg" class="header_logo header-logo"></a>';

                                }
                            ?>
                                    <!-- Header logo -->
                        </h3>
                    </div>
                    <!-- Left Elements -->
                    <div class="main-menu flex-col flex-left flex-grow">
                        <nav class="navbar nav-main">
                            <ul class="nav nav-1 justify-start">
                                <li class="nav-item nav-home-sm show-for-small">
                                    <a href="#" class="">
                                        <div class="icon-main-menu"></div>
                                        <span class="">トップページ</span>
                                    </a>
                                </li>
                                <li class="nav-item nav-home  nav-home-scroll hide-for-small">
                                    <a href="#home-environment" class="toggle-hd">
                                        <div class="icon-main-menu"></div>
                                        <span class="">働く環境</span>
                                    </a>
                                </li>
                                <li class="nav-item nav-home toggle-mb show-for-small">
                                    <a class="toggle-hd">
                                        <div class="icon-main-menu"></div>
                                        <span class="">働く環境</span>
                                    </a>
                                    <div class="toggle-cont show-for-small">
                                        <div class="link-sm">
                                            <a href="<?php echo home_url()?>/junpuu">医療法人順風会</a>
                                        </div>
                                        <div class="link-sm">
                                            <a href="<?php echo home_url()?>/hakuju">社会福祉法人白寿会</a>
                                        </div>
                                        <div class="link-sm">
                                            <a href="<?php echo home_url()?>/izumi">社会福祉法人和泉蓮華会</a>
                                        </div>
                                        <div class="link-sm">
                                            <a href="<?php echo home_url()?>/matsuyama">学校法人松山学園</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-recruit">
                                    <a href="<?php echo home_url()?>/recruit/">
                                        <div class="icon-main-menu"></div>
                                        <span>採用情報</span>
                                    </a>
                                </li>
                                <li class="nav-item nav-senpai">
                                    <a href="<?php echo home_url()?>/senpai/">
                                        <div class="icon-main-menu"></div>
                                        <span>十人十色の<br class="hide-for-small">
                                            働き方</span>
                                    </a>
                                </li>
                                <li class="nav-item nav-home-anchor nav-home-scroll">
                                    <a href="#-about" class="">
                                        <div class="icon-main-menu"></div>
                                        <span>アトムグループ<br class="hide-for-small">
                                            について</span>
                                    </a>
                                </li>

                            </ul>

                            <div class="box-btn-footer mt-50 show-for-small">
                                <a href="https://www.atomgroup.jp/" target="blank" class="btn btn-footer">アトムグループ</a>
                            </div>
                        </nav>

                    </div>
                    <!-- Right Elements -->



                    <!-- Mobile Right Elements -->
                    <a class="menu-btn show-for-small" href="javascript:void(0)"><span></span><span></span><span></span></a>
                </div>
            </div>
        </div>

    </header>
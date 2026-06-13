<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>きたむらミュージックスクール</title>

    <link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/favicon-96x96.png')); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/favicon.svg')); ?>" />
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/favicon.ico')); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/apple-touch-icon.png')); ?>" />
    <link rel="manifest" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/site.webmanifest')); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <h1>
                        <a href="<?php echo esc_url(home_url('/top/')); ?>">
                            <picture>
                                <source srcset="<?php echo get_theme_file_uri('/images/brand/logo-sp.svg') ?>" media="(max-width: 768px)">
                                <img src="<?php echo get_theme_file_uri('/images/brand/logo.svg') ?>" class="logo__img" alt="">
                            </picture>
                            <span class="logo__text">
                                <span class="logo__text--main">きたむら</span>
                                <span class="logo__text--sub">ミュージックスクール</span>
                            </span>
                        </a>
                    </h1>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li><a href="<?php echo esc_url(home_url('/plan/')); ?>">料金</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/result/')); ?>">卒業実績</a></li>
                        <li class="header__btn btn"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="きたむらミュージックスクールは、プロによるマンツーマン授業と24時間365日使える練習ROOMを完備！初心者から経験者まで、技術面だけでなく音楽で副収入を得るためのビジネス・集客方法まで徹底サポートします。">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/favicon-96x96.png')); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/favicon.svg')); ?>" />
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/favicon.ico')); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/apple-touch-icon.png')); ?>" />
    <link rel="manifest" href="<?php echo esc_url(get_theme_file_uri('/images/favicon/site.webmanifest')); ?>" />

    <?php wp_head(); ?>
</head>

<?php
$body_class = '';

if (is_page()) {
    $body_class = 'page-' . get_post_field('post_name', get_queried_object_id());
}
?>

<body <?php body_class($body_class); ?>>
    <?php wp_body_open(); ?>
    <header id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <?php $tag_name = (is_front_page() || is_home()) ? 'h1' : 'div'; ?>
                    <<?php echo $tag_name; ?> class="logo-wrapper">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
                            <picture>
                                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/brand/logo-sp.svg')) ?>" media="(max-width: 768px)">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/brand/logo.svg')) ?>" class="header__logo-img" alt="">
                            </picture>
                            <span class="header__logo-text">
                                <span class="header__logo-text--main">きたむら</span>
                                <span class="header__logo-text--sub">ミュージックスクール</span>
                            </span>
                        </a>
                    </<?php echo $tag_name; ?>>
                </div>
                <div class="header__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li><a href="<?php echo esc_url(home_url('/plan/')); ?>">料金</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/result/')); ?>">卒業実績</a></li>
                        <li class="header__btn c-btn"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
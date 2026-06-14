<?php get_header(); ?>
<main>
    <section class="fv fv--contact fv--lower">
        <h1>お問い合わせ</h1>
    </section>
    <nav class="breadcrumbs" aria-label="パンくずリスト">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ol class="breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <?php $position = 1; ?>

                    <!-- 1. ホーム -->
                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                            <span itemprop="name">ホーム</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>

                    <!-- 2. お問い合わせ（現在のページ） -->
                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">お問い合わせ</span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <section class="contact">
        <div class="container">
            <h2 class="sr-only">お問い合わせフォーム</h2>
            <p class="contact-form__text">当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br class="sp-only">通常３営業日以内にメールにてご連絡させていただきます。</p>
            <?php echo do_shortcode('[contact-form-7 id="cc92a22" title="お問い合わせ" html_class="contact-form"]'); ?>
        </div>
    </section>
    <div class="back-to-top back-to-top--contact">
        <a href="#header">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/icons/back-to-top.svg')) ?>" alt="ページトップへ戻る">
        </a>
    </div>
</main>
<?php get_footer(); ?>
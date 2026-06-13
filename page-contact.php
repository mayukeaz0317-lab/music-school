<?php get_header(); ?>
<main>
    <section class="fv fv--contact fv--lower">
        <h1>お問い合わせ</h1>
    </section>
    <nav class="breadcrumbs" aria-label="パンくずリスト">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/top/')); ?>">ホーム</a></li>
                    <li class="breadcrumbs__item" aria-current="page">お問い合わせ</li>
                </ul>
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
            <img src="<?php echo get_theme_file_uri('/images/icons/back-to-top.svg') ?>" alt="ページトップへ戻る">
        </a>
    </div>
</main>
<?php get_footer(); ?>
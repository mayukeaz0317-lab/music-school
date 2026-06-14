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

                    <!-- 2. 送信完了（現在のページ） -->
                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">送信完了</span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <section class="contact-send">
        <div class="container">
            <h2 class="sr-only">お問い合わせの送信が完了しました</h2>
            <p class="contact-send__text">お問い合わせいただきありがとうございました。<br>内容確認後、担当者よりメールにてご連絡いたします。</p>
            <div class="btn btn--contact-send"><a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a></div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
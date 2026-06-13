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
                        <li class="breadcrumbs__item" aria-current="page">送信完了</li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="contact-send">
            <div class="container">
                <h2 class="sr-only">送信完了メッセージ</h2>
                <p class="contact-send__text">お問い合わせいただきありがとうございました。<br>内容確認後、担当者よりメールにてご連絡いたします。</p>
                <div class="btn btn--contact-send"><a href="<?php echo esc_url(home_url('/top/')); ?>">ホームへ戻る</a></div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
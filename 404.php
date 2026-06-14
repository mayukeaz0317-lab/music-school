<?php get_header(); ?>
    <main>
        <section class="fv fv--error fv--lower">
            <h1>404 not found</h1>
        </section>
        <section class="error">
            <div class="container">
                <h2 class="sr-only">ページが見つからない理由について</h2>
                <p class="error__text">申し訳ございませんが、お探しのページが見つかりませんでした。<br>お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。</p>
                <div class="btn btn--error"><a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a></div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
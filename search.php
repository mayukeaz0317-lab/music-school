<?php get_header(); ?>
<main>
    <nav class="breadcrumbs" aria-label="パンくずリスト">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/top/')); ?>">ホーム</a></li>
                    <li class="breadcrumbs__item" aria-current="page">検索</li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="p-search">
        <div class="container">
            <div class="p-search__header">
                <h1 class="p-search__heading">「<?php echo get_search_query(); ?>」<span>の検索結果</span></h1>
                <p class="p-search__count"><?php echo $wp_query->found_posts; ?>件</p>
            </div>
            <ul class="p-search__list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <li class="p-search__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="p-search__img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_file_uri('/images/photo/blog-list__img01.jpg'); ?>" alt="">
                                    <?php endif; ?>
                                    <span class="img__heading"><?php $cat = get_the_category();
                                                                echo $cat[0]->name; ?></span>
                                </div>
                                <div class="p-search__text">
                                    <h2 class="p-search__title"><?php the_title(); ?></h2>
                                    <time datetime="<?php the_time('c') ?>" class="p-search__time"><?php the_time('Y.m.d'); ?></time>
                                    <p class="p-search__desc"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>

                <?php endif; ?>
            </ul>
    </section>
    </div>
    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_next' => false,
        'type' => 'list',
        'screen_reader_text' => '',
    ));
    ?>
    <div class="back-to-top">
        <a href="#header">
            <img src="<?php echo get_theme_file_uri('/images/icons/back-to-top.svg') ?>" alt="ページトップへ戻る">
        </a>
    </div>
    <div class="contact-cta btn">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
</main>
<?php get_footer(); ?>
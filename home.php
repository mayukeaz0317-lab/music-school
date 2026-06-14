<?php get_header(); ?>
<main>
    <section class="fv fv--blog-list fv--lower">
        <h1>ブログ</h1>
    </section>
    <nav class="breadcrumbs" aria-label="パンくずリスト">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ol class="breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <?php $position = 1; ?>

                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                            <span itemprop="name">ホーム</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>

                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">ブログ</span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <section class="blog-list__content">
        <div class="container">
            <h2 class="section-title section-title--blog-list">ブログ一覧</h2>
            <ul>
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <li class="blog-list__item">
                            <a href="<?php echo esc_url(get_the_permalink()) ?>">
                                <div class="blog-list__img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large') ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/no-image.jpg')); ?>" alt="">
                                    <?php endif; ?>
                                    <span class="img__heading">
                                        <?php $cat = get_the_category();
                                        if (!empty($cat)) echo esc_html($cat[0]->name); ?>
                                    </span>
                                </div>
                                <div class="blog-list__text">
                                    <h3 class="blog-item__text"><?php echo esc_html(get_the_title()); ?></h3>
                                    <time class="blog-item__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </a>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </section>
    <div class="back-to-top">
        <a href="#header">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/icons/back-to-top.svg')) ?>" alt="ページトップへ戻る">
        </a>
    </div>
    <div class="contact-cta btn">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_next' => false,
        'type' => 'list',
        'screen_reader_text' => '',
    ))
    ?>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>
<main>
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
                        <span itemprop="name">
                            「<?php echo esc_html(get_search_query()); ?>」の検索結果
                        </span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <section class="search">
        <div class="container">
            <div class="search__header">
                <h1 class="search__heading">「<?php echo esc_html(get_search_query()); ?>」<span>の検索結果</span></h1>
                <p class="search__count"><?php echo esc_html($wp_query->found_posts); ?>件</p>
            </div>
            <ul class="search__list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <li class="search__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="search__img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/blog-list__img01.webp')); ?>" alt="">
                                    <?php endif; ?>
                                    <span class="img-label">
                                        <?php
                                        if (get_post_type() === 'result') {
                                            $terms = get_the_terms(get_the_ID(), 'result_genre');
                                            if (!empty($terms) && !is_wp_error($terms)) {
                                                echo esc_html($terms[0]->name);
                                            }
                                        } else {
                                            $cat = get_the_category();
                                            if (!empty($cat)) {
                                                echo esc_html($cat[0]->name);
                                            }
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="search__text">
                                    <h2 class="search__title"><?php echo esc_html(get_the_title()); ?></h2>
                                    <time datetime="<?php the_time('c') ?>" class="search__time"><?php the_time('Y.m.d'); ?></time>
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="p-search__empty">
                        <p>ご指定の検索キーワードに一致する記事は見つかりませんでした。</p>
                        <p>別のキーワードで再度お試しください。</p>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
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
            <img src="<?php echo esc_url(get_theme_file_uri('/images/icons/back-to-top.svg')) ?>" alt="ページトップへ戻る">
        </a>
    </div>
    <div class="contact-cta btn">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
</main>
<?php get_footer(); ?>
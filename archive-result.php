<?php get_header(); ?>
<main>
    <section class="fv fv--result-list fv--lower">
        <h1>卒業実績</h1>
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

                    <!-- 2. 卒業実績-->
                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name"><?php echo esc_html(post_type_archive_title('', false)); ?></span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <section class="result-list">
        <div class="container">
            <h2 class="section-title section-title--result-list">卒業実績一覧</h2>
            <ul class="result-list__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="result-list__item">
                            <a href="<?php the_permalink(); ?>" class="result-list__link">
                                <div class="result-list__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/blog-list__img01.webp')); ?>" alt="">
                                    <?php endif; ?>

                                    <span class="img-label">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'result_genre');
                                        if (!empty($terms)) echo esc_html($terms[0]->name);
                                        ?>
                                    </span>
                                </div>
                                <div class="result-list__content">
                                    <h3 class="result-list__title"><?php echo esc_html(get_the_title()); ?></h3>
                                    <time class="result-list__time" datetime="<?php the_time('c'); ?>">
                                        <?php the_time('Y.m.d'); ?>
                                    </time>
                                </div>
                            </a>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </section>
    <?php the_posts_pagination(array(
        'mid_size' => 2,
        'prev_next' => false,
        'type' => 'list',
        'screen_reader_text' => '',
    ))
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
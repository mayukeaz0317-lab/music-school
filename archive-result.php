<?php get_header(); ?>
<main>
    <section class="fv fv--result-list fv--lower">
        <h1>卒業実績</h1>
    </section>
    <nav class="breadcrumbs" aria-label="パンくずリスト">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/top/')); ?>">ホーム</a></li>
                    <li class="breadcrumbs__item" aria-current="page">卒業実績</li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="result-list">
        <div class="container">
            <h2 class="section-title section-title--result-list">卒業実績一覧</h2>
            <ul class="result-list__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="result-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="result-list__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri('/images/blog-list__img01.jpg'); ?>" alt="">
                                    <?php endif; ?>

                                    <span class="img__heading img__heading--result-list">
                                        <?php
                                        $terms = get_the_terms($post->ID, 'result_genre');
                                        if ($terms) echo $terms[0]->name;
                                        ?>
                                    </span>
                                </div>
                                <div class="result-list__text">
                                    <h3 class="result-list__desc"><?php the_title(); ?></h3>
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
            <img src="<?php echo get_theme_file_uri('/images/icons/back-to-top.svg') ?>" alt="">
        </a>
    </div>
    <div class="contact-cta btn">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
</main>
<?php get_footer(); ?>
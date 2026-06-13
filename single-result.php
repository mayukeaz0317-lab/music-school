<?php get_header(); ?>
<main>
    <nav class="breadcrumbs" aria-label="パンくずリスト">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/top/')); ?>">ホーム</a></li>
                    <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/result/')); ?>">卒業実績</a></li>
                    <li class="breadcrumbs__item"><a href="#">ポップス</a></li>
                    <li class="breadcrumbs__item" aria-current="page">タイトルが入ります。タイトルが入ります。タイトルが入ります。</li>
                </ul>
            </div>
        </div>
    </nav>
    <article class="result-article">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <section class="result-details">

                        <picture class="result-details__thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_theme_file_uri('/images/result/result-details__thumbnail.jpg') ?>" alt="">
                            <?php endif; ?>

                            <span class="img__heading">
                                <?php
                                $terms = get_the_terms($post->ID, 'result_genre');
                                if ($terms) echo $terms[0]->name;
                                ?>
                            </span>
                        </picture>

                        <h1 class="result-details__title"><?php the_title(); ?></h1>
                        <time datetime="<?php the_time('c'); ?>" class="result-details__time">
                            <?php the_time('Y.m.d'); ?>
                        </time>

                        <div class="result-details__content">
                            <table class="result-details__table">
                                <tbody>
                                    <tr>
                                        <th scope="row">名前</th>
                                        <td><?php the_field('result_name'); // カスタムフィールド名 
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">職業</th>
                                        <td><?php the_field('result_job'); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ジャンル</th>
                                        <td><?php the_field('result_genre'); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">実績</th>
                                        <td><?php the_field('result_performance'); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">SNS</th>
                                        <td><?php the_field('result_sns'); ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="result-details__desc">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </section>
            <?php endwhile;
            endif; ?>
            <nav class="post__nav">
                <?php
                $prev_post = get_previous_post();
                if (!empty($prev_post)) :
                    $prev_url = get_permalink($prev_post->ID);
                    $prev_title = get_the_title($prev_post->ID);
                    $prev_img = get_the_post_thumbnail($prev_post->ID, 'thumbnail') ?: '<img src="' . get_theme_file_uri('/images/photo/post__nav.jpg') . '" alt="">';
                ?>
                    <a href="<?php echo esc_url($prev_url); ?>">
                        <span>◀︎ 前の記事</span>
                        <div class="post__nav-info">
                            <div class="post__nav-img"><?php echo $prev_img; ?></div>
                            <p><?php echo esc_html($prev_title); ?></p>
                        </div>
                    </a>
                <?php endif; ?>
                <?php
                $next_post = get_next_post();
                if (!empty($next_post)):
                    $next_url = get_permalink($next_post->ID);
                    $next_title = get_the_title($next_post->ID);
                    $next_img = get_the_post_thumbnail($next_post->ID, 'thumbnail') ?: '<img src="' . get_theme_file_uri('/images/photo/post__nav.jpg') . '" alt="">';
                ?>
                    <a href="<?php echo esc_url($next_url) ?>">
                        <span>次の記事 ▶︎</span>
                        <div class="post__nav-info">
                            <div class="post__nav-img"><?php echo $next_img; ?></div>
                            <p><?php echo $next_title; ?></p>
                        </div>
                    </a>
                <?php endif; ?>
            </nav>
            <section class="result-details__related">
                <h2 class="result-related__heading">関連記事</h2>
                <ul class="result-related__list">
                    <?php
                    // 1. 現在の記事のジャンル（ターム）を取得
                    $terms = get_the_terms(get_the_ID(), 'result_genre');

                    if ($terms && !is_wp_error($terms)) {
                        // ジャンルIDを配列にまとめる
                        $term_ids = array();
                        foreach ($terms as $term) {
                            $term_ids[] = $term->term_id;
                        }

                        // 2. 同じジャンルの記事を取得するクエリの設定
                        $args = array(
                            'post_type' => 'result', // 卒業実績
                            'posts_per_page' => 3,    // 表示件数
                            'post__not_in' => array(get_the_ID()), // 今見ている記事は除外
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'result_genre',
                                    'field'    => 'term_id',
                                    'terms'    => $term_ids,
                                ),
                            ),
                            'orderby' => 'rand', // ランダムに表示（'date'なら最新順）
                        );

                        $related_query = new WP_Query($args);

                        // 3. ループ開始
                        if ($related_query->have_posts()) :
                            while ($related_query->have_posts()) : $related_query->the_post();
                    ?>
                                <li class="result-related__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="result-related__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('full'); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_theme_file_uri('/images/common/no-image.jpg'); ?>" alt="">
                                            <?php endif; ?>

                                            <span class="img__heading">
                                                <?php
                                                // 表示している記事のジャンルを再度取得して表示
                                                $current_terms = get_the_terms(get_the_ID(), 'result_genre');
                                                if ($current_terms) echo $current_terms[0]->name;
                                                ?>
                                            </span>
                                        </div>
                                        <div class="result-related__text">
                                            <h3 class="result-related__title"><?php the_title(); ?></h3>
                                            <time datetime="<?php the_time('c'); ?>" class="result-related__time">
                                                <?php the_time('Y.m.d'); ?>
                                            </time>
                                        </div>
                                    </a>
                                </li>
                    <?php
                            endwhile;
                            wp_reset_postdata(); // クエリをリセット（重要！）
                        else :
                            // 同じジャンルの記事がない場合のメッセージ
                            echo '<p>関連記事はありません。</p>';
                        endif;
                    }
                    ?>
                </ul>
            </section>
        </div>
    </article>
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
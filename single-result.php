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

                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo esc_url(home_url('/result/')); ?>">
                            <span itemprop="name">卒業実績</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>

                    <?php
                    // ⭕️ スラッグ名をスクショから判明した 'result_genre' に修正しました！
                    $taxonomy_slug = 'result_genre';

                    $terms = get_the_terms(get_the_ID(), $taxonomy_slug);

                    if (!empty($terms) && !is_wp_error($terms)) :
                        $term = $terms[0]; // 1番目の登録タグ（ポップスなど）を取得
                    ?>
                        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo esc_url(get_term_link($term)); ?>">
                                <span itemprop="name"><?php echo esc_html($term->name); ?></span>
                            </a>
                            <meta itemprop="position" content="<?php echo $position++; ?>" />
                        </li>
                    <?php endif; ?>

                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name"><?php echo esc_html(get_the_title()); ?></span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <article class="result-article">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <section class="result-details">

                        <picture class="result-details__thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/result/result-details__thumbnail.jpg')) ?>" alt="デフォルトのアイキャッチ画像">
                            <?php endif; ?>

                            <span class="img__heading">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'result_genre');
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    echo esc_html($terms[0]->name);
                                }
                                ?>
                            </span>
                        </picture>

                        <h1 class="result-details__title"><?php echo esc_html(get_the_title()); ?></h1>
                        <time datetime="<?php the_time('c'); ?>" class="result-details__time">
                            <?php the_time('Y.m.d'); ?>
                        </time>

                        <div class="result-details__content">
                            <table class="result-details__table">
                                <tbody>
                                    <tr>
                                        <th scope="row">名前</th>
                                        <td><?php echo esc_html(get_field('result_name')); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">職業</th>
                                        <td><?php echo esc_html(get_field('result_job')); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ジャンル</th>
                                        <td><?php echo esc_html(get_field('result_genre')); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">実績</th>
                                        <td><?php echo esc_html(get_field('result_performance')); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">SNS</th>
                                        <td>
                                            <?php
                                            $sns_url = get_field('result_sns');
                                            if (!empty($sns_url)) :
                                            ?>
                                                <a href="<?php echo esc_url($sns_url); ?>" target="_blank" rel="noopener noreferrer">
                                                    SNSを見る
                                                </a>
                                            <?php endif; ?>
                                        </td>
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
                    $prev_img = get_the_post_thumbnail($prev_post->ID, 'thumbnail') ?: '<img src="' . esc_url(get_theme_file_uri('/images/photo/post__nav.jpg')) . '" alt="">';
                ?>
                    <a href="<?php echo esc_url($prev_url); ?>">
                        <span class="post__nav-label post__nav-label--prev"><span aria-hidden="true">◀︎</span>前の記事</span>
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
                    $next_img = get_the_post_thumbnail($next_post->ID, 'thumbnail') ?: '<img src="' . esc_url(get_theme_file_uri('/images/photo/post__nav.jpg')) . '" alt="">';
                ?>
                    <a href="<?php echo esc_url($next_url) ?>">
                        <span class="post__nav-label post__nav-label--next">次の記事<span aria-hidden="true">▶︎</span></span>
                        <div class="post__nav-info">
                            <div class="post__nav-img"><?php echo $next_img; ?></div>
                            <p><?php echo esc_html($next_title); ?></p>
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
                        $term_ids = wp_list_pluck($terms, 'term_id');

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
                                                <?php the_post_thumbnail('large'); ?>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/no-image.jpg')) ?>" alt="画像がありません">
                                            <?php endif; ?>

                                            <span class="img__heading">
                                                <?php
                                                // 表示している記事のジャンルを再度取得して表示
                                                $current_terms = get_the_terms(get_the_ID(), 'result_genre');
                                                if (!empty($current_terms) && !is_wp_error($current_terms)) {
                                                    echo esc_html($current_terms[0]->name);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="result-related__text">
                                            <h3 class="result-related__title"><?php echo esc_html(get_the_title()); ?></h3>
                                            <time datetime="<?php the_time('c'); ?>" class="result-related__time">
                                                <?php the_time('Y.m.d'); ?>
                                            </time>
                                        </div>
                                    </a>
                                </li>
                    <?php
                            endwhile;
                        // クエリをリセット（重要！）
                        else :
                            // 同じジャンルの記事がない場合のメッセージ
                            echo '<p>関連記事はありません。</p>';
                        endif;
                        wp_reset_postdata();
                    }
                    ?>
                </ul>
            </section>
        </div>
    </article>
    <div class="back-to-top">
        <a href="#header">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/icons/back-to-top.svg') )?>" alt="ページトップへ戻る">
        </a>
    </div>
    <div class="contact-cta btn">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
</main>
<?php get_footer(); ?>
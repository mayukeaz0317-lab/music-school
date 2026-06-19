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
                        <a itemprop="item" href="<?php echo esc_url(home_url('/blog/')); ?>">
                            <span itemprop="name">ブログ</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        $cat = $categories[0];
                    ?>
                        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                                <span itemprop="name"><?php echo esc_html($cat->name); ?></span>
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
    <div class="blog-details__wrapper">
        <div class="container blog-details--flex">
            <article class="post">
                <div class="post__thumbnail">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                    <span class="img-label">
                        <?php $cat = get_the_category();
                        if (!empty($cat)) echo esc_html($cat[0]->name); ?>
                    </span>
                </div>
                <h1><?php echo esc_html(get_the_title()); ?></h1>
                <time class="post__time" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d'); ?></time>
                <?php
                $share_url   = urlencode(get_permalink());
                $share_title = urlencode(get_the_title());
                ?>
                <ul class="blog-details__sns-list">
                    <li class="sns__item sns__item--facebook">
                        <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $share_url); ?>" target="_blank" rel="noopener noreferrer">
                            <div class="sns__img-wrap"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/icon-share-facebook.svg')); ?>" alt=""></div><span>Facebook</span>
                        </a>
                    </li>
                    <li class="sns__item sns__item--twitter">
                        <a href="<?php echo esc_url('https://twitter.com/share?url=' . $share_url . '&text=' . $share_title); ?>" target="_blank" rel="noopener noreferrer">
                            <div class="sns__img-wrap"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/icon-share-twitter.svg')); ?>" alt=""></div><span>Twitter</span>
                        </a>
                    </li>
                    <li class="sns__item sns__item--line">
                        <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' . $share_url); ?>" target="_blank" rel="noopener noreferrer">
                            <div class="sns__img-wrap"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/icon-share-line.svg')); ?>" alt=""></div><span>LINE</span>
                        </a>
                    </li>
                    <li class="sns__item sns__item--hatena">
                        <a href="#">
                            <div class="sns__img-wrap"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/icon-share-hatena.svg')) ?>" alt="Hatena"></div><span>Hatena</span>
                        </a>
                    </li>
                    <li class="sns__item sns__item--pocket">
                        <a href="#">
                            <div class="sns__img-wrap"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/icon-share-pocket.svg')) ?>" alt="Pocket"></div><span>Pocket</span>
                        </a>
                    </li>
                </ul>
                <div class="post__content">
                    <?php the_content(); ?>
                </div>
                <nav class="post__nav">
                    <?php
                    $prev_post = get_previous_post();
                    if (!empty($prev_post)) :
                        $prev_url = get_permalink($prev_post->ID);
                        $prev_title = get_the_title($prev_post->ID);
                        $prev_img = get_the_post_thumbnail($prev_post->ID, 'thumbnail') ?: '<img src="' . esc_url(get_theme_file_uri('/images/photo/post__nav.webp')) . '" alt="デフォルトのサムネイル">';
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
                        $next_img = get_the_post_thumbnail($next_post->ID, 'thumbnail') ?: '<img src="' . esc_url(get_theme_file_uri('/images/photo/post__nav.webp')) . '" alt="デフォルトのサムネイル">';
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
                <section class="related-posts">
                    <h2>関連記事</h2>
                    <ul class="related-posts__list">
                        <?php
                        // 今の記事のカテゴリーIDを取得
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $category_ids = array();
                            $category_ids = wp_list_pluck($categories, 'term_id');
                            // 同じカテゴリーの記事をクエリ
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => 3,          // 表示件数
                                'post__not_in'   => array(get_the_ID()), // 今の記事は除外
                                'category__in'   => $category_ids,    // 同じカテゴリーを選んできてと言う命令
                                'orderby'        => 'rand',     // ランダムに取得（'date'なら最新順）
                            );

                            $related_query = new WP_Query($args);

                            if ($related_query->have_posts()) :
                                while ($related_query->have_posts()) : $related_query->the_post();
                        ?>
                                    <li class="related-posts__item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="related-posts__img">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('medium'); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_theme_file_uri('/images/photo/blog-list__img01.webp') ?>" alt="">
                                                <?php endif; ?>
                                                <span class="img-label">
                                                    <?php $cat = get_the_category();
                                                    if (! empty($cat)) {
                                                        echo esc_html($cat[0]->name);
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="related-posts__text">
                                                <h3><?php echo esc_html(get_the_title()); ?></h3>
                                                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
                                            </div>
                                        </a>
                                    </li>
                        <?php
                                endwhile;
                                wp_reset_postdata(); // 最後にクエリをリセット
                            else :
                                echo '<p>関連記事はありません。</p>';
                            endif;
                        endif;
                        ?>
                    </ul>
                </section>
            </article>
            <aside>
                <div class="sidebar__list">
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
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
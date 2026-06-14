<?php get_header(); ?>
<main>
    <section class="fv fv--index">
        <h2>「音楽で生きる」<br class="sp-only">を叶える<br>ミュージックスクール</h2>
    </section>
    <section class="concept">
        <div class="container container--concept">
            <h2 class="concept__title">全人類、<br class="sp-only">ミュージシャン計画。</h2>
            <p class="concept__desc">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
            <picture class="concept__semicircle">
                <source srcset="<?php echo esc_url(get_theme_file_uri('/images/icons/semicircle-sp.svg')) ?>" media="(max-width: 576px)">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/icons/semicircle.svg')) ?>" alt="">
            </picture>
            <dl class="concept-flow">
                <div class="concept-flow__item">
                    <dt>Enthusiasm</dt>
                    <dd>熱狂し</dd>
                </div>
                <div class="concept-flow__item is-middle">
                    <dt>Envision</dt>
                    <dd>想像し</dd>
                </div>
                <div class="concept-flow__item">
                    <dt>Effulgent</dt>
                    <dd>輝く存在へ</dd>
                </div>
            </dl>
        </div>
    </section>
    <section class="appeal">
        <h2 class="index__title index__title--appeal">音楽業界初！<br>収益化までサポートする<br class="sp-only">ミュージックスクール</h2>
        <p class="appeal__desc">楽器や作詞作曲などの<br class="sp-only">技術・知識はもちろんのこと<br>
            自分で稼ぎつづけるための<br class="sp-only">ビジネス面もサポートします！
        </p>
    </section>
    <section class="reasons">
        <div class="container">
            <h2 class="index__title index__title--reasons">きたむらミュージック<br class="sp-only">スクールが選ばれる理由</h2>
            <ul class="reasons__list">
                <li class="reasons__item">
                    <picture class="reasons__img">
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/photo/reason01-sp.jpg')) ?>" media="(max-width:768px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/reason01.jpg')) ?>" alt="プロの講師による丁寧なピアノのマンツーマンレッスンの様子">
                    </picture>
                    <div class="reasons__text">
                        <h3 class="reasons__title">技術面はプロによるマンツーマン授業！</h3>
                        <p class="reasons__desc">第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。</p>
                    </div>
                </li>
                <li class="reasons__item">
                    <picture class="reasons__img">
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/photo/reason02-sp.jpg')) ?>" media="(max-width:768px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/reason02.jpg')) ?>" alt="音楽ビジネスや集客方法についてスタッフと笑顔で個別面談・相談をする様子">
                    </picture>
                    <div class="reasons__text">
                        <h3 class="reasons__title">収益化するためのビジネスサポート！</h3>
                        <p class="reasons__desc">コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。
                        </p>
                    </div>
                </li>
                <li class="reasons__item">
                    <picture class="reasons__img">
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/photo/reason03-sp.jpg')) ?>" media="(max-width:768px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/reason03.jpg')) ?>" alt="個室の練習ROOMでアコースティックギターを弾きながら楽譜に書き込みをする様子">
                    </picture>
                    <div class="reasons__text">
                        <h3 class="reasons__title">24時間365日使える練習ROOMを完備！</h3>
                        <p class="reasons__desc">一年中使える個室の練習ROOMを完備しているため、
                            お仕事帰りや合間の時間も自由に練習が可能です。
                            （アプリで予約が必要です）
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <h2 class="index__title index__title--testimonial">生徒さんたちの声</h2>
            <div class="testimonial__slider">
                <button class="slider-btn prev" aria-label="前へ"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/arrow-l.png')) ?>" alt=""></button>
                <button class="slider-btn next" aria-label="次へ"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/arrow-r.png')) ?>" alt=""></button>
                <div class="testimonial__viewport">
                    <ul class="testimonial__list">
                        <li class="testimonial__item">
                            <div class="testimonial__img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/voice01.jpg')) ?>" alt="笑顔でマイクを持って楽しそうに歌う男性の姿">
                            </div>
                            <div class="testimonial__text">
                                <h3 class="testimonial__title">証券会社勤務　丸山さん</h3>
                                <p class="testimonial__desc">昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。</p>
                            </div>
                        </li>
                        <li class="testimonial__item">
                            <div class="testimonial__img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/voice02.jpg')) ?>" alt="ピアノの前に座り可愛い小型犬を抱きしめて微笑む女性の姿">
                            </div>
                            <div class="testimonial__text">
                                <h3 class="testimonial__title">IT会社勤務　S.Eさん</h3>
                                <p class="testimonial__desc">プロの指導が受けられるので、技術が確実に上がるし、音楽への考え方とかも勉強できて最高です。</p>
                            </div>
                        </li>
                        <li class="testimonial__item">
                            <div class="testimonial__img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/voice03.jpg')) ?>" alt="アコースティックギターを抱えて真剣な表情で手元を見つめる男性の姿">
                            </div>
                            <div class="testimonial__text">
                                <h3 class="testimonial__title">IT会社勤務　S.Eさん</h3>
                                <p class="testimonial__desc">就職する前にビジネスの事が学べるし、好きな音楽で稼げるようになったので選択肢が増えました。</p>
                            </div>
                        </li>
                        <li class="testimonial__item">
                            <div class="testimonial__img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/voice02.jpg')) ?>" alt="ピアノの前に座り可愛い小型犬を抱きしめて微笑む女性の姿">
                            </div>
                            <div class="testimonial__text">
                                <h3 class="testimonial__title">IT会社勤務　S.Eさん</h3>
                                <p class="testimonial__desc">プロの指導が受けられるので、技術が確実に上がるし、音楽への考え方とかも勉強できて最高です。</p>
                            </div>
                        </li>
                        <li class="testimonial__item">
                            <div class="testimonial__img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/voice03.jpg')) ?>" alt="アコースティックギターを抱えて真剣な表情で手元を見つめる男性の姿">
                            </div>
                            <div class="testimonial__text">
                                <h3 class="testimonial__title">IT会社勤務　S.Eさん</h3>
                                <p class="testimonial__desc">就職する前にビジネスの事が学べるし、好きな音楽で稼げるようになったので選択肢が増えました。</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="flow">
        <div class="container container--flow">
            <h2 class="index__title index__title--flow">ご利用の流れ</h2>
            <ol class="flow__list">
                <li class="flow__item">
                    <h3 class="flow__title">お問い合わせ</h3>
                    <p class="flow__desc">
                        まずはフォームまたはメールにてお問い合わせください。<br>
                        ヒアリングの日程を調整します。
                    </p>
                </li>
                <li class="flow__item">
                    <h3 class="flow__title">ヒアリング</h3>
                    <p class="flow__desc">
                        現在の技術面や将来の目標などをお伺いします。<br>
                        悩みや不安な事もお気軽にご相談ください。
                    </p>
                </li>
                <li class="flow__item">
                    <h3 class="flow__title">プランのご提案</h3>
                    <p class="flow__desc">
                        ライフスタイルや目標によって最適なプランをご提案します。<br>
                        継続できるようサポートいたします。
                    </p>
                </li>
                <li class="flow__item">
                    <h3 class="flow__title">ご入学</h3>
                    <p class="flow__desc">
                        お申し込み完了後、レッスンがスタートします。<br>
                        マンツーマン指導なので、いつからでもスタートが可能です。
                    </p>
                </li>
            </ol>
        </div>
    </section>
    <section class="faq">
        <h2 class="index__title index__title--faq">よくあるご質問</h2>
        <div class="container">
            <details class="faq__item">
                <summary class="faq__question">
                    どのような生徒さんがどれぐらいの期間で稼いでいますか？
                    <svg class="faq__icon" viewBox="0 0 15.62 12.24" fill="none" stroke="currentColor"
                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="0 1 7.81 11.24 15.62 1"></polyline>
                    </svg>
                </summary>
                <div class="faq__answer">
                    <p class="faq__text">早い方で3ヶ月、平均半年で稼いでいます。</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__question">
                    途中でプランを変更することは可能ですか？
                    <svg class="faq__icon" viewBox="0 0 15.62 12.24" fill="none" stroke="currentColor"
                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="0 1 7.81 11.24 15.62 1"></polyline>
                    </svg>
                </summary>
                <div class="faq__answer">
                    <p class="faq__text">
                        途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。
                    </p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__question">
                    入学金などの分割払いはできますか？
                    <svg class="faq__icon" viewBox="0 0 15.62 12.24" fill="none" stroke="currentColor"
                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="0 1 7.81 11.24 15.62 1"></polyline>
                    </svg>
                </summary>
                <div class="faq__answer">
                    <p class="faq__text">はい、可能です。</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__question">
                    休学することも可能ですか？
                    <svg class="faq__icon" viewBox="0 0 15.62 12.24" fill="none" stroke="currentColor"
                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="0 1 7.81 11.24 15.62 1"></polyline>
                    </svg>
                </summary>
                <div class="faq__answer">
                    <p class="faq__text">はい、可能です。</p>
                </div>
            </details>
        </div>
    </section>
    <section class="index-blog">
        <h2 class="index__title index__title--blog">ブログ</h2>
        <div class="container">
            <ul class="index-blog__list">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="index-blog__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="index-blog__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/photo/no-image.jpg')); ?>" alt="画像がありません">
                                    <?php endif; ?>
                                    <span class="img__heading">
                                        <?php
                                        $cat = get_the_category();
                                        if (! empty($cat)) {
                                            echo esc_html($cat[0]->name);
                                        } else {
                                            echo 'その他';
                                        }
                                        ?>
                                    </span>
                                </div>
                                <h3 class="index-blog__title"><?php esc_html(get_the_title()); ?></h3>
                                <time class="index-blog__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </a>
                        </li>
                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </ul>
            <a class="link-blog" href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ一覧へ</a>
        </div>
    </section>
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
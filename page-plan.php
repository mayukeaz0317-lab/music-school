<?php get_header(); ?>
<main>
    <section class="fv fv--lower">
        <h1>プラン・料金</h1>
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

                    <!-- 2. プラン・料金（現在のページ） -->
                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">プラン・料金</span>
                        <meta itemprop="position" content="<?php echo $position++; ?>" />
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <section class="price-struct">
        <div class="container">
            <h2 class="c-section-title">料金体系</h2>
            <div class="price-struct__formula">
                <p class="c-btn">入会金 39,000円</p>
                <div class="price-struct__plus"><img src="<?php echo esc_url(get_theme_file_uri('/images/icons/plus.png')) ?>" alt="プラス"></div>
                <p class="c-btn">月額料金</p>
            </div>
            <p class="price-struct__text">
                きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。</p>
        </div>
    </section>
    <section class="pricing-plan">
        <div class="container">
            <h2 class="c-section-title">プラン内容・月額料金</h2>
            <div class="pricing-table__wrapper">
                <table class="pricing-table">
                    <thead class="pricing-table__head">
                        <tr>
                            <th></th>
                            <th scope="col" class="pricing-table__label pricing-table__label--plan">ベーシック<br class="sp-only">プラン
                            </th>
                            <th scope="col" class="pricing-table__label pricing-table__label--plan is-popular--label"><span
                                    class="pricing-table__label--sub">おすすめ</span>スタンダード<br class="sp-only">プラン</th>
                            <th scope="col" class="pricing-table__label pricing-table__label--plan">プレミアム<br class="sp-only">プラン
                            </th>
                        </tr>
                    </thead>
                    <tbody class="pricing-table__body">
                        <tr>
                            <th scope="row" class="pricing-table__label pricing-table__label--price">月額料金</th>
                            <td class="pricing-table__data pricing-table__data--price">39,000円</td>
                            <td class="pricing-table__data pricing-table__data--price is-popular--data">59,000円</td>
                            <td class="pricing-table__data pricing-table__data--price">128,000円</td>
                        </tr>
                        <tr>
                            <th scope="row" class="pricing-table__label">マンツーマン授業</th>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle">●</span>週１回
                                </div>
                            </td>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle is-popular--data">●</span>週2回
                                </div>
                            </td>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle">●</span>無制限
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pricing-table__label">ビジネス基本講座</th>
                            <td class="pricing-table__data"><span class="circle circle--only">●</span></td>
                            <td class="pricing-table__data"><span
                                    class="circle circle--only is-popular--data">●</span>
                            </td>
                            <td class="pricing-table__data"><span class="circle circle--only">●</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="pricing-table__label">練習ROOM利用</th>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner"><span class="circle">●</span>月10時間</div>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle is-popular--data">●</span>月20時間
                                </div>
                            </td>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle">●</span>無制限
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pricing-table__label">ビジネスコンサル</th>
                            <td class="pricing-table__data" aria-label="なし">
                                <div class="nothing-inner"><span class="pricing-table__line"></span></div>
                            </td>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle is-popular--data">●</span>月2回
                                </div>
                            </td>
                            <td class="pricing-table__data">
                                <div class="pricing-table__data--inner">
                                    <span class="circle">●</span>月3回
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pricing-table__label pricing-table__label--community">コミュニティ<br
                                    class="sp-only">参加資格</th>
                            <td class="pricing-table__data" aria-label="なし">
                                <div class="nothing-inner"><span class="pricing-table__line"></span></div>
                            </td>
                            <td class="pricing-table__data" aria-label="なし">
                                <div class="nothing-inner"><span class="pricing-table__line"></span></div>
                            </td>
                            <td class="pricing-table__data"><span class="circle circle--only">●</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="pricing-table__note">※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
        </div>
    </section>
    <div class="back-to-top">
        <a href="#header">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/icons/back-to-top.svg')) ?>" alt="ページトップへ戻る">
        </a>
    </div>
    <div class="contact-cta c-btn">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
</main>
<?php get_footer(); ?>
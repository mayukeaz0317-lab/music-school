<?php
// =========================================================================
// 1. テーマの基本設定
// =========================================================================
function my_theme_setup()
{
    // 検索エンジンに正しいページタイトルを伝えるための設定
    add_theme_support('title-tag');

    // アイキャッチ画像機能を有効化
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


// =========================================================================
// 2. CSS・JavaScriptファイルの読み込み設定
// =========================================================================
function my_enqueue_scripts()
{
    // 1. リセットCSS (destyle.css) を登録・読み込み
    wp_enqueue_style(
        'destyle',
        'https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css',
        array(),
        '3.0.2'
    );

    // 2. 自作の style.css を読み込み（cssフォルダの中身を指定）
    wp_enqueue_style(
        'my-style',
        get_theme_file_uri('/css/style.css'),
        array('destyle'),
        filemtime(get_theme_file_path('/css/style.css'))
    );

    // 3. WordPress標準のjQueryを読み込む設定
    wp_enqueue_script('jquery');

    // 4. 自作のscript.jsを読み込む
    wp_enqueue_script(
        'my-script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        filemtime(get_template_directory() . '/js/script.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


// =========================================================================
// 3. サイドバー（ウィジェットエリア）の登録
// =========================================================================
function my_theme_widgets_init()
{
    register_sidebar(array(
        'name'          => 'サイドバー',
        'id'            => 'sidebar-1',
        'before_widget' => '<section class="sidebar__widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');


// =========================================================================
// 4. ショートコードの追加
// =========================================================================
// カテゴリー一覧のショートコード追加
add_shortcode('wp_categories', function () {
    return wp_list_categories(array(
        'title_li' => '', // 余計なタイトルを出さない
        'echo'     => false, // すぐに出力せず、文字列として返す
    ));
});


// =========================================================================
// 5. カスタム投稿タイプ・スラッグ自動生成設定
// =========================================================================
function register_custom_post_results()
{
    register_post_type(
        'result', // スラッグ（URL名）
        array(
            'labels' => array(
                'name' => '卒業実績',
                'singular_name' => '卒業実績',
            ),
            'public' => true,
            'has_archive' => true, // 一覧ページを持つ
            'show_in_rest' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'), // タイトル、本文、アイキャッチを有効化
        )
    );
    // ジャンル（ポップス、ロック等）を選択できるようにする
    register_taxonomy('result_genre', 'result', array(
        'label' => 'ジャンル',
        'hierarchical' => true, // カテゴリー形式
        'show_ui' => true,
    ));
}
add_action('init', 'register_custom_post_results');

// スラッグを規則的に表現（details-記事ID に強制変換）
function auto_custom_slug($data, $postarr)
{
    if ($data['post_type'] == 'result' && !in_array($data['post_status'], array('trash', 'auto-draft'))) {
        $data['post_name'] = 'details-' . $postarr['ID'];
    }
    return $data;
}
add_filter('wp_insert_post_data', 'auto_custom_slug', 10, 2);

// Contact Form 7 の自動整形（勝手にpタグやbrタグが入る機能）を停止する
add_filter('wpcf7_autop_or_not', '__return_false');
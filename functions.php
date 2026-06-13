<?php
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
        get_theme_file_uri('/css/style.css'), // get_stylesheet_uri() から変更
        array('destyle'),
        filemtime(get_theme_file_path('/css/style.css')) // フォルダのパスも変更
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

function my_theme_setup()
{
    // アイキャッチ画像機能を有効化
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

// 1. my_theme_widgets_init という名前の「サイドバーを作る手順」を定義します
function my_theme_widgets_init()
{

    // 2. WordPressに新しいサイドバー（ウィジェットエリア）を登録する命令です
    register_sidebar(array(

        // 3. 管理画面に表示されるエリアの名前（自分で分かりやすい名前でOK）
        'name'          => 'サイドバー',

        // 4. プログラムがこのエリアを識別するためのID（背番号のようなもの）
        'id'            => 'sidebar-1',

        // 5. ウィジェット（広告や検索窓）が追加されるとき、前に置くタグ
        'before_widget' => '<section class="sidebar__widget">',

        // 6. ウィジェットが終わるときに置くタグ（5番の閉じタグ）
        'after_widget'  => '</section>',

        // 7. 管理画面で入力した見出し（タイトル）の前に置くタグ
        'before_title'  => '<h2>',

        // 8. 見出しが終わるときに置くタグ（7番の閉じタグ）
        'after_title'   => '</h2>',
    ));
}

// 9. WordPressがウィジェットを準備するタイミング（widgets_init）で、
//    1番で作った手順を実行するように予約します
add_action('widgets_init', 'my_theme_widgets_init');

// カテゴリー覧のショートコード追加
add_shortcode('wp_categories', function () {
    return wp_list_categories(array(
        'title_li' => '', // 余計なタイトルを出さない
        'echo'     => false, // すぐに出力せず、文字列として返す
    ));
});

// functions.php の一番下に追加
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

// スラッグを規則的に表現
function auto_custom_slug($data, $postarr)
{
    // 「卒業実績（result）」かつ「公開または下書き」の時だけ実行
    if ($data['post_type'] == 'result' && !in_array($data['post_status'], array('trash', 'auto-draft'))) {

        // スラッグを「details-記事ID」の形に強制書き換え
        // $postarr['ID'] はその記事固有の番号なので絶対に重複しない
        $data['post_name'] = 'details-' . $postarr['ID'];
    }
    return $data;
}
add_filter('wp_insert_post_data', 'auto_custom_slug', 10, 2);

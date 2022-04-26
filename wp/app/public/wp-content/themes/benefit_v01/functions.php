<?php
/* -------------------------------------------------------------
//読み込み
// ------------------------------------------------------------*/
function import_header_scripts() {

       wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
       wp_enqueue_style( 'assetscommon', get_template_directory_uri() . '/assets/css/common.css');
       wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
       wp_enqueue_style( 'query', get_template_directory_uri() . '/assets/css/query.css');
       wp_enqueue_style( 'nav', get_template_directory_uri() . '/assets/css/nav.css');
       wp_enqueue_style( 'footer', 'https://famione.com/css/footer.css');
    //    wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
       wp_enqueue_script( 'jquery' );
  }
  add_action( 'wp_enqueue_scripts', 'import_header_scripts' );

//   /* -------------------------------------------------------------
//   //JSファイル追加の関数
//   // ------------------------------------------------------------*/
  function my_load_widget_scripts() {
    //   wp_enqueue_script( 'protonet', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js', true, array());
    //   wp_enqueue_script( 'pkgd','https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', true, array());
    wp_enqueue_script( 'script',get_template_directory_uri() . '/assets/js/script.js', true, array());
  }
  // wp_footerに処理を登録
  add_action('wp_footer', 'my_load_widget_scripts');

/* -------------------------------------------------------------
//画像の設定
// ------------------------------------------------------------*/
//アイキャッチ画像に対応する
function my_after_setup_theme(){
    // アイキャッチ画像を有効にする
    add_theme_support( 'post-thumbnails' );
    // アイキャッチ画像サイズを指定する（横：640px 縦：384）
    // 画像サイズをオーバーした場合は切り抜き
    set_post_thumbnail_size( 640, 384, true );
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );


/* -------------------------------------------------------------
// タイトルタグ
// ------------------------------------------------------------*/
function nendebcom_theme_slug_setup() {
    add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'nendebcom_theme_slug_setup' );


// /* -------------------------------------------------------------
// // カスタムポストタイプ
// // ------------------------------------------------------------*/
function interview_custom_post_type(){
  $labels = array(
    'name' => '導入実績',
    'singular_name' => 'interview',
    'add_new' => '新規追加',
    'add_new_item' => '新規項目追加',
    'edit_item' => '項目を編集',
    'new_item' => '新規項目',
    'view_item' => '項目を表示',
    'search_items' => '項目検索',
    'not_found' =>  '通信が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にデータはありません',
    'parent_item_colon' => '',
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'map_meta_cap'    => true,
    'hierarchical' => false,
    'has_archive' => true,
    'menu_position' => 5,
    'show_in_rest' => true,
    'supports' => array('title','author','editor','thumbnail'),
  );
  register_post_type('interview',$args);
}

add_action('init', 'interview_custom_post_type');

function interview_taxonomy() {
    register_taxonomy(
      'intro_type',
      'interview', // 関連付けるカスタム投稿タイプ
      array(
        'label' => '導入タイプ', // 管理画面のメニューに表示されるテキスト
        'singular_label' => '導入タイプ', // 管理画面のメニューに表示されるテキスト
        'labels' => array(
          'all_items' => '導入タイプ一覧', // 管理画面のメニューの下層に表示されるテキスト
          'add_new_item' => '導入タイプを追加' // タームの新規追加画面に表示されるテキスト
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'hierarchical' => true // 階層関係を持たせるかどうか
        )
    );
  }

  add_action( 'init', 'interview_taxonomy' );

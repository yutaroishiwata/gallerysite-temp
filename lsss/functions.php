<?php

//アイキャッチ画像（サムネイル）を使えるようになる。
add_theme_support('post-thumbnails');

//カスタムメニューを使えるようにする
add_theme_support('menus');

add_theme_support('title-tag');

//ウェジェットエリアを登録
register_sidebar(
	array(
		'name' =>'人気記事',
		'id' =>'popular_posts',
		'description' =>'人気記事',
		'before_widget'=>'<div class="widget">',
		'after_widget'=> '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>'
	)
);

//抜粋文の長さを変える
function change_excerpt_mblength( $length ) {
return 1;
}
add_filter( 'excerpt_mblength', 'change_excerpt_mblength' );

//検索結果で投稿記事のみ表示
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');

//サイト内検索で未入力またはスペースはトップにリダイレクト
function empty_search_redirect( $wp_query ) {
    if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
        $s = $wp_query->get( 's' );
        $s = trim( $s );
        if ( empty( $s ) ) {
            wp_safe_redirect( home_url('/') );
            exit;
        }
    }
}
add_action( 'parse_query', 'empty_search_redirect' );


//コメントのオートリンク機能を無効化
remove_filter('comment_text', 'make_clickable', 9);


//コメントフォームで使用できるタグを無効化する
add_filter('comments_open', 'custom_comment_tags');
add_filter('pre_comment_approved', 'custom_comment_tags');

function custom_comment_tags($data) {
	global $allowedtags;
	unset($allowedtags['a']);
	unset($allowedtags['abbr']);
	unset($allowedtags['acronym']);
	unset($allowedtags['b']);
	unset($allowedtags['div']);
	unset($allowedtags['cite']);
	unset($allowedtags['code']);
	unset($allowedtags['del']);
	unset($allowedtags['em']);
	unset($allowedtags['i']);
	unset($allowedtags['q']);
	unset($allowedtags['strike']);
	unset($allowedtags['strong']);
	return $data;
}

?>
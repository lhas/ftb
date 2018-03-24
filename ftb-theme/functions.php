<?php

function ftb_setup() {
  add_theme_support( 'automatic-feed-links' );
  
  add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured-image', 2000, 1200, true );
  add_image_size( 'thumbnail-avatar', 100, 100, true );
  
  register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'ftb' ),
		)
  );
  
  add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

  add_theme_support(
		'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);
}

add_action( 'after_setup_theme', 'ftb_setup' );

function ftb_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'ftb_pingback_header' );

function ftb_scripts() {
  wp_enqueue_style( 'ftb-style', get_stylesheet_uri() );
  wp_enqueue_script( 'ftb-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ftb_scripts' );

function ftb_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'ftb_excerpt_more' );

function main_category() {
	$category = get_the_category(); 
	return $category[0]->cat_name;
}
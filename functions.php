<?php

// queue scripts and styles

function cardipress_scripts() {
	wp_enqueue_style( 'cardipress-style', get_stylesheet_uri() );
	wp_enqueue_script("jquery");
	wp_enqueue_script("navigation",
										get_template_directory_uri() . '/js/navigation.js',
										array('jquery')
	);
}

add_action( 'wp_enqueue_scripts', 'cardipress_scripts' );

// register sidebar

add_action('widgets_init', 'footer_sidebar');

function footer_sidebar() {
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => __('Footer Sidebar', 'CardiPress'),
			'description' => __('Sidebar to go in the footer'),
			'before_widget' => '<aside class="widget">',
			'after_widget' => '</aside>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
}

// enable featured images

add_theme_support( 'post-thumbnails' );

// register menu

function register_menus() {
  register_nav_menu( 'primary', __('Primary Menu', 'cardipress2'));
}

add_action( 'init', 'register_menus');
?>
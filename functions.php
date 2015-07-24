<?php 
/**
*
* This is the functions.php file for the theme
*
**/

 // echo get_stylesheet_directory_uri() . '<br>';
 // echo get_template_directory_uri();

function theme_styles() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9');

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'ie10_bugfix_js', get_template_directory_uri() . 'js/ie10-viewport-bug-workaround.js', array('jquery'), '', true );


}

add_action( 'wp_enqueue_scripts', 'theme_js');

/**
*
* Remove Adminbar while logged in
*
**/

// add_filter( 'show_admin_bar', '__return_false' );

/**
*
* Add Theme Menus
*
**/
add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus( 
		array(
			'header-menu' => __( 'Header Menu' )

		) 

	);
}
add_action( 'init', 'register_theme_menus' );

/**
*
* Add Widgets 		
*
**/

function create_widget( $name, $id, $description ) {

	register_sidebar( array(

		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
















































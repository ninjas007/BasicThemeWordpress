<?php 

// Register Custom Navigation Walker
function load_script() {

	require get_template_directory() . '/bootstrap_walker.php';
}

require_once('wp_bootstrap_navlist_walker.php');

add_action('wp_enqueue_scripts', 'load_script');

// Theme Support
function init_setup(){

	add_theme_support('post-thumbnails');

	register_nav_menus( array(
		// main_menu ini dari args array di header
		'main_menu' => 'Menu Utama',
		'footer_menu' => 'Footer Menu'

	) );

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

}

// untuk meload scripnya panggil function init_setup
add_action( 'after_setup_theme', 'init_setup' );


// control panjang excerpt
function set_excerpt_length(){
	return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Widget locations
function wpb_init_widgets($id){
	// ini harus disamakan dengan penamaan class pada elemen yang mau diregister agar terbaca di widget
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

}


// registare widget box
function init_widgets_box($id){
	// ini harus disamakan dengan penamaan class pada elemen yang mau diregister agar terbaca di widget
	register_sidebar(array(
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	// ini harus disamakan dengan penamaan class pada elemen yang mau diregister agar terbaca di widget
	register_sidebar(array(
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

add_action('widgets_init', 'wpb_init_widgets');
add_action('widgets_init', 'init_widgets_box');


// Customizer File

require get_template_directory(). '/inc/customizer.php'; 
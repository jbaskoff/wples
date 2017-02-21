<?php
//
//	иницициализация скриптов и с силей
// 
function load_style_script(){
	wp_enqueue_script("my_jquery", get_template_directory_uri() . "/js/jquery-1.10.1.min.js");
	wp_enqueue_script("jqFancyTransitions", get_template_directory_uri() . "/js/jqFancyTransitions.1.8.min.js");
	wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}
//
//подключение скриптов
// 
add_action('wp_enqueue_scripts', 'load_style_script');
// 
// активация миниатюр
// 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180, 180);

// 
// Активация меню и сайдбаров
// 
register_sidebar(array(
	'name'          => 'Меню', 
	'id'            => 'menu_header', 
	'before_widget' => '', 
	'after_widget'  => ''));

register_sidebar(array(
	'name'          => 'Sidebar', 
	'id'            => 'sidebar',
	'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'					
						      ));






// $args = array(
// 	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
// 	'id'            => 'unique-sidebar-id',
// 	'description'   => '',
// 	'class'         => '',
// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 	'after_widget'  => '</li>',
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => '</h2>' );
<?php
register_nav_menu('menu', 'primary menu');

register_sidebar(array(
	'name'          => 'Слайдер на главной странице', 
	'id'            => 'slider_index',
	'description'   => 'Добавте слайдер через виджет текст',
	'before_widget' => '', 
	'after_widget'  => ''));
add_theme_support( 'post-thumbnails' );


register_sidebar(array(
	'name'          => 'Футер', 
	'id'            => 'footer',
	'before_widget' => '', 
	'after_widget'  => ''));

<?php
	
	function fc_theme_setup()
	{
		register_nav_menus([
			'primary' => 'Primary Navigation'
		]);
		add_theme_support('post_thumbnails');
		add_image_size('home-thumb', 715, 449);
	}
	add_action('after_setup_theme', 'fc_theme_setup');

	function fc_script_enqueue()
	{
		// Enqueue CSS
		wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css', 'all', '5.3');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'all', '2.2');
		wp_enqueue_style('hovercss', get_template_directory_uri() . '/css/hover.min.css', 'all', '1.1');
		wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', 'all', '1.0');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css', 'all', '1.0');

		// Enqueue JS
		wp_enqueue_script('jquery');
		wp_enqueue_script('foundation-js', get_template_directory_uri() . '/js/vendor/foundation.js', true, '5.3');
		wp_enqueue_script('what-input', get_template_directory_uri() . '/js/vendor/what-input.js', true, '1.1');

		wp_enqueue_script('what-input', get_template_directory_uri() . '/js/app.js', true, '1.1');
	}
	add_action('wp_enqueue_scripts', 'fc_script_enqueue');

	require_once("inc/customizer.php");


	function fc_excerpt_length()
	{
		return 22;
	}
	add_filter('set_excerpt_length', 'fc_excerpt_length');

	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Footer Widget 1',
			'id' => 'footer-widget-1',
			'before_widget' => '<div class="large-3 columns">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Footer Widget 2',
			'id' => 'footer-widget-2',
			'before_widget' => '<div class="large-3 columns">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Footer Widget 3',
			'id' => 'footer-widget-3',
			'before_widget' => '<div class="large-3 columns">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Footer Widget 4',
			'id' => 'footer-widget-4',
			'before_widget' => '<div class="large-3 columns">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);
	}
	add_action('widgets_init', 'init_widgets');
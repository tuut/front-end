<?php namespace App;

//add_action('init', __NAMESPACE__ . '\action__init', 0, 2);
add_action('after_setup_theme', __NAMESPACE__ . '\action__after_setup_theme');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\action__wp_enqueue_scripts');
add_action('widgets_init', __NAMESPACE__ . '\action__widgets_init');
add_action('wp_head', __NAMESPACE__ . '\action__wp_head');

/* Remove */
remove_action('wp_head',' print_emoji_detection_script', 7);
remove_action('wp_head',' wp_generator');
remove_action('wp_head',' wlwmanifest_link');
remove_action('wp_head',' rsd_link');
remove_action('wp_head',' wp_shortlink_wp_head');
remove_action('wp_head',' feed_links', 2);
remove_action('wp_head',' feed_links_extra', 3);
remove_action('wp_head',' adjacent_posts_rel_link_wp_head');
remove_action('admin_print_scripts',' print_emoji_detection_script');
remove_action('wp_print_styles',' print_emoji_styles');
remove_action('admin_print_styles',' print_emoji_styles');

/* Filters */
/* Add */
add_filter('jpeg_quality', __NAMESPACE__ . '\filter__jpeg_quality');
add_filter('get_search_form', __NAMESPACE__ . '\filter__get_search_form');
add_filter('body_class', __NAMESPACE__ . '\filter__body_class');

/* Actions */

function action__after_setup_theme() 
{
	register_nav_menus([
		'header_nav' => __('Menu Header', 'kage'),
		'footer_nav' => __('Menu Footer', 'kage')
		]);

	add_editor_style(asset_path('styles/editor-style.css'));

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	//add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);
	add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

	add_post_type_support( 'page', 'excerpt' );
}

function action__wp_enqueue_scripts() 
{
	global $post;

	wp_enqueue_style('kaisermann_css', asset_path('styles/main.css'), false, null);

	if (is_single() && comments_open() && get_option('thread_comments'))
		wp_enqueue_script('comment-reply');

	if( !is_admin())
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://code.jquery.com/jquery-2.2.3.min.js"), false, '2.2.3', true);
		wp_enqueue_script('jquery');
	}

	wp_enqueue_script('kaisermann_js', asset_path('scripts/main.js'), ['jquery'], null, true);
}

function action__widgets_init()
{
	register_sidebar([
		'name'          => __('Primary', 'kage'),
		'id'            => 'sidebar-primary',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
		]);

	register_sidebar([
		'name'          => __('Footer', 'kage'),
		'id'            => 'sidebar-footer',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
		]);
}

function action__wp_head() 
{ 
	echo '<meta name="web_author" content="Christian Kaisermann <christian@kaisermann.me>"/>'; 
}

/* Filters */

function filter__jpeg_quality() { return 100; }

function filter__get_search_form()
{ 
	$form = ''; 
	locate_template('/templates/searchform.php', true, false); 
	return $form; 
}

function filter__body_class($classes)
{
	if (is_single() || is_page() && !is_front_page()) 
	{
		if (!in_array(basename(get_permalink()), $classes))
			$classes[] = basename(get_permalink());
	}

	return $classes;
}
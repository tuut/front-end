<?php
  
/*########################## 
	SETTINGS
###########################*/

date_default_timezone_set('America/Sao_Paulo');
setlocale (LC_ALL , 'pt_BR');

/*########################## 
	DEFINES
###########################*/

define('APP_TD'									, 'tuut');
define("APP_PATH"								, trailingslashit(get_stylesheet_directory()));
define("APP_URI"								, trailingslashit(get_stylesheet_directory_uri()));
define("APP_LIBRARY_PATH"						, APP_PATH . 'library/');
define("APP_LIBRARY_URI"						, APP_URI . 'library/');
define("APP_CSS_URI"							, APP_URI . 'assets/css/');
define("APP_JS_URI"								, APP_URI . 'assets/js/');
define("APP_PLUGIN_URI"							, APP_URI . 'assets/plugins/');

/*########################## 
	ACTIONS / FILTERS
###########################*/

// Actions
// add_action('get_header', 'custom_maintenace_mode');

add_action('after_setup_theme'					, 'custom_setup');

add_action('custom_navmenu_header'				, 'custom_navmenu_header', 10);
add_action('custom_pagination'					, 'custom_pagination', 10);

// Filters
add_filter('body_class'							, 'custom_body_class', 10, 2);
add_filter('nav_menu_css_class'					, 'custom_nav_menu_item_class', 10, 3);
add_filter('nav_menu_item_id'					, 'custom_nav_menu_item_id', 10, 3);
add_filter('wp_title'							, 'custom_wp_title', 10, 2);
add_filter('excerpt_length'						, 'custom_excerpt_length', 999);
add_filter('style_loader_tag'					, 'custom_remove_style_tag_id');

// Filters: ACF
// add_filter('acf/settings/path'				, 'acf_settings_path_func');
// add_filter('acf/settings/dir'				, 'acf_settings_dir_func');
// add_filter('acf/settings/show_admin'			, '__return_true');

/*########################## 
	REMOVER
###########################*/

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

/*########################## 
	INCLUDES
###########################*/

require 'includes/class-assets.php';
require 'includes/class-functions.php';
require 'includes/class-ajax.php';
require 'includes/class-post-types.php';

/*########################## 
	PLUGINS
###########################*/

// require_once(APP_LIBRARY_PATH . 'acf/acf.php');

/*########################## 
	HOOKS / FUNCTIONS
###########################*/

function custom_maintenace_mode() {
  if (!current_user_can('edit_pages' ) || !is_user_logged_in() ):
		header("HTTP/1.0 404 Not Found");
  endif;
}

function custom_setup() {
	load_theme_textdomain(APP_TD, get_template_directory() . '/languages/');
	add_theme_support('post-thumbnails');
	register_nav_menus(array('navbar-top' 	=> __('Menu do topo', APP_TD)));
}

function custom_navmenu_header() {
	$print = wp_nav_menu(	
			  array(
					'menu' 				=> 'Header', 
					'theme_location'  	=> 'navbar-top', 
					'container' 		=> '', 
					'container_id' 		=> '', 
					'container_class' 	=> '', 
					'menu_id' 			=> '', 
					'menu_class' 		=> 'nav navbar-nav ul-hotlink', 
					'depth'				=> '', 
					'echo' 				=> 0,
					'link_before' 		=> '',
					'link_after' 		=> ''
				)
			  );
	echo $print;
}


function custom_remove_style_tag_id( $link ) {
	return preg_replace( "/\sid=('|\").+?('|\") /", '', $link );
}

function custom_body_class($wp_classes, $extra_classes) {	
	global $post;
	$white_list 	= array("home");
	$extra_classes 	= array();
	$slug			= '';

	if(in_array("home", $wp_classes)):
		array_push($extra_classes, "page-index");
		elseif(is_page()):
		if($post->post_parent):
			$slug = basename(get_permalink($post->post_parent));
		else:
			$slug = $post->post_name;
		endif;
	elseif(in_array("post-type-archive-noticia", $wp_classes) || in_array('single-noticia', $wp_classes)):
		$slug = 'noticia';
	endif;
	
	if(!empty($slug)):
		$new_class = sprintf("page-%s", $slug);
	endif;
	
	array_push($extra_classes, $new_class);
	
	if(in_array('page-child', $wp_classes)):
		$new_class = sprintf("action-%s", $post->post_name);
	elseif(in_array("single-noticia", $wp_classes)):
		$new_class = "action-details";
	else:
		$new_class = "action-index";
	endif;
	
	array_push($extra_classes, $new_class);
	$wp_classes = array_intersect($wp_classes, $white_list);
	return array_merge($wp_classes, $extra_classes);

}

function custom_nav_menu_item_class($classes, $item, $args) {
	global $post;
	
	if(is_singular('noticia') && $item->title == __('Notícias', APP_TD)):
		array_push($classes, 'current-menu-item');
	endif;
	
	if(is_page_template('tpl-contato.php') && $item->title == __('Fale conosco', APP_TD)):
		array_push($classes, 'current-menu-item');
	endif;
	
	$classes_aceitas = array('current-menu-item', 'active', 'act-search');
	$classes = array_intersect($classes_aceitas, $classes);
	return (array) $classes;
};

function custom_nav_menu_item_id($id, $item, $args) {
    return NULL;
}

function acf_settings_path_func($path) {
    $path = APP_LIBRARY_PATH . '/acf/';
    return $path;   
}

function acf_settings_dir_func($dir) {
    $dir = APP_LIBRARY_URI . '/acf/';
    return $dir;
}

function custom_wp_title($title, $sep ) {
	global $paged, $page;
 
    if (is_feed())
        return $title;
		
    $title .= get_bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
 
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

    return $title;
}

function custom_excerpt_length($length) {
	return 40;
}

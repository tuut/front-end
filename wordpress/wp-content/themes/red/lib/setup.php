<?php namespace App;

if (!defined('DIST_DIR'))
	define('DIST_DIR', '/dist/');


if(defined('WP_DEBUG') && WP_DEBUG)
	add_action('wp_footer', 'base_template_info');

function base_template_info() 
{
	global $template;
	$format = '<!--The %s template being used is: %s-->';
	$main   = KWrapper::$main_template;

	printf($format, 'Main', $main);
	printf($format, 'Base', $template);
}

?>
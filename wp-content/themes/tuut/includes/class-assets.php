 <?php

if ( ! defined( 'ABSPATH' ) ):
	exit; // Exit if accessed directly
endif;

class Custom_Frontend_Scripts {

	/**
	 * Hook in methods
	 */
	public static function init() {
		
		add_action('wp_enqueue_scripts', array( __CLASS__, 'load_scripts'));
		add_action('wp_print_footer_scripts', array( __CLASS__, 'localize_printed_scripts'));
	
	}

	public static function get_styles() {
		
		return apply_filters('custom_enqueue_styles', array(
			
			'all' 		=> array(
								'src'  		=> APP_CSS_URI . 'tuut.min.css',
								'deps'   	=> '',	
								'version' => time(),	
								'media'   => 'all')
		
		));
		
	}

	public static function load_scripts() {
		
		global $post;

		/*
		wp_deregister_script('jquery'); 
		*/
		
		// Global frontend scripts
		
		wp_register_script('vendor',	APP_JS_URI . 'vendor.min.js', array('jquery'), '1.0', true);
		wp_register_script('app',		APP_JS_URI . 'app.min.js', array('jquery', 'vendor'), time(), true);
		wp_enqueue_script('app');	
		
		wp_localize_script('app', 'global_vars',  array(
														'base_url' => home_url('/'),
														'ajax_url' => admin_url('admin-ajax.php'), 
														'security' => wp_create_nonce('custom-ajax-request')
														)
													);
		
		// CSS Styles
		$enqueue_styles = self::get_styles();

		if ($enqueue_styles):
		
			foreach ($enqueue_styles as $handle => $args):
				
				wp_enqueue_style($handle, $args['src'], $args['deps'], $args['version'], $args['media']);
				
			endforeach;
		
		endif;
	}

	public static function localize_printed_scripts () {
		
		global $wp;
		
		return;
		
    }

}

Custom_Frontend_Scripts::init();

?>
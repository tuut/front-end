<?php

if ( ! defined( 'ABSPATH' ) ):
	exit; // Exit if accessed directly
endif;

/**
 * Custom_Post_types Class
 */

class Custom_Post_types {
	
	/**
	 * Constructor
	 */
	public function __construct() {
		
		add_action('init', array($this, 'register_taxonomies'), 5);
		add_action('init', array($this, 'register_post_types'), 5);

	}
	
	/**
	 * Hook in methods
	 */
	public static function Init () {
		return;
	}

	public static function register_taxonomies () {
	
		do_action('custom_register_taxonomy');
		
		/* Categoria de noticias */
		register_taxonomy('noticia_categoria',
	        apply_filters('custom_taxonomy_objects_noticia_categoria', array('noticia')),
	        apply_filters('custom_taxonomy_args_noticia_categoria', array(
	            'labels' => array(
						'name'              => _x('Categorias', 'taxonomy general name', APP_TD),
						'singular_name'     => _x('Categoria', 'taxonomy general name', APP_TD),
						'menu_name'         => _x('Categorias', 'admin menu name', APP_TD),
						'search_items'      => __('Procurar categorias', APP_TD),
						'all_items'         => __('Todas as categorias', APP_TD),
						'parent_item'       => __('Categoria pai', APP_TD),
						'parent_item_colon' => __('Categoria pai:', APP_TD),
						'edit_item'         => __('Editar categoria', APP_TD),
						'update_item'       => __('Atualizar categoria', APP_TD),
						'add_new_item'      => __('Adicionar nova categoria', APP_TD),
						'new_item_name'     => __('Nova categoria', APP_TD)
					),
				'hierarchical'          	=> true,
				'label'                 	=> __('Categorias', APP_TD),
				'show_ui'               => true,
				'show_in_nav_menus'   	=> false,
				'query_var'             => true,
				'rewrite'               => array('slug' => 'noticias/categoria', 'with_front' => false)
	       ))
	   );
	   
	   /* Tag de noticias */
		register_taxonomy('noticia_tag',
	        apply_filters('custom_taxonomy_objects_noticia_tag', array('noticia')),
	        apply_filters('custom_taxonomy_args_noticia_tag', array(
	           'labels' => array(
						'name'              => _x('Tags', 'taxonomy general name', APP_TD),
						'singular_name'     => _x('Tag', 'taxonomy general name', APP_TD),
						'menu_name'         => _x('Tags', 'admin menu name', APP_TD),
						'search_items'      => __('Procurar tags', APP_TD),
						'all_items'         => __('Todas as tags', APP_TD),
						'parent_item'       => __('Tag pai', APP_TD),
						'parent_item_colon' => __('Tag pai:', APP_TD),
						'edit_item'         => __('Editar tag', APP_TD),
						'update_item'       => __('Atualizar tag', APP_TD),
						'add_new_item'      => __('Adicionar nova tag', APP_TD),
						'new_item_name'     => __('Nova tag', APP_TD)
					),
				'hierarchical'          	=> false,
				'label'                 	=> __('Tags', APP_TD),
				'show_ui'               => true,
				'show_in_nav_menus'   	=> false,
				'query_var'             => true,
				'rewrite'               => array('slug' => 'tag/noticias', 'with_front' => false)
	       ))
	   );
		
	}
	
	public static function register_post_types () {

		do_action('custom_register_post_type');
		
		/* Notícia */
		register_post_type('noticia',
			apply_filters('custom_register_post_type_noticia',
				array(
					'labels'				=> array(
						'name'              	=> _x( 'Notícias', 'taxonomy general name', APP_TD),
						'all_items'				=> __('Todos as notícias', APP_TD),
						'singular_name'     	=> _x('Notícia', 'taxonomy singular name' ),
						'menu_name'         	=> __('Notícias' , APP_TD),
						'add_new'           	=> __('Adicionar nova', APP_TD),
						'add_new_item'      	=> __('Adicionar nova notícia', APP_TD),
						'edit'              	=> __('Editar', APP_TD),
						'edit_item'         	=> __('Editar notícia', APP_TD),
						'new_item'          	=> __('Nova notícia', APP_TD),
						'view'               	=> __('Ver notícia', APP_TD),
						'view_item'         	=> __('Ver notícia', APP_TD),
						'search_items'       	=> __('Procurar notícias', APP_TD),
						'not_found'          	=> __('Nenhuma notícia encontrada', APP_TD),
						'not_found_in_trash' 	=> __('Nenhum notícia encontrada na lixeira', APP_TD)
					),
					'description'         => __('Notícias do site.', APP_TD),
					'public'              => true,
					'show_ui'             => true,
					'show_in_nav_menus'   => true,
					'publicly_queryable'  => true,
					'exclude_from_search' => false,
					'hierarchical'        => false,
					'rewrite'             => array('slug' => 'noticias', 'with_front' => false),
					'query_var'           => true,
					'supports'            => array('title', 'editor', 'excerpt', 'thumbnail'),
					'has_archive'         => true
				)
			)
		);

		/* Banner */
		register_post_type('banner',
				apply_filters('custom_register_post_type_banner',
					array(
						'labels' => array(
							'name'              	=> __('Banner', APP_TD),
							'all_items'				=> __('Todos os banners', APP_TD),
							'singular_name'     	=> __('Banner', APP_TD),
							'menu_name'         	=> _x('Banners', 'Admin menu name', APP_TD),
							'add_new'           	=> __('Adicionar banner', APP_TD),
							'add_new_item'      	=> __('Adicionar novo banner', APP_TD),
							'edit'              	=> __('Editar', APP_TD),
							'edit_item'         	=> __('Editar banner', APP_TD),
							'new_item'          	=> __('Novo banner', APP_TD),
							'view'               	=> __('Ver banner', APP_TD),
							'view_item'         	=> __('Ver banner', APP_TD),
							'search_items'       	=> __('Procurar banners', APP_TD),
							'not_found'          	=> __('Nenhum banner encontrado', APP_TD),
							'not_found_in_trash' 	=> __('Nenhum banner encontrado na lixeira', APP_TD),
							'parent'             	=> __('Banner pai', APP_TD)
					),
					
					'description'         	=> __('Banners para a front-page', APP_TD),
					'public'              	=> true,
					'show_ui'             	=> true,
					'publicly_queryable'  	=> true,
					'exclude_from_search' 	=> true,
					'hierarchical'        	=> false,
					'rewrite'             	=> false,
					'query_var'           	=> true,
					'supports'            	=> array('title', 'page-attributes'),
					'has_archive'         	=> false,
					'menu_position'			=> 28,
					'menu_icon'				=> 'dashicons-slides',
					'show_in_nav_menus'  	=> true
				)
			)
		);

	}

}

new Custom_Post_types();

?>
<?php

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  
  if (!function_exists('redtuut')) {
	
	function redtuut() 
	{
		add_theme_support('automatic-feed-links');
                add_theme_support('post-thumbnails', array( 'post', 'oportunidade' ));
		
		//add post formats support
		//add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));
		
	}// 
}
add_action('after_setup_theme', 'redtuut');

//imagem-dstacada em notícia-destaque
add_image_size('Imgpost',526,234,true);

//registrando os menu-principal-dinamico
    function register_my_menu() {
        register_nav_menus( array(
            'menu-principal' => 'Menu Principal TOPO',
            'menu-rodape' => 'Menu RODAPE'
        ));
    }
    add_action( 'init', 'register_my_menu' );

//OPORTUNIDADE > postytype --------------------------------------//
add_action( 'init', 'posttype' );
function posttype() {
  register_post_type( 'oportunidade',
    array(
      'labels' => array(
        'name' => __( 'Oportunidade' ),
        'singular_name' => __( 'Oportunidade' ),
        'search_items' => __('Procurar Oportunidades'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'oportunidades'),
      'public_queryable' => true,
      'show_ui' => true,			
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );
}
//OPORTUNIDADE > postytype --------------------------------------//
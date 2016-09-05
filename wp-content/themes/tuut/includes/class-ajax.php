<?php

if ( ! defined( 'ABSPATH' ) ):
	exit; // Exit if accessed directly
endif;

class Custom_AJAX {

	/**
	 * Hook in methods
	 */
	public static function init () {

		$ajax_events = [
			
			'lead_save'	=> true
		
		];

		foreach ($ajax_events as $ajax_event => $nopriv):
		
			add_action('wp_ajax_'.$ajax_event, array(__CLASS__, $ajax_event));

			if ($nopriv):
			
				add_action('wp_ajax_nopriv_'.$ajax_event, array(__CLASS__, $ajax_event));
			
			endif;

		endforeach;

	}
	
	public static function lead_save () {
    
		$json = [
					'code'=> '100'
				];
		
		$errors = array();
		
		/*

		if(isset($_POST['_wpnonce']) && !empty($_POST['_wpnonce'])):
			$_wpnonce = $_POST['_wpnonce'];
		endif;

		if(isset($_POST['nome']) && !empty($_POST['nome'])):
			$nome = esc_sql($_POST['nome']);
		endif;
		
		if(isset($_POST['email']) && !empty($_POST['email'])):
			$email = esc_sql($_POST['email']);
		endif;
		
		if(!isset($_POST['_wpnonce']) | !wp_verify_nonce($_POST['_wpnonce'], "register-new-user")):
			$errors[] = "Operação não permitida pela aplicação.";
		endif;
		
		if(!isset($nome)):
			$errors[] = "O nome não foi preenchido.";
		endif;
		
		if(!isset($sobrenome)):
			$errors[] = "O sobrenome não foi preenchido.";
		endif;
		
		if(!isset($email)):
			$errors[] = "Você não informou um e-mail válido.";
		elseif(empty($email) | !is_email($email)):
			$errors[] = "Você não informou um e-mail válido.";
		endif;

		if(count($errors)>0):
			
			$json = array(
						'code' => 500, 
						'request' => false, 
						'response' => join(', ', $errors)
					);
			
		else:
			
			$data = array(
						'nome' 	=> $nome,
						'email' => $email
					);
			
			if(true): 
	
				$json = array(
						'code' 		=> 100, 
						'request' 	=> true, 
						'response' 	=> 'success'
					);
		
			else:
		
		
				$json = array(
						'code' 		=> 110, 
						'request' 	=> false, 
						'response' 	=> 'action error'
					);
			endif;
		
		endif;
		
		*/

		sleep(2);
		wp_send_json($json);
		
		die();
		
	}
	
}

Custom_AJAX::init();

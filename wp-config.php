<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', '');

/** Usuário do banco de dados MySQL */
define('DB_USER', '');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', '');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e^5[_-gAP^7Zg];z^nI%|dy=T@Q2b%|,&<6*gaKa 6^c+bw)*Fn} W+]7bXw&}A1');
define('SECURE_AUTH_KEY',  '+>o_qR6CpNlOs)IIr!(]NyO,/an?.*)P-h.M]fQ!C=~%1[%Lmy8[FCSF6ew8&SEm');
define('LOGGED_IN_KEY',    'oW5bCm{tmhD!O,+ ?f|+.2sW7i398#15)XcZAk-dY;PN{jkXQ4 XCPg)7f7U1>cj');
define('NONCE_KEY',        'LDb;w6TmqIH|.b5 ]mq5p5D;$^g)87b*%u:>@k3sG-&]X/-*W+dBBtKt7cP-nut`');
define('AUTH_SALT',        '@K>9-%!rRGl)BMN@:Nx-&lr+|pBu%m5)53]J)+@LED|3A=pdz,zkV NSq0e_]1z|');
define('SECURE_AUTH_SALT', 'zIjU?-%[hY {xY4P[ g!A@WmW_GOGGU|_~kkrmkEjCBXJ$]>t|G5EK:C,Zn=qONO');
define('LOGGED_IN_SALT',   ')L[ieO^_VM,_4@aA0^arX #!e_FceAEe.B6N#s=lN!!7`c67-xWG9=c5Qy-4x*Ho');
define('NONCE_SALT',       'M7)VE%sT}Q4YA4MO|Xld]D-X|PY2IF41S8LbIcP}Wru1a= L6-< <H!4+R3C)EcC');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tc_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

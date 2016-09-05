<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wptuut');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NQFX.Jj?1Ym-xdg]RJD#eZi}/p{r,3qiY9=w71&VJr|K;omyYJO:/1.b*:8]Fg{W');
define('SECURE_AUTH_KEY',  '*m.VDI7YxZPIcVaM8J>5Ty,EP.xpYV7JggeKqtxp }M8h,jLtu,:l2ijNd,oE)k3');
define('LOGGED_IN_KEY',    '7:rI+$Z0s&pH=%Csj86(k?].ngG}w3>^ZKt%6f:^o,ya_?]E7|mD;?D4[yNmKb< ');
define('NONCE_KEY',        '{h)r.AJ8|7_]@7ls3E8oALP*utlm6Q$,4)9.>T!%lmDI4BIP7eTBZO{t-mFSC]F-');
define('AUTH_SALT',        'B1~f]>v_,#Bn}wVMES*[o[@82t#}.`&p*GXRvw&lr6RD^vnZ>} cQbu+]5uG.E/C');
define('SECURE_AUTH_SALT', ' QkHgfUSK,al#?9m^bO0|0]miVaNL`;0Af~9}^hYippM0rBM8jhrPu5<x5iq}mRt');
define('LOGGED_IN_SALT',   'vcFEb`^y<!S euH=D.g1h,U[kZ%T4V uz1yV7S>rj+_#<8@L-`8BX7P81#mC9s!:');
define('NONCE_SALT',       'D;wOKDWk6`M}5ds3~w;)#&Kn qN/5v>6zm5zD!`O15$BYN(ZRBD@!ec68:ER - t');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'jhon2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'dioni');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'vp{[Ms9D:,PH0jP%)h}NB$zI1[%{1Glo=(Ap?3p84tD[9D-1YSE4I~xt8md>a84d');
define('SECURE_AUTH_KEY',  '.IXBTZ!y1*[9&&MEjL]s{GfF(tfy@6zj@<@Z NI%TKVQ9ks?!8}<*[!RkA.b-_0w');
define('LOGGED_IN_KEY',    'JStbmoV$Zb0:Ory=28Q63]4;D>I! o)l1:rz8s>$&eg$`eg:?LqWh.4THe4 ]dB>');
define('NONCE_KEY',        '*+y<[~a:h:7QMj;OT4O?d|hg~Zd.Ry.RW6.c^<1lF(c|/~*trwhmF;nA4OQX.aHB');
define('AUTH_SALT',        '@~q9 P6? =`{qi%!$qv$[{[C:$ltlnf5N6bcR,}!EtjvH;fVY}YbB{hcHIHkoZ6h');
define('SECURE_AUTH_SALT', 'Ccpwd`7sa*eUD(=>L<GZ[gSn-soGdIrXxIrD2!Gw I6RhV*UETD9eMd)FKc=9.5z');
define('LOGGED_IN_SALT',   'JemyZ_~`P5L?VoC(!f2#[VxI~g2GeA{+`}??&.%:II8=Htm^%PBZon$Y<1m~&D;~');
define('NONCE_SALT',       'Fz>Y{25*s8A@=h!Hpiw~-;~q*9P/]e-z#NhCwXyEm!D1P>}g>?&!AkoY_(o|_9c7');

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

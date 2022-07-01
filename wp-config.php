<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dengun2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_M]*50]A]|pR!U-X;J}JU*,nbW])v{.4F`mV{q3)&41Aa/0D{I*V91dKZ}Vwx~-~' );
define( 'SECURE_AUTH_KEY',  '?5%o)9[)<l -$E_8o8oA:#;sq4g~7L-s4V)H[4u7*|Jw8[EVdjS5-%z0]YBPyls+' );
define( 'LOGGED_IN_KEY',    'j}3wi*lbGP=~!{R+BXIFF2iYDy{v)k(^/x*4Nk(av%_3o!qE+Zw@lEESP%|2YbjT' );
define( 'NONCE_KEY',        'n=DNOx:qi^h|d#rVb3mH_s1_{[=Z}y(zj@%Vm`}2KA?p5qx?3=8;Zd|`Dde6zSPV' );
define( 'AUTH_SALT',        'Cu?@-&tcrM]B?:)V=n:dj&m)?t##/yV/AT-+uV`.eep~Hv**pPC&/je(];?9IjY,' );
define( 'SECURE_AUTH_SALT', 'xYr!SON.AUJB;MBqJ$yb0C,!|)>iZqUvc[kXBg~UeWs3DRT# fas}lUQHlqm?(r$' );
define( 'LOGGED_IN_SALT',   '{p#MR8-bTk;Mag>H{u0v#m^RG;U^O^%*f>-he0AG*^wvVG.c|BC}=t?*+j]MzJ#m' );
define( 'NONCE_SALT',       '`P*Xpue6ARHq3%/C_H5seJ]{$E!Q~BBNde59o)vroLK~^E|VhLxep;vyI=LNhjZc' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'dg_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

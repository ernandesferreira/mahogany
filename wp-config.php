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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mahogany');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q L/_]zRkT[|Gp vw,]0.PLgH3x1B.b83!yGE`D(lOZJ&ZAzQ*>jG63PZ<5UR)It');
define('SECURE_AUTH_KEY',  'g:.W1S%Q_`;*.jR3sd=OhtBw0m${IcYpmGHYpr7`;h*z9=DZsFhT6;[pxcYY2vg~');
define('LOGGED_IN_KEY',    'iX6Uh:K90bGP6rO{qzgK;$uRh=c{7HW82y,.{S$PKrH2r:bk]Iw6Py%~GXf[YVF^');
define('NONCE_KEY',        'z+mjy#TBI5DDUAo6G_ldRzV8o.f1!@y7]CF<HJHysh]TKEuDI*eX0H4ASQ;,*%Pn');
define('AUTH_SALT',        'amrNdkr]>zF,dL(~KY@Ne;[CT=!(ChJ7JzlCwWN^-G=?r7(LKLU=-O8ss:Lt#M;I');
define('SECURE_AUTH_SALT', 'LM <^_RhjkJidlUo5.<->.&W6>=b!5.AJr(FSA86mrURL?Sw9`XuJOBN}$]> !lc');
define('LOGGED_IN_SALT',   '7H?H<kC2!i:qv!D)#j@pcB,%~#}Jn_?AmWr?,~17nP=y[~le8&jaQ*NmvsKVEhb6');
define('NONCE_SALT',       'D=$&`tL2_P#ER)F^?OradAa?!!~*X|Ig+xCI#F=Db_3NH[jg3ihbG5KJc</v=%r,');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

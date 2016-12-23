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
define('DB_NAME', 'jailson');

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
define('AUTH_KEY',         'NIO6tRh.|ClC{b]z^z:CI;kw8j!+nw+`dsO10mO/99Ckn&C`UZ30Ln[1)TolV+j^');
define('SECURE_AUTH_KEY',  '_Rfo7p[#Zn|9453{`:naGDq!x>zE)>M&Sl+JfigTqI+CEc j_CM(?7OSkBV-(`jZ');
define('LOGGED_IN_KEY',    'VB[<EO[),ZBN B^Dv%9eQ*$Q{f)8GHG,8, RV3@o1w?*gy4RD3S< ;$O{z/({Tru');
define('NONCE_KEY',        '7~k)(5A[~90^cpmPWK@QwjK{d=AeD5dPipF5@{+q[RlNKghj(rs!`VGj8NkD67@k');
define('AUTH_SALT',        '%,i>:}G&WIBkHx~*fXeu)J/VL>%TcJ_dF$f7(-@Qji(+IQs+4@Q%j40$OEQ%CS*I');
define('SECURE_AUTH_SALT', '-i6jfNL?3bM~]!l[O%$V`2-]~xG2{X}ziV/|O^u[t{&L3-;%E.4zG^^MdFTb!vOW');
define('LOGGED_IN_SALT',   'w(CeVxfW2m7XO0CNk8YfLp_EZ/]`M!p<4|0&k4Cx&HbDRp6WR32k]9Sa5 mV7tR{');
define('NONCE_SALT',       'y;2+uSZdK<jV]d|A1aTi>=l$TXC`78hfQU7ey|@xK`_*%7CX%$wF[SqHFJQ8Tg>E');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wjajakp_';

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

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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'pL!.+px{m#X8l+nf#[56%Upkp>+y&pwu-o}![:qNp)5Hgub`.U}_Gf;9glNhCg~x');
define('SECURE_AUTH_KEY',  'y2>_nCi0rJt*rBxah:m+J7[45B^hG||fN$XALpn}-=!n`P{s<#k4Vmt:F2djJ)`r');
define('LOGGED_IN_KEY',    '*>w;oTw-8p=y+?|3?DuN<5<J*-Pg-&vG_w>%5g|s8iD3}D?d?}q)sr@T]UPtx[7w');
define('NONCE_KEY',        'T{FCY`un;g:KDP#772|KpgD#.ask:qaE<q3gL{/XQQa=J`!BRTX&VgAMvfntcJGn');
define('AUTH_SALT',        'HtI(uY#CX]x{nYM:r[zW@c>E-~n~cEu}8lI^;RXf4F|PE%5+m7Hz`Q?{rUKlwo_l');
define('SECURE_AUTH_SALT', 'C4AIBrO3knf>;kE@igovNI85fqyq}z%8i!%z]prbG+(.s1Rg/<X|C$h_wG-eR.1G');
define('LOGGED_IN_SALT',   '!K@]LY+AAycMS/Zw#yfk8bn!k0Je-yhD3N:UZx`Zj^i15p#kbH6+~1*Y>n-N1oTP');
define('NONCE_SALT',       '{ecj1e#{GEij1Avni4CI*%H?T0kzTm2:K}df#[p[e&bG## Wz)i?MjyrM(U5|aIm');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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

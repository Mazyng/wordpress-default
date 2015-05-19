<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '-AVT p^>:o6#(Ur04ulElVnqr*nv5p TQ|D<0$s&CF^iCIQ:wB+5a?dX31]eEM+}');
define('SECURE_AUTH_KEY',  'glM<a/Y{u/u;^BbE-97DY)+`p-IX%X=AMpfw3P`w):@TQYbv|x]|7FZFm)T$o+K*');
define('LOGGED_IN_KEY',    '/+1d4Pje;w0Y7!7p!!x>Pu2!6a,Pz0k[!aS?NZU!-D#bzWJt[f=noeOVN{Pb83R&');
define('NONCE_KEY',        'fQ0tI`Zj]CDozeWlIF-=#4E5lH7^ObF.77hii1Y/tmd=x!)qkwD]O,<C@$|4z|:a');
define('AUTH_SALT',        'XFHb<U4YH+VK|]`9pDHm_`Gz :fz|@^wn-$l-70L!3bmp+%agah]dkZ()13$!V|g');
define('SECURE_AUTH_SALT', '1{XqR=E+I95{[{JUkvPD`Qk8&U++#9EE;/,7a1>@2~:|69R{k}yP0g&R(Cb6&vIf');
define('LOGGED_IN_SALT',   '7N@zMXF8YmR-;-Cz@b|d|S/dmH,}=Ceszqf l&Se7EbFFSJ`:HnW||lAiLJtkkPn');
define('NONCE_SALT',       'oxEc%%KJ<+_rU&J-FFO2*p-W_}NjKrJ+yC1=ESVCLK1:[DSTs6C/9lL]t}/s0s29');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

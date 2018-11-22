<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //

if (file_exists(dirname(__FILE__) . '/wp-config-local.php')) {
	include(dirname(__FILE__) . '/wp-config-local.php');
} else {
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('WP_AUTO_UPDATE_CORE', false );
	define('WP_DEBUG', false);
	define('DB_CHARSET', 'utf8');
}
$table_prefix  = 'wp_';

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_}!f@ [@W04|x2|QZQ97Q]bA+x>HqgvDTxCm[?xwSB/cMB[Op2aL4S7oT^pE;)X.');
define('SECURE_AUTH_KEY',  '>=lvr1Q=Dr4?+-@L/+(.qqb_:Rg:NyZ<60v|FXITlZJ1k2U]]?Sg`wk?$_<Vt[vW');
define('LOGGED_IN_KEY',    '-g^erMF.B7n[U]|/Cxo79gNj+|0DkSX{71pc(vhoUsebKago2#-HE483^i/C6rYz');
define('NONCE_KEY',        'Tm.*:i/hh~3 *s+DoTsA2akcQKypWLY0huOc5LKakYQ@eM}4sa|M$(xbt~P|ZUQ5');
define('AUTH_SALT',        'xST@nn+B`5Xf[R+1-Vj$Z _Ujzh=-|<`.P-*0|TC&#QzAY>_W-h?-.S,w#69,%`B');
define('SECURE_AUTH_SALT', 'l5&OF|o/+:jU|A^X]ZKz877V{Way|/~GB(M4vBbm.j,gv|ok`X.},YRt|O^9/v6H');
define('LOGGED_IN_SALT',   '-QcK8KVen&hOzD8{dv4-,|<-+b/||PwuHC0qp5-?o#c3rnq%ENTDNM]-m^+]:9AG');
define('NONCE_SALT',       'Y_ZW-7:xroh,;/:KG JVFvE <k}z=I`h`QOJS-+5[a rWB9ny)<?=RhS[o`[:l?-');
/**#@-*/


/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

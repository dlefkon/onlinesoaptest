<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'lipton');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*{b5HaCH iTu$2-H_)Ot1Wp%_aKhf++yU0J#n;dUr8NaUD,f./$0qXoorK+Mu=Yy');
define('SECURE_AUTH_KEY',  'O_*OgB~sWb wtOD55YK/|ypNmYt4j!6{:ixx;U!?9&glBX#a`?~[o_M<%s:2/7fu');
define('LOGGED_IN_KEY',    '_3**J97JY^%Fc7(t0,gFeBWL=Cdka +NG,/[*9]LspSaHr:x7?NZkp(Li8WNhE,-');
define('NONCE_KEY',        ',PRJFa@>D}[e7>s4v<spkfDr,M^}r7|3@hP&^KzjN_V@0feO3X=R$nFwccmoje*K');
define('AUTH_SALT',        '3=aW=IxDKAoEamiCW%:1%B41lH%g1/MU(d.9/2@}$c/wJdb!xd<9E#v$1./r$:9X');
define('SECURE_AUTH_SALT', '|`6WSidzgn b-+Sin7?=p!MU8PmuK<FT_-m)A3kANz=6<aCX>2}&|Z+ROXo3.{@z');
define('LOGGED_IN_SALT',   'g3*#s)$K2:=0g+D7VQa.ARqGZZgyC{%s#IYgRJ<,R-M_TOc@Nk*2<m&k+sp?=+kU');
define('NONCE_SALT',       ';GK$8Do2={%*[UBWeZ<^ZN5l(HA.TIyd7{S@N(kftdEC_T/<6tP0g=dNrT-Ky]Vu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

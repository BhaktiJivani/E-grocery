<?php
session_start();
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pxgrocen_grocerye');

/** MySQL database username */
define('DB_USER', 'pxgrocen_grocery');

/** MySQL database password */
define('DB_PASSWORD', '(PaI!s0{*7y[');

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
define('AUTH_KEY',         'J)y|UgdUueu/fMBGA43`?/y!(X(3Ji0H?<OlB/%A:WpU0g-s+~Za|s%WG4$MME?5');
define('SECURE_AUTH_KEY',  'NRH-(U4+_P5dvg&TxkA4h}|P]/^jQu.n 6)a$+;]U|z T;T/$T5F|5K++(1[)*s)');
define('LOGGED_IN_KEY',    'bKV+U7PIY_U|-[c|Y6|(-mTyjK-tbY_6Q%VSH-AUU{rV[353 JObXv;>m*M;a>/q');
define('NONCE_KEY',        'p=5jd8D=et3%fq.L%BW+SG3h B(MUd)K2`Z0%|iZs54.H@v}[j9C7 E?_0/v~f8>');
define('AUTH_SALT',        '+<*;G4>IE-3w@M^f|1^tEdF2>G|hKb&mK=7C8.K3Bn$Z,`jvQ|l-@`;ND,+3@Ve-');
define('SECURE_AUTH_SALT', '@]-BzTpyiN=6BD?+2oS2+;|&#~=ZB#gc~+ WKauC?99+a@wCZ8W5HP9pD[$t`&-T');
define('LOGGED_IN_SALT',   '#9x7.?@?+RD-Jm+N?Ze;nqn3TKYJU9Rz`Q8k11[cDy{3~by1i<E/~U%dfgD&vLt$');
define('NONCE_SALT',       '#@E3b/9|4G%-_V[jklO10j$i}9hr2K+s)|+WD!Ovp=_J|l)5<g)i#4e7gX>K;fS#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

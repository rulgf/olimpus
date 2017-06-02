<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'olimpus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'N$qTV/!I+>Y~~#CLsk`C>@v|}>xtFYias84795P!A0|>a`gn<^RY`Y^-2t)T3OUK');
define('SECURE_AUTH_KEY',  'EveD>UikOnI>{>LR/>}-(D]i]/}Ch49jJ=?3<@xAA1(qJg7~FfW`?fx.F9OjV<#6');
define('LOGGED_IN_KEY',    'I.Kov?4N@oq *i1*T .`;+#8l:t|svJi2-IcI4`}?o=E{TqNtJ2H|DBJ7f =FkIK');
define('NONCE_KEY',        ':Z@rY@+Syb,?F[kbtkb&Ko:jD<3OAK/iY.3 d%VMxY{H3+L}u_`c y5=>TQ^?obT');
define('AUTH_SALT',        'CE3$)llwLOw4Z:bF>)C)QH,13?oP6A#KdE==p~_cc,t#z{Ht;:W%bg^/U/lY?,Q~');
define('SECURE_AUTH_SALT', '76}`OO&fV(m3F&yY)D5$g?)POK<02>iFx3m)0q,Y|/>?`35X,VrtZ|SG![?)J+lV');
define('LOGGED_IN_SALT',   '^!B&H4v!V3[uAgveI`[4[My[{<ULtxc%4yFL(|->3TQc-ujE4i:H$@9;k;.,W(LB');
define('NONCE_SALT',       '9t&.bC?AqXXqU{LlI~!*(Z1EY -92;Jhf ]f_a!*4n1(RR)B/Hgyhk02y2VC(.Og');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

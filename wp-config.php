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
define('DB_NAME', 'gitstuff');

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
define('AUTH_KEY',         'd@yU#`Zh#K~.*S)QmVlQJ/_~ZkZy8gn>YF8UbgS6X,bylQ!d:c4PIQ]FFYCv&-&&');
define('SECURE_AUTH_KEY',  'R&9GCZmwB`ueWU+ZM(/}p[*~cJ$M)`-C27-.&zEQ((b/ MZQQ,?Ts%[+ :[C9=|c');
define('LOGGED_IN_KEY',    'u%YO[>PxCJqYo/_rJ EuS@io^:n@$~~YCs@.R#*Y 9*H9WT^Pniv,;];`>Nj[<QQ');
define('NONCE_KEY',        ':z/- %IN8kchKq&9 pr0>g&nWvCcwM 4S?q}sJ,Nxi(epww7GQ}8]77AljO}uhcp');
define('AUTH_SALT',        'FN(q2$W+f%o=84D!{ 6VCGK~IxG5TP%@*.0H`_dN6@^oMR9Y%u,0m&{(tH?|B;c&');
define('SECURE_AUTH_SALT', 'Zqil6 F8-uh!qB+|P6fh*kNF&h5C|NOl<Xp`/wN+i.E&cpe8QrXXExs3TYLMH[[r');
define('LOGGED_IN_SALT',   '3;.?&QaU).%!(P;M@tw p*X|27{DtY0?7}Y@K4>cnRMu5bf~|@#rJ&cz2gR1~ZZ=');
define('NONCE_SALT',       ',12R.m+Sk,[dg<SFg]hh)/RO|.wGdYYXblR} omyS>Zd?vB06kjEpDGbcs$G6mLy');

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

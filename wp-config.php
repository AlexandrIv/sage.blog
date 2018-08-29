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
define('DB_NAME', 'sageblog');

/** MySQL database username */
define('DB_USER', 'alexander');

/** MySQL database password */
define('DB_PASSWORD', '1qaz2wsx');

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
define('AUTH_KEY',         'yOM S;cFut4=Q}+7Z/:%z|zrLRN(>hj@aa*+x.uV9 QlXNQFZ)u]8R4@lLeb_r|;');
define('SECURE_AUTH_KEY',  ':+ai&tHV/VQCg?J9F WP3&5/kt8R={p.0wl]to9^{dZ.<)@TUnLyx_[TrXw]m2*k');
define('LOGGED_IN_KEY',    'gi@}GpWp7=j{_^A~uv}O(_^E=N*1[F4b%qXTuiRY6Sv;WHU,-5R9/Z<Ba(HK1;Hy');
define('NONCE_KEY',        'z C0<pNY|>XMk(,QSy|um:;b]eIkR^iIv]QL?U5Tgq`j&ycmjVfmm,gJbsp905F4');
define('AUTH_SALT',        'aIwA-7pfN]pR12jx~V^]xBJzv32^zc+/uJXa iq+!Tm[9K1*Ql7#GeyzhJw=~?4c');
define('SECURE_AUTH_SALT', 'eq/i.TqJ(r,gOO>Hy 7RZu5I 8eJ8+J_U)g#V]ko~6d*3$=g5z)NJ1,efOR;dONo');
define('LOGGED_IN_SALT',   '+f]6?odwd0*E`y59HgZF;Sf@Z1c Rt}E?kCj}eh0| ,[.9(_Gh(}.`.cwG,OTe]d');
define('NONCE_SALT',       'Ue-fuB4jnB+(O2!Tv TM|sz7|7i0#+Fg+;)cc9HhJy|=BNPTa_6qXsqT0zpz:]01');

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

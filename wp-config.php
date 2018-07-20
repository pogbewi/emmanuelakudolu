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
define('DB_NAME', 'emmanuel_db');

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
define('AUTH_KEY',         ',Q/(+hVcYv-MI2$`l0M|;Dj_#z,:./},~3^Xsw},q!/v8OqEF5^g3J6W8HzDSYlM');
define('SECURE_AUTH_KEY',  'q0N!&0J[IGlQb;]-k,Uv&OdrTN?`Q2b X2I7pUpQChqx)>D,Duv,~qD/ew868F3y');
define('LOGGED_IN_KEY',    'l@qkP4.2F[Q0#3`XjKTFcpC067dpd-cUc*ZI$c8g8%+hSU;&Pt7DY,qt4aG1~B5:');
define('NONCE_KEY',        'SR`8D`}q;TTjl{`Q9KpH<9^qOm|h7b746AN[E{6-.FJm1>JYR@KP-9h}2i|K)XW{');
define('AUTH_SALT',        'Gm#/P^zC#?x!Zo9|.R^qo-FQy4D 4l$*^WE)O7LOP+-D*Kf@*/xp.>R&,:wxG2#*');
define('SECURE_AUTH_SALT', '>,A4t0M9XU/OOcpqJB*QOWC34,9]~k3dMS}F&vR.w[|B!u~OUB&r)G;}`y?*=.Nf');
define('LOGGED_IN_SALT',   '@kpPW)%V`2l+9RF}%BUeAdX3vNU^sRP1|peZU{AAHD+1fd)PPa6WW~m#zutDuB=r');
define('NONCE_SALT',       'f8K^0+YWG{:W>5zFbS-<H9gQQ?#|V)aN[BUKEwLk@kT,p_o1x>()hEJ1A{UCZO^~');

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

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
define('DB_NAME', 'fashion');

/** MySQL database username */
define('DB_USER', 'ortex58');

/** MySQL database password */
define('DB_PASSWORD', 'ortex58');

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
define('AUTH_KEY',         'O~#DGUym5qpo5CtJStNB02qg6 jLD|@WA+[X,y,oW?dy|]c>&l*H::D+(eo7WrqU');
define('SECURE_AUTH_KEY',  'A|kXhz]vVEPa+zT*t bl;b<]O:T;f18uUO!0Ft~a$o;HDVQD!r%c,+?.:Xd>a)W0');
define('LOGGED_IN_KEY',    'Hw+)#{d5Qsi,h[*1puQ#,Ec*{<Wxfs1*<mVB?~!*I#^#U;j&+g|tr*]:|I#eZW+5');
define('NONCE_KEY',        'F,B#GFGFA- K%h[!{t){0htXIv-9[2YAA`Py=L>`!O>s2!1_^c)x+xe)nv1qgtqK');
define('AUTH_SALT',        'rjWB3d1XG_ZZXYr{s>-z.6xZ.${Tz8Ta34A:?)$-h|CJAm!~to2C9*-!rO`cq):*');
define('SECURE_AUTH_SALT', 'PZ)Lg*n<][lAc5eJ6SFnf5n#o|vFNf>SY1BT&Kg{qFStA|4kP>I8ZzG|*3c$(i3q');
define('LOGGED_IN_SALT',   '/=R;8s[1{uFN>GR xKG>FOc?tO^=[#t39s0yOjc+3ooE-L|EMJa.`1YSVVCbAW7D');
define('NONCE_SALT',       'IYDTalh+>hse!BJ77eHGr=}T>p%J/=T9j$Q:,WIlE_~lr=u<XH|GB[oY%7R|rZF%');

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

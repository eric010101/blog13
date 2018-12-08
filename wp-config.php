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
define('DB_NAME', 'gogocode_blog13');

/** MySQL database username */
define('DB_USER', 'gogocode_blog13');

/** MySQL database password */
define('DB_PASSWORD', '2Z-pgSd]36');

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
define('AUTH_KEY',         'sqhyxtpsyurfxu6p3xryt9q7b4d6xdezs3d58gpxqs7babjmxlqfjb9qvbsptguj');
define('SECURE_AUTH_KEY',  'wewxnnmrhhgcj92mpashwfxa5gp7kn1d3msdbunv0l0k3c6uk22lz5zdslvu8rkk');
define('LOGGED_IN_KEY',    '3tuaehu9qhg9b8zxhpdmyzobgavyytkibuf6ccv7igwd20d3nuqfpzniiyvxriux');
define('NONCE_KEY',        'xijjuspfq9susklyqvl1lthztnnabvw8gcefh1lfutyt3govvfahp8hugfxgchkf');
define('AUTH_SALT',        'odnjxplvo8jpzxb4fqcfxq9rvpstx2bicjzgaeno3dsxrze7tkyaifr0uofrynej');
define('SECURE_AUTH_SALT', 'n1wo4jgfnloqml2a0nxgzgyxfki144b5geyznbvd4y02vbc1ap9lkm8m3pirbicb');
define('LOGGED_IN_SALT',   'nkrpes68xdzmfkmdvyye8wxumluvztqw0xpvkz1ejhie4tnhq2cjmerdq1nh3axq');
define('NONCE_SALT',       'tik2vfz6mclmvtmdhndllggw6yh5uqyl5uv36ph2p0xtmhwzesdb3exxr4lao1uq');

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XvJEoVOVsj/9aSgKXI0C9L0VHiIeBsjvMAU64J9aP/tmXIHz9AwTcQQxGa3YA7pLiDvvJUNn/lcfyzo6dfESSA==');
define('SECURE_AUTH_KEY',  'CWJPFGqaRogmW0Jl9SeB8t4InBIAvvi0CkAMaACF1s1B0oxbhI9stJnZATnZj70SDjiOkyz/5WS0kiiEn1kj5Q==');
define('LOGGED_IN_KEY',    '4KdquFzjFWRRCbjwlnn1mrSNTjkHEk4QsrVTIk6Qc4G/w6Fxs7m2jiXESkOViHcpb5umsKv9U91tYQ9QSw5ZIw==');
define('NONCE_KEY',        'XXuyfebMhvYvpW0b75og8SlpyoR0JtfFttzUSugL1xVzklcoB6m29G30B9rhjocsevIkafx2qytOqTuBGD23QQ==');
define('AUTH_SALT',        'o5p2tsiLjuyAq3F/Rt9a9he9ZX1b/S/RKMge//Oc49NX7xwx/+iSdlFuJM27DIZgydaYjb7LA8om11O4dZFniA==');
define('SECURE_AUTH_SALT', 'O6Wg24KEyJCrMj+ZF25Pd+qCk9EBbGG8PTndsfZNO8Av0xqq9pcyhwDnUcxlI9gonF7N7aBsbQ+CYq6nma4wqQ==');
define('LOGGED_IN_SALT',   'j+yb7MSYnARJOdGbSz5+EUBXkAQ9FfgwnoLPXV3vKJHJYfMRhIM78crgB7H5b/JcR9KKYUdMXTJKjotF4Lsr2g==');
define('NONCE_SALT',       'Cgkm3UF6PVtEq4ddCvKLJVha9ACFhcrZlArxp4SKauAkvGJdABhMVxg66S4NwnJFMHmFwEOHTEBhklUL2fwVcg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

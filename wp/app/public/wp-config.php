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
define('AUTH_KEY',         '+dNZqw6xXHSYB2nS5FmxmPs6WirvsgxziA6EQ6aQrzqwvIpn+coAqAW6kWVnIglT6cwVJfHDLaCVp8bU43wCTw==');
define('SECURE_AUTH_KEY',  'Qkqqx88vsFksCHY1VzGJtjP3NgUnd1rRb9BGqwSnDX9qIMqeFEdGMPVMLgtk0za7lTRwvMVJHnD5QHSN50Frrg==');
define('LOGGED_IN_KEY',    'o+y4Lblyw66k7KICvKfD3UxD4GbeMNvdu9sblQ8+mhin0yaWuMy4B/9XGK3LIlv/QQcCH827NmkhFoJP4suMGQ==');
define('NONCE_KEY',        'jBF/wSIe7tlHuOKDffp81GPG7sNR8/Xcgd/xcb/GvgAH1Bf1UOigGkOOURJoogoeikc4F9MNcFrVvayHdnOIMw==');
define('AUTH_SALT',        'FG+6lV/TQ/LwvPoXEHJ5ppM7lGanBjfPsVXwqF3+neyFoqjqbuMgCAGwdUkkpjDd4YkYj/rnChS8jPDuxvpFYQ==');
define('SECURE_AUTH_SALT', '9X8D98lUQKm8u8V5NwDynw3dHt6dLEK0m1BCGbFC5mmfiwz72uTxlBmTfMXYGOY7qLH2BoWukTCnLBaG4QkRvA==');
define('LOGGED_IN_SALT',   'zPHiiJlnTbpkM3ixjIt8tFm5KjvPsZpCAi/2+OLEL+Hk6uHrmO/RUBhS24xfJoGUW3I6Ov6c2Y/HhB+HsDkZ5g==');
define('NONCE_SALT',       '3X5+zN6t0ErnQxn9WDYcFyqzfeGwoxJX3KRHAn6k+3gjw/0Wnba+u5aRGWNpLM1FLCui3IuNBva3T4Uc0SzxSg==');

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

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
define('AUTH_KEY',         'v9J+U+wcs0+cy33EmszuGpUUwh5uRKl+IX6/zqwaGkkNqul7nLimu3VUgqP+5ZUHUgGN8YBAeqzRw5fqa/H63g==');
define('SECURE_AUTH_KEY',  'bB9F8FAhboEhXUucni9zZUaalq9Rl9ZhBut8DYMIvPp0m4Tpkuxyb5aYRYuzF/VJfdXpMLemCtsSsZf5iyKABg==');
define('LOGGED_IN_KEY',    '42+YSEEoNNZkCwV4CP26Om8RVv8wPm1AJilnBX7QloFLgV7i8q9FQzpFzxT53ToPZcG/36QvFbVD+X2SVmoJXg==');
define('NONCE_KEY',        'G8sI7hpCqYaSnSCpXfUx20va13PUCPdu2GFvpTf33ooRpIE/sgxnDqVI4pbXwb/LFKWqbHuesk+qhhPadkJ8pg==');
define('AUTH_SALT',        'xoEzrpY246QBXzumfmtOkbkk8ye3opYHYWuZNkt8HZ4nsKVjv+afSiEmC2dKykcPBH9ziAVYdJcRDLd/38G2tA==');
define('SECURE_AUTH_SALT', '4SGdh2UMVWRlm9k5DtRUqSwDGJGyYa4QERvtknUian5ZF2f4IFXxTAmWRUaB2dseUtbij8WLIWbWv2ETUnIs0w==');
define('LOGGED_IN_SALT',   'KvoOxCiuQfbeHh73lGCZL/s/qDOjK2b5zBTOMI3ORzn2pPoYTtgwir9TWexgEvoWDkukrOAxwk84tWWXCW6slA==');
define('NONCE_SALT',       'owV9/VBZa2J72WXu2Mae7WWP+CrZF1XYnGnyafWQg1h0FLGtAQHSNfeMXFfWuFEpOgEuUduhDhkuuG3C0vnt9g==');

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

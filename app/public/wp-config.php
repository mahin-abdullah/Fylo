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
define('AUTH_KEY',         'fyVZM0yAJ0E6eZWOS69UxZRb6dD9XGN/7VsYiMetdmUUhNNzvRfLTrrgd3QZ7TXbhQt6rhZxzLWLzX6pd+EEYg==');
define('SECURE_AUTH_KEY',  'sGq2AIvcynMFCJgDjHSWi3L1OADruSiobzgSMzt0E46zPE9MR6LL96ZZ9Y1xKuUYxAkAzvrPLbMVwIAXwVAJVg==');
define('LOGGED_IN_KEY',    'H17Mgo5wZRDd423n5BzKHvjyCUIE1V6XZBGfQ39JS6d31nG8nezAmzCfmsFqWGqhd5VZwMT37M36If202eGrQQ==');
define('NONCE_KEY',        'fhw15SII2m4Xtw7FtA7g6rXEExArixRNucmpdpVRrxXh+B/Npxp+7VMgqermIbxN7UWrI791VO0KJGLXLKDJEQ==');
define('AUTH_SALT',        'AjJeWStf7hqJPRPjPmvFtdBrBl5EzVGV+uDrhYHnhEevDsNW8BLjRfnL4ZCIoWseYQBJl6+sgYkuuRMmvt6exg==');
define('SECURE_AUTH_SALT', 'qcCraVeOj6Xni1v8mt+NY4kSi+i6NfAyKOUQtTQX2WvYkGtlYQdS+I/PXjfm0ShhhWlacfuaekSnpXXEglv9SQ==');
define('LOGGED_IN_SALT',   'rnEqc+sLsLbHy1gD2dgiEnkeg4SBSB+PBmRSRrIYc90Du4lNpZQTaEZ4GFMJho3kr+rMUUsS081FGF/gggZ79A==');
define('NONCE_SALT',       'mDLn4GZwhrJ4FHY2olikmxa7zF8e+cu/+crBTTYG8K88wtGxi6/BGIC9gTBXoCq1QtiqM8mBut1jYZ+yDarmRw==');

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

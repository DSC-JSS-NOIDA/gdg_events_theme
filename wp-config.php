<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gdgdb');

/** MySQL database username */
define('DB_USER', 'gdg');

/** MySQL database password */
define('DB_PASSWORD', 'gdg');

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
define('AUTH_KEY',         'YQ`:##Q1k<I:Z(+~7il7b*^Jd+X^y0_E|VvE+|0BOABs,AN- YfmCsV}x_[a!JMb');
define('SECURE_AUTH_KEY',  '?sQo:CK{A^|K6K(Lllh=YE4GJC,>-es/R+Xu90@v/2I1niCu/|8<|b|20io#yYpe');
define('LOGGED_IN_KEY',    '>Ij^8KGL<Ube_{+MTmSsr~-64#RmRR4=8~f`V-;iA,u4i+3z;b{E0o?&5N@jat%J');
define('NONCE_KEY',        'Q*?qTPpvvvx>9xADNFh1EAohb9I9f%/vfZP,0j<z6>j%|}A,?,8Xa9JvlikPq.X;');
define('AUTH_SALT',        'Bo?(R&+82wc+&b]n-c-NQ>cz0.jUjT9llu<;Dr6ALeZ)pxut?`$4*(O^bdB>jh;^');
define('SECURE_AUTH_SALT', 'aKg4EGxZn/dD;6< &&w-f+q++CMY-P$iq_aX1`-uMNzNdG(O#<_naV],3FoCrnYL');
define('LOGGED_IN_SALT',   '}Nf{GaTYyKm^X1MwuCi~gT:^okIh/xdZa|ral ,dnL+(LE6:.r@<dP*`tJg42}hR');
define('NONCE_SALT',       'X|)~OC}p>9A+d]u4[{wuHBt!XrG+a-G=xL4[Ub_hkjHN#bKgcvGs-In<D`7R%7]F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gdg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

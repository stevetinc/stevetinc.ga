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
define( 'DB_NAME', 'stevetinc.ga_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&bg3Rn!p}-`Ma?(sAq^#}rK.%3v2o=&K$1uvZOf]3>H]SzI`hx5>aR/M[c?Q(]Gu' );
define( 'SECURE_AUTH_KEY',  'gi7smroa&v+4[Ee<<Gg=c)l+I )hmL=UCj~yW#)e_W6d3V#p^:tsB7jh+aX*g+K2' );
define( 'LOGGED_IN_KEY',    '2H$+TW1F(k(.bzJS7V9ED*d8_I?|RnHTMeD2*OCiJ+=w|M%]bvcC&iEyKvr1 BED' );
define( 'NONCE_KEY',        'Hr$~IF@;FsJR8B&Di<3=w>~dL@&*o5}:sm2oz7&<Z-bhH)z<T*)6c5PzPw.l4UIV' );
define( 'AUTH_SALT',        ':k!vh4}/,d~8W&!IFxnf~lTl9c>V{}[olTFV<rTf*6s=TyY|s:7Dv0d-7dh;!sns' );
define( 'SECURE_AUTH_SALT', 'q=/`5 Wvgsv`.AyJ):![lw5K~nZ`?Swt2CJv%#+4a,D1`/-_&%^I{~b9g8f_QO/h' );
define( 'LOGGED_IN_SALT',   'BajcJ7IFE#b}LuJFF%8J#FHvvb!9@r4]bwRT)!H-{u-bT_`{l4(C2P^3I~aU(/4t' );
define( 'NONCE_SALT',       'UdKj7Qc?3x~JnKJ>c%||7OfMcB^jXLNWGnZHSWMYZF_V/A`?GN.xm$+Wxy|lor->' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

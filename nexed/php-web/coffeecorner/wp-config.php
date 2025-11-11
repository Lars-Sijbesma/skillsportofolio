<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coffeecorner' );

/** Database username */
define( 'DB_USER', 'bit_academy' );

/** Database password */
define( 'DB_PASSWORD', 'bit_academy' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U=LZ5IKaJB9O72$Ffs8zAR`g`6(TuTfhF:1ERA{nfFpIWEcyL:4_UWQxkH?1Ya9B' );
define( 'SECURE_AUTH_KEY',  '|MV60$c-RSQUvoA!DK;vCU_(q>)8M!UU+%02j&]*uhRI:vt8LOI?e!-S<DN6Q:)7' );
define( 'LOGGED_IN_KEY',    'w$LH]~xlX21P-/i:T|n@*Ob7Q_oQ?gX8;0zgC2{s)yLt_ys{c_bNkTd#sQPQ9(Vv' );
define( 'NONCE_KEY',        'G:V/LRPolut<|=^d5[~dmPj6e!wA9~NQ?6o1o`iCNlTIg?bDKzH3RlUEc{Z5m4,.' );
define( 'AUTH_SALT',        ';U}hW1ePv#VK97h1&;RUhu^e25JH.`M6/?z=;LoQM=qqw[i.6qoTC%fshCMsW30^' );
define( 'SECURE_AUTH_SALT', '}NY8d 7&R0Irujm<t]JM%LhHBXjix>#iw:Z(ds!_G~xX#kL.=`uCa;q0=+s2a>Ry' );
define( 'LOGGED_IN_SALT',   'TZ~&9`V5y;yH9$5-~WpkcM;MYd$npgl7;jy?!Hm&W371G}Dm%jU[^f.0$q^}f)G[' );
define( 'NONCE_SALT',       '{dt})Fp?CUe^gz+ITj2E7f7xiU|^:GHJ^:BBwm%:QPdMz`Rj8H&9e<pPjuGt`8p=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

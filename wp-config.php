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
define( 'DB_NAME', 'nailshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ' Ygt[]w%#Y!Eoe6zKLKB<$rP:53!r-AqDf:rl9j])D6L7Pjz%|T@n:BsjFh}?$K ' );
define( 'SECURE_AUTH_KEY',  'I<}Y(%FV9wPZ,C^~,<9}}i(MZH[6R/V,L=&fNy{f(/`@%@;rn`+^sRbO|4bEccIq' );
define( 'LOGGED_IN_KEY',    ',QFI]Im5c4DP]QHXyP?:*S!5_2kMT|_L[[@X~}`TT&+aQm6VtrnU]xX9Cf(^Nk<6' );
define( 'NONCE_KEY',        'z ,OIrYv$8]FEi(Vi[Vd&]|q>cFGyr|63a3 yy %0=J4}`_hocfO}</R7GiIN?sb' );
define( 'AUTH_SALT',        '[iKxqZM1Ze0@r34Go8(jM3NN72)&!,c$n^|IRN=>633VpO-APU DGy}0~tXYF9Od' );
define( 'SECURE_AUTH_SALT', 'E`:G3L?V#E!XB*fu|*5nR7b(F^<s.jh{[u;wx=faU<Q~r;6AAsg]y]_l|U(Ok3[h' );
define( 'LOGGED_IN_SALT',   'X^*%fe]IS QK HyflHg).9Ry_!Is4N8ixblEsE3hfpkNKBR*e?GbfQ)#+t+s~Ri}' );
define( 'NONCE_SALT',       'F!e<r1[ARG_Rhh8{~l;+fes}5U|;Do2Uh K4jH_V#.wf:#LVaV$gKp?WgcD?QL`g' );

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

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
define( 'DB_NAME', 'netbear_autoservis' );

/** MySQL database username */
define( 'DB_USER', 'netbear_autoservis' );

/** MySQL database password */
define( 'DB_PASSWORD', 'milicamilinkovic' );

/** MySQL hostname */
define( 'DB_HOST', 'ftp.netbeat.rs' );

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
define( 'AUTH_KEY',         'ad>Y$ekH~iw[)qu`lk~gs6nx^ Lmno?IF*x)X>}6ot}=W>J=.{RC{3`KhR$V&Gm0' );
define( 'SECURE_AUTH_KEY',  '(oS[haq%W3Nu?*@=Bx{}Tctx8(jpr.%M)+biX!xti8:Z<vmP}JV-]?jNkDg4jR3x' );
define( 'LOGGED_IN_KEY',    'ZF+c_8G<yEsdYs)ZX1iJfm-Xy4U0D4M77}}xzm?`}8g?90iIW`VQjka!-~$7s??%' );
define( 'NONCE_KEY',        '9f[DI?7g2rOk%%Epo#V~@v1P`/mZ]`puu_JItbovk9fQJjWG%7.1Wi9aZS(mO)x:' );
define( 'AUTH_SALT',        'VD4qbdl200P~= |@e,LRRBX?v5LLq34/7;%$5p~1iZ!WI$^<[O/0MWJWY.*Jfj=+' );
define( 'SECURE_AUTH_SALT', 'NTU?=FB_Kh3X1je.jIXU^ Mpw5z^)/s>t@a&SC0=>?WMLE5[&:X;Z[s>.%YSAbL1' );
define( 'LOGGED_IN_SALT',   ' l}.%K@=~7khQCQ54YB4^^%qbX[D`1<,GGim^ZbQ|=k :.XJ$)XjV]<r8b~Ifap5' );
define( 'NONCE_SALT',       'D2.B9([,Icu]Tt&w[#O(<|uW)Ci[nWftuqggt3)Mm9aA>;|-LnGFPf{5`m;#cCh>' );

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

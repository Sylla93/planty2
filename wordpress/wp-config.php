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
define( 'DB_NAME', 'Planty2' );

/** Database username */
define( 'DB_USER', '' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0C?p_TH9-oidP1T?Xs#X}s,U*H@pLx>$slY;aV2(LzkU(%gn)Xaa8?P]xA4+7@`.' );
define( 'SECURE_AUTH_KEY',  '[RQrXP`Fp9mT.QLby^Kzh0M<XwgFIbXBFNxdgioAru>5$8%UZ0# {^U;+b(KW7%-' );
define( 'LOGGED_IN_KEY',    'j23E.&f/<S//+]s`tA9fYGz[$;$uD=is_{2K|xrwkiGW:,1m[&P<ZM)W8i1!}Y|m' );
define( 'NONCE_KEY',        'O#U>WISR,4<m+#$xtl!_*)=_{MZ|m%Y_=!y#bPm0y_:aZ6<SY@%X $YFe~K,x?HQ' );
define( 'AUTH_SALT',        'DMFlfv:0wpUA@LP<*SZu+PV0Gn)#04[RtQj/%J1kIwh!1FjP 2EkEdA55L.}Z3oP' );
define( 'SECURE_AUTH_SALT', '4K>Z0$ldO;y8q1D#17+*&@&5(=,br4u?+yCnV~G;:cv6!*T_ewF:z])Wk*]_wd>_' );
define( 'LOGGED_IN_SALT',   '_BT7/ALdD?W@%hD%)]nqxHSUv`#f(%l9L:n[`nM2xgd,W;UHm`MZtYSJw&*}+$U!' );
define( 'NONCE_SALT',       ' w?J}o5tCt+LMg]W$0Vo#5PCT4S_5**t&MH55 L)v EC/J|KV7f}>1gb_eJ22UDM' );

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

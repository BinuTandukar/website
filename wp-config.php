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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '`10G qIt~K.q 0@FgK;BI7tuV5UOzE26^(?a5i|0?F.uNVs+wLhL+HuMjP65sGIF' );
define( 'SECURE_AUTH_KEY',  '!+:}q~niwQ)F;4J2t62*~jhib9co~O#ie`!zIkspQ>Fwo4u|z]Rk2@Qfby5!C gs' );
define( 'LOGGED_IN_KEY',    '~~CeyMM8nEta,#l!ZnT$Q5ySfUf fFD7,g-jCJ;/0Un5Db81r`;8Y2`}79kjvnjc' );
define( 'NONCE_KEY',        'ZHVn&>?k|,6gC$HazPiO48NIHT4,.iwl|jyLk|Q.D$oK&22v(sE~p.jx8UgNH7E8' );
define( 'AUTH_SALT',        '[Uqq>*l1!us0[X,w>1$8+}k~cHsvs|2NWfgRdg969^1m}k?u{)k_vmtjeJ+Luig/' );
define( 'SECURE_AUTH_SALT', 'Z9&Ct#0?[aSCT?Rh!^u!UB]R~;Z9-7wj|P`Oz9!>F{WX:5Cf?|zr)W`.snQ,Q=dM' );
define( 'LOGGED_IN_SALT',   'BDv*Y<{6J: w2j1et;+Re#h?^AHr!`@8y`3hvJc/u/X-s~Ia@+A_NiVTC68WU<g ' );
define( 'NONCE_SALT',       'WK*,N%F:JsGb#aX[mDQo[4LQ}}m=`DWa~[Z(W#?[?pFt6:)/1pas=X/DH`E4f%2S' );

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

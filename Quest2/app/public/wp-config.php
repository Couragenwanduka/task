<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's-c/*UM,I2x7azt^lWFLHlw,3*8g8=q?IZ@44LpgL!2?(Gc-Wg{N-<AEli>#[Q.J' );
define( 'SECURE_AUTH_KEY',   '5hkpvXv{2<5zHA@sF)>_HdJB{Ha{W?K22G*MYRJ;N;ona1=]XF_WV+&2>OP-Rx{F' );
define( 'LOGGED_IN_KEY',     'NSvYr5l!bo@!sfd`u6cchca<xFvFshVxj[yv,dz:_[k;O]vX}@4G?pBQ>xI<As(m' );
define( 'NONCE_KEY',         ',QxB[n))1Q:V~1eN-3^`L9G==d-qm+MPvkJExpBf&/m17voO$}S7p!7d@leL][GW' );
define( 'AUTH_SALT',         'Xzd@[.P!aW/nmB/!3+gO2@2o-lOieW9d)M,dpKcw?77gFc*>{jl+V7Z>Z C_)A!>' );
define( 'SECURE_AUTH_SALT',  '<7%.jCAT?3hw0M8(LJ2#CcW-c/1D)z)VX%8VD1SlPh2{I%]E<$Y/1@1b~8o+*t@q' );
define( 'LOGGED_IN_SALT',    'S_mLIZ<4wY`eV!Q!WhO<UaxCXEjX*t{K?B7q+1kYL:1{o_@%aI$HpCUbI<5u2({W' );
define( 'NONCE_SALT',        '#$2XYnJ~nB&l)6.Om` &S`r&)PN0`4~~GndT*@P)GU}N@(5>zi$Q_/9h:Qjsc9Fa' );
define( 'WP_CACHE_KEY_SALT', 'Nf,~Y*G2VSzuy2R?#ZDv6D]`!v+$>(3p):aswh0bmr 1D7Pa^@Eq0A+3{6O;8*2}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

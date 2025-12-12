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
define( 'DB_NAME', 'u577823813_7HMer' );

/** Database username */
define( 'DB_USER', 'u577823813_b75Zt' );

/** Database password */
define( 'DB_PASSWORD', '1Tf2Ixcrve' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',          '>)YC=I$-sq$Y-l&@kW:E-V--w:G,#Et!lvlS858D:<Dx6hwGtz1/W9**5Vb&qo1-' );
define( 'SECURE_AUTH_KEY',   '`o~?PiD m+t7.u^K:QNJC~e!klKCrt,/lSa8|6{^z9=Lhp6x?wfB3q7yX2q*VAG.' );
define( 'LOGGED_IN_KEY',     'Lm%IX-L|d;mGsQK0oT7*v/B4nHvREPgf((8N17$N%U4P//}S}aPdNB)C:9gw;|$.' );
define( 'NONCE_KEY',         '_s}rrlD]R~|hwzbfsWbrca&zXG}ih(m2,d[R]j&3v]HD`lR@iYA|.wfNcU>TbJsz' );
define( 'AUTH_SALT',         'M^=pvwg~<&):TE?]sb3B6yH/cQvP1;&/nZt/h{UN%vfPVkHI6zF|7:2D^`qiVXiQ' );
define( 'SECURE_AUTH_SALT',  '-C.Hra4-r^VZyE ~dyRx@`aHXb=mn~<%8Q+^k4qo&KBS70|ChRE[?1vDiS`MrUmA' );
define( 'LOGGED_IN_SALT',    'Ki;jWzC#zro/Zdapog.c[pi&66*E_`1*4oU&)llf]|c-%rC,y)(R%_.%6U O#ES7' );
define( 'NONCE_SALT',        'f~Dp#P1NiOm4>h~$yoC9Ch$Fr|DB3,k~7T2~Ln&2 JD%,;n!hI*0&nW#22m&`/|)' );
define( 'WP_CACHE', true );
define( 'WP_CACHE_KEY_SALT', 'X{&lUC7,QkEhXu& xzDdQs<0aU?^1|;Q~Kunp+VyOllmSH:jJ~+L^ N#$g/%CdcL' );


/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

// Disable external HTTP requests
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'localhost,127.0.0.1' );

// Debug queries
define( 'SAVEQUERIES', false ); // Disable query debugging for performance

// Performance optimizations
define('WP_POST_REVISIONS', false);
define('AUTOSAVE_INTERVAL', 300);
define('DISABLE_WP_CRON', true);
define('WP_CACHE', true);

// Disable unnecessary features
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('SAVEQUERIES', false);

/**
 * Increase PHP memory limit
 */
define( 'WP_MEMORY_LIMIT', '512M' );

/* Add any custom values between this line and the "stop editing" line. */

// Override site URL for local development
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* Redis Object Cache */
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PASSWORD', 'redis123');
define('WP_REDIS_DATABASE', 0);
define('WP_REDIS_PREFIX', 'wp_');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

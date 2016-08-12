<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'LandingPage');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'PTVM~D(usQ>N+/0?!.|dgr>6`pLU+WS4XJ8gmiiY:q4Ui-z$IHf+s5azp|Sb8zW|');
define('SECURE_AUTH_KEY', 'KNz0o:#p,Ac>$H6J}/qYa>WBm.15B.{58[Dz[J6n3%0$cjZoK|d^%>&FZF$eX:ZU');
define('LOGGED_IN_KEY', 'Ms mb)pxJWHAy]Y DP.aPv!~S9!eMR~<@[*QMg/DD2,(O%-[OD!ZDftw^BA0bV~&');
define('NONCE_KEY', 'o|SAmxvgaE7:J1]i9T9IF.+`|*p,toH]3K( sf.gq(mF2ILcM5F%{e`=o?Kd,kC&');
define('AUTH_SALT', '!*DT7O~[5^k!&jXOY-gf% gr=.hN$<F2{c|;YHm)voQvaTO3opGA1<VZ|rI:NL:,');
define('SECURE_AUTH_SALT', 'KV&O>ru<M9kF<8WKq*~o@l.B!Z,mU%dC(yZ^QVr8;^$.6?0h0_-[<C}i]fRp`G=a');
define('LOGGED_IN_SALT', '4AHHI0V=B}X_Vbo>~kQNrY%xEIJu#SGI,R;_ DPN=>H^l=qhs7[DtULScx2,}s 1');
define('NONCE_SALT', 'E-r(u0rOLDrV9eZ4g]ZZyV0S(zf_~ >Ua(3uz;b{J8|H=9=M6mr=<j,$8,p E=b)');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'Landing';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


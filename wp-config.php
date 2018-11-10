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
define('DB_NAME', 'wp_automotriz');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123456');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', ' <6Mu[vRvfamR,<avCs Sd8Q}(n@8Rit0X;u`REX@]C{I/O]La_TNTpXu&IAl3wm');
define('SECURE_AUTH_KEY', 'C2<ogX5h<dmqK]B0FpR@h8kM-Lmd!r`/tVw0z>8|#sl(uW$hY2(-TrQ<o^@Z-;6a');
define('LOGGED_IN_KEY', '))d&T-$waDshhF~[gs|w[JRdsRX!zxL[6 1lI$r/IXL%^y;ve&vM}S19[nAMAB;t');
define('NONCE_KEY', '`M|t%Wkv_k^i3}>v:/)6nrq.~W4k7L&dqSfc[ZTO dbiiMAkkWxWkUt$z^Nk(}BX');
define('AUTH_SALT', '~);r>^o1OFcIaa/efv}VOe<#({-9Wp;_t%(36cO2HZZ&0t2W@FTH20dpZ(0N*MDr');
define('SECURE_AUTH_SALT', ';cf4i@$QP]!tT_VQND(O]Y[={3|+&M-pY|C<.{x&sCQw p}oCh &4zLjG4Y]Nq3D');
define('LOGGED_IN_SALT', '_xfuhV:+)-lM5B{a1~b`4V.]Fb*51x!Aa*-4XZBqL,K9%b8GF=KG^l9Z=9NG)H=^');
define('NONCE_SALT', 'ERMlLW<Cq|d=U=n4|!$1G!hTd%e1s5^4)s%Z!YrTE%(6KSc Z6_mE3-aK[bu!U+V');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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


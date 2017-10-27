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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY', 'p^%jpjJeS{,2zDT4Yd*m!7pI1g2[Bm:ZVFIq1#Ur3,ETP2/rAtv!tNM6F]<{:6ll');
define('SECURE_AUTH_KEY', '6ITV#m4p!*vOIy6Za [L6f&OY:RVTW3-Oa/n`;|MerNR ;;HX:su{lGOjDQE$m{4');
define('LOGGED_IN_KEY', '&gp6rB`C{=y0P~d`:pM`qY$^i>/(2.E2>FXl4T/!k59j9PynwXEg@3x?JQ9>iE^O');
define('NONCE_KEY', 'MeI&x=JRIaQFhIo51pHj`WT6U8xE+26,*j+,DJLq/ y6h,Cc.g7(EMGAY3?BXB-`');
define('AUTH_SALT', 'wus&pU,PO0u^18 ;O{k8]+F+1V,tqD|Pjs#Hv8f*uew4a5`[;TK4DH@Ng6wLIX~v');
define('SECURE_AUTH_SALT', 'Vq;yqy#QNT:uDXBIW>WC$K)Hz3gjNdM6u}/sJd<K@S$PE2trjExCWI? B|V?~ZM ');
define('LOGGED_IN_SALT', '3[.1;44$|.dm}(AL3!$<c56~AWnYia+9oyH2_9[<mC9[=7lY=N!;v`;v0z7mxX6.');
define('NONCE_SALT', 'xv^s0MizzcyZ0D?Cm4/gvpYf]4@ 6EP[x%e83>cv0zVpS^fz;vb:~~&Re+`er.PT');

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


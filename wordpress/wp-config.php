<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'wordpress');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', '');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&4R}%-Vqh^o-`2I*h:fu4=B>57~RbO%i>Br.?*v1-xK;XsRv^u5SMb6BRh<bIsb4');
define('SECURE_AUTH_KEY',  'q!Nou? @*)oGcUc)6ciJ6/F+_G*y+F-rC&!Z]5esyS%n-i(GUV3Hfom:$B$Y!%KJ');
define('LOGGED_IN_KEY',    '9DAF x^;&jAucD|-C}7@6#j:jQohHh}I,n*>&$YT?XT+hj4K9`oMR9`1_Xsm:&g%');
define('NONCE_KEY',        'q6Bg7+xkX;qq[nK3^HB;a3(99kotDJ6t+5+C5blC;43b8Mih02hVp/H)j!c4@<>z');
define('AUTH_SALT',        'z05(Y<=YYc.}&qLho?Yq6E~;(8Q~0i]Jj}iF*pDDGyE*Sx)O#ll7$ndXUVA|]B=g');
define('SECURE_AUTH_SALT', 'k-df4R[=|tXjnKm#8=,?IUYs#texz I(hZLO%7tYk?k/|ID>tXo,:7z*8Rf@3`,5');
define('LOGGED_IN_SALT',   'j.37F|J>s`XlKP@_#N,7?_,G]8G>+)r]%=PW^A1Ci}u4vAq*5p5%.CqY:@b3WJ(W');
define('NONCE_SALT',       'OXrWy;v~.)oy;|W4+s.!rY$xzk&fdM0RD4R2Qp~;[|g|m$=+^dN$Sfg8ldf!,]c>');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');

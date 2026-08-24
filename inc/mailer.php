<?php
/**
 * Wysylka poczty przez SMTP cyber_Folks — konfiguracja przez stale w wp-config.php.
 *
 * BEZPIECZENSTWO: haslo do skrzynki NIE moze trafic do repozytorium Git.
 * Dlatego motyw czyta wylacznie stale, ktore trzeba zdefinowac w wp-config.php
 * na docelowym serwerze (plik wp-config.php nie jest czescia motywu ani repo):
 *
 *   define('HIGLOSS_SMTP_HOST',   's139.cyber-folks.pl');
 *   define('HIGLOSS_SMTP_PORT',   465);
 *   define('HIGLOSS_SMTP_SECURE', 'ssl');
 *   define('HIGLOSS_SMTP_USER',   'klient@hi-glossdesign.pl');
 *   define('HIGLOSS_SMTP_PASS',   '…haslo skrzynki z panelu cyber_Folks…');
 *
 * Bez zdefiniowanych stalych WordPress uzywa domyslnego mail() — motyw dziala dalej.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (defined('HIGLOSS_SMTP_HOST') && defined('HIGLOSS_SMTP_USER') && defined('HIGLOSS_SMTP_PASS')) {

    add_action('phpmailer_init', 'higloss_configure_smtp');

    function higloss_configure_smtp($phpmailer) {
        $phpmailer->isSMTP();
        $phpmailer->Host       = HIGLOSS_SMTP_HOST;
        $phpmailer->SMTPAuth   = true;
        $phpmailer->Port       = defined('HIGLOSS_SMTP_PORT') ? (int) HIGLOSS_SMTP_PORT : 465;
        $phpmailer->SMTPSecure = defined('HIGLOSS_SMTP_SECURE') ? HIGLOSS_SMTP_SECURE : 'ssl';
        $phpmailer->Username   = HIGLOSS_SMTP_USER;
        $phpmailer->Password   = HIGLOSS_SMTP_PASS;
        $phpmailer->CharSet    = 'UTF-8';
    }

    // Nadawca musi byc zgodny z kontem SMTP, inaczej serwer odrzuca wiadomosci
    add_filter('wp_mail_from', 'higloss_mail_from');
    function higloss_mail_from($from) {
        return HIGLOSS_SMTP_USER;
    }

    add_filter('wp_mail_from_name', 'higloss_mail_from_name');
    function higloss_mail_from_name($name) {
        return 'HI-GLOSS DESIGN — formularz www';
    }
}

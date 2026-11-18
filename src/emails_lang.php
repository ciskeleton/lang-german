<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Systemupdates verfügbar';
$lang['emails_updates_available_message'] = <<<EOT
Hallo,

für {site_anchor} wurden neue Systemaktualisierungen erkannt.

Diese Aktualisierungen können Sicherheitskorrekturen, Leistungsverbesserungen oder neue Funktionen enthalten.
Wir empfehlen, sie so bald wie möglich zu überprüfen.

Sie können die verfügbaren Updates im Admin-Dashboard überprüfen und verwalten:
{link}

Wenn Sie die Updates bereits überprüft oder angewendet haben, sind keine weiteren Maßnahmen erforderlich.

Dies ist eine automatisierte Systemmeldung, die von {site_name} gesendet wurde.
Bitte antworten Sie nicht auf diese E-Mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Kontaktivierung';
$lang['emails_account_activation_request_message'] = <<<EOT
Hallo {name},

vielen Dank für deine Registrierung auf {site_anchor}. Dein Konto wurde erstellt und muss aktiviert werden, bevor du es nutzen kannst.

Um dein Konto zu aktivieren, klicke bitte auf den folgenden Link oder kopiere ihn in deinen Browser:
{link}

Herzliche Grüße,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Neuer Aktivierungslink';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hallo {name},

du hast kürzlich einen neuen Aktivierungslink auf {site_anchor} angefordert, weil dein Konto nicht aktiv war.
Um dein Konto zu aktivieren, klicke auf den folgenden Link oder kopiere ihn in deinen Browser:
{link}

Wenn du dies nicht angefordert hast, ist keine weitere Aktion erforderlich.

Diese Aktion wurde von dieser IP-Adresse angefordert: {ip_link}.

Mit freundlichen Grüßen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Konto aktiviert';
$lang['emails_account_activation_success_message'] = <<<EOT
Hallo {name},

dein Konto auf {site_anchor} wurde erfolgreich aktiviert. Du kannst dich jetzt jederzeit <a href="{login_url}" target="_blank" rel="noopener">einloggen</a>.

Wir hoffen, dass du deinen Aufenthalt genießt. Bitte akzeptiere unsere freundlichen Grüße.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Konto wartet auf Freigabe';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hallo {name},

vielen Dank, dass du dich bei uns auf {site_anchor} angemeldet hast. Dein Konto wurde erstellt, muss jedoch von einem Administrator der Website genehmigt werden, bevor es aktiv wird.
Wir entschuldigen uns aufrichtig für diesen wichtigen Schritt, der jedoch nur aus Sicherheitsgründen erfolgt.

Du erhältst eine Bestätigungs-E-Mail, sobald dein Konto genehmigt wurde.

Wir hoffen, dass du deinen Aufenthalt genießt. Bitte akzeptiere unsere freundlichen Grüße.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Konto freigegeben';
$lang['emails_account_approval_success_message'] = <<<EOT
Hallo {name},

Gute Nachrichten! Ihr Konto bei {site_anchor} wurde soeben freigeschaltet.

Sie können sich jetzt anmelden und Ihr Konto sofort nutzen:
{link}

Wir freuen uns, dass Sie bei uns sind.

-- Ihr {site_name}-Team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Konto wiederhergestellt';
$lang['emails_account_restored_message'] = <<<EOT
Hallo {name},

diese E-Mail bestätigt, dass dein Konto auf {site_anchor} erfolgreich wiederhergestellt wurde.

Willkommen zurück bei uns, und wir hoffen, dass du dieses Mal deinen Aufenthalt genießen wirst.

Herzliche Grüße,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Willkommen bei {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hallo {name},

die meisten Leute haben wirklich lange Willkommens-E-Mail-Sequenzen, nachdem du dich auf ihrer Website registriert hast.

Gute Nachrichten: Wir sind nicht wie die meisten Leute.
Aber wir möchten dich trotzdem herzlich willkommen heißen und uns bei dir dafür bedanken, dass du dich uns bei {site_anchor} angeschlossen hast.

Wir hoffen, dass du deinen Aufenthalt genießt. Bitte akzeptiere unsere freundlichen Grüße.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Antrag auf E-Mail-Änderung';
$lang['emails_email_change_request_message'] = <<<EOT
Hallo {name},

du erhältst diese E-Mail, weil wir eine Anfrage zur Änderung deiner E-Mail-Adresse für dein Konto auf {site_anchor} erhalten haben.

Klicke auf den folgenden Link oder kopiere ihn in deinen Browser, wenn du fortfahren möchtest:
{link}

Wenn du diese Änderung nicht angefordert hast, ist keine weitere Aktion erforderlich.

Diese Aktion wurde von folgender IP-Adresse angefordert: {ip_link}.

Freundliche Grüße,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-Mail-Adresse geändert';
$lang['emails_email_change_success_message'] = <<<EOT
Hallo {name},

diese E-Mail bestätigt, dass deine E-Mail-Adresse auf {site_anchor} erfolgreich geändert wurde.

Wenn du diese Änderung nicht vorgenommen hast, kontaktiere uns bitte so schnell wie möglich, um dieses Problem zu klären.

Diese Aktion wurde von folgender IP-Adresse durchgeführt: {ip_link}.

Freundliche Grüße,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Warnung bei fehlgeschlagener Anmeldung';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hallo {name},

Jemand hat kürzlich falsche Passwörter verwendet, um sich in Ihr {site_name}-Konto einzuloggen.

Serverdatum: {date}
Gerät: {browser}, {platform}
IP-Adresse: {ip_link}

Falls Sie das nicht waren, keine Sorge, der Login-Versuch war nicht erfolgreich.

Falls Sie das waren und Ihr Passwort vergessen haben, klicken Sie auf den untenstehenden Link, um es zurückzusetzen:
{reset_link}

Wenn Sie Probleme beim Einloggen haben, kontaktieren Sie unser Team oder fordern Sie einen Ein-Klick-Anmeldelink an.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Benachrichtigung über erfolgreiche Anmeldung';
$lang['emails_login_alert_success_message'] = <<<EOT
Hallo {name},

Wir senden Ihnen diese E-Mail nach einer erfolgreichen Anmeldung bei Ihrem {site_name}-Konto.

Serverdatum: {date}
Gerät: {browser}, {platform}
IP-Adresse: {ip_link}

Wenn Sie sich selbst angemeldet haben, können Sie diese E-Mail ignorieren.

Falls Sie sich nicht angemeldet haben, ändern Sie bitte umgehend Ihr Passwort, um Ihr Konto zu schützen.

Für Unterstützung kontaktieren Sie bitte unser Support-Team.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Schneller Anmeldelink';
$lang['emails_login_magic_link_message'] = <<<EOT
Hallo {name},

Sie haben einen Ein-Klick-Login für Ihr Konto auf {site_anchor} angefordert.

Klicken Sie auf den untenstehenden Link oder kopieren Sie ihn in Ihren Browser, um sich sofort anzumelden:
{link}

Dieser Link läuft in 15 Minuten ab. Wenn Sie dies nicht angefordert haben, ignorieren Sie bitte diese E-Mail.

Diese Aktion wurde von folgender IP-Adresse angefordert: {ip_link}.

Herzliche Grüße,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Zwei-Faktor-Authentifizierung';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hello {name},

Ihr Zwei-Faktor-Authentifizierungscode lautet: <strong>{code}</strong>

Sie können die Zwei-Faktor-Authentifizierung jederzeit in den Kontoeinstellungen deaktivieren.

Diese Aktion wurde von folgender IP-Adresse durchgeführt: {ip_link}.

Mit freundlichen Grüßen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Antrag auf Passwort-Zurücksetzung';
$lang['emails_password_change_request_message'] = <<<EOT
Hallo {name},

du erhältst diese E-Mail, weil wir eine Anfrage zur Zurücksetzung deines Passworts für dein Konto auf {site_anchor} erhalten haben.

Klicke auf den folgenden Link oder kopiere ihn in deinen Browser, wenn du fortfahren möchtest:
{link}

Wenn du keine Anfrage zur Zurücksetzung des Passworts gestellt hast, ist keine weitere Aktion erforderlich.

Diese Aktion wurde von folgender IP-Adresse angefordert: {ip_link}.

Herzliche Grüße,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Passwort geändert';
$lang['emails_password_change_success_message'] = <<<EOT
Hallo {name},

diese E-Mail bestätigt, dass dein Passwort auf {site_anchor} erfolgreich geändert wurde. Du kannst dich jetzt mit dem neuen Passwort <a href="{login_url}" target="_blank" rel="noopener">anmelden</a>.

Wenn du diese Aktion nicht durchgeführt hast, kontaktiere uns bitte so schnell wie möglich, um das Problem zu klären.

Diese Aktion wurde von folgender IP-Adresse durchgeführt: {ip_link}.

Herzliche Grüße,
-- {site_name} Team.
EOT;

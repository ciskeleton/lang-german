<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenten';
$lang['admin_content'] = 'Inhalt';
$lang['admin_database_backup'] = 'Datenbanksicherungen';
$lang['admin_extensions'] = 'Erweiterungen';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Hilfe';
$lang['admin_languages'] = 'Sprachen';
$lang['admin_logs'] = 'Systemprotokolle';
$lang['admin_media'] = 'Medienbibliothek';
$lang['admin_modules'] = 'Module';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Aktivitätsprotokoll';
$lang['admin_settings'] = 'Systemeinstellungen';
$lang['admin_sysinfo'] = 'Systeminformationen';
$lang['admin_system'] = 'System';
$lang['admin_system_firewall'] = 'System-Firewall';
$lang['admin_themes'] = 'Themes';
$lang['admin_updates'] = 'Systemaktualisierungen';
$lang['admin_users'] = 'Benutzer';
$lang['admin_view_site'] = 'Site anzeigen';
$lang['per_page'] = 'Pro Seite';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Danke für die Erstellung mit <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Keine aktiven Einträge.} other{<b>#</b> von <b>%s</b> Einträgen sind aktiv.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Installieren';
$lang['admin_install_error'] = 'Paket konnte nicht installiert werden.';
$lang['admin_install_error_com'] = 'Installation fehlgeschlagen: %s';
$lang['admin_install_location_app'] = 'Nur diese Anwendung';
$lang['admin_install_location_core'] = 'Alle Anwendungen';
$lang['admin_install_location_select'] = '&#151; Speicherort auswählen &#151;';
$lang['admin_install_success'] = 'Paket erfolgreich installiert.';
$lang['admin_install_upload'] = 'Hochladen';
$lang['admin_install_upload_error'] = 'Paket konnte nicht hochgeladen werden.';
$lang['admin_install_upload_success'] = 'Paket erfolgreich hochgeladen.';
$lang['admin_install_upload_tip'] = 'Installieren Sie ein Paket, indem Sie hier dessen <b>.zip</b>-Datei hochladen.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Die alten Sicherungsdateien konnten nicht gelöscht werden.';
$lang['admin_database_backup_clean_success'] = '%d Sicherungsdateien gelöscht. %d Festplattenspeicher freigegeben.';
$lang['admin_database_backup_create'] = 'Sicherung erstellen';
$lang['admin_database_backup_create_confirm'] = 'Sind Sie sicher, dass Sie jetzt ein Backup erstellen möchten?';
$lang['admin_database_backup_create_error'] = 'Die Sicherungsdatei konnte nicht erstellt werden. Stellen Sie sicher, dass der Ordner <b>%s</b> beschreibbar ist.';
$lang['admin_database_backup_create_success'] = 'Datenbanksicherungsdatei <b>%s</b> erfolgreich erstellt.';
$lang['admin_database_backup_delete_confirm'] = 'Möchten Sie diese Sicherungsdateien wirklich löschen?';
$lang['admin_database_backup_delete_error'] = 'Die ausgewählten Sicherungsdateien konnten nicht gelöscht werden.';
$lang['admin_database_backup_delete_success'] = 'Sicherungsdateien erfolgreich gelöscht.';
$lang['admin_database_backup_download_error'] = 'Die ausgewählte Sicherungsdatei konnte nicht heruntergeladen werden.';
$lang['admin_database_backup_download_success'] = 'Sicherungsdatei erfolgreich heruntergeladen.';
$lang['admin_database_backup_lock_confirm'] = 'Möchten Sie diese Sicherungsdateien wirklich sperren?';
$lang['admin_database_backup_lock_error'] = 'Die ausgewählten Sicherungsdateien konnten nicht gesperrt werden.';
$lang['admin_database_backup_lock_success'] = 'Sicherungsdateien erfolgreich gesperrt.';
$lang['admin_database_backup_locked_error'] = 'Gesperrte Sicherungsdateien konnten nicht gelöscht werden.';
$lang['admin_database_backup_missing_error'] = 'Die Sicherungsdatei konnte nicht gefunden werden.';
$lang['admin_database_backup_unlock_confirm'] = 'Möchten Sie diese Sicherungsdateien wirklich entsperren?';
$lang['admin_database_backup_unlock_error'] = 'Die ausgewählten Sicherungsdateien konnten nicht entsperrt werden.';
$lang['admin_database_backup_unlock_success'] = 'Sicherungsdaten erfolgreich entsperrt.';
$lang['admin_database_prune'] = 'Bereinigen';
$lang['admin_database_prune_confirm'] = 'Sind Sie sicher, dass Sie die Datenbank bereinigen möchten? Vor der Ausführung wird ein Backup erstellt.';
$lang['admin_database_prune_error'] = 'Datenbank konnte nicht bereinigt werden.';
$lang['admin_database_prune_next'] = 'Nächste Datenbankbereinigung: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Datenbank erfolgreich bereinigt.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Protokolle löschen';
$lang['admin_logs_delete_confirm'] = 'Möchten Sie die ausgewählten Protokolldateien wirklich löschen?';
$lang['admin_logs_delete_error'] = 'Die Protokolldateien konnten nicht gelöscht werden.';
$lang['admin_logs_delete_success'] = 'Logdateien erfolgreich gelöscht.';
$lang['admin_logs_error_disabled'] = 'Die Protokollierung ist derzeit nicht aktiviert.';
$lang['admin_logs_error_empty'] = 'Keine Protokolle gefunden.';
$lang['admin_logs_error_missing'] = 'Entweder konnte die Protokolldatei nicht gefunden werden oder sie war leer.';
$lang['admin_logs_tip'] = 'Protokollierung kann sehr große Dateien erzeugen. Für Live-Sites sollten Sie überlegen, alte zu löschen.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Möchten Sie die ausgewählten E-Mails wirklich löschen?';
$lang['admin_emails_delete_error'] = 'Ausgewählte E-Mails konnten nicht gelöscht werden.';
$lang['admin_emails_delete_success'] = 'Ausgewählte E-Mails wurden erfolgreich gelöscht.';
$lang['admin_emails_email_from'] = 'Gesendet von';
$lang['admin_emails_mail_queue'] = 'E-Mail-Warteschlange';
$lang['admin_emails_mailer'] = 'Massenmail';
$lang['admin_emails_search'] = 'E-Mails nach Betreff oder Inhalt durchsuchen...';
$lang['admin_emails_send_error'] = 'Die E-Mail konnte nicht in die Warteschlange gestellt werden. Bitte erneut versuchen.';
$lang['admin_emails_send_none'] = 'Keine Benutzer entsprechen den ausgewählten Kriterien.';
$lang['admin_emails_send_success'] = 'Die E-Mail wurde in die Warteschlange gestellt und wird in Kürze gesendet.';
$lang['admin_emails_send_to_banned'] = 'An gesperrte Benutzer senden.';
$lang['admin_emails_send_to_deleted'] = 'An gelöschte Benutzer senden.';
$lang['admin_emails_send_to_disabled'] = 'An inaktive Benutzer senden.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Benutzer hinzufügen';
$lang['admin_users_all_users'] = 'Alle Benutzer';
$lang['admin_users_ban_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer sperren möchten?';
$lang['admin_users_ban_error'] = 'Die ausgewählten Benutzer konnten nicht gesperrt werden.';
$lang['admin_users_ban_success'] = 'Die ausgewählten Benutzer wurden erfolgreich gesperrt.';
$lang['admin_users_delete_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer löschen möchten?';
$lang['admin_users_delete_error'] = 'Die ausgewählten Benutzer konnten nicht gelöscht werden.';
$lang['admin_users_delete_success'] = 'Die ausgewählten Benutzer wurden erfolgreich gelöscht.';
$lang['admin_users_disable_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer deaktivieren möchten?';
$lang['admin_users_disable_error'] = 'Die ausgewählten Benutzer konnten nicht deaktiviert werden.';
$lang['admin_users_disable_success'] = 'Die ausgewählten Benutzer wurden erfolgreich deaktiviert.';
$lang['admin_users_edit'] = 'Benutzerbearbeiten';
$lang['admin_users_edit_error'] = 'Der Benutzer konnte nicht aktualisiert werden.';
$lang['admin_users_edit_success'] = 'Benutzer erfolgreich aktualisiert.';
$lang['admin_users_enable_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer aktivieren möchten?';
$lang['admin_users_enable_error'] = 'Die ausgewählten Benutzer konnten nicht aktiviert werden.';
$lang['admin_users_enable_success'] = 'Die ausgewählten Benutzer wurden erfolgreich aktiviert.';
$lang['admin_users_groups'] = 'Gruppen';
$lang['admin_users_lock_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer sperren möchten?';
$lang['admin_users_lock_error'] = 'Die ausgewählten Benutzer konnten nicht gesperrt werden.';
$lang['admin_users_lock_success'] = 'Die ausgewählten Benutzer wurden erfolgreich gesperrt.';
$lang['admin_users_logged'] = 'Angemeldete Benutzer';
$lang['admin_users_manage'] = 'Benutzer verwalten';
$lang['admin_users_remove_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer und alle ihre Daten dauerhaft löschen möchten?';
$lang['admin_users_remove_error'] = 'Die ausgewählten Benutzer und alle ihre Daten konnten nicht dauerhaft gelöscht werden.';
$lang['admin_users_remove_success'] = 'Die ausgewählten Benutzer und alle ihre Daten wurden erfolgreich gelöscht.';
$lang['admin_users_restore_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer wiederherstellen möchten?';
$lang['admin_users_restore_error'] = 'Die ausgewählten Benutzer konnten nicht wiederhergestellt werden.';
$lang['admin_users_restore_success'] = 'Die ausgewählten Benutzer wurden erfolgreich wiederhergestellt.';
$lang['admin_users_search'] = 'Nach Name oder E-Mail suchen...';
$lang['admin_users_unban_confirm'] = 'Sind Sie sicher, dass Sie die Sperrung der ausgewählten Benutzer aufheben möchten?';
$lang['admin_users_unban_error'] = 'Die Sperrung der ausgewählten Benutzer konnte nicht aufgehoben werden.';
$lang['admin_users_unban_success'] = 'Die Sperrung der ausgewählten Benutzer wurde erfolgreich aufgehoben.';
$lang['admin_users_unlock_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Benutzer entsperren möchten?';
$lang['admin_users_unlock_error'] = 'Die ausgewählten Benutzer konnten nicht entsperrt werden.';
$lang['admin_users_unlock_success'] = 'Die ausgewählten Benutzer wurden erfolgreich entsperrt.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Protokolle löschen';
$lang['admin_reports_clear_confirm'] = 'Möchten Sie wirklich das Aktionsprotokoll löschen?';
$lang['admin_reports_clear_error'] = 'Das Aktionsprotokoll konnte nicht gelöscht werden.';
$lang['admin_reports_clear_success'] = 'Aktionsprotokoll erfolgreich gelöscht.';
$lang['admin_reports_latest_actions'] = 'Letzte Aktionen';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Möchten Sie die ausgewählten Dateien wirklich löschen?';
$lang['admin_media_delete_error'] = 'Die Dateien konnten nicht gelöscht werden.';
$lang['admin_media_delete_success'] = 'Dateien erfolgreich gelöscht.';
$lang['admin_media_file_delete_error'] = 'Die Datei konnte nicht gelöscht werden.';
$lang['admin_media_file_delete_success'] = 'Datei erfolgreich gelöscht.';
$lang['admin_media_file_update_error'] = 'Die Datei konnte nicht aktualisiert werden.';
$lang['admin_media_file_update_success'] = 'Datei erfolgreich aktualisiert.';
$lang['admin_media_search'] = 'Suche nach Name, Beschreibung oder Dateiname...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Keine aktiven Module.} other{<b>#</b> von <b>%s</b> Modulen sind aktiv.}';
$lang['admin_modules_add'] = 'Modul hinzufügen';
$lang['admin_modules_delete_confirm'] = 'Sind Sie sicher, dass Sie das Modul löschen möchten: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Das Modul konnte nicht gelöscht werden.';
$lang['admin_modules_delete_success'] = 'Modul erfolgreich gelöscht.';
$lang['admin_modules_disable_all_confirm'] = 'Sind Sie sicher, dass Sie alle Module deaktivieren möchten?';
$lang['admin_modules_disable_all_error'] = 'Alle Module konnten nicht deaktiviert werden.';
$lang['admin_modules_disable_all_success'] = 'Alle Module wurden erfolgreich deaktiviert.';
$lang['admin_modules_disable_confirm'] = 'Sind Sie sicher, dass Sie das Modul deaktivieren möchten: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Das Modul konnte nicht deaktiviert werden.';
$lang['admin_modules_disable_success'] = 'Modul erfolgreich deaktiviert.';
$lang['admin_modules_enable_all_confirm'] = 'Sind Sie sicher, dass Sie alle Module aktivieren möchten?';
$lang['admin_modules_enable_all_error'] = 'Alle Module konnten nicht aktiviert werden.';
$lang['admin_modules_enable_all_success'] = 'Alle Module wurden erfolgreich aktiviert.';
$lang['admin_modules_enable_confirm'] = 'Sind Sie sicher, dass Sie das Modul aktivieren möchten: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Das Modul konnte nicht aktiviert werden.';
$lang['admin_modules_enable_success'] = 'Modul erfolgreich aktiviert.';
$lang['admin_modules_install_confirm'] = 'Möchten Sie dieses Modul wirklich installieren?';
$lang['admin_modules_install_error'] = 'Installation des Moduls fehlgeschlagen.';
$lang['admin_modules_install_success'] = 'Modul erfolgreich installiert.';
$lang['admin_modules_install_tip'] = 'Module fügen Ihrer Website neue Funktionen hinzu. Durchsuchen Sie verfügbare Module im <a href="%s" target="_blank" rel="noopener">Modulverzeichnis</a> oder laden Sie ein <b>.zip</b>-Paket hoch.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Keine aktiven Plugins.} other{<b>#</b> von <b>%s</b> Plugins sind aktiv.}';
$lang['admin_plugins_add'] = 'Plugin hinzufügen';
$lang['admin_plugins_delete_confirm'] = 'Möchten Sie das Plugin wirklich löschen: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Plugin konnte nicht gelöscht werden.';
$lang['admin_plugins_delete_success'] = 'Plugin erfolgreich gelöscht.';
$lang['admin_plugins_disable_all_confirm'] = 'Sind Sie sicher, dass Sie alle Plugins deaktivieren möchten?';
$lang['admin_plugins_disable_all_error'] = 'Alle Plugins konnten nicht deaktiviert werden.';
$lang['admin_plugins_disable_all_success'] = 'Alle Plugins wurden erfolgreich deaktiviert.';
$lang['admin_plugins_disable_confirm'] = 'Möchten Sie das Plugin wirklich deaktivieren: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Plugin konnte nicht deaktiviert werden.';
$lang['admin_plugins_disable_success'] = 'Plugin erfolgreich deaktiviert.';
$lang['admin_plugins_enable_all_confirm'] = 'Sind Sie sicher, dass Sie alle Plugins aktivieren möchten?';
$lang['admin_plugins_enable_all_error'] = 'Alle Plugins konnten nicht aktiviert werden.';
$lang['admin_plugins_enable_all_success'] = 'Alle Plugins wurden erfolgreich aktiviert.';
$lang['admin_plugins_enable_confirm'] = 'Möchten Sie das Plugin wirklich aktivieren: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Plugin konnte nicht aktiviert werden.';
$lang['admin_plugins_enable_success'] = 'Plugin erfolgreich aktiviert.';
$lang['admin_plugins_install_confirm'] = 'Möchten Sie dieses Plugin wirklich installieren?';
$lang['admin_plugins_install_error'] = 'Installation des Plugins fehlgeschlagen.';
$lang['admin_plugins_install_success'] = 'Plugin erfolgreich installiert.';
$lang['admin_plugins_install_tip'] = 'Plugins erweitern bestehende Funktionen mit zusätzlichen Optionen oder Integrationen. Installieren Sie aus dem <a href="%s" target="_blank" rel="noopener">Plugin-Verzeichnis</a> oder laden Sie eine <b>.zip</b>-Datei hoch.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Theme hinzufügen';
$lang['admin_themes_delete_confirm'] = 'Sind Sie sicher, dass Sie das Theme löschen möchten: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Das Thema konnte nicht gelöscht werden.';
$lang['admin_themes_delete_error_active'] = 'Sie können das aktuell aktive Theme nicht löschen.';
$lang['admin_themes_delete_success'] = 'Theme erfolgreich gelöscht.';
$lang['admin_themes_disable_confirm'] = 'Möchten Sie das Theme wirklich deaktivieren: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Das Theme konnte nicht deaktiviert werden.';
$lang['admin_themes_disable_success'] = 'Theme erfolgreich deaktiviert.';
$lang['admin_themes_enable_confirm'] = 'Sind Sie sicher, dass Sie das Theme aktivieren möchten: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Das Theme konnte nicht aktiviert werden.';
$lang['admin_themes_enable_success'] = 'Theme erfolgreich aktiviert.';
$lang['admin_themes_install_confirm'] = 'Möchten Sie dieses Theme wirklich installieren?';
$lang['admin_themes_install_error'] = 'Installation des Themes fehlgeschlagen.';
$lang['admin_themes_install_success'] = 'Theme erfolgreich installiert.';
$lang['admin_themes_install_tip'] = 'Themes ändern das Erscheinungsbild und Layout Ihrer Website. Wählen Sie aus der <a href="%s" target="_blank" rel="noopener">Theme-Bibliothek</a> oder laden Sie eine <b>.zip</b>-Datei hoch.';
$lang['admin_themes_none_tip'] = 'Diese Anwendung wird ohne Theme ausgeführt. Installieren Sie eines, um die öffentliche Benutzeroberfläche anzupassen.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menüs';
$lang['admin_menus_assign_error'] = 'Menüpositionen konnten nicht aktualisiert werden.';
$lang['admin_menus_assign_success'] = 'Menüpositionen erfolgreich aktualisiert.';
$lang['admin_menus_header'] = 'Es sind <b>%s</b> Menüpositionen verfügbar.';
$lang['admin_menus_location'] = 'Position';
$lang['admin_menus_locations'] = 'Menüpositionen';
$lang['admin_menus_manage'] = 'Menüs verwalten';
$lang['admin_menus_menu'] = 'Zugewiesenes Menü';
$lang['admin_menus_none'] = '&#151; Keine &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Sprache hinzufügen';
$lang['admin_languages_default_confirm'] = 'Möchten Sie diese Sprache wirklich als Standardsprache für die Website festlegen?';
$lang['admin_languages_default_error'] = 'Die Standardsprache konnte nicht geändert werden.';
$lang['admin_languages_default_error_nochange'] = 'Diese Sprache ist bereits die Standardsprache.';
$lang['admin_languages_default_success'] = 'Standard-Sprache erfolgreich geändert.';
$lang['admin_languages_disable_all_confirm'] = 'Sind Sie sicher, dass Sie alle Sprachen deaktivieren möchten?';
$lang['admin_languages_disable_all_error'] = 'Konnte nicht alle Sprachen deaktivieren.';
$lang['admin_languages_disable_all_success'] = 'Alle Sprachen wurden erfolgreich deaktiviert.';
$lang['admin_languages_disable_confirm'] = 'Sind Sie sicher, dass Sie die Sprache deaktivieren möchten: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Die Sprache konnte nicht deaktiviert werden.';
$lang['admin_languages_disable_error_default'] = 'Die Standardsprache kann nicht deaktiviert werden.';
$lang['admin_languages_disable_error_nochange'] = 'Diese Sprache ist bereits deaktiviert.';
$lang['admin_languages_disable_success'] = 'Sprache erfolgreich deaktiviert.';
$lang['admin_languages_enable_all_confirm'] = 'Sind Sie sicher, dass Sie alle Sprachen aktivieren möchten?';
$lang['admin_languages_enable_all_error'] = 'Konnte nicht alle Sprachen aktivieren.';
$lang['admin_languages_enable_all_success'] = 'Alle Sprachen wurden erfolgreich aktiviert.';
$lang['admin_languages_enable_confirm'] = 'Sind Sie sicher, dass Sie die Sprache aktivieren möchten: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Die Sprache konnte nicht aktiviert werden.';
$lang['admin_languages_enable_error_nochange'] = 'Diese Sprache ist bereits aktiviert.';
$lang['admin_languages_enable_success'] = 'Sprache erfolgreich aktiviert.';
$lang['admin_languages_install_confirm'] = 'Möchten Sie diese Sprache wirklich installieren?';
$lang['admin_languages_install_error'] = 'Installation der Sprache fehlgeschlagen.';
$lang['admin_languages_install_success'] = 'Sprache erfolgreich installiert.';
$lang['admin_languages_install_tip'] = 'Sprachen fügen Übersetzungen für die Oberfläche und Inhalte Ihrer Website hinzu. Durchsuchen Sie verfügbare Sprachen im <a href="%s" target="_blank" rel="noopener">Sprachverzeichnis</a> oder laden Sie ein <b>.zip</b>-Paket hoch, um Ihre eigene Sprache zu installieren.';
$lang['admin_languages_tip'] = 'Aktivieren, deaktivieren und legen Sie die Standardsprache der Website fest. Aktivierte Sprachen stehen den Besuchern der Website zur Verfügung.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Das Paket existiert bereits.';
$lang['package_archive_download_failed'] = 'Das Paketarchiv konnte nicht heruntergeladen werden.';
$lang['package_backup_create_error'] = 'Fehler beim Erstellen der Paket-Sicherung.';
$lang['package_backup_dir_failed'] = 'Das Sicherungsverzeichnis %s konnte nicht erstellt werden.';
$lang['package_backup_missing'] = 'Die Backup-Datei existiert nicht.';
$lang['package_backup_path_error'] = 'Der Pfad zur Backup-Datei konnte nicht aufgelöst werden.';
$lang['package_backup_request_invalid'] = 'Ungültige Backup-Anfrage.';
$lang['package_backup_restore_error'] = 'Fehler beim Wiederherstellen der Paket-Sicherung.';
$lang['package_catalog_type_unknown'] = 'Unbekannter Katalogtyp.';
$lang['package_checksum_error'] = 'Prüfsummen-Überprüfung (Checksum) des Pakets fehlgeschlagen.';
$lang['package_copy_files_error'] = 'Fehler beim Kopieren der Paketdateien in das Zielverzeichnis.';
$lang['package_copy_updates_error'] = 'Fehler beim Kopieren der Update-Dateien in das Zielverzeichnis.';
$lang['package_dest_dir_failed'] = 'Das Zielverzeichnis %s konnte nicht erstellt werden.';
$lang['package_destination_error'] = 'Das Paketziel konnte nicht aufgelöst werden.';
$lang['package_download_dir_failed'] = 'Das Download-Verzeichnis %s konnte nicht erstellt werden.';
$lang['package_download_empty'] = 'Der Paket-Download hat eine leere Antwort zurückgegeben.';
$lang['package_download_request_invalid'] = 'Ungültige Paket-Download-Anfrage.';
$lang['package_extract_failed'] = 'Das ZIP-Archiv %s konnte nicht entpackt werden.';
$lang['package_invalid_lang_files'] = 'Ungültige Sprache — erforderliche Sprachdateien der Anwendung fehlen.';
$lang['package_invalid_lang_structure'] = 'Ungültige Sprache — admin- und/oder ci3-Verzeichnisse fehlen.';
$lang['package_invalid_missing_info'] = 'Ungültige %s: "info.php" fehlt.';
$lang['package_invalid_module_structure'] = 'Ungültiges Modul — erforderliche config- und/oder controllers-Verzeichnisse fehlen.';
$lang['package_invalid_plugin_boot'] = 'Ungültiges Plugin — "boot.php" fehlt.';
$lang['package_invalid_plugin_contents'] = 'Ungültiges Plugin — Plugins dürfen keine Controller oder Views enthalten.';
$lang['package_invalid_theme_boot'] = 'Ungültiges Theme — "boot.php" fehlt.';
$lang['package_invalid_theme_views'] = 'Ungültiges Theme — views-Verzeichnis fehlt.';
$lang['package_no_root_dir'] = 'Das Paket enthält kein Stammverzeichnis (Root-Verzeichnis).';
$lang['package_not_downloadable'] = 'Das Paket ist nicht öffentlich herunterladbar.';
$lang['package_not_in_registry'] = 'Das Paket ist im öffentlichen Register nicht verfügbar.';
$lang['package_request_invalid'] = 'Ungültige Paketanfrage.';
$lang['package_rollback_request_invalid'] = 'Ungültige Rollback-Anfrage.';
$lang['package_root_mismatch'] = 'Das Stammverzeichnis des Paketarchivs stimmt nicht mit %s überein.';
$lang['package_single_root_required'] = 'Das Paket muss genau ein Stammverzeichnis enthalten.';
$lang['package_source_error'] = 'Die Paketquelle konnte nicht aufgelöst werden.';
$lang['package_system_core_restricted'] = 'Systemkomponenten können nicht als Pakete installiert werden.';
$lang['package_temp_dir_failed'] = 'Das temporäre Verzeichnis %s konnte nicht erstellt werden.';
$lang['package_type_unknown'] = 'Unbekannter Pakttyp.';
$lang['package_update_request_invalid'] = 'Ungültige Paket-Update-Anfrage.';
$lang['package_update_root_mismatch'] = 'Das Stammverzeichnis des Update-Archivs stimmt nicht mit %s überein.';
$lang['package_upload_dir_failed'] = 'Das Upload-Verzeichnis %s konnte nicht erstellt werden.';
$lang['package_url_invalid'] = 'Ungültige Paket-Verteilungs-URL.';
$lang['package_write_failed'] = 'Das Paket konnte nicht nach %s geschrieben werden.';
$lang['package_zip_not_found'] = 'Das Paket-ZIP existiert nicht: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Neue Updates verfügbar!';
$lang['update_backup_error'] = 'Ein Backup des vorhandenen Pakets konnte nicht erstellt werden. Das Update wurde abgebrochen.';
$lang['update_check_disabled'] = 'Automatische Update-Prüfungen sind deaktiviert. Aktivieren Sie sie, um Updates anzuzeigen.';
$lang['update_check_error'] = 'Die Update-Prüfung kann derzeit nicht ausgeführt werden.';
$lang['update_check_success'] = 'Update-Prüfung erfolgreich abgeschlossen.';
$lang['update_install_error'] = 'Das Paket konnte nicht installiert werden. Die vorherige Version wurde beibehalten.';
$lang['update_install_success'] = 'Paket erfolgreich auf die neueste Version aktualisiert.';
$lang['update_interval_3days'] = 'Alle 3 Tage';
$lang['update_interval_biweekly'] = 'Alle 2 Wochen';
$lang['update_interval_daily'] = 'Jeden Tag';
$lang['update_interval_monthly'] = 'Einmal im Monat';
$lang['update_interval_weekly'] = 'Einmal pro Woche';
$lang['update_not_available'] = 'Ihre Website ist auf dem neuesten Stand.';
$lang['update_rollback_error'] = 'Die vorherige Version konnte nicht wiederhergestellt werden. Ein manueller Eingriff kann erforderlich sein.';
$lang['update_rollback_success'] = 'Vorherige Version erfolgreich wiederhergestellt.';
$lang['updates_available'] = 'Verfügbare Updates';
$lang['updates_check_now'] = 'Jetzt prüfen';
$lang['updates_check_now_confirm'] = 'Möchten Sie jetzt wirklich nach Updates suchen?';
$lang['updates_current_version'] = 'Aktuelle Version';
$lang['updates_enable'] = 'Updates aktivieren';
$lang['updates_last_check'] = 'Letzte Prüfung: %s';
$lang['updates_latest_version'] = 'Neueste Version';
$lang['updates_next_check'] = 'Nächste geplante Prüfung: %s';
$lang['updates_previous_version'] = 'Vorherige Version';
$lang['updates_recent'] = 'Kürzlich aktualisiert';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Sperrung der angegebenen IP-Adresse fehlgeschlagen.';
$lang['admin_firewall_ban_success'] = 'IP-Adresse wurde erfolgreich gesperrt.';
$lang['admin_firewall_block_ip'] = 'IP-Adresse sperren';
$lang['admin_firewall_delete_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten IP-Adressen entsperren möchten?';
$lang['admin_firewall_delete_error'] = 'Entsperren der ausgewählten IP-Adressen fehlgeschlagen.';
$lang['admin_firewall_delete_success'] = 'Ausgewählte IP-Adressen wurden erfolgreich entsperrt.';
$lang['admin_firewall_duration'] = 'Sperrdauer';
$lang['admin_firewall_permanent'] = 'Dauerhaft';
$lang['admin_firewall_reason'] = 'Sperrgrund';
$lang['admin_firewall_tip'] = 'Anzeigen und Verwalten von IP-Adressen, die von der Firewall aufgrund wiederholter Verstöße oder verdächtiger Aktivitäten gesperrt wurden.';

// Settings
$lang['404_ban_duration'] = '404-Sperrdauer';
$lang['404_threshold'] = '404-Fehlerlimit';
$lang['uri_ban_duration'] = 'URI-Sperrdauer';
$lang['uri_strike_threshold'] = 'URI-Strikelimit';

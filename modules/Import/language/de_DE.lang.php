<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Importdatei erfolgreich gelesen',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'Der importierte Datensatz ist an einem Prozess beteiligt und kann nicht bearbeitet werden, da einige Felder für die Bearbeitung durch den Prozess gesperrt sind.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Datensätze wegen Fehlern ausgelassen. Siehe Registerkarte "Fehler" für nähere Informationen',
    'LBL_UPDATE_SUCCESSFULLY' => 'Datensätze erstellt oder erfolgreich aktualisiert',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Datensätze erfolgreich erstellt',
    'LBL_STEP_4_TITLE' => 'Schritt {0}: Datei importieren',
    'LBL_STEP_5_TITLE' => 'Schritt {0}: Ergebnis ansehen',
    'LBL_CUSTOM_ENCLOSURE' => 'Felder qualifiziert nach:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Kann nicht veröffentlicht werden: Es gibt eine andere Import-Zuordnung mit demselben Namen.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Eine Zuordnung eines anderen Benutzers kann nicht aufgehoben werden. Sie haben eine Zuordnung mit dem selben Namen.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Für diesen Modultyp sind keine Importe angelegt',
    'LBL_IMPORT_TYPE' => 'Wie möchten Sie mit den importierten Daten vorgehen?',
    'LBL_IMPORT_BUTTON' => 'Nur neue Datensätze erstellen',
    'LBL_UPDATE_BUTTON' => 'Neue Datensätze erstellen und vorhandene aktualisieren',
    'LBL_CREATE_BUTTON_HELP' => 'Diese Option verwenden, um neue Datensätze anzulegen. Hinweis: Zeilen, die mit den IDs bestehender Datensätze übereinstimmen, werden nicht importiert, wenn die Werte dem ID-Feld zugeordnet sind.',
    'LBL_UPDATE_BUTTON_HELP' => 'Diese Option verwenden, um bestehende Datensätze zu aktualisieren. Die Daten in der Importdatei werden bestehenden Datensätzen zugewiesen, basierend auf der Datensatz-ID in der Importdatei.',
    'LBL_NO_ID' => 'ID benötigt',
    'LBL_PRE_CHECK_SKIPPED' => 'Vorprüfung übersprungen',
    'LBL_NOLOCALE_NEEDED' => 'Keine Konvertierung der Ländereinstellungen notwendig',
    'LBL_FIELD_NAME' => 'Feldname',
    'LBL_VALUE' => 'Wert',
    'LBL_ROW_NUMBER' => 'Zeilennummer',
    'LBL_NONE' => 'Kein(e)',
    'LBL_REQUIRED_VALUE' => 'Benötigter Wert fehlt',
    'LBL_ERROR_SYNC_USERS' => 'Ungültiger Wert bei der Synchronisierung mit Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'Diese ID existiert bereits in der Tabelle',
    'LBL_ASSIGNED_USER' => 'Wenn der Benutzer nicht existiert, verwenden Sie den derzeitigen Benutzer',
    'LBL_SHOW_HIDDEN' => 'Felder anzeigen, die normalerweise nicht importierbar sind',
    'LBL_UPDATE_RECORDS' => 'Aktualisieren von Datensätzen, anstatt sie zu importieren (kann nicht rückgängig gemacht werden)',
    'LBL_TEST'=> 'Testimport (Daten werden nicht gespeichert oder geändert)',
    'LBL_TRUNCATE_TABLE' => 'Tabelle vor Datenimport leeren (alle Datensätze löschen)',
    'LBL_RELATED_ACCOUNTS' => 'Keine verknüpften Firmen erstellen',
    'LBL_NO_DATECHECK' => 'Datumsüberprüfung überspringen (schneller, aber scheitert bei einem falschen Datum)',
    'LBL_NO_WORKFLOW' => 'Während des Imports keinen Workflow laufen lassen',
    'LBL_NO_EMAILS' => 'Während des Imports keine E-Mail-Benachrichtigungen senden',
    'LBL_NO_PRECHECK' => 'Nativer Formatmodus',
    'LBL_STRICT_CHECKS' => 'Striktes Regelwerk verwenden (Auch E-Mail-Adressen und Telefonnummern überprüfen)',
    'LBL_ERROR_SELECTING_RECORD' => 'Fehler bei der Auswahl des Datensatzes:',
    'LBL_ERROR_DELETING_RECORD' => 'Fehler beim Löschen des Datensatzes:',
    'LBL_NOT_SET_UP' => 'Für diesen Modultyp sind keine Importe angelegt',
    'LBL_ARE_YOU_SURE' => 'Sind Sie sicher? Das löscht alle Daten in diesem Modul.',
    'LBL_NO_RECORD' => 'Kein Datensatz mit dieser ID zum Aktualisieren',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Für diesen Modultyp sind keine Importe angelegt',
    'LBL_DEBUG_MODE' => 'Debug-Modus einschalten',
    'LBL_ERROR_INVALID_ID' => 'Zeichenkette für dieses Feld zu lang (Maximallänge 36 Zeichen)',
    'LBL_ERROR_INVALID_PHONE' => 'Ungültige Telefonnummer',
    'LBL_ERROR_INVALID_NAME' => 'Zeichenkette für dieses Feld zu lang',
    'LBL_ERROR_INVALID_VARCHAR' => 'Zeichenkette für dieses Feld zu lang',
    'LBL_ERROR_INVALID_DATETIME' => 'Ungültiges Datum/Zeit',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Ungültiges Datum/Zeit',
    'LBL_ERROR_INVALID_INT' => 'Ungültiger Integer-Wert',
    'LBL_ERROR_INVALID_NUM' => 'Ungültiger numerischer Wert',
    'LBL_ERROR_INVALID_TIME' => 'Ungültige Zeit',
    'LBL_ERROR_INVALID_EMAIL'=>'Ungültige E-Mail-Adresse',
    'LBL_ERROR_INVALID_BOOL'=>'Ungültiger Wert (muss 1 oder 0 sein)',
    'LBL_ERROR_INVALID_DATE'=>'Ungültiges Datum',
    'LBL_ERROR_INVALID_USER'=>'Ungültiger Benutzername oder ID',
    'LBL_ERROR_INVALID_TEAM' => 'Ungültiger Teamname oder ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Ungültiger Firmenname oder ID',
    'LBL_ERROR_INVALID_RELATE' => 'Ungültiges verknüpftes Feld',
    'LBL_ERROR_INVALID_CURRENCY' => 'Ungültiger Währungswert',
    'LBL_ERROR_INVALID_FLOAT' => 'Ungültige Kommazahl',
    'LBL_ERROR_NOT_IN_ENUM' => 'Wert nicht in Auswahlliste. Erlaubte Werte sind:',
    'LBL_ERROR_ENUM_EMPTY' => 'Value not in dropDown list. dropDown list is empty',
    'LBL_NOT_MULTIENUM' => 'Kein MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Für diesen Modultyp sind keine Importe angelegt',
    'LBL_IMPORT_MODULE_NO_USERS' => 'ACHTUNG: Sie haben noch keine Benutzer definiert. Wenn Sie einen Import durchführen, ohne vorher Benutzer definiert zu haben, werden alle Daten dem Administrator zugeordnet.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Kann nicht veröffentlicht werden: Es gibt eine andere Import-Zuordnung mit demselben Namen.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Eine Zuordnung eines anderen Benutzers kann nicht aufgehoben werden. Sie haben eine Zuordnung mit demselben Namen.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Das Verzeichnis',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'existiert nicht, oder ist nicht beschreibbar',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Das Hochladen der Datei war nicht erfolgreich. Möglicherweise ist der Parameter "upload_max_filesize" in php.ini zu niedrig gesetzt',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Datei ist zu groß. Max:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Ändern Sie $sugar_config[&#39;upload_maxsize&#39;] in config.php',
    'LBL_MODULE_NAME' => 'Import',
    'LBL_MODULE_NAME_SINGULAR' => 'Import',
    'LBL_TRY_AGAIN' => 'Wiederholen',
    'LBL_START_OVER' => 'Neu starten',
    'LBL_ERROR' => 'Fehler:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Die Importdatei enthält {0} Zeilen. Die optimale Zeilenanzahl ist {1}. Zu viele Datensätze können den Importvorgang verlangsamen. Bitte OK wählen, um weiter zu importieren. "Abbrechen" wählen, um die Daten in der Importdatei zu überprüfen.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Ein Administrator darf nicht importiert werden',
    'ERR_REPORT_LOOP' => 'Das System hat eine Berichtsschleife entdeckt. Ein Benutzer kann keine Berichte an sich selbst senden, und auch keine Manager können an diese berichten.',
    'ERR_MULTIPLE' => 'Es wurden mehrere Spalten mit dem gleichen Feldnamen definiert.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Erforderliche Felder fehlen:',
    'ERR_MISSING_MAP_NAME' => 'Fehlender Name für individuelle Zuordnung',
    'ERR_SELECT_FULL_NAME' => 'Wenn Vorname und Nachname ausgewählt sind, kann "Vollständiger Name" nicht ausgewählt werden.',
    'ERR_SELECT_FILE' => 'Datei zum Hochladen auswählen.',
    'LBL_SELECT_FILE' => 'Datei auswählen:',
    'LBL_CUSTOM' => 'Benutzerdefiniert',
    'LBL_CUSTOM_CSV' => 'Benutzerdefinierte Komma-getrennte Datei',
    'LBL_CSV' => 'Datei auf meinem Computer',
    'LBL_EXTERNAL_SOURCE' => 'externe Anwendung oder externer Dienst',
    'LBL_TAB' => 'Tab-getrennte Datei',
    'LBL_CUSTOM_DELIMITED' => 'Benutzerdefinierte getrennte Datei',
    'LBL_CUSTOM_DELIMITER' => 'Felder begrenzt durch:',
    'LBL_FILE_OPTIONS' => 'Dateioptionen',
    'LBL_CUSTOM_TAB' => 'Benutzerdefinierte Tab-getrennte Datei',
    'LBL_DONT_MAP' => '-- Dieses Feld nicht zuweisen --',
    'LBL_STEP_MODULE' => 'In welches Modul sollen die Daten importiert werden?',
    'LBL_STEP_1_TITLE' => 'Schritt 1: Datenquelle auswählen',
    'LBL_CONFIRM_TITLE' => 'Schritt {0}: Import-Dateieigenschaften bestätigen',
    'LBL_CONFIRM_EXT_TITLE' => 'Schritt {0}: Externe Quelleneigenschaften bestätigen',
    'LBL_WHAT_IS' => 'Was ist die Datenquelle?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Die Zuweisungen für Microsoft Outlook setzen Komma-getrennte (CSV) Dateien voraus. Wenn die Datei Tab-getrennt ist, können die Importergebnisse nicht korrekt sein.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Um Ihre gespeicherten Importeinstellungen zu wählen, wählen Sie eine der folgenden Optionen aus:',
    'LBL_PUBLISH' => 'Veröffentlichen',
    'LBL_DELETE' => 'Löschen',
    'LBL_PUBLISHED_SOURCES' => 'Publizierte Quellen:',
    'LBL_UNPUBLISH' => 'Publikation aufheben',
    'LBL_NEXT' => 'Weiter >',
    'LBL_BACK' => '< Zurück',
    'LBL_STEP_2_TITLE' => 'Schritt {0}: Importdatei hochladen',
    'LBL_HAS_HEADER' => 'Header-Zeile:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Hinweise:',
    'LBL_NOW_CHOOSE' => 'Wählen Sie jetzt die Datei für den Import:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 und 2000 können Daten im <b>Komma-getrennte Werte</b>-Format ausgeben. Dieses kann verwendet werden, um Daten in das System zu importieren. Um Ihre Daten aus Outlook zu exportieren, folgen Sie bitte den unten aufgeführten Schritten:',
    'LBL_OUTLOOK_NUM_1' => '<b>Outlook</b> starten',
    'LBL_OUTLOOK_NUM_2' => 'Das Menü <b>Datei</b> wählen und dann die Option <b>Importieren/Exportieren ...</b>',
    'LBL_OUTLOOK_NUM_3' => '<b>Exportieren in eine Datei</b> auswählen und "Weiter" klicken',
    'LBL_OUTLOOK_NUM_4' => '<b>Komma-getrennte Werte (Windows)</b> auswählen und <b>Weiter</b> klicken.<br> Anmerkung: Möglicherweise werden Sie zum Installieren der Exportkomponente aufgefordert',
    'LBL_OUTLOOK_NUM_5' => 'Wählen Sie den Ordner <b>Kontakte</b> und klicken Sie auf <b>Weiter</b>. Sie können verschiedene Kontakte-Ordner wählen, wenn Ihre Kontakte in mehreren Ordnern gespeichert sind',
    'LBL_OUTLOOK_NUM_6' => 'Wählen Sie einen Dateinamen und klicken Sie auf <b>Weiter</b>',
    'LBL_OUTLOOK_NUM_7' => 'Klicken Sie auf <b>Fertigstellen</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com kann Daten im <b>Komma-getrennte Werte</b>-Format ausgeben. Dieses kann verwendet werden, um Daten in das System zu importieren. Um Ihre Daten aus Salesforce.com zu exportieren, folgen Sie bitte den unten aufgeführten Schritten:',
    'LBL_SF_NUM_1' => 'Öffnen Sie Ihren Browser, gehen Sie auf http://www.salesforce.com, und melden Sie sich mit Ihrer E-Mail-Adresse und dem entsprechenden Passwort an',
    'LBL_SF_NUM_2' => 'Klicken Sie auf die Registerkarte <b>Berichte</b> im Hauptmenü',
    'LBL_SF_NUM_3' => '<b>Zum Exportieren von Firmen:</b> Klicken Sie auf <b>Aktive Firmen</b> <br><b>Zum Exportieren von Kontakten:</b> Klicken Sie auf <b>Mailing List</b>',
    'LBL_SF_NUM_4' => 'Bei <b>Schritt 1: Wählen Sie den Berichtstyp</b>, wählen Sie <b>Tabular-Berichte</b> und klicken Sie auf <b>Weiter</b>',
    'LBL_SF_NUM_5' => 'Bei <b>Schritt 2: Wählen Sie die Berichtespalten</b>, wählen Sie die Spalten, die Sie exportieren möchten, und klicken Sie auf <b>Weiter</b>',
    'LBL_SF_NUM_6' => 'Bei <b>Schritt 3: Wählen Sie die zusammenzufassenden Informationen</b>, klicken Sie <b>Weiter</b>',
    'LBL_SF_NUM_7' => 'Bei <b>Schritt 4: Spalten sortieren</b>, klicken Sie einfach auf <b>Weiter</b>',
    'LBL_SF_NUM_8' => 'Bei <b>Schritt 5: Wählen Sie die Kriterien</b>, unter <b>Startdatum</b>, wählen Sie ein Datum, das weit genug in der Vergangenheit liegt, damit alle Ihre Firmen mit eingeschlossen sind. Sie können auch eine Untermenge an Firmen exportieren, indem Sie erweiterte Kriterien benutzen. Wenn Sie fertig sind, klicken Sie auf <b>Bericht erstellen</b>',
    'LBL_SF_NUM_9' => 'Ein Bericht wird erstellt und es sollte angezeigt werden: <b>Berichts-Erstellungsstatus: Fertig.</b> Jetzt klicken Sie auf <b>Exportieren nach Excel</b>',
    'LBL_SF_NUM_10' => 'Bei <b>Bericht exportieren:</b>, für <b>Export-Datenformat:</b>, wählen Sie <b>Komma-getrennte .csv</b>.Klicken Sie auf <b>Exportieren</b>.',
    'LBL_SF_NUM_11' => 'Ein Dialog erscheint, mit dem Sie die Exportdatei auf Ihrem Computer speichern können.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! kann Daten im <b>Komma getrennte Werte</b> Format ausgeben. Dieses kann verwendet werden, um Daten in das System zu importieren. Um Ihre Daten aus Act! zu exportieren folgen Sie bitte den unten aufgeführten Schritten:',
    'LBL_ACT_NUM_1' => 'Rufen Sie <b>ACT!</b> auf.',
    'LBL_ACT_NUM_2' => 'Wählen Sie im Menü <b>Datei</b> die Option <b>Datenaustausch</b> und dann <b>Exportieren...</b>',
    'LBL_ACT_NUM_3' => 'Wählen Sie den Dateityp <b>Text-Delimited</b>',
    'LBL_ACT_NUM_4' => 'Wählen Sie einen Dateinamen und einen Speicherort für die exportierten Daten und drücken auf <b>Weiter</b>',
    'LBL_ACT_NUM_5' => 'Wählen Sie <b>Nur Kontakte</b>',
    'LBL_ACT_NUM_6' => 'Klicken Sie auf die Schaltfläche <b>Optionen...</b>',
    'LBL_ACT_NUM_7' => 'Wählen Sie <b>Komma</b> als Feld-Trennzeichen',
    'LBL_ACT_NUM_8' => 'Markieren Sie das Kontrollkästchen <b>Ja, Feldnamen exportieren</b> und klicken Sie auf <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Klicken Sie auf <b>Weiter</b>',
    'LBL_ACT_NUM_10' => 'Wählen Sie <b>Alle Datensätze</b> und dann <b>Beenden</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Viele Anwendungen erlauben den Datenexport in eine <b>Komma-getrennte Textdatei (.csv)</b>, indem man diesen allgemeinen Anweisungen folgt:',
    'LBL_CUSTOM_NUM_1' => 'Starten Sie das Programm und öffnen Sie die Datendatei',
    'LBL_CUSTOM_NUM_2' => 'Wählen Sie <b>Speichern unter...</b> oder <b>Exportieren...</b> im Menü',
    'LBL_CUSTOM_NUM_3' => 'Speichern Sie die Datei als <b>CSV</b> oder im Format <b>Komma-getrennte Werte</b>',
    'LBL_IMPORT_TAB_TITLE' => 'Viele Anwendungen erlauben den Datenexport in eine <b>Tab-getrennte Textdatei (.tsv oder .tab)</b>, indem man diesen allgemeinen Anweisungen folgt:',
    'LBL_TAB_NUM_1' => 'Starten Sie das Programm und öffnen Sie die Datendatei',
    'LBL_TAB_NUM_2' => 'Wählen Sie <b>Speichern unter...</b> oder <b>Exportieren...</b> im Menü',
    'LBL_TAB_NUM_3' => 'Speichern Sie die Datei im Format <b>TSV</b> oder <b>Tab-getrennte Werte</b>',
    'LBL_STEP_3_TITLE' => 'Schritt {0}: Bestätigen Sie die Feldzuweisungen',
    'LBL_STEP_DUP_TITLE' => 'Schritt {0}: Mögliche Duplikate überprüfen',
    'LBL_SELECT_FIELDS_TO_MAP' => 'In der nachstehenden Liste wählen Sie die Felder Ihrer Importdatei, die in die einzelnen Felder im System importiert werden sollen. Wenn Sie fertig sind, klicken Sie auf <b>Weiter</b>:',
    'LBL_DATABASE_FIELD' => 'Modulfeld',
    'LBL_HEADER_ROW' => 'Header-Zeile',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Bitte auswählen, wenn die erste Zeile eine Header-Zeile ist, die Spaltennamen enthält.',
    'LBL_ROW' => 'Zeile',
    'LBL_SAVE_AS_CUSTOM' => 'Als benutzerspezifische Zuordnung speichern:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Benutzerspezifischer Zuordnungsname:',
    'LBL_CONTACTS_NOTE_1' => 'Entweder Nachname oder vollständiger Name müssen zugeordnet werden.',
    'LBL_CONTACTS_NOTE_2' => 'Wenn der vollständige Name zugeordnet ist, dann werden Vorname und Nachname ignoriert.',
    'LBL_CONTACTS_NOTE_3' => 'Wenn der vollständige Name zugeordnet ist, werden die Daten beim Einstellen in die Datenbank in Vorname und Nachname aufgeteilt.',
    'LBL_CONTACTS_NOTE_4' => 'Felder, die mit Adresse 2 und Adresse 3 enden, werden beim Einfügen in die Datenbank an das Feld für die Hauptadresse angehängt.',
    'LBL_ACCOUNTS_NOTE_1' => 'Felder, die mit Adresse 2 und Adresse 3 enden, werden beim Einfügen in die Datenbank an das Feld für die Hauptadresse angehängt.',
    'LBL_REQUIRED_NOTE' => 'Benötigtes Feld(er):',
    'LBL_IMPORT_NOW' => 'Jetzt importieren',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Kann die Importdatei nicht zum Lesen öffnen',
    'LBL_NOT_SAME_NUMBER' => 'Die Anzahl der Felder pro Zeile in Ihrer Datei stimmt nicht überein',
    'LBL_NO_LINES' => 'Ihre Importdatei enthält keine Zeilen. Stellen Sie sicher, dass diese keine leeren Zeilen enthält, und versuchen Sie es dann erneut.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Die Importdatei wurde schon verarbeitet oder existiert nicht',
    'LBL_SUCCESS' => 'Erfolg:',
	'LBL_FAILURE' => 'Import fehlgeschlagen',
    'LBL_SUCCESSFULLY' => 'Erfolgreich importiert',
    'LBL_LAST_IMPORT_UNDONE' => 'Ihr letzter Import wurde rückgängig gemacht.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Import rückgängig machen nicht möglich.',
    'LBL_FAIL' => 'Fehler:',
    'LBL_RECORDS_SKIPPED' => 'Datensätze wurden ignoriert, weil ein oder mehrere Pflichtfelder fehlten',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Datensätze wurden ignoriert, weil die IDs schon vorhanden waren oder weil sie länger waren als 36 Zeichen',
    'LBL_RESULTS' => 'Resultat',
    'LBL_CREATED_TAB' => 'Datensätze erstellt',
    'LBL_DUPLICATE_TAB' => 'Duplikate',
    'LBL_ERROR_TAB' => 'Fehler',
    'LBL_IMPORT_MORE' => 'Weitere importieren',
    'LBL_FINISHED' => 'Zurückkehren zu',
    'LBL_UNDO_LAST_IMPORT' => 'Letzten Import rückgängig machen',
    'LBL_LAST_IMPORTED'=>'Zuletzt importiert',
    'ERR_MULTIPLE_PARENTS' => 'Sie können nur eine Parent-ID definieren',
    'LBL_DUPLICATES' => 'Duplikate gefunden',
    'LNK_DUPLICATE_LIST' => 'Liste der Duplikate herunterladen',
    'LNK_ERROR_LIST' => 'Fehlerliste herunterladen',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Datensätze herunterladen, die nicht importiert werden konnten',
    'LBL_UNIQUE_INDEX' => 'Index für Duplikatevergleich wählen',
    'LBL_VERIFY_DUPS' => 'Doppelte Einträge nach gewählten Indexes überprüfen',
    'LBL_INDEX_USED' => 'Zu prüfende Felder:',
    'LBL_INDEX_NOT_USED' => 'Verfügbare Felder:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Die Datei wurde nicht erfolgreich hochgeladen. Überprüfen Sie die Dateiberechtigungen im Cache-Verzeichnis Ihrer Sugar-Installation.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Eindeutige ID-Nummer',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Name oder ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonnummer',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Teamname oder ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Beliebiger Text',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Beliebiger Text',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Beliebiger Text',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Zeit',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Datum',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datum/Zeit',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Benutzername oder ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; oder &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Liste',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-Mail-Adresse',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numerisch (keine Dezimalstellen)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerisch (keine Dezimalstellen)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numerisch (keine Dezimalstellen)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerisch (Dezimalstellen erlaubt)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerisch (Dezimalstellen erlaubt)',
    'LBL_DATE_FORMAT' => 'Datumsformat:',
    'LBL_TIME_FORMAT' => 'Zeitformat:',
    'LBL_TIMEZONE' => 'Zeitzone:',
    'LBL_ADD_ROW' => 'Feld hinzufügen',
    'LBL_REMOVE_ROW' => 'Feld entfernen',
    'LBL_DEFAULT_VALUE' => 'Standardwert',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Importdatei-Eigenschaften anzeigen',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Importdatei-Eigenschaften ausblenden',
    'LBL_SHOW_NOTES' => 'Notizen anzeigen',
    'LBL_HIDE_NOTES' => 'Notizen ausblenden',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Vorschau-Spalten anzeigen',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Vorschau-Spalten ausblenden',
    'LBL_SAVE_MAPPING_AS' => 'Zuordnung speichern unter',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Hochkomma (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Doppeltes Hochkomma (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Kein(e)',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Andere:',
    'LBL_IMPORT_COMPLETE' => 'Abmelden',
    'LBL_IMPORT_COMPLETED' => 'Import fertiggestellt.',
    'LBL_IMPORT_ERROR' => 'Es gibt Importfehler',
    'LBL_IMPORT_RECORDS' => 'Datensätze werden importiert',
    'LBL_IMPORT_RECORDS_OF' => 'von',
    'LBL_IMPORT_RECORDS_TO' => 'an',
    'LBL_CURRENCY' => 'Währung',
    'LBL_SYSTEM_SIG_DIGITS' => 'Systemrelevante Dezimalstellen',
    'LBL_NUMBER_GROUPING_SEP' => '1000er-Trennzeichen:',
    'LBL_DECIMAL_SEP' => 'Dezimalzeichen',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format für Namen-Anzeige',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Beispiel',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Anrede, "f" Vorname, "l" Nachname</i>',
    'LBL_CHARSET' => 'Dateikodierung:',
    'LBL_MY_SAVED_HELP' => 'Diese Option verwenden, um Ihre voreingestellten Importeinstellungen anzuwenden, inkl. Importeigenschaften, Zuweisungen und Duplikate-Check.<br><br>Klicken Sie auf <b>Löschen</b>, um eine Zuordnung für alle Benutzer zu löschen.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Diese Option verwenden, um Ihre voreingestellten Importeinstellungen anzuwenden, inkl. Importeigenschaften, Zuweisungen und Duplikate-Check.<br><br>Klicken Sie auf <b>Veröffentlichen</b>, um die Zuordnung für andere Benutzer zugänglich zu machen.<br>Klicken Sie auf <b>Veröffentlichung rückgängig machen</b>, wenn Sie dies nicht möchten.<br>Klicken Sie auf <b>Löschen</b>, um eine Zuordnung für alle Benutzer zu löschen.',
    'LBL_MY_PUBLISHED_HELP' => 'Diese Option verwenden, um Ihre voreingestellten Importeinstellungen anzuwenden, inkl. Importeigenschaften, Zuweisungen und Duplikate-Check.',
    'LBL_ENCLOSURE_HELP' => '<p>Das <b>Qualifikationszeichen</b> wird verwendet, um den Feldinhalt abzugrenzen, inklusive aller Zeichen, die möglicherweise auch als Feldbegrenzer verwendet werden.<br><br>Wenn der Feldbegrenzer ein Komma ist (,) und das Qualifikationszeichen ist ein doppeltes Hochkomma ("), dann wird<br><b>"Cupertino, Kalifornien"</b> als ein Feld importiert und erscheint als <b>Cupertino, Kalifornien</b> in der Datenbank.<br>Wenn es keine Qualifikationszeichen gibt, dann wird<br><b>"Cupertino, Kalifornien"</b> als zwei Felder importiert <b>"Cupertino</b> und <b>Kalifornien"</b>.<br><br>Hinweis: Die Importdatei muss keine Qualifikationszeichen enthalten.<br>Das Standard-Qualifikationszeichen für Komma- und Tab-getrennte Dateien in Excel ist ein doppeltes Hochkomma (“).</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Wählen Sie diese Option, um eine Excel-Datei hochzuladen, welche die zu importierenden Daten enthält. Beispiele: Komma-getrennte .csv-Datei oder Exportdatei aus Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Wählen Sie diese Option, wenn der Feldbegrenzer in der Importdatei ein <b>TAB</b> ist oder wenn die Dateiendung .txt lautet.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Wählen Sie diese Option, wenn der Feldbegrenzer in der Importdatei weder ein Tab noch ein Komma ist, und geben Sie das Zeichen in das nebenstehende Feld ein.',
    'LBL_DATABASE_FIELD_HELP' => 'Wählen Sie ein Feld aus allen für dieses Modul existierenden Felder aus.',
    'LBL_HEADER_ROW_HELP' => 'Das sind die Feldnamen in der Kopfzeile der Importdatei.',
    'LBL_DEFAULT_VALUE_HELP' => 'Geben Sie einen Wert an, der für dieses Feld eingefügt werden soll, wenn die Importdatei keine Werte für dieses Feld enthält.',
    'LBL_ROW_HELP' => 'Das sind die Daten aus der ersten Zeile nach der Kopfzeile in der Importdatei. Wenn in dieser Spalte die Beschriftungen der Kopfzeile angezeigt werden, klicken Sie auf "Zurück", um die Header-Zeile in den Import-Dateieigenschaften anzugeben.',
    'LBL_SAVE_MAPPING_HELP' => 'Geben Sie einen Namen ein, um die Importeinstellungen, inkl. die Feldzuordnungen und die Indizes für den Duplikate-Check, zu speichern. Die gespeicherten Importeinstellungen können für Importe in der Zukunft verwendet werden.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Beim Upload Ihrer Importdatei können einige Dateieigenschaften automatisch erkannt werden. Sie können diese je nach Bedarf anzeigen und verwalten<br>. Hinweis: Die hier angegebenen Einstellungen gehören zu diesem Import<br> und ersetzen die allgemeinen Benutzereinstellungen nicht.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Finden Sie vorhandene Datensätze im System, die Duplikate von zu importierenden Datensätzen sein könnten, indem Sie einen Duplikats-Check durchführen. Dafür werden die Felder verwendet, die in die Spalte "Daten prüfen" gezogen werden. Die Zeilen in der Importdatei, welche übereinstimmende Daten enthalten, werden auf der nächsten Seite angezeigt, und Sie können auswählen, welche Zeilen Sie importieren möchten',
    'LBL_IMPORT_STARTED' => 'Import gestartet:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Import-Dateieinstellungen',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Der Datensatz konnte wegen eines Berechtigungsfehlers nicht aktualisiert werden.',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Möchten Sie diese Import-Einstellungen tatsächlich löschen?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Wenn die Daten aus einer der folgenden Quellen exportiert wurden, bitte die Anwendung auswählen.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Bitte das Quellsystem auswählen, um die automatische Zuweisungen zu verwenden, um den Importvorgang zu vereinfachen.',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Diese Option verwenden, um Daten direkt aus eine externe Quelle zu importieren, z.B. Gmail',
    'LBL_EXAMPLE_FILE' => 'Import-Dateivorlage herunterladen',
    'LBL_CONFIRM_IMPORT' => 'Die Update-Option ist ausgewählt. Änderungen an Datensätzen können mit dieser Option nicht rückgängig gemacht werden. Bereits erstellte Datensätze können aber rückgängig gemacht werden. Klicken Sie auf "Abbrechen", um nur neue Datensätze zu erstellen, oder auf OK, um fortzufahren.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Hinweis: Sie haben bereits vordefinierte Zuweisungen ausgewählt, möchten Sie fortfahren?',
    'LBL_EXTERNAL_FIELD' => 'Externes Feld',
    'LBL_SAMPLE_URL_HELP' => 'Bitte eine Musterdatei mit Überschriften herunterladen. Diese Datei verwenden, um eine Importdateivorlage zu verwenden.',
    'LBL_AUTO_DETECT_ERROR' => 'Der Feldtrennzeichen könnte nicht identifiziert werden, Bitte die Einstellungen überprüfen.',
    'LBL_MIME_TYPE_ERROR_1' => 'Diese Datei enthält keine abgetrennte Liste. Überprüfen Sie den Dateityp. Wir empfehlen Komma-getrennte Dateien (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'OK auswählen, um aus der ausgewählte Datei zu importieren. Um eine neue Datei zu importieren, klicken Sie auf "Erneut versuchen"',
    'LBL_FIELD_DELIMETED_HELP' => 'Das Feld-Trennzeichen gibt das Zeichen an, das zur Trennung der Spalten verwendet wird.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Eine Datei mit Daten auswählen, die durch Trennzeichen getrennt sind, z.B. Komma- oder Tab-getrennte Datei. Dateien mit der Endung .csv sind zu empfehlen.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Kein Zugriff auf den Quelladapter, bitte später erneut versuchen.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Kein Zugriff auf den externen Feed, bitte später erneut versuchen.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'In das Importverzeichnis kann nicht geschrieben werden.',
    'LBL_ADD_FIELD_HELP' => 'Diese Option verwenden, wenn das Feld in allen Datensätzen denselben Wert erhalten soll. Dieses Feld auswählen und den Wert eintragen.',
    'LBL_MISSING_HEADER_ROW' => 'Keine Header-Zeile gefunden',
    'LBL_CANCEL' => 'Abbrechen',
    'LBL_SELECT_DS_INSTRUCTION' => 'Bereit, den Importvorgang zu starten? Wählen Sie die Datenquelle aus, was importiert werden soll.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Die Datei mit den Daten auswählen, die importiert werden sollen, oder eine Vorlage herunterladen, um den Importvorgang zu vereinfachen.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Die Tabelle unten zeigt alle Felder in diesem Modul an, die mit den Feldern in der Importdatei übereinstimmen. Wenn diese Datei eine Header-Zeile hat, werden die Spalten mit den entsprechenden Feldern gekoppelt. Stellen Sie sicher, dass diese Zuweisungen in Ordnung sind, und nehmen Sie gegebenenfalls Änderungen vor. Zeile 1 der Daten in der Datei wird angezeigt, um die Zuordnung zu vereinfachen.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Die Tabelle unten zeigt alle Felder in diesem Modul an, die mit den Feldern in der Importdatei übereinstimmen. Wenn diese Datei eine Header-Zeile hat, werden die Spalten mit den entsprechenden Feldern gekoppelt. Stellen Sie sicher, dass diese Zuweisungen in Ordnung sind, und nehmen Sie gegebenenfalls Änderungen vor. Zeile 1 der Daten in der Datei wird angezeigt, um die Zuordnung zu vereinfachen.',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Um Duplikate zu vermeiden, können Felder definiert werden, die auf die Duplikatprüfung beim Import angewendet werden. Werte in bestehenden Datensätzen werden mit den Datensätzen in der Datei verglichen. Wenn passenden Datensätze gefunden werden, werden die Ergebnisse im Import-Ergebnisfenster (nächste Seite) angezeigt. Die zu importierende Zeilen können ausgewählt werden.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Anmelden',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Abmelden',
    'LBL_DUP_HELP' => 'Hier werden die Zeilen angezeigt, die nicht importiert werden können, da die Daten mögliche Duplikate enthalten. Um diese Datensätze neu zu importieren, laden Sie die Datensätze herunter, nehmen Sie die entsprechenden Anpassungen vor, und klicken Sie auf <b>Erneut importieren</b>.',
    'LBL_DESELECT' => 'Auswahl aufheben',
    'LBL_SUMMARY' => 'Zusammenfassung',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Hier werden die Datensätze angezeigt, die aufgrund von Fehlern nicht importiert werden können. Um diese Daten erneut zu importieren, laden Sie die Daten herunter, nehmen Sie die entsprechenden Anpassungen vor, und starten Sie den Import erneut',
    'LBL_EXTERNAL_MAP_HELP' => 'Die Tabelle unten zeigt alle Felder der externe Quelle und die dazu passende Sugar-Felder an, die miteinander verknüpft sind. Die Verknüpfungen überprüfen und Änderungen vornehmen. Alle Pflichtfelder müssen Verknüpfungen haben.',
    'LBL_EXTERNAL_MAP_NOTE' => 'Der Import wird für alle Kontakte aller Google-Kontaktgruppen versucht.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Der Import-Benutzername beim Importvorgang ist standardmäßig der vollständige Google-Kontaktname. Der Benutzername muss bei Bedarf nachträglich angepasst werden.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => '<b>Jetzt importieren</b> auswählen, um den Importvorgang zu starten. Nur Datensätze mit Nachnamen werden erstellt. Datensätze werden nicht erstellt, wenn Duplikate existieren oder die E-Mail-Adresse bereits existiert.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Diese Spalte zeigt alle Felder aus der externe Datenquelle an, die Daten enthalten, die für die Erstellung neuer Datensätze verwendet werden.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Einen Standardwert für dieses Feld definieren, wenn das Feld keinen Inhalt hat.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Um neue Datensätze einem anderen Benutzer zuzuweisen, wählen Sie einen anderen Benutzer aus.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Um Datensätze einem anderen Team zuweisen, verwenden Sie die Spalte "Standardwert", um andere Teams auszuwählen.',
    'LBL_SIGN_IN_HELP' => 'Um diesen Dienst zu verwenden, melden Sie sich unter der Registerkarte "Externes Konto" an.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Die Verwaltung der E-Mail-Adressen wird von dem Bean nicht unterstützt.",
);

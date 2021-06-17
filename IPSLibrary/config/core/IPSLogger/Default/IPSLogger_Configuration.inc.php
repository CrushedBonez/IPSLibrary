<?
	/**@defgroup ipslogger_configuration IPSLogger Konfiguration
	 * @ingroup ipslogger
	 * @{
	 *
	 * Konfigurations Einstellungen des Loggers.
	 *
	 * @file          Default/IPSLogger_Configuration.inc.php
	 * @author        Andreas Brauneis
	 * @version
	 * Version 2.50.1, 31.01.2012<br/>
	 *
	 */

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Länge des Kontextes (Logging Kontext
	 * wird bei jedem Aufruf einer Logging Routine als erster Parameter übergeben) im HTML Output.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Format_LogOutContextLen", 12);

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert das Datumsformat im HTML Output
	 * Beispiel, bei Definition des Datumformats von 'Y-m-d H:i:s' und MiroLen (Beschreibung siehe unten) von 3
	 * sieht der Output folgendermaßen aus:
	 * 2011-10-06 06:46:45.707
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Format_LogOutDate",       'Y-m-d H:i:s');

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Micro Sekunden, die HTML Output ausgegeben werden sollen.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Format_LogOutMicroLen",   4);

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Schriftart die für den HTML Output verwendet werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Style_HtmlOutTable",      'font-family:courier; font-size:11px;');

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Breite der Output Spalten im HTML Output.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Style_HtmlOutColGroup",   '<colgroup><col width="25px"><col width="40px"><col width="100px"><col width="200px"><col></colgroup>');

	/** WebFront Konfigurations Parameter
	 *
	 * Steuert ob neue Messages am Ende der Html List hinzugefügt werden oder am Anfang
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ('IPSLOGGER_HTML_NEWMESSAGETOP',   false);

	/** WebFront Konfigurations Parameter
	 * 
	 * Dieser Wert spezifiziert die Farbe des Textes im HTML Output.
	 * 
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Style_HtmlOutColor", '#FFFFFF');

	/** Konfigurations Parameter für File Output
	 *
	 * Dieser Wert spezifiert das Output Verzeichnis für Log Files. Wenn nichts angegeben wird,
	 * wird das normale Logging Verzeichnis von IPS verwendet (.../logs).
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_File_Directory",  "");

	/** Konfigurations Parameter für File Output
	 *
	 * Dieser Wert spezifiert die File Extension für den File Output.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_File_Extension",  "log");

	/** Konfigurations Parameter für Log4IPS Output
	 *
	 * Dieser Wert spezifiert das Output Verzeichnis für Log Files. Wenn nichts angegeben wird,
	 * wird das normale Logging Verzeichnis von IPS verwendet (.../logs).
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Log4IPS_Directory",  "");

	/** Konfigurations Parameter für Log4IPS Output
	 *
	 * Dieser Wert spezifiert die File Extension für den XML Output.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Log4IPS_Extension",  "xml");

	/** Konfigurations Parameter für EMail Output
	 *
	 * Dieser Wert spezifiert die ID der MailServer Instanz in IPS, die für das Versenden von
	 * EMails verwendet werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_ID_SmtpDevice",      0);

	/** Konfigurations Parameter für EMail Output
	 *
	 * Erste von 3 möglichen EMail Adressen, die zum Versenden von EMails angegeben werden kann.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_EMail_Address1",     "");

	/** Konfigurations Parameter für EMail Output
	 *
	 * Zweite von 3 möglichen EMail Adressen, die zum Versenden von EMails angegeben werden kann.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_EMail_Address2",     "");

	/** Konfigurations Parameter für EMail Output
	 *
	 * Dritte von 3 möglichen EMail Adressen, die zum Versenden von EMails angegeben werden kann.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_EMail_Address3",     "");

	/** Konfigurations Parameter für EMail Output
	 *
	 * Text der in das Feld Betreff bei Emails eingetragen werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_EMail_Subject",      "IP-Symcon Fehler sind aufgetreten!");

	/** Konfigurations Parameter für EMail Output
	 *
	 * Signatur die für Emails verwendet werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_EMail_Signature",    "Message send from IP-Symcon HomeControl");

	/** Konfigurations Parameter für Prowl Output
	 *
	 * Schlüssel der für das Versenden von Prowl Messages verwendet werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Key_ProwlService",    '');

	/** Konfigurations Parameter für SysLog Output
	 *
	 * Über diesen Parameter wird gesteuert, ob die Meldungen auch auf den SysLog Output geschrieben werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_SysLog_Enabled",    false);

	/** Konfigurations Parameter für SysLogTypes
	 *
	 * Über diesen Parameter wird gesteuert, welche Meldungen auf den SysLog Output geschrieben werden
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	$SysLog_LogTypes  = array(true/*Fat*/, true/*Err*/, true/*Wrn*/, true/*Not*/, true/*Inf*/, true/*Log*/, false/*Dbg*/, false/*Trc*/, false/*Tst*/);

	/** Konfigurations Parameter für SysLog Instance
	 *
	 * Dieser Parameter spezifiziert die Socket Instanz, über die die SysLog Meldung gesendet wird
	 * Alternativ ist auch die Angabe von SysLog Host+Port (siehe Parameter weiter unten) möglich, allerdings
	 * ist hierfür die php_sockets.dll nötig.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_SysLog_Instance",    '');

	/** Konfigurations Parameter für SysLog Host 
	 *
	 * Dieser Parameter spezifiziert den SysLog Host, der die Message empfangen soll (nur notwendig,
	 * wenn keine Instanz definiert wurde)
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_SysLog_Host",    '');

	/** Konfigurations Parameter für SysLog Host 
	 *
	 * Dieser Parameter spezifiziert den SysLog Port, auf den die Message gesendet werden soll (nur notwendig,
	 * wenn keine Instanz definiert wurde)
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_SysLog_Port",    '');

	/** Konfigurations Parameter für MySQL Output
	 *
	 * Über diesen Parameter wird gesteuert, ob die Meldungen auch auf den MySQL Output geschrieben werden soll.
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_DB_MySQL_Enabled",    false);

	/** Konfigurations Parameter für MySQL
	 *
	 * Über diesen Parameter wird gesteuert, welche Meldungen auf den MySQL Output geschrieben werden
	 *
	 * Parameter kann jederzeit geändert werden.
	 */
	$DB_MySQL_LogTypes  = array(true/*Fat*/, true/*Err*/, true/*Wrn*/, true/*Not*/, true/*Inf*/, true/*Log*/, true/*Dbg*/, true/*Trc*/, false/*Tst*/);
	
	/** Konfigurations Parameter für MySQL Output
	 *
	 * Serveradresse
	 * Port
	 * Database
	 * Tabellenname
	 * User
	 * Password
	 *
	 * Parameter koennen jederzeit geändert werden.
	 */
	define ("c_DB_MySQL_Server", "192.168.1.1" );
	define ("c_DB_MySQL_Port", "3306" );
	define ("c_DB_MySQL_Database", "IPSLogger" );
	define ("c_DB_MySQL_Table", "tbl_IPSLog" );
	define ("c_DB_MySQL_User", "xxxxxx" );
	define ("c_DB_MySQL_Password", "xxxxxx" );

/** @}*/	
	
	/** @}*/
?>
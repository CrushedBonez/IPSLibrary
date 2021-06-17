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
	 * Dieser Wert spezifiert die L�nge des Kontextes (Logging Kontext
	 * wird bei jedem Aufruf einer Logging Routine als erster Parameter �bergeben) im HTML Output.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Format_LogOutContextLen", 12);

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert das Datumsformat im HTML Output
	 * Beispiel, bei Definition des Datumformats von 'Y-m-d H:i:s' und MiroLen (Beschreibung siehe unten) von 3
	 * sieht der Output folgenderma�en aus:
	 * 2011-10-06 06:46:45.707
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Format_LogOutDate",       'Y-m-d H:i:s');

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Micro Sekunden, die HTML Output ausgegeben werden sollen.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Format_LogOutMicroLen",   4);

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Schriftart die f�r den HTML Output verwendet werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Style_HtmlOutTable",      'font-family:courier; font-size:11px;');

	/** WebFront Konfigurations Parameter
	 *
	 * Dieser Wert spezifiert die Breite der Output Spalten im HTML Output.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Style_HtmlOutColGroup",   '<colgroup><col width="25px"><col width="40px"><col width="100px"><col width="200px"><col></colgroup>');

	/** WebFront Konfigurations Parameter
	 *
	 * Steuert ob neue Messages am Ende der Html List hinzugef�gt werden oder am Anfang
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ('IPSLOGGER_HTML_NEWMESSAGETOP',   false);

	/** WebFront Konfigurations Parameter
	 * 
	 * Dieser Wert spezifiziert die Farbe des Textes im HTML Output.
	 * 
	 * Parameter kann jederzeit geändert werden.
	 */
	define ("c_Style_HtmlOutColor", '#FFFFFF')

	/** Konfigurations Parameter f�r File Output
	 *
	 * Dieser Wert spezifiert das Output Verzeichnis f�r Log Files. Wenn nichts angegeben wird,
	 * wird das normale Logging Verzeichnis von IPS verwendet (.../logs).
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_File_Directory",  "");

	/** Konfigurations Parameter f�r File Output
	 *
	 * Dieser Wert spezifiert die File Extension f�r den File Output.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_File_Extension",  "log");

	/** Konfigurations Parameter f�r Log4IPS Output
	 *
	 * Dieser Wert spezifiert das Output Verzeichnis f�r Log Files. Wenn nichts angegeben wird,
	 * wird das normale Logging Verzeichnis von IPS verwendet (.../logs).
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Log4IPS_Directory",  "");

	/** Konfigurations Parameter f�r Log4IPS Output
	 *
	 * Dieser Wert spezifiert die File Extension f�r den XML Output.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Log4IPS_Extension",  "xml");

	/** Konfigurations Parameter f�r EMail Output
	 *
	 * Dieser Wert spezifiert die ID der MailServer Instanz in IPS, die f�r das Versenden von
	 * EMails verwendet werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_ID_SmtpDevice",      0);

	/** Konfigurations Parameter f�r EMail Output
	 *
	 * Erste von 3 m�glichen EMail Adressen, die zum Versenden von EMails angegeben werden kann.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_EMail_Address1",     "");

	/** Konfigurations Parameter f�r EMail Output
	 *
	 * Zweite von 3 m�glichen EMail Adressen, die zum Versenden von EMails angegeben werden kann.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_EMail_Address2",     "");

	/** Konfigurations Parameter f�r EMail Output
	 *
	 * Dritte von 3 m�glichen EMail Adressen, die zum Versenden von EMails angegeben werden kann.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_EMail_Address3",     "");

	/** Konfigurations Parameter f�r EMail Output
	 *
	 * Text der in das Feld Betreff bei Emails eingetragen werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_EMail_Subject",      "IP-Symcon Fehler sind aufgetreten!");

	/** Konfigurations Parameter f�r EMail Output
	 *
	 * Signatur die f�r Emails verwendet werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_EMail_Signature",    "Message send from IP-Symcon HomeControl");

	/** Konfigurations Parameter f�r Prowl Output
	 *
	 * Schl�ssel der f�r das Versenden von Prowl Messages verwendet werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_Key_ProwlService",    '');

	/** Konfigurations Parameter f�r SysLog Output
	 *
	 * �ber diesen Parameter wird gesteuert, ob die Meldungen auch auf den SysLog Output geschrieben werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_SysLog_Enabled",    false);

	/** Konfigurations Parameter f�r SysLogTypes
	 *
	 * �ber diesen Parameter wird gesteuert, welche Meldungen auf den SysLog Output geschrieben werden
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	$SysLog_LogTypes  = array(true/*Fat*/, true/*Err*/, true/*Wrn*/, true/*Not*/, true/*Inf*/, true/*Log*/, false/*Dbg*/, false/*Trc*/, false/*Tst*/);

	/** Konfigurations Parameter f�r SysLog Instance
	 *
	 * Dieser Parameter spezifiziert die Socket Instanz, �ber die die SysLog Meldung gesendet wird
	 * Alternativ ist auch die Angabe von SysLog Host+Port (siehe Parameter weiter unten) m�glich, allerdings
	 * ist hierf�r die php_sockets.dll n�tig.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_SysLog_Instance",    '');

	/** Konfigurations Parameter f�r SysLog Host 
	 *
	 * Dieser Parameter spezifiziert den SysLog Host, der die Message empfangen soll (nur notwendig,
	 * wenn keine Instanz definiert wurde)
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_SysLog_Host",    '');

	/** Konfigurations Parameter f�r SysLog Host 
	 *
	 * Dieser Parameter spezifiziert den SysLog Port, auf den die Message gesendet werden soll (nur notwendig,
	 * wenn keine Instanz definiert wurde)
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_SysLog_Port",    '');

	/** Konfigurations Parameter f�r MySQL Output
	 *
	 * �ber diesen Parameter wird gesteuert, ob die Meldungen auch auf den MySQL Output geschrieben werden soll.
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	define ("c_DB_MySQL_Enabled",    false);

	/** Konfigurations Parameter f�r MySQL
	 *
	 * �ber diesen Parameter wird gesteuert, welche Meldungen auf den MySQL Output geschrieben werden
	 *
	 * Parameter kann jederzeit ge�ndert werden.
	 */
	$DB_MySQL_LogTypes  = array(true/*Fat*/, true/*Err*/, true/*Wrn*/, true/*Not*/, true/*Inf*/, true/*Log*/, true/*Dbg*/, true/*Trc*/, false/*Tst*/);
	
	/** Konfigurations Parameter f�r MySQL Output
	 *
	 * Serveradresse
	 * Port
	 * Database
	 * Tabellenname
	 * User
	 * Password
	 *
	 * Parameter koennen jederzeit ge�ndert werden.
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
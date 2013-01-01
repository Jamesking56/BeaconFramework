<?php

/*
	BeaconFramework
	by Beacon Studios
	www.beaconstudios.co.uk

	Please see version.inc.php in the src/includes folder for version number.

	Licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported license.
	Please see LICENSE.txt for licensing details.
*/
if(!defined('BEACON')){ die('Hack Attempt.'); }

/**
* Database Class - Manages all Database Connections.
*
* Supports:
* - MySQL        (mysql)
* - PostgresSQL  (pgsql)
*
* Planned:
* - SQLite       (sqlite)
* - MS SQL       (mssql)
*/
require_once('exceptions/Database.exception.php');
class Database
{
	private $type = 'mysql';
	private $conn = null;

	function __construct($type='mysql', $host='localhost', $port=3306, $user, $pass=null, $name)
	{
		$type = strtolower($type);
		switch ($type) {
			case 'mysql':
			case 'pgsql':
				$dsn = $type . ":dbname=".$name.";host=".$host;
				$this->conn = new PDO($dsn, $user, $pass);
				break;
			
			default:
				throw new DatabaseException("Database Type ".$type." is not supported by this class.");
				break;
		}
	}
}

?>
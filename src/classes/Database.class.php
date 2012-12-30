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
* - MySQL
*
* Planned:
* - SQLite
* - MS SQL
*/
class Database
{
	$type = 'mysql';
	$conn = null;

	function __construct($type='mysql', $host='localhost', $port=3306, $user, $pass=null, $name)
	{

	}
}

?>
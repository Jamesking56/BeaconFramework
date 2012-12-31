<?php
define('BEACON',true);
require_once('PHPUnit/Framework.php');
require_once('../src/includes/classes/Database.class.php');
/**
* Database Test - Tests the Database Class via Travis.
*/
class DatabaseTest extends PHPUnit_Framework_TestCase
{
	protected $database;

	public function setUp()
	{
		$this->database = new Database($GLOBALS['DB_TYPE'],$GLOBALS['DB_HOST'],false,$GLOBALS['DB_USER'],$GLOBALS['DB_PASSWD'],$GLOBALS['DB_DBNAME']);
	}

	public function tearDown()
	{
		$this->database->disconnect();
		$this->database = null;
	}
}

?>
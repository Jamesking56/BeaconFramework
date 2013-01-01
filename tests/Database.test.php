<?php
define('BEACON',true);
require_once(dirname(__FILE__) . '/../src/includes/classes/Database.class.php');
/**
* Database Test - Tests the Database Class via Travis.
*/
class DatabaseTest extends PHPUnit_Framework_TestCase
{
	protected $database;

	public function setUp()
	{
		$this->database = new Database($GLOBALS['DB_TYPE'],$GLOBALS['DB_HOST'],false,$GLOBALS['DB_USER'],$GLOBALS['DB_PASSWD'],$GLOBALS['DB_DBNAME']);
		$sql = "CREATE TABLE `test` (key varchar(255),value varchar(500));";
		$this->database->query($sql);
		$sql = "INSERT INTO `test` VALUES ('testing','abc123');";
		$this->database->query($sql);
	}

	/**
	 * @expectedException DatabaseException
	 */
	public function testDatabaseException()
	{
		$conn = new Database('sqlite',false,false,'root',false,'database');
	}

	public function testSelect()
	{
		$sql = "SELECT * FROM `test` WHERE `key`='testing' LIMIT 1";
		$statement = $this->database->query($sql);
		$data = $statement->fetch(PDO::FETCH_ASSOC);

		$this->assertArrayHasKey('key', $data);
	}

	public function tearDown()
	{
		$this->database->close();
		$this->database = null;
	}
}

?>
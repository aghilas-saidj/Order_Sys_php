<?php
/**
 * 
 */
namespace App\Models;
require_once("../Config/Config.php");
use App\Config;
class Connection_To_Database
{
	private static $Connection_Status = 0;
	private static $conn;

	private function __construct()
	{
		self::$conn =	new \mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD , DB_DATABASE);
      	if (self::$conn->connect_error)  {die("Connection failed: " . self::$conn->connect_error);}
		echo "Connection Established 1";
	    self::$Connection_Status = 1;
		return self::$conn;
	}


	public static function Connect()
	{
		if (self::$Connection_Status == 0)
		{
			$obj = new Connection_To_Database();
			\var_dump($obj);
	    }
	    echo self::$Connection_Status;
	    return self::$conn;
	}
}

Connection_To_Database::Connect();
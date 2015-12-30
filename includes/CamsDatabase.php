<?php
require_once 'css_vars.php';

class ConnectionFactory{
	private static $factory;
	public static function getFactory(){
		if (!self::$factory)
			self::$factory = new ConnectionFactory();
		return self::$factory;
	}
	
	private static $db;
	
    public function getConnection() {
		global $db_host;
		global $db_username;
		global $db_password;
		
        if (!self::$db){
			self::$db = new PDO("sqlsrv:server=".$db_host." ; Database=".self::StaticDB(), 
			         $db_username, $db_password); 
			self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$db->setAttribute( PDO::SQLSRV_ATTR_QUERY_TIMEOUT, 1 );
		}
        return self::$db;
    }
	
	public static function StaticDB() {
		global $countyAbbrev;
        return $countyAbbrev."CAMS";
    }
	
	public static function FiscDB() {
		global $countyAbbrev;
		global $FiscYear;
        return $countyAbbrev.$FiscYear;
    }
}

?>

<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bfd4a60bbb141f";$this->pass="37416e6c";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_cdbbe8516034fa2";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>

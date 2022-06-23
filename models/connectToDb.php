
<?php

	class ConnecToDb {

		private $user ;
		private $host ;
		private $password;
		private $database;
		
		protected function doConnect(){
			$dev_type__ = 'stage'; 

			$this->user =  ($dev_type__ === "dev") ? "root" : "ba382c9a507553";
			$this->password = $dev_type__ === "dev" ? "" : "b50f18d0";
			$this->host = ($dev_type__ === "dev") ? "localhost" : "us-cdbr-east-02.cleardb.com";
			$this->database = ($dev_type__ === "dev") ? "ohun" : "heroku_b45b9c616f211d6";
		
		$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
		return $conn;
		}
	}
?>

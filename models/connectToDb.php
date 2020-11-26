
<?php

	class ConnecToDb {

		private $user ;
		private $host ;
		private $password;
		private $database;

		protected function doConnect(){
			$this->user = "root";
			$this->password = "";
			$this->host = "localhost";
			$this->database ="ohun";

		$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
		return $conn;
		}
	}
?>

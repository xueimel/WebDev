<?php
	class Dao {
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $db = "heroku_7082e9a469c20d6";
	private $user = "b36ce84df8d377";
	private $pass = "efc78a4d";

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }
}
?>
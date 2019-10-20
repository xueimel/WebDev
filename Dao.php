<?php
	class Dao {
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $db = "heroku_51604a0caad0ac9";
	private $user = "bc5c649c883465";
	private $pass = "8e67b54a";
	public function getConnection () {
		return
		new PDO("mysql:host={$this->host};dbname={$this->db}"
	}
}
?>
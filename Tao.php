<?php
	class Tao {
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $db = "heroku_7082e9a469c20d6";
	private $user = "b36ce84df8d377";
	private $pass = "efc78a4d";

		public function get_Connection() {
		try {
			$connection = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
		} catch (Exception $e) {
			echo print_r($e,1);
			}
		return $connection;
		}

		public function add_user($username, $password, $fname, $lname, $phone, $email){
			$conn = $this->get_connection();
			//write query
			$sql = "insert into users (username, password, fname, lname, phone, email) values (?, ?, ?, ?, ?, ?)";
			$stmt= $conn->prepare($sql);
			//$stmt->bind_param("ssssss", $username, $password, $fname, $lname, $phone, $email);
			$stmt->execute([$username, $password, $fname, $lname, $phone, $email]);

		}

		public function get_users(){
			$conn = $this->get_connection();
			//write query
			$sql = 'select * from users';
			//input query
			$stmt= $conn->prepare($sql);
			$stmt->execute();
			while($row = $stmt->fetch()){
				echo $row['fname']."\n";
			}
		}

		public function username_exists($username){
			$conn = $this->get_connection();
			//write query
			$sql = "select * from users where username = ?";
			$stmt=$conn->prepare($sql);
			$stmt->execute([$username]);
			$result = $stmt->fetch();
			return $result;
		}

		public function check_credentials($username, $password){
			$conn = $this->get_connection();
			//write query
			$sql = "select * from users where username = ? && password = ?";
			$stmt=$conn->prepare($sql);
			$stmt->execute([$username, $password]);
			$result = $stmt->fetch();
			return $result;
		}

		public function get_searches(){
			$conn = $this->get_connection();	
			$sql = 'select * from ticket_searches
					where user_id ='.$user_id;
			//input query
			$result = mysqli_query($conn, $sql);
			//fetch the results
			$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
		}

		public function add_search($url, $band_name, $venue, $dateTime, $min, $max){
			$conn = $this->get_connection();
			$sql = "insert into tickets (url, band_name, venue, concert_date, min, max) values (?, ?, ?, ?, ?, ?)";
			$stmt= $conn->prepare($sql);
			$stmt->execute([$url, $band_name, $venue, $dateTime, $min, $max]);
		}
	}
?>
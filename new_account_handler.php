<?php
	session_start();
	require_once 'Tao.php';

	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$incorrect = array();
	$valid = true;
	//VALIDATION CHECKING I DONT WANT TO ATTEMPT RIGHT NOW
	$tao = new Tao();
	$res = $tao->username_exists($username);
    if (!strlen($fname)>0 && !strlen($lname)>0 && !strlen($email)>0 && !strlen($username)>0 && !strlen($password)>0 && !strlen($password2)>0){
		$incorrect[] = "Missing required fields";
	}
	if (!empty($res)){
		$incorrect[] = "Username already in use";
	}
	if (!$password == $password2){
	$incorrect[] = "Passwords not matching";
	}

	if(empty($incorrect)){
		$valid = True;
	}else{
		$valid = False;
	}

    $_SESSION = array();
    if ($valid) {
        require_once 'Tao.php';
		$tao = new Tao();
		$tao->add_user($username, $password, $fname, $lname, $phone, $email);
        header("Location: /login.php");
		$_SESSION['message'] = "Congratulations ".$username." You are now a Scallywag member!";
        $_SESSION['logged_in'] = true;
        exit;
    }
    else{
		foreach ($incorrect as $wrong){
		
			$_SESSION['message'] = $_SESSION['message']." ".$wrong."<br>";
		}
        header("Location: http://localhost/WebDev/login.php");
        exit;
    }
?>

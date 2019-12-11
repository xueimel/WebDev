<?php
	if(!isset($_SESSION)){ 
		session_start(); 
	}
	require_once './../Tao.php';
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$hash_password = password_hash($password, PASSWORD_DEFAULT );
	$incorrect = array();
	$valid = true;

	$tao = new Tao();
	$res = $tao->username_exists($username);
    if (!strlen($fname)>0 || !strlen($lname)>0 || !strlen($email)>0 || !strlen($username)>0 || !strlen($password)>0 || !strlen($password2)>0){
		$incorrect[] = "Missing required fields";
	}
	if (!empty($res)){
		$inc_size = count($incorrect);
		$incorrect[$inc_size] = "Username already in use";
	}
	if (!$password == $password2){
		$inc_size = count($incorrect);
		$incorrect[$inc_size] = "Passwords not matching";
	}
	$correct = preg_match('/.{8}/', $password);//password must be 8 chars

	print($correct);
	if (!$correct){
		$inc_size = count($incorrect);
		$incorrect[$inc_size] = "Password must be at least 8 characters long";
	}


	if(empty($incorrect)){
		$valid = True;
	}else{
		$valid = False;
	}

    $_SESSION = array();
    if ($valid) {
        require_once './../Tao.php';
		$tao = new Tao();
		$tao->add_user($username, $hash_password, $fname, $lname, $phone, $email);
		$_SESSION['message_good'] = "Congratulations ".$username." You are now a Scallywag member!";
        $_SESSION['logged_in'] = true;
        header("Location: ./../login.php");
        exit();
    }
    else{
		foreach ($incorrect as $wrong){
			$_SESSION['message_bad_account'] = $_SESSION['message_bad_account']." ".$wrong."<br>";
			print($_SESSION['message_bad_account']);
		}
        header("Location: ./../login.php");
        exit();
    }
?>

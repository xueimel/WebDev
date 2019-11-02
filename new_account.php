<?php
	session_start();

	$fname = $_POST["fname"];
	$lname = $_POST["lame"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];

	$valid = false;
	//VALIDATION CHECKING I DONT WANT TO ATTEMPT RIGHT NOW
    if ($username == "s" && $password == "pass"){
        $valid = true;
    }

    $_SESSION = array();
    if ($valid) {
        require_once 'Tao.php';
		$tao = new Tao();
		$tao->add_user($username, $password, $fname, $lname, $phone, $email);
        header("Location: http://localhost/WebDev/granted.php");
        exit;
    }

    else{
        $_SESSION['message'] = "Invalid username or password";
        header("Location: http://localhost/WebDev/login.php");
        exit;
    }
?>
    ?>
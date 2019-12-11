<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hash_password = password_hash($password, PASSWORD_DEFAULT );

    require_once './../Tao.php';
	$tao = new Tao();
    $results = $tao->check_hash_creds($username);
    if(password_verify($password, $results[0])){
        $valid = True;
    }
    else {
        $valid = False;
    }

    $_SESSION = array();
    if ($valid) {
        $_SESSION['message_good'] = "Welcome back ".$username."! It's great to see you again!";
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username;
        header("Location: ../login.php");
        exit();
    }
    else{
        $_SESSION['pass'] = $hash_password;
        $_SESSION['message_bad'] = "Invalid username or password";
        header("Location: ../login.php");
        exit();
    }
?>
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'Tao.php';
	$tao = new Tao();
    $results = $tao->check_credentials($username, $password);
    if (empty($results)){
            $valid = False;
    }
    else {
        $valid = True;
    }

    $_SESSION = array();
    if ($valid) {
        $_SESSION['message_good'] = "Welcome back ".$username."! It's great to see you again!";
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username;
        header("Location: login.php");
        exit;
    }

    else{
        $_SESSION['message_bad'] = "Invalid username or password";
        header("Location: login.php");
        exit;
    }
    
?>
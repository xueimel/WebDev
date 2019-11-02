<?php

    
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
        $_SESSION['message'] = "Welcome back ".$username."! It's great to see you again!";
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username;
        header("Location: http://localhost/WebDev/login.php");
        exit;
    }

    else{
        $_SESSION['message'] = "Invalid username or password";
        header("Location: http://localhost/WebDev/login.php");
        exit;
    }
?>
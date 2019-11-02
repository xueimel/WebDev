<?php
    session_start();

	require_once 'Tao.php';
    $tao = new Tao();
    //$users = $tao->get_users();

    if (!isset($_SESSION['logged_in']) || true !== $_SESSION['logged_in']) {
        header("Location: http://localhost/WebDev/login.php");
        exit;
    }
    echo "ACCESS GRANTED ";

?>
<a id="logout" href="logout_handler.php">Logout</a>

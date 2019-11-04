<?php
    session_start();
    
print_r($_SESSION);
	require_once 'Tao.php';
    $tao = new Tao();
    //$users = $tao->get_users();

    if (isset($_SESSION['logged_in']) || true == $_SESSION['logged_in']) {
        header("Location: login.php");
        exit;
    }
    echo "ACCESS GRANTED ";

?>
<a id="logout" href="logout_handler.php">Logout</a>

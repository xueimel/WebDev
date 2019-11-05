<?php
    session_start();
   
print_r($_SESSION);
	require_once 'Tao.php';
    $tao = new Tao();
    //$users = $tao->get_users();

   
    echo "ACCESS GRANTED ";

?>
<a id="logout" href="logout_handler.php">Logout</a>

<?php
    session_start();
   
print_r($_SESSION);
	require_once 'Tao.php';
    $tao = new Tao();
    //$users = $tao->get_users();

   
    echo "ACCESS GRANTED ";

?>

<script type = "text/javascript" src = jquery/jquery.js></script><script> alert("why are you on this page??");</script>


<a id="logout" href="logout_handler.php">Logout</a>

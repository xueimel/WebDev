<?php
    session_start();
   
print_r($_SESSION);
	require_once 'Tao.php';
    $tao = new Tao();
    //$users = $tao->get_users();

   
    echo "ACCESS GRANTED ";
    $thing = ($tao->check_hash_creds('xcvb'));
    print("THING ".$thing[0]);
    if (password_verify($_SESSION['password'], $thing[0] )){
        print('  True  ');
    }
    else{
        print('  False  ');
    }
    print("CAL: ");
//    print password_verify()
?>

<!--<script type = "text/javascript" src = jquery/jquery.js></script><script> alert("why are you on this page??");</script>-->


<a id="logout" href="logout_handler.php">Logout</a>

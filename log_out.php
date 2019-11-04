<?php 
	session_start(); 
    if($_SESSION['logged_in'] == true)
    { 
		$_SESSION = array();
		session_destroy();
    } 

?>
<html>
    <html>
         <head>
			<title>Scallywag Tickets | About</title>
			<meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
			<link rel="stylesheet" href="styles.css">
		</head>
        <body>
            <?php 
                require_once 'header.php';

			?>
				<h1 class="logged_out">YOU HAVE SUCCESSFULLY LOGGED OUT</h1>
	            <footer class="main-footer">
                <div class="container main-footer-container">
                    <h3 class="band-name">cheap cheap</h3>
                    <ul class="nav footer-nav">
                        <li>
                            <a href="https://facebook.com" target="_blank">
                                <img src="Images/face.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank">
                                <img src="Images/download.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </body>
    </html>


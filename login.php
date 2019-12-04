<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
    <html>
        <head>
            <title>Scallywag Tickets | LOGIN / SIGNUP </title>
            <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
            <link rel="stylesheet" href="css/styles.css">
        </head>
        <body>
            <?php 
                require_once 'header.php';
			?>
			<?php
				if (isset($_SESSION['message_bad'])){
					echo "<div id='message_bad'>{$_SESSION['message_bad']}</div>";
				}
				else if (isset($_SESSION['message_good'])){
					echo "<div id='message_good'>{$_SESSION['message_good']}</div>";
				}
			?>
			<hr>
			<form method="post" action="handlers/login_handler.php">
				<section class="login">
				<h2>ALREADY A MEMBER? LOG IN HERE!</h2>
					<div class="login-container">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<button class="submit">SIGN IN</button>
					</div>
				</section>
			</form>
			<?php
				if (isset($_SESSION['message_bad_account'])){
					echo "<div id='message_bad_account'>{$_SESSION['message_bad_account']}</div>";
				}
			?>
			<form method="post" action="handlers/new_account_handler.php">
				<section class="create-account">
					<h2>NOW'S YOUR CHANCE, BECOME A MEMBER!</h2>
					<div class="create-account-container">
						<input type="text" name="fname" placeholder="First Name">
						<input type="text" name="lname" placeholder="Last Name">
						<input type="text" name="email" placeholder="Email">
						<input type="text" name="phone" placeholder="Phone Number">
						<input type="text" name="username" placeholder="Username">
						<input type="text" name="password" placeholder="Password">
						<input type="text" name="password2" placeholder="Reconfirm Password">
						<button class="submit">CREATE ACCOUNT</button>
					</div>
				</section>
			</form>
	            <footer class="main-footer">
                <div class="container main-footer-container">
                    <h3 class="band-name">SCALLYWAG TICKETS</h3>
                    <ul class="nav footer-nav">
                        <li>
                            <a href="https://facebook.com" target="_blank">
                                <img src="images/face.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank">
                                <img src="images/download.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </body>
    </html>
    <script src = jquery/jquery.js></script>
    <script>
        $(function(){
            $(".login").hide(1).fadeIn(1000);
            $(".create-account").hide(1).delay(250).fadeIn(1000);
        });
    </script>
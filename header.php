<?php 
	if(!isset($_SESSION)){ 
		session_start(); 
	} 
?>
<html>
	<head>
		<meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
		<link rel="stylesheet" href="headerstyle.css">
	</head>
	<header class="main-header">
		<nav class="nav main-nav">

			<!-- tells the website that there are links here-->
			<div id="nav-container">
				<div class="left">
					<a href="home.php"><img src="Images/logo4.png"></a>
				</div>

				<div class="center">
					<ul>
						<li><a href="tickets.php">TICKETS</a></li>
						<li><a href="about.php">CONTACT</a></li>
					</ul>
				</div>
			
				<div class="right">
				<ul><li>
					<a href=
						<?php 
							 if (isset($_SESSION['logged_in'])) {
								print("log_out.php>LOGOUT");
							}
							else{
								echo "login.php>LOGIN";
							}
						?>
					</a>
				</ul></li>
				</div>
			</div>
		</nav>
	</header>
</html>
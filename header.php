<header class="main-header">
    <nav class="nav main-nav">
        <!-- tells the website that there are links here-->
        <div id="nav-container">
            <div class="left">
                <a href="home.php">LOGO IN TRAINING</a>
            </div>

            <div class="center">
                <ul>
                    <li><a href="tickets.php">TICKETS</a></li>
                    <li><a href="about.php">CONTACT</a></li>
                </ul>
            </div>
			
            <div class="right">
                <a href="login.php">
					<?php 
						if ($_SESSION['logged_in'] == true){
							echo "SIGN_OUT";
						}
						else{
							echo "LOGIN";
						}
					?>
				</a>
            </div>
        </div>
    </nav>
</header>
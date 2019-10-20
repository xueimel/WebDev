<!DOCTYPE html>
    <html>
        <head>
            <title>Scallywag Tickets | About</title>
            <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
            <!-- JUST TRIED IMPLEMENTING THIS-->
            <?php 
                require_once "header.php";
            ?>
	        <section class="login">
		        <div class="login-container">
			        <input type="text" name="lname" placeholder="Username">
                    <input type="text" name="lname" placeholder="Password">
                    <button class="submit">SIGN IN</button>

		        </div>
	        </section>

	        <section class="create-account">
		        <div class="create-account-container">
			        <input type="text" name="fname" placeholder="First Name">
                    <br />
                    <input type="text" name="lname" placeholder="Last Name">
			        <input type="text" name="lname" placeholder="Email">
                    <input type="text" name="lname" placeholder="Phone Number">
                    <input type="text" name="lname" placeholder="Username">
                    <input type="text" name="lname" placeholder="Password">
			        <input type="text" name="lname" placeholder="Reconfirm Password">
			        <button class="submit">SUBMIT</button>
		        </div>
	        </section>
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


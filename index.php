<?php 
	require_once 'header.php';
	if(!isset($_SESSION)){ 
		session_start(); 
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scallywag Tickets | HOME</title>
    <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <hr> <!-- makes a boarder line-->
	<form method="get" action="search_handler.php">	
		<div class="search-home">
			<span><strong>LETS FIND YOU SOME TICKETS, GUY!</strong></span>
			<br />
			<input type="text" name="artist" placeholder="Artist">
			<br />
			<input type="text" name="location" placeholder="City or ZIP Code">
		
			<button class="submit">SEARCH</button>
		</div>
	</form>
    <br />
    <br> <!-- line break-->
    <br>
    <section>

    </section>
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">SCALLYWAG TICKETS</h3>
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
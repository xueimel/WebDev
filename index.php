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
    <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descript which may be used by google  or other search engines-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <hr> <!-- makes a boarder line-->
	<form method="get" action="handlers/search_handler.php">
		<div class="search-home">
			<span><strong>LETS FIND YOU SOME TICKETS, GANGSTER!</strong></span>
			<br />
			<input type="text" name="artist" placeholder="Artist">
			<br />
			<input type="text" name="location" placeholder="City">
			<button class="submit">SEARCH FOR TICKETS</button>
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
<script src = jquery/jquery.js></script>
<script>
    $(function(){
        $(".search-home").hide(1).fadeIn(1200);
    });
</script>
</html>
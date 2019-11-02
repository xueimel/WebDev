<!DOCTYPE html>
<html>
<head>
    <title>Scallywag Tickets | About</title>
    <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        require_once 'header.php';
		session_start();
	?>

    <section>
        <hr>
        <h2>TICKETS</h2>
		<?php print("Location: ".$_SESSION['search_location']."\n Artist: ".$_SESSION['search_artist']);?>
        <hr>
        <div class="result">
            <div>
                <strong>StubHub</strong>
            </div>
            <a href="https://www.stubhub.com"> <img src="Images/stubhub.png"></a>
                <div>
                    <span>$12.99</span>
                    <button class="purchase">PURCHASE</button>
                </div>
		</div>
        <br>
        <div class="result">
            <div>
                <strong>Ticketmaster</strong>
            </div>
           <a href="https://www.ticketmaster.com"> <img src="Images/ticketmaster.png"> </a>
            <div>
                <span>$12.99</span>
                <button class="purchase">PURCHASE</button>
            </div>

        </div>
        <br>
        <div class="result">
            <div>
                <strong>Eventbrite</strong>
            </div>
            <a href="https://www.eventbrite.com"><img src="Images/eventbrite_logo.jpg" /> </a> 
            <div>
                <span>$15.99</span>
                <button class="purchase">PURCHASE</button>
            </div>
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
<?php 
    require_once 'header.php';
	if(!isset($_SESSION)){
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scallywag Tickets | About</title>
    <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
        <hr>
        <h2>TICKETS</h2>
		<?php 
			if(isset($_SESSION['search_location'])){
				print("Location: ".$_SESSION['search_location']."\n Artist: ".$_SESSION['search_artist']);
			}
			if(isset($_SESSION['ticketmaster'])){
			$ticketmaster = $_SESSION['ticketmaster'];
			foreach ($ticketmaster as $res){
				print("<div class=\"result_container\">");
				print("<span class=\"result_left\"><span><strong>Ticketmaster</strong></span><br>");
				print("<a href=\"https://www.ticketmaster.com\"> <img src=\"Images/ticketmaster.png\"> </a>");
				print("</span><span class=\"result_right\">");
				print("<br>ARTIST:".$res['band_name']."<br>");
				print("VENUE:".$res['venue']."<br>");
				print("MIN:".$res['min_price']."<br>");
				print("MAX:".$res['max_price']);
				print("<button><a href=\"#\">GO TO SITE</a></button>");
				print("</div><hr>");
				}
			}
			if(isset($_SESSION['seatgeek'])){
			$seatgeek = $_SESSION['seatgeek'];
			foreach ($seatgeek as $res){
				print("<div class=\"result_container\">");
				print("<span class=\"result_left\"><span><strong>SeatGeek</strong></span><br>");
				print("<a href=\"https://www.ticketmaster.com\"> <img src=\"Images/seatgeek.jpg\"> </a>");
				print("</span><span class=\"result_right\">");
				print("<br>ARTIST:".$res['band_name']."<br>");
				print("VENUE:".$res['venue']."<br>");
				print("MIN:".$res['min_price']."<br>");
				print("MAX:".$res['max_price']);
				print("</span></span>");
				print("<button><a href=\"#\">GO TO SITE</a></button>");
				print("</div><hr>");
				//print("</div></div><hr>");
				}
			}

			if(isset($_SESSION['eventbrite'])){
				$eventbrite = $_SESSION['eventbrite'];
				foreach ($eventbrite as $res){
					print("<div class=\"result_container\">");
					print("<span class=\"result_left\"><div><strong>EventBrite</strong></div>");
					print("<a href=\"https://www.ticketmaster.com\"> <img src=\"Images/eventbrite_logo.jpg\"> </a>");
					print("</span>");
					print("<span class=\"result_right\">");
					print("<br>Date: ".$res['date']."<br>");
					print("BAND NAME: ".$res['band_name']."<br>");
					print("INFO: ".$res['info']);
					print("</span><button><a href=\"#\">GO TO SITE</a></button>");
					print("</div><hr>");
				}
			}
		?>

        <hr>
      
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
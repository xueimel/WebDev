<?php 
    require_once 'header.php';
	if(!isset($_SESSION)){
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scallywag Tickets | TICKETS</title>
    <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section>
        <hr>
        <h2>TICKETS</h2>
		<?php 
			$no_results = true;
			if(isset($_SESSION['search_location']) || isset($_SESSION['search_artist'])){
			    print("<div id=\"search-results\">");
				print("YOU SEARCHED FOR: <br>  Artist: ".strtoupper($_SESSION['search_artist'])."<br>  Location: ".strtoupper($_SESSION['search_location']).'<br>');
				print("Found: ".$_SESSION['num_found']." Tickets Which May Have Matched Your Search");
                print("</div><hr>");
                print("<div class=\"ex_space\"></div>");
				if(isset($_SESSION['ticketmaster'])){
					$ticketmaster = $_SESSION['ticketmaster'];
					$num = 0;
					foreach ($ticketmaster as $res){
						$no_results = false;
						print("<div class=\"result_container\">");
						print("<span class=\"result_left\"><span><strong>Ticketmaster</strong></span><br>");
                        print("<a href=\"https://www.ticketmaster.com\"> <img src=\"images/ticketmaster.png\"> </a>");
                        print("</span><span class=\"result_right\"><span class=\"close\">x</span>");
						print("<br>ARTIST:".$res['band_name']."<br>");
						print("DATE: ".$res['dateTime']."<br>");
						print("VENUE: ".$res['venue']."<br>");
						print("MIN: $".$res['min_price']."<br>");
						print("MAX: $".$res['max_price']);
						print("</span></span>");
						print("<button id=\"b\"><a href=\"".$res['url']."\">PURCHASE</a></button>");
						print("</div>");
						}
					}
				if(isset($_SESSION['seatgeek'])){
					$seatgeek = $_SESSION['seatgeek'];
					foreach ($seatgeek as $res){
						$no_results = false;	
						print("<div class=\"result_container\">");
						print("<span class=\"result_left\"><span><strong>SeatGeek</strong></span><br>");
						print("<a href=\"https://www.ticketmaster.com\"> <img src=\"images/seatgeek.jpg\"> </a>");
						print("</span><span class=\"result_right\">");
						print("<br>ARTIST: ".$res['band_name']."<br>");
						print("DATE: ".$res['dateTime']."<br>");
						print("VENUE: ".$res['venue']."<br>");
						print("MIN: $".$res['min_price']."<br>");
						print("MAX: $".$res['max_price']);
						print("</span></span>");
						print("<button id=\"b\"><a href=\"".$res['url']."\">PURCHASE</a></button>");
						print("</div>");
						//print("</div></div><hr>");
						}
					}

				if(isset($_SESSION['eventbrite'])){
					$eventbrite = $_SESSION['eventbrite'];
					foreach ($eventbrite as $res){
						$no_results = false;
						print("<div class=\"result_container\">");
						print("<span class=\"result_left\"><div><strong>EventBrite</strong></div>");
						print("<a href=\"https://www.ticketmaster.com\"> <img src=\"images/eventbrite_logo.jpg\"> </a>");
						print("</span>");
						print("<span class=\"result_right\">");
						print("<br>Date: ".$res['date']."<br>");
						print("BAND NAME: ".$res['band_name']."<br>");
						print("INFO: ".$res['info']);
						print("</span><button id=\"b\"><a href=\"".$res['url']."\">PURCHASE</a></button>");
						print("</div>");

					}
				}
                print("<div class=\"ex_space\"></div>");
				if ($no_results){
					print("<br><strong>WE'RE SORRY, WE COULDN'T FIND ANYTHING THAT MATCHED YOUR SEARCH</strong>");
				}
			}
			else{
			    ?>
                <script src = jquery/jquery.js></script>
                <script>
                    $(function(){
                        $("#wrong").hide(1).fadeIn(750);

                    });
                </script>
                <?php
				print("<div id=\"wrong\"> Please Click the ScallyWag LOGO and search or login to access your tickets</div>");
				print("<div class=\"ex_space\"></div>");
			}
		?>

        <hr>
      
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
</html>

<script src = jquery/jquery.js></script>
<script>

    window.onload = function(){
        document.getElementById('close').onclick = function(){
            this.parentNode.parentNode.parentNode
                .removeChild(this.parentNode.parentNode);
            return false;
        };
    };
</script>
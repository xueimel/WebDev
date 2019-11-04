<?php 
    require_once 'header.php';
	if(!isset($_SESSION)){
		session_start();
	}
	print_r($_SESSION);
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
			print_r($_SESSION);
			if(isset($_SESSION['search_location'])){
				print("Location: ".$_SESSION['search_location']."\n Artist: ".$_SESSION['search_artist']);
			}
			if(isset($_SESSION['ticketmaster'])){
				foreach($_SESSION['ticketmaster'] as $res){
				print_r($res);
					print("<div class=\"result\"><div><strong>Ticketmaster</strong></div>");
					print("<a href=\"https://www.ticketmaster.com\"> <img src=\"Images/ticketmaster.png\"> </a>");
					//print("<span>.$res['min'].</span>");
				}
			}
		?>

        <hr>

		<div class="result">
            <div>
                <strong>Ticketmaster</strong>
            </div>
            <a href="https://www.ticketmaster.com"> <img src="Images/ticketmaster.png"> </a>
            <div>
                <span>$12.99</span>
                <button class="purchase">PURCHASE</button>
			</div>
			<br>
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
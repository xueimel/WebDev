<?php

	$base = "https://app.ticketmaster.com/discovery/v2/";
	$artist = $_SESSION['search_artist'];
	$loc = $_SESSION['search_location'];


	// create a new cURL resource
	$ch = curl_init();

	// set URL and other appropriate options

	curl_setopt($ch, CURLOPT_URL, "https://app.ticketmaster.com/discovery/v2/events?apikey=myRrgOe5eH8B7TVbVnP7jr7WBeTKoY4t&keyword=eagles&postalCode=83706&locale=*

");
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);

?>

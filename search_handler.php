<?php
	session_start();

	$location = $_GET['location'];
	$artist = $_GET['artist'];

	$sites = array("www.stubhub.com");

//	foreach ($sites as $site){
//		echo $site." will be visited\n";
//		$base = "https://app.ticketmaster.com/discovery/v2/";
//	}
	$artist = $_SESSION['search_artist'];
	$loc = $_SESSION['search_location'];


	// create a new cURL resource
	$ch = curl_init();

	// set URL and other appropriate options

	curl_setopt($ch, CURLOPT_URL, "https://app.ticketmaster.com/discovery/v2/events?apikey=myRrgOe5eH8B7TVbVnP7jr7WBeTKoY4t&keyword=jeff%20crosby&locale=*&city=Boise&stateCode=ID");
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);

	// grab URL and pass it to the browser
	
	$info = curl_getinfo($ch);
	// close cURL resource, and free up system resources
	curl_close($ch);


	//NEED TO ADD THE SEARCH TO THE USER
	echo $_SESSION['search_location'] = $location;
	print_r($info);
	$_SESSION['search_artist'] = $artist;
//	header("Location: http://localhost/WebDev/tickets.php");
//    exit;

?>
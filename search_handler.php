<?php
	if(!isset($_SESSION)) 
    {	
        session_start(); 
    } 
	require_once 'Tao.php';
	$location = $_GET['location'];
	$artist = $_GET['artist'];
	$artist = str_replace(' ', '%20', $artist);
	print($artist);

	$sites = array("www.stubhub.com");
	$tao = new TAO();

//	foreach ($sites as $site){
//		echo $site." will be visited\n";
//		$base = "https://app.ticketmaster.com/discovery/v2/";
//	}
	//$artist = $_SESSION['search_artist'];
	//$loc = $_SESSION['search_location'];


	//CALL ADD SEARCH HISTORY


	//TICKETMASTER
	$ticketmaster = array();
	//$info = file_get_contents("https://app.ticketmaster.com/discovery/v2/events?apikey=myRrgOe5eH8B7TVbVnP7jr7WBeTKoY4t&keyword=".$artist."&locale=*&city=Boise&stateCode=ID");
	$info = file_get_contents("https://app.ticketmaster.com/discovery/v2/events?apikey=myRrgOe5eH8B7TVbVnP7jr7WBeTKoY4t&keyword=kayne&locale=*");
	$info = json_decode($info);
	
	//try{
		$events = ($info->_embedded->events);
		foreach ($events as $event){
			$ticketmaster['url'] = ($event->url);
			print("</br>");
			$ticketmaster['band_name'] = ($event->name);
			print_r($ticketmaster);
			print("</br>");
			$ticketmaster['venue'] = ($event->_embedded->venues[0]->name);
			print("</br>");
			$ticketmaster['dateTime'] = ($event->dates->start->dateTime);
			print("</br>");
			//print_r($info->_embedded->events[0]);
			if (isset($event->priceRanges[0]->min)){
				$ticketmaster['min_price'] = ($event->priceRanges[0]->min);
				$ticketmaster['max_price'] = ($event->priceRanges[0]->max);
				}
			else{
				$ticketmaster['min_price'] = 0.00;
				$ticketmaster['max_price'] = 0.00;
			}
			//$tao->add_search($ticketmaster['url'], $ticketmaster['band_name'], $ticketmaster['venue'], $ticketmaster['dateTime'], $ticketmaster['min_price'], $ticketmaster['max_price']);
		}
	//}
	//catch (Exception $e) {
	//	print('caught');
	//}
	$_SESSION['ticketmaster'] = $ticketmaster;
	print_r($ticketmaster);


	$_SESSION['search_location'] = $location;
	$_SESSION['search_artist'] = $artist;
	header("Location: tickets.php");
	exit();



	//EVENTBRITE KEEPS RANDOMLY GIVING ME A 406 (NOT ALLOWED, but then you send it again 10 min later and it will work twice)
	//$info = file_get_contents("https://www.eventbriteapi.com/v3/events/search/?q=polyrhythmics&location.address=boise&token=NMQ2GJXCYF2M4MFJ62EU");
	//$info = json_decode($info);
	//print_r($info->top_match_events[1]);
	

	//$info = file_get_contents("https://www.eventbriteapi.com/v3/events/search/?q=polyrhythmics&location.address=boise&token=NMQ2GJXCYF2M4MFJ62EU");

	//SEATGEEK

	//$info = file_get_contents('https://api.seatgeek.com/2/events?q=polyrhythmics&geoip=true&client_id=MTkyOTA3NDd8MTU3Mjc2NDU5NC4zNw');
	//https://api.seatgeek.com/2/events?q=polyrhythmics&geoip=true&range=500mi&client_id=MTkyOTA3NDd8MTU3Mjc2NDU5NC4zNw
	//https://api.seatgeek.com/2/events?q=polyrhythmics&venue.city=portland&range=500mi&client_id=MTkyOTA3NDd8MTU3Mjc2NDU5NC4zNw
	//print($info);
?>
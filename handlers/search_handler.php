<?php
	if(!isset($_SESSION)) 
    {	
        session_start(); 
    } 
	$_SESSION['ticketmaster'] = array();
    $_SESSION['num_found'] = 0;
	require_once './../Tao.php';
	$location = $_GET['location'];
	$artist = $_GET['artist'];
	$artist = str_replace(' ', '%20', $artist);

	$sites = array("www.stubhub.com");
	$tao = new TAO();

	//TICKETMASTER
	if (strlen($location) <= 0) {
		$link = "https://app.ticketmaster.com/discovery/v2/events?apikey=myRrgOe5eH8B7TVbVnP7jr7WBeTKoY4t&keyword=".$artist."&locale=*";
	}
	else{
		$link = "https://app.ticketmaster.com/discovery/v2/events?apikey=myRrgOe5eH8B7TVbVnP7jr7WBeTKoY4t&keyword=".$artist."&locale=*&city=".$location;
	}
	$info = file_get_contents($link);
	$info = json_decode($info);

	$ticketmaster = array();
	if (isset($info->_embedded->events)){
		$events = ($info->_embedded->events);
		$i = 0;
		foreach ($events as $event){
			$ticketmaster[$i]['url'] = ($event->url);
			$ticketmaster[$i]['band_name'] = ($event->name);
			$ticketmaster[$i]['venue'] = ($event->_embedded->venues[0]->name);
			$ticketmaster[$i]['dateTime'] = str_replace('T', ' ', $event->dates->start->dateTime);
			if (isset($event->priceRanges[0]->min)){
				$ticketmaster[$i]['min_price'] = ($event->priceRanges[0]->min);
				$ticketmaster[$i]['max_price'] = ($event->priceRanges[0]->max);
				}
			else{
				$ticketmaster[$i]['min_price'] = 0.00;
				$ticketmaster[$i]['max_price'] = 0.00;
			}
			$tao->add_search($ticketmaster[$i]['url'], $ticketmaster[$i]['band_name'], $ticketmaster[$i]['venue'], $ticketmaster[$i]['dateTime'], $ticketmaster[$i]['min_price'], $ticketmaster[$i]['max_price']);
			$i = $i+1;
		}
	}
    $_SESSION['num_found'] = $i;
	$_SESSION['ticketmaster'] = $ticketmaster;

	$_SESSION['search_location'] = $location;
	$_SESSION['search_artist'] = $artist;


	//SEATGEEK

	$info = file_get_contents('https://api.seatgeek.com/2/events?q='.$artist.'&geoip=true&range=500mi&client_id=MTkyOTA3NDd8MTU3Mjc2NDU5NC4zNw');
	$info = json_decode($info);
	$events = $info->events;

	$i = 0;
	$seatgeek = array();
	foreach ($events as $event){
		$seatgeek[$i]['url'] = ($events[$i]->url);
		$seatgeek[$i]['band_name'] = ($events[$i]->title);
		$seatgeek[$i]['venue'] = ($events[$i]->venue->name);
		$seatgeek[$i]['dateTime'] = str_replace('T', ' ', $events[$i]->datetime_local);

		$seatgeek[$i]['min_price'] = ($events[$i]->stats->lowest_price);
		
		
		$seatgeek[$i]['max_price'] = ($events[$i]->stats->highest_price);
		
		//$tao->add_search($ticketmaster[$i]['url'], $ticketmaster[$i]['band_name'], $ticketmaster[$i]['venue'], $ticketmaster[$i]['dateTime'], $ticketmaster[$i]['min_price'], $ticketmaster[$i]['max_price']);
		$i = $i+1;
	}

	$_SESSION['seatgeek'] = $seatgeek;
    $_SESSION['num_found'] = $_SESSION['num_found'] + $i;



//EVENTBRITE MAY RANDOMLY GIVE A 406 OR 426 BUT TRYING TO USE IT ANYWAYS.
	if (strlen($location) <= 0) {
		$link = "https://www.eventbriteapi.com/v3/events/search/?q=".$artist."&token=NMQ2GJXCYF2M4MFJ62EU";
	}
	else{
		$link = "https://www.eventbriteapi.com/v3/events/search/?q=".$artist.'&location.address='.$location.'&location.within=500mi&token=NMQ2GJXCYF2M4MFJ62EU';
	}
	$info = file_get_contents($link);
	$info = json_decode($info);
	$events = $info->events;
	
	$i = 0;
	$eventbrite = array();
	foreach ($events as $event){
		$eventbrite[$i]['url'] = ($events[$i]->url);
		$eventbrite[$i]['band_name'] = ($events[$i]->name->text);
		$eventbrite[$i]['date'] = str_replace('T', ' ',$events[$i]->start->local);
		if (isset($events[$i]->summary)){
			$eventbrite[$i]['info'] = ($events[$i]->summary);

		}else{
			$eventbrite[$i]['info'] = "Please Visit URL for more info";
		}
		//$tao->add_search($ticketmaster[$i]['url'], $ticketmaster[$i]['band_name'], $ticketmaster[$i]['venue'], $ticketmaster[$i]['dateTime'], $ticketmaster[$i]['min_price'], $ticketmaster[$i]['max_price']);
		$i = $i+1;
	}
	$_SESSION['eventbrite'] = $eventbrite;
    $_SESSION['num_found'] = $_SESSION['num_found'] + $i;

    header("Location: ./../tickets.php");
	exit();
?>
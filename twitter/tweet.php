<?php
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	use DG\Twitter\Twitter;

	require_once 'src/twitter.class.php';

	$consumerKey = "REMOVED_CONSUMER_KEY";
	$consumerSecret = "REMOVED_CONSUMER_SECRET";
	$accessToken = "REMOVED_ACCESS_TOKEN";
	$accessTokenSecret = "REMOVED_ACCESS_TOKEN_SECRET";

	$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

	$name = $_GET["character"];
    $handle = $_GET["handle"]; 
    $score = $_GET["score"];
    $imgURL = $_GET["imgURL"];
    echo $imgURL;

    try {
	$tweet = $twitter->send($handle . ' survived ' . $score . ' days before automation, and is the new champion of the gig economy' . ' #gigco #escapethegigeconomy',$imgURL); 
	// you can add $imagePath or array of image paths as second argument


	} catch (DG\Twitter\TwitterException $e) {
		echo 'Error: ' . $e->getMessage();
	}
?>
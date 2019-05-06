<?php
	session_start();

	require_once("Facebook/autoload.php");

	$FB = new \Facebook\Facebook([
		'app_id' => '357305768478055',
		'app_secret' => '65fbd69df007a1b034cabcd447348490',
		'default_graph_version' => 'v3.3'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>

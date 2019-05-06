<?php
	session_start();

	require_once("Facebook/autoload.php");

	$FB = new \Facebook\Facebook([
		'app_id' => '',
		'app_secret' => '',
		'default_graph_version' => 'v3.3'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>

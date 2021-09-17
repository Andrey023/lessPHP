<?php
	require_once 'func.php';
	$name = htmlentities($_GET['nameUser']);
	$workPlace = htmlentities($_GET['placeWork']);
	$phone = htmlentities($_GET['phone']);
	$adress = htmlentities($_GET['adress']);
	$email = htmlentities($_GET['email']);
	$Pass = htmlentities($_GET['Pass']);
	$status = htmlentities($_GET['status']);
	setUser($link, $name, $workPlace, $phone, $adress, $email, $Pass, $status);
	$link = null;
?>
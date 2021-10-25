<?php
	require 'func.php';
	$idUser = $_GET['userID'];
	$name = $_POST['nameUser'];
	$workPlace = $_POST['workUser'];
	$phone = $_POST['phoneUser'];
	$adress = $_POST['adressUser'];
	updateInfo($link, $name, $workPlace, $phone, $adress, $idUser);
?>
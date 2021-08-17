<?php 
	$host = "127.0.0.1";
	$dbName = "lessPHP";
	$dbUser = 'root';
	$dbPass = 'philip21';
	$dsn = 'mysql:host='.$host.';dbname='.$dbName.'';
	$link = new PDO($dsn, $dbUser, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>
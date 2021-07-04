<?php
	$user = 'root';
    $pass = 'philip21';
    $dbname = 'lessPHP';
    $host = 'localhost';
    $dsn = 'mysql:host='.$host.';dbname='.$dbname.';';
    $linkDB = new PDO($dsn, $user, $pass);
	$content = htmlspecialchars($_POST['textUser']);
	$STMT = $linkDB->prepare("insert into addedText (userAddedText) VALUES ('".$content."')");
	// var_dump($STMT);
	$STMT->execute();
	$linkDB = null;
?>
<?php
	session_start();
	$user = 'root';
    $pass = 'philip21';
    $dbname = 'lessPHP';
    $host = 'localhost';
    $dsn = 'mysql:host='.$host.';dbname='.$dbname.';';
    $linkDB = new PDO($dsn, $user, $pass);
	$content = $_POST['usertext'];
	$getContent = "SELECT * FROM addedText WHERE userAddedText = '".$content."'";
	// $STMT = $linkDB->prepare("insert into addedText (userAddedText) VALUES ('".$content."')");
	$STMT = $linkDB->prepare($getContent);
	$STMT->execute();
	$getData = $STMT -> fetch(PDO::FETCH_ASSOC);
	if(!empty($getData)){
		$_SESSION['checkedDB'] = "danger";
		$_SESSION['msg'] = "Текст существует! Повторите ввод!";
	}
	else{
		$setContent = "insert into addedText (userAddedText) VALUES ('".$content."')";
		$STMT = $linkDB->prepare($setContent);
		$STMT -> execute();
		$_SESSION['checkedDB'] = "success";
		$_SESSION['msg'] = "Текст принят и добавлен в базу!";
	}
	header('location: task_10.php');
	$linkDB = null;
?>
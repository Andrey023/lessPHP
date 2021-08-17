<?php
	SESSION_START();
	require 'db.php';

	$newEmail = htmlentities($_POST['email']);
	$newPass = htmlentities($_POST['userPass']);


	$getedEmails = $link -> prepare("SELECT * FROM Users WHERE login = ?");
	$getedEmails -> bindParam(1, $newEmail, PDO::PARAM_STR);
	$getedEmails -> execute();
	$result = $getedEmails -> fetch(PDO::FETCH_ASSOC);

	if (!empty($result)){
		// echo "Данный логин ". $newEmail." уже существует \n <br />";
		$_SESSION["warning"] = '<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем.';
		header('Location: /page_register.php');
	}
	else{
		$setEmails = $link -> prepare("INSERT INTO Users (login, PASS) VALUE (:login, :pass)");
		$setEmails -> execute( 
			array(
				'login' => $newEmail,
				'pass' => password_hash($newPass, PASSWORD_DEFAULT)
			)
		);
		$_SESSION['fleshMsg'] = [
			'msg' => 'Регистрация успешна',
			'status' => 'success'
		];
		header('Location: /page_login.php');
	}
	$link = NULL;

?>
	

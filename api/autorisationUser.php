<?php 
	SESSION_START();
	require 'db.php';

	$loginUser = htmlentities($_POST['email']);
	$passUser = htmlentities($_POST['pass']);
	$getLogin = $link -> prepare("SELECT PASS FROM Users WHERE login = ?");
	$getLogin -> execute(array($loginUser));
	$gettedResult = $getLogin -> fetch(PDO::FETCH_ASSOC);

		if (password_verify($passUser, $gettedResult['PASS'])) {
			if($_POST['remember'] == 'on'){
				setcookie('login', $loginUser, 0, '/');
			}
			header('Location: /users.php');
		}
		else{
			$_SESSION["fleshMsg"] = [
				'msg' => "Логин или пароль не корректный", 
				'status' => "danger"
			];
			header('Location: /page_login.php');
		}
	$link = NULL;
?>
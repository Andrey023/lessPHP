<?php 
	if(isset($_COOKIE['login'])){
		setcookie('login', $loginUser, -10, '/');
	}
		header('Location: /page_login.php');
 ?>
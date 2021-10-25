<?php 
	require_once('func.php');
	$email = $_POST['emailField'];
	$id = $_GET['userID'];
	$result = checkEmail($email, $link,$id);
	header('Location: /security.php?userID='.$id);
?>
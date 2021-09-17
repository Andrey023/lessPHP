<?php
	require 'db.php';
	
	function getUsers($db){
		$user = $db -> prepare("SELECT * FROM ListUsers");
		$user -> execute();
		$res = $user -> fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
	function setUser($db,$name,$placework,$phone,$adress,$email,$Pass,$status){
		$user = $db -> prepare("INSERT INTO ListUsers (name, placework,phone,adress,email,pass, status) VALUES (?,?,?,?,?,?,?)");
		$user -> execute(array(
			$name,
			$placework,
			$phone,
			$adress,
			$email,
			$Pass,
			$status
		));
		header('Location: /users.php');
	}

	function getStatus($statusUser){
		if($statusUser == "online"){
			echo "status-success";
		}
		elseif($statusUser == "afk"){
			echo "status-warning";
		}
		elseif($statusUser == "notAvailable"){
			echo "status-danger";
		}

	}

?>
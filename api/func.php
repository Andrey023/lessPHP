<?php
	require 'db.php';
	
	function getUsers($db){
		$user = $db -> prepare("SELECT * FROM ListUsers");
		$user -> execute();
		$res = $user -> fetchAll(PDO::FETCH_ASSOC);
		return $res;
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
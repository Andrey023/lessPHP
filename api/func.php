<?php
	SESSION_START();
	require 'db.php';
	
	function getUsers($db){
		$user = $db -> prepare("SELECT * FROM ListUsers");
		$user -> execute();
		$res = $user -> fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
	function setUser($db,$name,$placework,$phone,$adress,$email,$Pass,$status){
		$user = $db -> prepare("INSERT INTO ListUsers (name,placework,phone,adress,email,pass, status) VALUES (?,?,?,?,?,?,?)");
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

	function getDataUser ($idUser, $db){
		$content = $db -> prepare("SELECT * FROM ListUsers WHERE PersonID = $idUser");
		$content->execute();
		$data = $content -> fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	function updateInfo($db, $name, $work, $phone, $adress, $idUser){
		$user = $db -> prepare("UPDATE ListUsers set name = ?, placework = ?,phone=?,adress=? WHERE PersonID = ?");
		$user -> execute(
			array(
				$name, $work, $phone, $adress, $idUser
			)
		);
		$_SESSION['infoMsg'] = 'completed';
		header('Location: /users.php');
	}
	function is_admin(){
		if(!isset($_COOKIE['user']) && !isset($_SESSION['user'])){
        header('Location: /page_login.php');
    	}
	}

	// Проверка на существование email

	function checkEmail($email, $db, $userID){
		$getID = $db -> prepare("SELECT PersonID from ListUsers Where email = '$email'");
		$getID -> execute();
		$gettedID = $getID -> fetch(PDO::FETCH_ASSOC);
		if (!empty($gettedID)){
			$_SESSION['checkEmailMsg'] = 'Email Существует';
		}else{
			$settedData = $db -> prepare("UPDATE ListUsers SET email = '$email' WHERE personId = $userID");
			$settedData -> execute();
			$_SESSION['checkEmailMsg'] = 'Данные обновленны!';
		}
	}
?>
<?php
require_once __DIR__.'/func.php';
$idUser = $_GET['userID'];
$selectedUserStatus = $_POST['SelUserStatus'];
$allStatus = ['online' => 'Онлайн', 'afk' => 'Отошел', 'notAvailable' => 'Не доступен'];
$statusCurrentUser = implode(getUserStatus($link, $idUser));
if ($selectedUserStatus != $statusCurrentUser) {
	setStatusUser($link, $selectedUserStatus, $idUser);
	header('Location: /users.php');
}
?>
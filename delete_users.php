<?php
require_once './db.php';
session_start();

if (!empty($_GET['id'])){
	$id = (int) $_GET['id'];
	$sql = $pdo->prepare('DELETE FROM users WHERE id_users=:id_users');
	$sql->execute([
		'id_users' => $id
	]);
	$sql = $pdo->prepare('DELETE FROM users_classroom WHERE id_users=:id_users');
	$sql->execute([
		'id_users' => $id
	]);
	header("Location:./user_admin.php");
}

?>

<?php
require_once './db.php';
session_start();
print_r($_SESSION);

if (!empty($_GET['id'])){

	$id = (int) $_GET['id'];

	$sql = $pdo->prepare('DELETE FROM advertising WHERE id_advertising=:id_advertising');
	$sql->execute([
		'id_advertising' => $id
	]);

	header("Location:./annonces.php");
}

?>

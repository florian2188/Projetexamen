
<?php
$db_host = 'localhost';
$db_name = 'projet';
$db_user = 'root';
$db_pwd = '';


try{
	$pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',
		$db_user,
		$db_pwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e){
	echo $e->getMessage();
}

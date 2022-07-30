<?php
require_once './db.php';

$_SESSION['is_loggedin'] = '';
$_SESSION['is_admin'] = '';
$_SESSION['is_class'] = '';

if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    var_dump("dans boucle");
	$sql = $pdo->prepare("SELECT id_users, username, password, manager, class FROM users WHERE username = :username ");
	$sql->execute([
		'username' => $_POST['username']
	]);

	$infos = $sql->fetch();

	if($infos && password_verify($_POST['password'], $infos['password'])){

		session_start();

		$_SESSION['is_loggedin'] = true;
        $_SESSION['is_admin'] = $infos['manager'];
        $_SESSION['is_class'] = $infos['class'];
        $_SESSION['is_id'] = $infos['id_users'];

       // $_SESSION contient un tableau 2 entrée
        // $infos contient toute les infos

		header('Location:./accueil.php');
		exit;
	}
	else {
		echo "mot de passe incorrect";
	}
}
?>


<?php include( 'header.php' ) ?>

<main>
    <div id="form">
        <form method="POST" id="identity">

                <div>
                    <input class="cadre" type="text" name="username" placeholder="identifiant">
                </div>
                <div>
                    <input class="cadre" type="password" name="password" placeholder="mot de passe">
                </div>
                <div class="monflex">
                    <input class="cadre" id="connexion" type="submit" id="submit" name="submit" value="Connexion">
                </div>

        </form>
    </div>

</main>

<?php include( 'footer.php' ) ?>

</body>
</html>

<?php

require_once './db.php';

// Comme pour l'affichage du client, je viens chercher le client correspondant à l'id en get
// cela me permettera de préremplire les champs du formulaire
session_start();
if (!empty($_GET["id"])) {

	$id = (int)$_GET["id"];

	$request = $pdo->prepare("SELECT * FROM users WHERE id_users=:identifier");
	$request->execute(["identifier" => $id]);
	$user = $request->fetch(PDO::FETCH_ASSOC);



	// je redirige l'utilisateur sur l'accueuil si l'id est vide ou invalide

	if (!$user) {
		header('Location:/accueil.php');
	}
} else {
	header('Location:/accueil.php');
}




if(isset($_POST['submit']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['mail']) && !empty($_POST['situation']) && isset($_POST['manager']) && !empty($_POST['username'])){
	var_dump("boucle");
	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$updateRequest = $pdo->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, mail = :mail, situation = :situation, manager = :manager, username = :username WHERE id_users = :id_users" );
	$updateRequest->execute([
		"id_users" => $user["id_users"],
		'firstname' => $_POST['firstname'],
		'lastname' => $_POST['lastname'],
		'mail' => $_POST['mail'],
		'situation' => $_POST['situation'],
		'manager' => $_POST['manager'],
		'username' => $_POST['username'],

	]);

	if(!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1){
		header("Location:./user_admin.php");
	}

}



?>
<?php include( 'header.php' ) ?>

<main>




		<form method="POST">
			<div>
				<input type="text" name="firstname" placeholder="nom"  value="<?= $user['firstname'] ?>" required>
			</div>
			<div>
				<input type="text" name="lastname" placeholder="prénom" value="<?= $user['lastname'] ?>" required>
			</div>
			<div>
				<input type="text" name="mail" placeholder="mail" value="<?= $user['mail'] ?>" required>
			</div>
			<div>
				<input type="text" name="situation" placeholder="situation" value="<?= $user['situation'] ?>" required>
			</div>
			<div>
				<input type="radio" id="manager" name="manager" value="1" required>
				<label for="manager">admin</label>
			</div>
			<div>
				<input type="radio" id="eleve" name="manager" value="0" required>
				<label for="employe">eleve</label>
			</div>
			<div>
				<input type="text" name="username" placeholder="identifiant" value="<?= $user['username'] ?>" required>
			</div>
			<div>
				<input type="password" name="password" placeholder="mot de passe" value="<?= $user['password'] ?>" required>
			</div>
            <div>
                <div>Je suis:
                    <select name="select">
                        <option value="2">ancien élève</option>
                        <option value="3">ancien professeur</option>
                        <option value="4">ancien peronnel</option>
                        <option value="5">élève actuel</option>
                    </select>
                </div>
            </div>
			<div>
				<input type="submit" id="submit" name="submit" value="modifié">
			</div>
		</form>


    */affiche images*/
	<?php
	$req = $pdo->query('SELECT name FROM file');
	while($data = $req->fetch()){
		var_dump("debut");
		echo ($data['name']);
		echo "<img src='./upload/".$data['name']."' width='300px' ><br>";
	}
	?>
	</main>
<?php include( 'footer.php' ) ?>

</body>
</html>


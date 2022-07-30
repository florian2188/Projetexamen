<?php
require_once './db.php';


    session_start();

    /* si la session n'est pas adlinistrateur set seesion vide */

if ($_SESSION['is_admin'] == 0) {
	$_SESSION['is_loggedin'] = '';
	$_SESSION['is_admin']    = '';
	$_SESSION['is_class']    = '';
}
var_dump($_SESSION);


if(isset($_POST['submit'])
    && !empty($_POST['firstname'])
    && !empty($_POST['lastname'])
    && !empty($_POST['mail']) && !empty($_POST['username'])
    && !empty($_POST['password'])
    && !empty($_POST['select'])){


var_dump("boucle");

    /* effacer erreur */
	$classroom = isset($_POST['classroom']) ? $_POST['classroom'] : NULL;
	$manager = isset($_POST['manager']) ? $_POST['manager'] : NULL;
	$files = ("profil.png");

	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$sql = $pdo->prepare(
            "INSERT INTO users VALUES
                        (null, 
                          :firstname, 
                          :lastname, 
                          :mail, 
                          :classroom, 
                          :manager, 
                          :username, 
                          :password, 
                          :class, 
                          :files)
                          ");

    $sql->execute([
		'firstname' => $_POST['firstname'],
		'lastname' => $_POST['lastname'],
		'mail' => $_POST['mail'],
		'classroom' => $classroom,
		'manager' => $manager,
		'username' => $_POST['username'],
		'password' => $hash,
        'class' => $_POST['select'],
        'files' => $files,

	]);

                        /* ---------------------si session administrateur redirection sur la page des utilisateurs--------------------- */


    if ($_SESSION['is_admin'] == 1) {
        header('location: ./user_admin' );
    }
    else {
        header('location: ./connexion');
    }

}

?>

<?php include( 'header.php' ) ?>

<main>




                         <!--  -------------------formualaire d'inscription---------------------- -->

	<form style="text-align: center" method="POST">
		<div>
			<input  type="text" name="firstname" placeholder="nom">
		</div>
		<div>
			<input  type="text" name="lastname" placeholder="prénom">
		</div>
		<div>
			<input  type="text" name="mail" placeholder="mail">
		</div>







                        <!--------------- option formulaire supplémentaire admin ------------------>
		<?php
		if(!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1){
			?>
            <div>
                <input class="cadre2" type="text" name="classroom" placeholder="profession">
            </div>

            <div>
                <input type="radio" id="manager" name="manager" value="1">
                <label for="manager">admin</label>
            </div>
            <div>
                <input type="radio" id="eleve" name="manager" value="0" checked>
                <label for="employe">non manager</label>
            </div>
			<?php
		} ?>




                        <!------------------- fin formulaire d'inscription ---------------->


		<div>
			<input type="text" name="username" placeholder="identifiant">
		</div>
		<div>
			<input type="password" name="password" placeholder="mot de passe">
		</div>

        <div>Je suis:
            <select name="select">
                <option value="2">ancien élève</option>
                <option value="3">ancien professeur</option>
                <option value="4">ancien peronnel</option>
                <option value="5">élève actuel</option>
            </select>
        </div>
		<div>
			<input type="submit" id="submit" name="submit" value="Ajouter">
		</div>
	</form>
</main>




	    <?php include( 'footer.php' ) ?>

</body>
</html>

<?php

require_once './db.php';

// Comme pour l'affichage du client, je viens chercher le client correspondant à l'id en get
// cela me permettera de préremplire les champs du formulaire
session_start();
if (!empty($_GET["id"])) {

	$id = (int) $_GET["id"];

	$request = $pdo->prepare( "SELECT * FROM advertising WHERE id_advertising=:identifier" );
	$request->execute( [ "identifier" => $id ] );
	$advertising = $request->fetch( PDO::FETCH_ASSOC );

}



if(isset($_POST['submit']) && !empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['society']) && !empty($_POST['location'])) {

	$sql = $pdo->prepare( "UPDATE advertising SET title = :title, description = :description, author = :author, society = :society, location = :location WHERE id_advertising = :id_advertising" );
	$sql->execute([

            "id_advertising" => $advertising["id_advertising"],
		    'title'       => $_POST['title'],
		    'description' => $_POST['description'],
		    'author'      => $_POST['author'],
		    'society'     => $_POST['society'],
            'location'    => $_POST['location']
	] );
    header('location: ./annonces.php');
}

?>

<?php include( 'header.php' ) ?>
<main>
<div class="monflex">
    <form method="post">
        <div>
            <label style="display: block" for="author">Auteur</label>
            <input type="text" id="author" name="author" value="<?= $advertising['author'] ?>">
        </div>
        <div>
            <label style="display: block" for="title">Titre</label>
            <input type="text" id="title" name="title" value="<?= $advertising['title'] ?>">
        </div>
        <div>
            <label style="display: block" for="description">Description</label>
            <textarea id="description" name="description" "><?= $advertising['description'] ?></textarea>
        </div>
        <div>
            <label style="display: block" for="society">société</label>
            <input type="text" id="society" name="society" value="<?= $advertising['society'] ?>">
        </div>
        <div>
            <label style="display: block" for="location">localité</label>
            <input type="text" id="location" name="location" value="<?= $advertising['location'] ?>">
        </div>
        <div>

            <input type="submit" name="submit">
        </div>
    </form>
</div>
</main>
<?php include( 'footer.php' ) ?>

</body>
</html>

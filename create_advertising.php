
<?php
require_once './db.php';
session_start();
var_dump($_SESSION);
$id = $_SESSION['is_id'];

if(isset($_POST['submit'])
    && !empty($_POST['author'])
    && !empty($_POST['title'])
    && !empty($_POST['description'])
    && !empty($_POST['society'])
    && !empty($_POST['location'])){

	var_dump("boucle");
	$sql = $pdo->prepare("INSERT INTO advertising VALUE (null, :title, :description, :author, :society, :location)");
	$sql->execute([
		'title' => $_POST['title'],
		'description' => $_POST['description'],
		'author' => $_POST['author'],
        'society' => $_POST['society'],
        'location' => $_POST['location']

	]);

    $uid = $pdo->lastInsertId();

    $sql = $pdo->prepare("INSERT INTO create_advertising VALUE (:id_users, :id_advertising)");
    $sql->execute([
        'id_users' => $id,
        'id_advertising' => $uid,

    ]);

	header('Location:./annonces.php');
}

print_r($_SESSION);
?>

<?php include( 'header.php' ) ?>

<main>

	</div>
    <div class="monflex">
        <form method="post">
            <div>
                <label style="display: block" for="author">Auteur</label>
                <input type="text" id="author" name="author">
            </div>
            <div>
                <label style="display: block" for="title">Titre</label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label style="display: block" for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div>
                <label style="display: block" for="society">société</label>
                <input type="text" id="society" name="society">
            </div>
            <div>
                <label style="display: block" for="location">localité</label>
                <input type="text" id="location" name="location">
            </div>
            <div>

                <input type="submit" name="submit">
            </div>
        </form>
    </div>

	<?php include( 'footer.php' ) ?>

</main>
</body>

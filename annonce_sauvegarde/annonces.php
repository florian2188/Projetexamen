<?php
require_once './db.php';
session_start();

$sql = $pdo->prepare("SELECT id_users, username, manager, class FROM users");
$sql->execute([

]);

$infos = $sql->fetch();
print_r($_SESSION)
?>
<?php include( 'header.php' ) ?>
<main>
	<div>
		<nav>
			<ul>
				<li class="menu-deroulant">
					<a id="menu" href="#">Menu</a>
					<ul class="sous-menu">
						<li><a href="./accueil.php">accueil</a></li>
                        <li><a href="./histoire">histoire</a> </li>
						<li><a href="./contact">contact</a></a></li>
                        <li><a href="./annonces">annonces</a> </li>
                        <li><a href="./event">évenement</a> </li>
                        <?php
                        if (!empty($_SESSION['is_admin'] == 1)){
                        ?>
                        <li><a href="./user_admin.php">utilisateurs</a> </li>
                        <?php
                        }
                        ?>

                    </ul>
				</li>
			</ul>
		</nav>
	</div>
	<?php // lien de redirection administrateur

	if(!empty($_SESSION['is_class'] == 2) || ($_SESSION['is_admin'] == 1)){
        ?>

    <div class="flex_menu" >
            <li><a href="./create_advertising.php">créer annonces</a> </li>

		<?php
	}

	$sql = $pdo->prepare("SELECT * FROM advertising");
	$sql->execute();
	$infos = $sql->fetchAll(PDO::FETCH_ASSOC);


    foreach ($infos as $info){
        echo "<div class='cadre maxwidth'>".

                 "<div>".
                        "<p>".
                            $info['author'].
                        "</p>".
                 "</div>".

                 "<div>".
                        "<h2>".
                            $info['title'].
                        "</h2>".
                        "<div>".
                            $info['description'].
                        "</div>".
                 "</div>";



    if (!empty($_SESSION['is_admin'] == 1)) {
        ?>
    <a href="./modify_advertising?id=<?= $info['id_advertising']; ?>">modifier</a>
        <a href="./delete_advertising?id<?= $info['id_advertising']; ?>">supprimer</a>
            </div>
    <?php
    } }
        ?>
    </div>
</main>

<?php include( 'footer.php' ) ?>

</body>

<div>
    <section class="timeline">
        <ul>
            <?php
            foreach ($classroom as $classrooms) {

                echo

                    "<li>" .
                    "<div>" .
                    "<time>" . $classrooms['years'] . "</time>" .
                    $classrooms['name']
                    . "</div>" .
                    "</li>";
            }
            ?>
        </ul>
    </section>
</div>
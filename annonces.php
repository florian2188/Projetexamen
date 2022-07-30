<?php
require_once './db.php';
session_start();
$id = $_SESSION['is_id'];
var_dump($id);
$sql = $pdo->prepare("SELECT id_users, username, manager, class FROM users");
$sql->execute([

]);

$infos = $sql->fetch();
print_r($_SESSION)
?>

<?php include( 'header.php' ) ?>

<link rel="stylesheet" href="style/advertisingstyle.css">
<main>
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


        $sql = $pdo->prepare("SELECT * FROM users A inner join create_advertising B ON A.id_users=B.id_users inner join advertising C ON B.id_advertising=C.id_advertising ");
            $sql->execute();
	        $advertising = $sql->fetchAll(PDO::FETCH_ASSOC);


            foreach ($advertising as $advertisings) {
                ?>
                <div style="width: 80%" >
                    <div>
                        <h2 style="text-align: center; font-size: xx-large; padding: 2%">Annonces</h2>
                    </div>

                    <div style="background-color: #f3f2ef; padding: 5%">
                        <div style="text-align: center; font-size: x-large; padding: 0% 2% 5% 0%">
                            <?=$advertisings['title']?>
                        </div>
                        <div style="display: flex; justify-content: space-around" >
                            <div>
                                <div>Posté par <br>
                                   <?=$advertisings['firstname']?>
                                   <?=$advertisings['lastname']?>

                                </div>
                                <div>
                                    <?=$advertisings['situation']?>
                                </div>
                                <div>

                                    <?=$advertisings['society']?> Recrute
                                </div>
                                </div>
                                <div style="max-width: 30%; height: 100px; line-height: 20px; overflow: hidden">
                                    <?=nl2br($advertisings['description'])?>

                                </div>
                                <div>Contact
                                    <?=$advertisings['mail']?>
                                </div>
                        </div>


                    </div>
                </div>
                <?php
            }












    foreach ($infos as $info){


        echo"<div class='maxwidth'>".


                    "<div>".
                            "<p>".
                                $info['author'].
                            "</p>".
                    "</div>".
                    "<div>".
                            "<p>".
                                $info['title'].
                            "</p>".
                    "</div>".
                    "<div>".
                            "<p>".
                                $info['location'].
                            "</p>".
                    "</div>".

            "</div>";

	    ?>
        <a href="more.php?id=<?= $info['id_advertising']?> ">en savoir plus sur <?= $info['title'] ?> </a>
	    <?php

        if (!empty($_SESSION['is_admin'] == 1)) {
        ?>
    <a href="./modify_advertising.php?id=<?= $info['id_advertising']; ?>">modifier</a>
        <a href="./delete_advertising?id=<?= $info['id_advertising']; ?>">supprimer</a>

    <?php
    } }
        ?>
    </div>
</main>

<?php include( 'footer.php' ) ?>

</body>


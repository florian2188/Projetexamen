<?php
require_once './db.php';
session_start();



if (!empty($_GET["id"])) {

    $id = (int)$_GET["id"];
    $request = $pdo->prepare( "SELECT * FROM users WHERE id_users=:identifier" );
	$request->execute( [ "identifier" => $id ] );
	$user = $request->fetch( PDO::FETCH_ASSOC );

}


?>


<?php include( 'header.php' ) ?>



<link rel="stylesheet" href="./style/modify_profil.css" xmlns="http://www.w3.org/1999/html">




<main>

    <!------------mofiier profil  ---------------->

    <div id="profil">

        <!----------- modifier la photo de profil --------------->
        <div>
	        <?php echo "<img src='./upload/".$user['files']."' width='300px' ><br>"; ?>

            <form action="modify_profil.php?id=<?= $user['id_users']; ?>" method="POST" enctype="multipart/form-data">
                <label for="file">Fichier</label>
                <input type="file" name="file">
                <button type="submit" name="submit">Enregistrer</button>

            </form>
            <?php
            if(isset($_FILES['file']) && (isset($_POST['submit']))){
                unlink('./upload/'.$user['files']);
                var_dump("debut boucle");
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];

	            $tabExtension = explode('.', $name);
	            $extension = strtolower(end($tabExtension));

	            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
	            $maxSize = 400000;



    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg

        move_uploaded_file($tmpName, './upload/'.$file);

        $req = $pdo->prepare("UPDATE users SET files =:files WHERE id_users = :id_users ");
        $req->execute([
	        "id_users" => $user["id_users"],
            "files" => $file,
        ]);


            echo "Image enregistrée";

        }
        else{
            echo "Une erreur est survenue";
        }
        }?>

        </div>


<!---------- modification des infos du profil -------------------------->

        <div>
            <?php

            if(isset($_POST['submitform']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['mail']) && !empty($_POST['situation']) && isset($_POST['manager']) && !empty($_POST['username'])){
                var_dump("condition");

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

            <form method="POST">
                Nom prénom
                <div>
                    <input type="text" name="firstname" placeholder="nom"  value="<?= $user['firstname'] ?>" required>

                    <input type="text" name="lastname" placeholder="prénom" value="<?= $user['lastname'] ?>" required>
                </div>
                Mail
                <div>
                    <input type="text" name="mail" placeholder="mail" value="<?= $user['mail'] ?>" required>
                </div>
                Profession
                <div>
                    <input type="text" name="situation" placeholder="situation" value="<?= $user['situation'] ?>" required>
                </div>

                <?php
                if (!empty($_SESSION['is_admin' == 1 ]) && ($_SESSION['is_class' == 1 ])) {
                    ?>
                      <div>
                    <input type="radio" id="manager" name="manager" value="1">
                    <label for="manager">admin</label>
                </div>
                <div>
                    <input type="radio" id="eleve" name="manager" value="0" checked>
                    <label for="employe">eleve</label>
                </div>
                <?php
                }

                else { ?>

                    <input  style="display: none" type = "radio" id = "eleve" name = "manager" value = "0" checked >
                    <label for="employe" ></label >
                <?php
                    }
                ?>


                Nom d'utilisateur
                <div>
                    <input type="text" name="username" placeholder="identifiant" value="<?= $user['username'] ?>" required>
                </div>

                <div>
                    <input type="submit" id="submit" name="submitform" value="modifié">
                </div>
            </form>
        </div>
    </div>

    <!----------- modifier l'historique du profil ---------------->

    <div>

    <?php
        $sql = $pdo->prepare("SELECT name, years FROM users U
        inner join users_classroom L ON U.id_users=L.id_users
        inner join classroom C ON L.id_classroom=C.id_classroom
        where U.id_users=$id order by L.years DESC;");
        $sql->execute();
        $classroom = $sql->fetchall(PDO::FETCH_ASSOC);

        ?>
        <div>
            <h2 style="text-align: center">
                <a href="linehistory.php">modifier ma timeline</a>


            </h2>
            <section class="timeline">
                <ul>
                    <?php
                    foreach ($classroom as $classrooms) {

                        echo

                            "<li>" .
                            "<div>" .
                            "<time>" . $classrooms['years'] ."</time>".
                            $classrooms['name'].
                            "</div>";

                            "</li>";
                            
                    }
                    ?>
                </ul>
            </section>
        </div>
    </div>
    <script src="script/tiemline.js"></script>

</main>

<?php include( 'footer.php' ) ?>

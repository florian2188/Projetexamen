<?php
require_once './db.php';
session_start();
$id = $_SESSION['is_id'];
print_r($id);
if (!empty($_POST['a_recup'])){
    var_dump($_POST['a_recup']);

}


if (!empty($id)) {
	$request = $pdo->prepare( "SELECT * FROM users WHERE id_users=:identifier" );
	$request->execute( [ "identifier" => $id ] );
	$user = $request->fetch( PDO::FETCH_ASSOC );


}

    $sql = $pdo->prepare("SELECT * FROM users U 
    inner join users_classroom L ON U.id_users=L.id_users 
    inner join classroom C ON L.id_classroom=C.id_classroom 
    where U.id_users=$id order by L.years DESC;");
    $sql->execute();
    $classroom = $sql->fetchall(PDO::FETCH_ASSOC);





    ?>

<?php include( 'header.php' ) ?>

<main>

	<div id="profil">

        <div>
            <?php echo "<img src='./upload/".$user['files']."' width='350px' ><br>"; ?>
        </div>
        <div>
            <div style="text-align: center; font-size: x-large; padding: 10%">
                <?php echo $user['firstname']." ".$user['lastname']; ?>
            </div>
            <div>
                <?php echo $user['situation'] ?>
            </div>
            <a href="classmate.php"> mes camarades
            </a>
        </div>

    </div>
    <div style="text-align: center">
        <a href="modify_profil.php?id=<?= $user['id_users']; ?>">Modifié mon profilé</a>
    </div>

    <div>
        <section class="timeline">
            <ul>
                <?php
                foreach ($classroom as $classrooms) {

                    echo

                        "<li>" .
                        "<div>" .
                        "<time>" . $classrooms['years'] .

                        "</time>" .
                        $classrooms['name'] .
                        "</div>" .
                        "</li>";
                }
                ?>


            </ul>
        </section>





    </div>







</main>
<script src="script/tiemline.js"></script>

	<?php include( 'footer.php' ) ?>

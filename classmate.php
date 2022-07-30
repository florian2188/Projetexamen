<?php
require_once './db.php';
session_start();
$id = $_SESSION['is_id'];
var_dump($_SESSION);


if (!empty( $id)) {
        $request = $pdo->prepare( "SELECT * FROM users WHERE id_users=:identifier" );
        $request->execute( [ "identifier" => $id ] );
        $user =$request->fetch( PDO::FETCH_ASSOC );
}



$sql = $pdo->prepare("SELECT * FROM users U 
    inner join users_classroom L ON U.id_users=L.id_users 
    inner join classroom C ON L.id_classroom=C.id_classroom 
    where U.id_users=$id order by L.years DESC;");
$sql->execute();
$classroom = $sql->fetchall(PDO::FETCH_ASSOC);


$request = $pdo->prepare( "SELECT * FROM users" );
$request->execute();
$usersall = $request->fetchAll( PDO::FETCH_ASSOC );


$request = $pdo->prepare( "SELECT * FROM users_classroom" );
$request->execute();
$users_classroom = $request->fetchAll( PDO::FETCH_ASSOC );





include('header.php') ;


foreach ($classroom as $classrooms){


    ?>
        <div  style="text-align: center; font-size: x-large; padding: 10%" >
            <div >
                Classe de
                <?=$classrooms['name']?>

                en
                <?=$classrooms['years']?>

            </div>
        </div>


    <?php


    foreach ($users_classroom as $users_classrooms) {
        if ($classrooms['years'] == $users_classrooms['years'] && ($classrooms['id_classroom'] == $users_classrooms['id_classroom']) &&
            ($classrooms['id_users'] !== $users_classrooms['id_users'] )) {

            $switch = $users_classrooms['id_users'] ;


            foreach ($usersall as $usersalls) {
                if ($usersalls['id_users'] == $switch) {
                    $sql = $pdo->prepare("SELECT * FROM users where id_users=:identifier");
                    $sql->execute(["identifier" => $switch]);
                    $test = $sql->fetchall(PDO::FETCH_ASSOC);

                    ?>

<div style="display: flex; justify-content: space-around; align-items: center; margin: 2% auto; background-color: #f3f2ef; max-width: 60%;">
    <div>

                    <span>

                                <form id="test" method="post" action="profil.php">
                                     <input type="hidden" name="a_recup" value="<?=$usersalls['id_users']?>"/>
                                     </form>


                                <a href='#' onclick='document.getElementById("test").submit()'>lien</a>
                                <?=$usersalls['firstname']?>
                                <?=$usersalls['lastname']?>



                    </span>
    </div>
    <div>
                                <img style="margin: 5%; width: 200px; height: 150px; border-radius: % " src='./upload/<?=$usersalls['files']?>'>
    </div>
</div>
                             <?php
                }
        }
    }
}}

?>

<script src="script/tiemline.js"></script>





<?php








include('footer.php')
?>
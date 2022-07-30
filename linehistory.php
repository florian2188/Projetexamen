<?php
require_once './db.php';
session_start();
$id = $_SESSION['is_id'];

include('header.php');

if (!empty($id)) {
    $request = $pdo->prepare( "SELECT * FROM users WHERE id_users=:identifier" );
    $request->execute( [ "identifier" => $id ] );
    $user = $request->fetch( PDO::FETCH_ASSOC );

    }
    $request = $pdo->prepare( "SELECT * FROM classroom" );
    $request->execute();
    $classroom = $request->fetchAll( PDO::FETCH_ASSOC );

    $request = $pdo->prepare( "SELECT * FROM years" );
    $request->execute();
    $year = $request->fetchAll( PDO::FETCH_ASSOC );

    $sql = $pdo->prepare("SELECT * FROM users U 
        inner join users_classroom L ON U.id_users=L.id_users
        inner join classroom C ON L.id_classroom=C.id_classroom 
        where L.id_users=$id order by L.years DESC;");
    $sql->execute();
    $classuser = $sql->fetchall(PDO::FETCH_ASSOC);




if(isset($_POST['submitaddclass']) && !empty($_POST['addclass'])) {


    $userid = $_SESSION['is_id'];
    $sql = $pdo->prepare("INSERT INTO users_classroom (id_users, id_classroom, years) values (:id_users, :addclass, :adddate)");

    $sql->execute([

            'id_users'=>$userid,
            'addclass'=>$_POST['addclass'],
            'adddate'=>$_POST['adddate'],

    ]);
    header("refresh:0");
    /*
    $sql = $pdo->prepare("INSERT INTO classroom_years (id_classroom, id_years) values (:addclass, :adddate)");
    $sql->execute([

        'addclass'=>$_POST['addclass'],
        'adddate'=>$_POST['adddate'],
]);
    header("refresh:0");
*/


};

if(isset($_POST['suphist'])) {


    $sql = $pdo->prepare("DELETE A FROM users_classroom A WHERE A.id_users=:id_users and A.id_classroom=:id_classroom");
    $sql->execute([

        'id_users' => $id,
        'id_classroom' => $_POST['idclassroom']


    ]);
    header("refresh:0");
    }
    ?>


<?php

?>


<div id="profil">

            <div>
                <div style="text-align: center; font-size: x-large; padding: 10%">
                    <?php echo $user['firstname']." ".$user['lastname']; ?>

                </div>
                <div>
                <?php echo $user['situation'] ?>
                </div>
            </div>
</div>


<!-------------------- ajout parcours -------------------------->

<div>
    <div>
        <h2>
            parcours
        </h2>
        <form method="post">
            <div>
                <p>
                    ajouter une exeperience
                </p>
            </div>
            <div>
                <p>
                    section
                </p>

<?php

                foreach ($classroom as $classrooms) {

                echo
                "<select name='addclass'>".
                "<option value=".$classrooms['id_classroom'].">".$classrooms['name']."</option>"."</select";
                }
                ?>

                <div>
                    <div>
                        date
                    </div>
                    <div>
                        <?php

                        foreach ($year as $years) {
                            echo
                              "<select name='adddate'>".
                            "<option value=".$years['years'].">".$years['years']."</option>"."</select";
                        }

                      ?>
                    </div>
                    <input type="submit" name="submitaddclass" value="ajouter">
                </div>
            </div>
        </form>
    </div>
</div>


<!--------------- linehistory ---------------------->


<div>
    <section class="timeline">
        <ul>

            <?php
            foreach ($classuser as $classusers) {

                echo
                    "<li>" .
                    "<div>" .
                    "<time>" . $classusers['years'] ."</time>".
                    $classusers['name']."</div>" .
                    "<div>".
                    "<form method='post'>".
                    "<input type='hidden' name='idclassroom' value='".$classusers['id_classroom']."'>",
                    "<input type='submit'  name='suphist' value='Supprimer'/>".
                    "</form>".
                    "</div>".

                    "</li>";
            }
            ?>
        </ul>
    </section>
</div>


    <script src="script/tiemline.js"></script>


<?php
include('footer.php');
?>
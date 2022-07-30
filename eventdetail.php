<?php
require_once "./db.php";
session_start();


if (!empty($_GET["id"])) {
    var_dump("condition");
    $id = (int)$_GET["id"];
    $request = $pdo->prepare("SELECT * FROM event where id_event=:identifier");
    $request->execute(["identifier" => $id]);
    $event = $request->fetchAll(PDO::FETCH_ASSOC);

    var_dump($event);
}

include('header.php');

?>

<main>
    <div>

        <?php foreach ($event as $events) {

            echo"<div class='eventpicture'>"


                ."<img src='./image/" . $events['picture'] . "' width='100%'>".
                "</div>"

            ?>
            <div style="padding: 2%">

                <div>
                    <?=$events['title']; ?>
                    <?=$events['date']; ?>

                </div>
                <div style="text-align: center">
                    <?= nl2br($events['description']); ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div

</main>


<?php include( 'footer.php' ) ?>




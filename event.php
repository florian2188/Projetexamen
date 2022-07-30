<?php
require_once "./db.php";
session_start();
?>
<?php
$sql = $pdo->prepare("SELECT * FROM event");
$sql->execute();
$event = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include( 'header.php' ) ?>
<link rel="stylesheet" href="style/eventstyle.css">
<main>
    <div style="display: flex">
        <?php foreach ($event as $events) {

            echo"<div class='eventpicture'>"
                    ."<img src='./image/" . $events['picture'] . "' width='100%'>".
                "</div>"

            ?>
                <div style="padding: 2%">

                    <div>
                        <?=$events['date']; ?>
                        <?=$events['title']; ?>
                    </div>
                    <div>
                        "<a href="eventdetail.php?id=<?= $events['id_event']; ?>">vvrvrrv</a>"
                    </div>
                </div>
            <?php
        }
        ?>
    </div

</main>

	<?php include( 'footer.php' ) ?>

<?php
require_once './db.php';
session_start();

if (!empty($_GET["id"])) {
	$id = (int) $_GET["id"];

	$request = $pdo->prepare( "SELECT * FROM advertising WHERE id_advertising=:id_advertising" );
	$request->execute( [ "id_advertising" => $id ] );
	$infos = $request->fetch( PDO::FETCH_ASSOC );

	print_r( $infos );
}



?>
<?php include( 'header.php' ) ?>
<main>

    <div>
        <?php
        echo
            "<div>".$infos['description']."</div>" ?>
     </div>
</main>

<?php include( 'footer.php' ) ?>

</body>



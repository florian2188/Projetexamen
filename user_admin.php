<?php
require_once './db.php';
session_start();
if(empty($_SESSION['is_loggedin'])){
	header("Location:./index.php");
	exit;
}
?>

<?php include( 'header.php' ) ?>

<main>

    <div>
        <td><a  id="create_user" href="create_user.php">créer</a></td>
        <table>
            <tr>
                <th>prénom</th>
                <th>nom</th>
                <th>mail</th>
                <th>situation</th>
                <th>administrateur</th>
                <th>nom utilisateur</th>
                <th>class</th>

            </tr>
			<?php
			$sql = $pdo->prepare("SELECT * FROM users");
			$sql->execute();
			$infos = $sql->fetchAll(PDO::FETCH_ASSOC);
			foreach($infos as $info){
				echo "<tr>".
				     "<td>".$info['firstname']."</td>"."<td>".$info['lastname']."</td>"."<td>".$info['mail']."</td>"."<td>".$info['situation']."<td>".$info['manager']."</td>"."<td>".$info['username']."</td>"."<td>".$info['class']

				?>
                <td><a href="modify_profil.php?id=<?= $info['id_users']; ?>">modifié</a> </td>
                <td><a href="delete_users.php?id=<?= $info['id_users']; ?>">supprimer</a></td>

				<?php
				"</tr>";
			}  ?>
        </table>

    </div>

	<?php include( 'footer.php' ) ?>

</main>
</body>



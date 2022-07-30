<?php

session_start();
?>

<?php include( 'header.php' ) ?>
<main>
	<div>
		<nav>
			<ul>
				<li class="menu-deroulant">
					<a id="menu" href="#">Menu</a>
					<ul class="sous-menu">
						<li><a href="./index.php">accueil</a></li>
						<li><a href="./connexion">connexion</a></li>
						<li><a href="./contact">contact</a></a></li>
						<li><a href="./histoire">histoire</a> </li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>

	<?php include( 'footer.php.php' ) ?>

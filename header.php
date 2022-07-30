<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anciens eleve - creation utilisateur</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/responsive.css">
    <link rel="stylesheet" href="./style/slideshow.css">
    <link rel="stylesheet" href="./style/profil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>
    <div id="head_style">
        <div>
            <img id="logo" src="image/Logo-Amicale.jpg">
        </div>
        <div id="jflex">
            <div id="champ">
                <?php
                if ($_SESSION['is_loggedin'] == true){
                    ?>
	                <a id="connexion" href="deconnexion.php">deconnexion</a>
                <?php
                }
                else {
                    ?>
                <a id="connexion" href="connexion.php">connexion</a>

                <?php
                }                ?>

            </div>
            <div id="champ">
                <input type="text" id="champderecherche" value="Rechercher">
            </div>
        </div>
    </div>
    <div>
        <nav>
            <ul>
                <li style="padding: 15px" class="menu-deroulant" >
                    <a id="menu" href="#">Menu</a>
                    <ul class="sous-menu">
						<?php

						if(!empty($_SESSION['is_loggedin'] == true) && $_SESSION['is_admin'] == 1){
							?>
                            <li><a href="./accueil.php">accueil</a></li>
                            <li><a href="./histoire">histoire</a> </li>
                            <li><a href="./contact">contact</a></a></li>
                            <li><a href="./annonces">annonces</a> </li>
                            <li><a href="./event">évenement</a> </li>
                            <li><a href="./profil.php">profil</a> </li>
                            <li><a href="./stage">periode de stage </a></li>
                            <li><a href="./user_admin.php">utilisateurs</a></li>
							<?php
						}

						else if(!empty($_SESSION['is_loggedin'] == true) && $_SESSION['is_admin'] == 0) {
							?>
                            <li><a href="./accueil.php">accueil</a></li>
                            <li><a href="./histoire">histoire</a> </li>
                            <li><a href="./contact">contact</a></a></li>
                            <li><a href="./annonces">annonces</a> </li>
                            <li><a href="./event">évenement</a> </li>
                            <li><a href="./profil.php">profil</a> </li>
                            <!--<li><a href="./stage">periode de stage </a></li>-->

							<?php
						}

						else {
							?>
                            <li><a href="./index.php">accueil</a></li>
                            <li><a href="./histoire">histoire</a> </li>
                            <li><a href="./contact">contact</a></li>
							<?php
						}

						?>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<?php
session_start();

$_SESSION['is_loggedin'] = '';
$_SESSION['is_admin'] = '';
$_SESSION['is_class'] = '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anciens eleve - creation utilisateur</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/slideshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                <a id="connexion" href="connexion.php">connexion</a>
            </div>
            <div id="champ">
                <input type="text" id="champderecherche" value="Rechercher">
            </div>
        </div>
    </div>
    <div>
        <nav>
            <ul>
                <li class="menu-deroulant"">
                <a id="menu" href="#">Menu</a>
                <ul class="sous-menu">
                    <li><a href="./index.php">accueil</a></li>
                    <li><a href="./histoire">histoire</a> </li>
                    <li><a href="./contact">contact</a></a></li>

                </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="./image/news.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="./image/news2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="./image/news3.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

<!--
    <style>
        .w3-section, .w3-code{
            margin-top:0!important;
        }
    </style>
    <div class="w3-content w3-section" style="max-width:100%;">

        <img class="mySlides w3-animate-fading" src="./image/news.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="./image/news2.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="./image/news3.jpg" style="width:100%">
    </div>

    <div>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 9000);
            }
        </script>
    </div>
-->
        <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div id="paragraphe">

            <h2> L???ASSOCIATION DES ANCIENS ??L??VES DE SAINT JOSEPH LA SALLE</h2>

            <div style="border-top: solid 2px gray "></div>

            <p>L???importance du maintien des contacts avec les Anciens ??l??ves</p>
            <p>Il y a longtemps que les universit??s am??ricaines accordent une grande importance ?? leur association d???anciens ??l??ves. L???int??r??t de ces r??seaux Alumni n???est plus ?? d??montrer.</p>

            <p>A l???AEFE aussi, le d??veloppement des associations d???anciens ??l??ves est devenu une priorit??. Les ??l??ves qui sortent de nos lyc??es fran??ais ?? l?????tranger poss??dent des qualit??s qu???il faut valoriser et qui sont recherch??es dans l???enseignement sup??rieur mais aussi par les employeurs publics et priv??s.</p>

            <p>Outre la formation intellectuelle apport??e par le mod??le ??ducatif fran??ais (ouverture d???esprit, rigueur, endurance, esprit d???analyse???), nos anciens ??l??ves se sont enrichis au contact des langues et des diff??rences culturelles. Nos ??l??ves d??veloppent des facult??s d???adaptation aux autres et ?? de nouvelles situations qui les rendent plus mobiles, plus flexibles, plus r??actifs.</p>

            <p>C???est pourquoi, nous devons constituer des annuaires d???anciens ??l??ves, en collectant les adresses m??ls afin de consolider les plateformes collaboratives telles qu???Agora (pour les ??l??ves encore au lyc??e et pour les jeunes anciens ??l??ves) ou l???association des Anciens des lyc??es fran??ais du monde (Union ??? ALFM).
                L???exp??rience montre que ce r??seau d???anciens ??l??ves du r??seau AEFE facilite l???int??gration dans l???enseignement sup??rieur mais aussi l???obtention de stages et de plus en plus souvent l???acc??s ?? des emplois. D???ailleurs de nombreux anciens ??l??ves sont en contact pour le d??veloppement de leur entreprise car ils parlent le m??me langage et ils connaissent leurs points forts, dont celui d???avoir ??tudi?? dans des lyc??es exigeants et internationaux.</p>

            <p>L???initiative r??cente de l???AEFE d???inciter les lyc??es du r??seau ?? ??changer des ??l??ves pour des p??riodes de quelques semaines (programme ADN) afin de les aider ?? se conna??tre, va dans ce sens.</p>

            <p>D???ailleurs, plusieurs anciens ??l??ves du LFVH sont d??j?? dans cette logique quand ils proposent de conseiller nos lyc??ens sur les ??tudes sup??rieures.</p>

            <p style="margin-block-end: 50px">Cr??ation du r??seau des anciens ??l??ves du LFVH <br>
                Le LFVH cr??e son annuaire des anciens ??l??ves !<br>
                Afin de nous permettre de vous retrouver et de constituer un annuaire des anciens ??l??ves du LFVH et cr??er le r??seau des anciens ??l??ves du lyc??e <a href="create_user.php">cliquer ici</a> pour compl??ter le formulaire.
                Vous pouvez aussi vous inscrire au groupe des Anciens ??l??ves sur Facebook.</p>



</main>

<?php include( 'footer.php' ) ?>

<script src="script/slideshow.js"></script>

</body>
</html>

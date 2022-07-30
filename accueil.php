
<?php
require_once './db.php';
session_start();
if(!$_SESSION['is_loggedin']){
    header('index.php');
}
print_r($_SESSION);

?>

    <?php include( 'header.php' ) ?>

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
    </div>

    <div id="backimage">

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div id="paragraphe">

        <h2> L’ASSOCIATION DES ANCIENS ÉLÈVES DE SAINT JOSEPH LA SALLE</h2>

        <div style="border-top: solid 2px gray "></div>

        <p>L’importance du maintien des contacts avec les Anciens élèves</p>
        <p>Il y a longtemps que les universités américaines accordent une grande importance à leur association d’anciens élèves. L’intérêt de ces réseaux Alumni n’est plus à démontrer.</p>

        <p>A l’AEFE aussi, le développement des associations d’anciens élèves est devenu une priorité. Les élèves qui sortent de nos lycées français à l’étranger possèdent des qualités qu’il faut valoriser et qui sont recherchées dans l’enseignement supérieur mais aussi par les employeurs publics et privés.</p>

        <p>Outre la formation intellectuelle apportée par le modèle éducatif français (ouverture d’esprit, rigueur, endurance, esprit d’analyse…), nos anciens élèves se sont enrichis au contact des langues et des différences culturelles. Nos élèves développent des facultés d’adaptation aux autres et à de nouvelles situations qui les rendent plus mobiles, plus flexibles, plus réactifs.</p>

        <p>C’est pourquoi, nous devons constituer des annuaires d’anciens élèves, en collectant les adresses méls afin de consolider les plateformes collaboratives telles qu’Agora (pour les élèves encore au lycée et pour les jeunes anciens élèves) ou l’association des Anciens des lycées français du monde (Union – ALFM).
            L’expérience montre que ce réseau d’anciens élèves du réseau AEFE facilite l’intégration dans l’enseignement supérieur mais aussi l’obtention de stages et de plus en plus souvent l’accès à des emplois. D’ailleurs de nombreux anciens élèves sont en contact pour le développement de leur entreprise car ils parlent le même langage et ils connaissent leurs points forts, dont celui d’avoir étudié dans des lycées exigeants et internationaux.</p>

        <p>L’initiative récente de l’AEFE d’inciter les lycées du réseau à échanger des élèves pour des périodes de quelques semaines (programme ADN) afin de les aider à se connaître, va dans ce sens.</p>

        <p>D’ailleurs, plusieurs anciens élèves du LFVH sont déjà dans cette logique quand ils proposent de conseiller nos lycéens sur les études supérieures.</p>

        <p style="margin-block-end: 50px">Création du réseau des anciens élèves du LFVH <br>
            Le LFVH crée son annuaire des anciens élèves !<br>
            Afin de nous permettre de vous retrouver et de constituer un annuaire des anciens élèves du LFVH et créer le réseau des anciens élèves du lycée <a href="create_user.php">cliquer ici</a> pour compléter le formulaire.
            Vous pouvez aussi vous inscrire au groupe des Anciens élèves sur Facebook.</p>


</main>

<?php include( 'footer.php' ) ?>

    <script src="script/slideshow.js"></script>
</body>

</html>


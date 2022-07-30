<?php
require_once './db.php';
$_SESSION['is_loggedin'] = '';
$_SESSION['is_admin'] = '';
$_SESSION['is_class'] = '';
session_start();
print_r($_SESSION);

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
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php include( 'header.php' ) ?>
<main>
    <div id="histmain">


        <div id="histotitle">
            <div>
                <h2> Historique </h2>
            </div>
            <div style="padding: 10px">
                De Saint Joseph Lorraine à Saint Joseph La Salle…
            </div>
        </div>



        <div id="histcontent">

            <div class="histflex">
                <div>
                    <h3>1866</h3>
                    <p>Installation de la Maison des Frères des Écoles Chrétiennes, rue de Lorraine au Mans</p>
                </div>
                <div>

                </div>
            </div>


            <div class="histflex">
                <div>

                </div>
                <div>
                    <h3>jusqu’en 1981</h3>
                    <p>Présence des Frères, de l’École et du Collège rue de Lorraine mais… Dans les années 1975-1980, la place manque cruellement. Le Père André Grassin, directeur diocésain de l’époque souhaitant créer une structure d’enseignement industriel pour les garçons sollicite les Frères mais ils ne peuvent pas accueillir, dans les locaux de la rue de Lorraine, la 1ère année de CAP Électrotechnique.</p>
                </div>
            </div>


            <div class="histflex">
                <div>
                    <h3>1978</h3>
                    <p>C’est Soeur Hélène Juhel, directrice du lycée Ste Catherine qui accepte l’hébergement de la 1ère année du CAP, non sans appréhension, Ste Catherine étant alors un lycée technique de filles !</p>
                </div>
                <div>

                </div>
            </div>


            <div class="histflex">
                <div>

                </div>
                <div>
                    <h3>En 1981</h3>
                    <p>Grâce au Frère René Mercier, le terrain et le financement étant enfin trouvés, le transfert de l’École, du Collège s’opère et s’accompagne de l’arrivée du lycée technique de garçons à Pruillé-le-Chétif, sur le site actuel</p>
                </div>
            </div>


            <div class="histflex">
                <div>
                    <h3>Depuis1981</h3>
                    <p>L’établissement vit son évolution avec fermeture et ouverture de classes, fermeture et arrivée de nouvelles filières, zones de turbulence inquiétantes, moments de tristesse et moments de joie.</p>
                </div>
                <div>

                </div>
            </div>


            <div class="histflex">
                <div>

                </div>
                <div>
                    <h3>En 1997</h3>
                    <p>Les Frères quittent physiquement l’établissement mais leur présence est bien là et St Joseph La Salle est aujourd’hui : Une école maternelle et primaire, un collège, un enseignement adapté, un lycée professionnel, général et technologique, de l’enseignement supérieur. Avant tout, des personnes engagées auprès des enfants et des jeunes pour les aider à grandir, se construire, trouver leur voie afin qu’ils soient demain des adultes responsables, engagés dans une société pluriculturelle. Mais aussi des adultes plus particulièrement investis auprès des enfants et des jeunes en difficulté scolaire, en situation de handicap, mineurs étrangers, proposant des projets variés aux différentes classes.</p>
                </div>
            </div>
        </div>

    </div>


    <div id="histmore">

        <div id="histmoretitle">
            <h3>St Joseph rue de Lorraine...</h3>
            <p>On y pensait depuis longtemps… Les locaux de la « Rue de Lorraine » étaient trop petits et inadaptés aux exigences modernes, les cours de récréations trop petites, les installations sportives dérisoires… Le Père André GRASSIN, directeur diocésain de l’Enseignement Catholique, souhaitait de son côté, créer dans l’agglomération sarthoise une structure d’enseignement industriel pour les garçons. L’enseignement industriel pour les filles (section habillement) était dispensé par les Sœurs de Saint Vincent de Paul au lycée Sainte Catherine.</p>
            <div style="border-top: solid 2px white; margin-top: 80px"></div>
        </div>


        <div style="align-items: center" class="histflex">
            <div style="padding: 20px">
                <p style="padding: 1%">Le père GRASSIN pensa aux Frères de la «rue de Lorraine» pour cette nouvelle option, à l’occasion du transfert prévu, mais qui tardait faute de terrain de chute et de financement !</p>
                <p style="padding: 1%">Ouvrir une section industrielle suppose la faire fonctionner pendant cinq ans sans contrat, à moins de la créer en annexe d’un établissement déjà existant et possédant le même type d’enseignement.</p>
                <p style="padding: 1%">Or Sainte Catherine remplissait (et elle seule dans l’agglomération) cette condition. Le père GRASSIN, après l’acceptation du collège Saint-Joseph, demanda au lycée Sainte-Catherine l’hébergement d’une classe de 1re année de lycée professionnel préparant en 3 ans au CAP d’électrotechnicien.</p>
            </div>
            <div style="padding: 2%; text-align: end">
                <img class="histrotatright" src="image/histoire-vueaerienne.jpg">
            </div>
        </div>

        <div style="align-items: center" class="histflex">
            <div style="padding: 2%">
                <img class="histrotatleft" src="image/histoire-frerelucien.jpg">
            </div>
            <div>
                <p style="padding: 1%">Sœur Hélène JUHEL directrice accepta avec quelques appréhensions : Comment imaginer une trentaine de garçons dans cet établissement ne recevant que des filles ?</p>
                <p style="padding: 1%">Sans oublier le problème des sanitaires ! C’était pour la rentrée 1978 et pour un an seulement.. car le Collège St-Joseph sera (assure-t-on) dans ses nouveaux locaux l’année suivante.</p>
            </div>
        </div>

        <div style="align-items: center" class="histflex">
            <div>
                <p style="padding: 1%">L’année scolaire 78-79 s’est bien passée, mais pas de perspective de nouveaux locaux pour St-Joseph. Le Père GRASSIN est contraint de rencontrer à nouveau Sœur Hélène et de confesser son excés d’optimisme… Il faut accepter en 1979 une 2ème armée (60 élèves !) mais pour un an seulement !</p>
                <p style="padding: 1%">Le Directeur diocésain promet une aide pédagogique pour la nouvelle section «garçons ». Il sollicite le Frère Louis NÉRISSON. Celui-ci (66 ans) demande un temps de réflexion, consulte et donne une réponse négative ! Et en 1980, Sœur Hélène doit accepter une 3ème armée (90 élèves !), mais on voit enfin se profiler le nouveau «Saint Joseph » qui ouvrira bien en 1981 à Pruillé-le-Chétif.</p>
            </div>
            <div style="padding: 2%; text-align: end">
                <img class="histrotatright" src="image/histoire-construction.jpg">
            </div>
        </div>

        <div style="align-items: center" class="histflex">
            <div style="padding: 2%">
                <img class="histrotatleft" src="image/histoire-reception.jpg">
            </div>
            <div>
                <p style="padding: 1%">Les recherches des protagonistes du projet de déplacements (Établissement, DDEC, Tutelle des Frères) se portaient sur Allonnes. En effet de nombreux élèves habitant Allonnes étaient scolarisés à la “rue de Lorraine” ou dans d’autres établissements catholiques du Mans et ce projet devait aller dans le sens d’un service pour eux.</p>
                <p style="padding: 1%">Des terrains étaient possibles, mais le conseil municipal déclara ne pas vouloir de cette arrivée. La situation fut débloquée par le curé de Rouillon, le Père Jean ANGENARD, Fils de la Charité, et par Monsieur le député Joël LETHEUL qui trouvèrent un terrain au Pizieux, à Pruillé-le- Chétif, en bordure d’Allonnes et du Mans.</p>
            </div>
        </div>

        <div style="align-items: center; padding-bottom: 100px;" class="histflex">
            <div>
                <p style="padding: 1%">Le Frère René MERCIER, directeur du groupe scolaire Saint Joseph-Lorraine se mit rapidement d’accord avec les propriétaires, un couple de maraîchers qui souhaitait céder leur exploitation pour raison d’âge et de santé. On se souvint que l’architecte Monsieur MOIGNET d’Angers avait fait du bon travail en 1974 au collège Saint-Gatien de Joué-les-Tours, respectant des délais particulièrement serrés. Les projets sont bientôt présentés et la sympathie du Maire de Pruillé-le-Chétif.</p>
                <p style="padding: 1%">Monsieur René YVON facilitera grandement sa réalisation. Le Collège, principal élément du transfert et une partie du Lycée Technique bénéficieront pour moitié chacun d’un bâtiment en dur à deux niveaux . Le primaire, le reste du technique et la restauration seront installés dans des locaux préfabriqués achetés d’occasion à Gournay (53). Peu après, les responsables de la section technique préfèreront renoncer à la moitié du bâtiment en dur pour un regroupement de tout le technique.</p>
            </div>
            <div style="padding: 2%; text-align: end">
                <img class="histrotatright" src="image/histoire-innauguration.jpg">
            </div>
        </div>

    </div>


</main>

<?php include( 'footer.php' ) ?>
</body>

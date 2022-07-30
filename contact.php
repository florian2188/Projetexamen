<?php

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include( 'header.php' ) ?>
<main>
    <div class="container">
        <h1>Formulaire de contact</h1>
        <form method="post" action="mail.php">
            <label for="fname">Nom & prénom</label>
            <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

            <label for="sujet">Sujet</label>
            <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

            <label for="emailAddress">Email</label>
            <input id="emailAddress" type="email" name="email" placeholder="Votre email">


            <label for="subject">Message</label>
            <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>


</main>

<?php include( 'footer.php' ) ?>
</body>

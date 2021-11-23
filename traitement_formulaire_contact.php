<link rel="stylesheet" href="style.css">
<?php
session_start();
include "connexion.php";
include "clean.php";
include("header.php");

$nom = clean($_POST['nom']);
$email = $_POST['email'];
$message = clean($_POST['message']);

$regexEmail = '/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';


//echo preg_match($regexEmail, $_POST['email']);
?>
<div class="page_modif_description">
    <?php
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {



        if (preg_match($regexEmail, $_POST['email'])) {
            $postCommentaire_sql = "INSERT INTO commentaire_client (nom_client, commentaire_client, email_client) VALUES ('$nom', '$message', '$email')";

            $postCommentaire = $database->prepare($postCommentaire_sql);
            $postCommentaire->execute([$nom, $email, $message]);


            header('Location: index.php');
        } else {
            echo "Votre email n'est pas valide";
    ?> <a href="./index.php">RETOUR</a>
    <?php
        }
    } else {
        echo "Veuillez remplir tous les champs";
        ?> <a href="./index.php">RETOUR</a>
    <?php
    }
    ?>
</div>
<?php


// if ($_POST['nom'] && preg_match($regexEmail, $_POST['email'])  && $_POST['message']) {

    

//     $postCommentaire_sql = "INSERT INTO commentaire_client (nom_client, commentaire_client, email_client) VALUES ('$nom', '$email', '$message')";
// } else {
//     $_SESSION['erreur'] = "<h1>Veuillez remplir tous les champs</h1>";
//     header("Location: ../index.php");
//}
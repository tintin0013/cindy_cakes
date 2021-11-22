<link rel="stylesheet" href="style.css">
<?php
session_start();
include "connexion.php";
include("header.php");

if (!isset($_SESSION["user"])) {
    header("location: ./index.php");
}


function supprimerCommentaire($db)
{
    $suppCommentaire_sql = "DELETE  FROM commentaire_client WHERE id_client = ?";

    $suppCommentaire = $db->prepare($suppCommentaire_sql);
    $suppCommentaire->execute([$_GET['id']]);
}

supprimerCommentaire($database);



?>
<div class="page_suppression">

    <a href="./formulaire_photo.php">retour liste photos</a><br>
    <a href="./formulaire_contact.php">retour commentaire</a>
</div>
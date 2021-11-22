<link rel="stylesheet" href="style.css">
<?php
session_start();
include "connexion.php";
include("header.php");

if (!isset($_SESSION["user"])) {
    header("location: ./index.php");
}



function supprimer($db)
{
    $suppPhoto_sql = "DELETE FROM `contenu` WHERE gateau_id= ? ";

    $suppPhoto = $db->prepare($suppPhoto_sql);
    $suppPhoto->execute([$_GET['id']]);

    $suppCommG_sql = "DELETE FROM `gateaux` WHERE gateaux_id= ? ";

    $suppCommG = $db->prepare($suppCommG_sql);
    $suppCommG->execute([$_GET['id']]);
}

supprimer($database);
?>



<div class="page_suppression">
    <h1>

        <a href="./formulaire_photo.php">retour liste photos</a>
    </h1>
</div>
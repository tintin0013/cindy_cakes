<link rel="stylesheet" href="style.css">
<?php
session_start();
include "connexion.php";
include("header.php");

if (!isset($_SESSION["user"])) {
    header("location: ./index.php");
}

$affichagePhotoDescription_sql = "SELECT * FROM `gateaux`WHERE gateaux_id=? ";



$affichagePhotoDescription = $database->prepare($affichagePhotoDescription_sql);
$affichagePhotoDescription->execute([$_GET["id"]]);

$result = $affichagePhotoDescription->fetchALL(PDO::FETCH_ASSOC);


// var_dump($result[0]["nom_gateau"]);
// die();

?>
<section class="page_modif_description">

    <form action="./traitement_modification.php" method="post">

        <input value="<?= $result[0]["nom_gateau"] ?>" type="text" name="nom_gateau"><br>

        <textarea name="descGateau" id="descG" cols="30" rows="10"><?= $result[0]["description"] ?></textarea>
        <br>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="submit" value="MODIFIER">

    </form>
    <div>
        <a href="./formulaire_photo.php">retour formulaire photo</a><br>
        <a href="./formulaire_contact.php">retour commentaire client</a>
    </div>
</section>
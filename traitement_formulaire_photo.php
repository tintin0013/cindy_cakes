<link rel="stylesheet" href="style.css">
<?php
session_start();
include "connexion.php";
include("header.php");



// var_dump($_POST);
// var_dump($_FILES);

$formatImage = ["image/bmp", "image/jpeg", "image/png"];
$formatVideo = ["video/x-msvideo", "video/mpeg", "video/mp4"];

$img_nom = $_POST["nomGateau"];
$img_desc = $_POST["descGateau"];
$img_type = $_POST["type"];
$img_nom_fichier = $_FILES["ajoutFichier"]["name"];
$img_tmp = $_FILES["ajoutFichier"]["tmp_name"];

$uploads_dir_photo = './photo_gateaux';
$uploads_dir_video = './video_gateaux';

$name = basename($_FILES["ajoutFichier"]["name"]);




$ajoutcommentaire_sql = "INSERT INTO `gateaux`(`nom_gateau`, `description`) 
VALUES (?,?)";

$ajoutcommentaire = $database->prepare($ajoutcommentaire_sql);
$ajoutcommentaire->execute([$_POST["nomGateau"], $_POST["descGateau"]]);


$ajout_sql = "INSERT INTO `contenu`(`photo`, `video`, `gateau_id`) 
VALUES (?,?,(SELECT `gateaux_id`FROM `gateaux`  ORDER BY `gateaux_id` DESC LIMIT 1 ))";

$ajout = $database->prepare($ajout_sql);
?><div class="page_suppression">
    <?php

    if (in_array($_FILES['ajoutFichier']['type'], $formatImage)) {

        $ajout->execute(["$uploads_dir_photo/$img_nom_fichier", NULL]);
        move_uploaded_file($img_tmp, "$uploads_dir_photo/$name");

        echo "<h1>fichier Image ajouté</h1>";
    } elseif (in_array($_FILES['ajoutFichier']['type'], $formatVideo)) {


        $ajout->execute([NULL, "$uploads_dir_video/$img_nom_fichier"]);
        move_uploaded_file($img_tmp, "$uploads_dir_video/$name");

        echo "<h1>fichier Video ajouté</h1>";
    } else {
        var_dump($_FILES);
        echo "<h1>format invalide</h1>";
    }
    ?><br>
    <div class="<h1>page_suppression</h1>">

        <a href="./formulaire_photo.php">retour liste photos</a>
    </div>
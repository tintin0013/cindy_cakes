<?php
session_start();
include "connexion.php";
include("header.php");

// if (!isset($_SESSION["user"])) {
//     header("location: ./.php");
// }

$affichagePhoto_sql = "SELECT photo, description FROM contenu
 INNER join gateaux ON contenu.gateau_id = gateaux.gateaux_id 
 WHERE photo IS NOT NULL";

$affichagePhoto = $database->prepare($affichagePhoto_sql);
$affichagePhoto->execute();

$result = $affichagePhoto->fetchALL(PDO::FETCH_ASSOC);


$affichageVideo_sql = "SELECT video, description FROM contenu
 INNER join gateaux ON contenu.gateau_id = gateaux.gateaux_id 
 WHERE video IS NOT NULL";

$affichagevideo = $database->prepare($affichageVideo_sql);
$affichagevideo->execute();

$resultatVideo = $affichagevideo->fetchALL(PDO::FETCH_ASSOC);
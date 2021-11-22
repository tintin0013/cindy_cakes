<?php

include "./connexion.php";

$affichagePhoto_sql = "SELECT photo FROM contenu  WHERE photo IS NOT NULL ORDER BY photo ASC";

$affichagePhoto = $database->prepare($affichagePhoto_sql);
$affichagePhoto->execute();

$result = $affichagePhoto->fetchAll(PDO::FETCH_ASSOC);
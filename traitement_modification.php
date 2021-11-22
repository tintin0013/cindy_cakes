<?php
session_start();
include "connexion.php";

if (!isset($_SESSION["user"])) {

    header("location: ./index.php");
}

modification($database);

function modification($db)
{
    $modifComm_sql = "UPDATE `gateaux` SET nom_gateau = ?, description = ? WHERE gateaux_id= ? ";

    $modifComm = $db->prepare($modifComm_sql);
    $modifComm->execute([$_POST['nom_gateau'], $_POST['descGateau'], $_POST['id']]);
}
header("location: formulaire_photo.php");
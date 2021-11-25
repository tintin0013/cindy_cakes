<?php
session_start();
include "connexion.php";
include "clean.php";

if (!isset($_SESSION["user"])) {

    header("location: ./index.php");
}


$login = clean($_POST['login']);
$password = $_POST['password'];
// 

$regex = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$/";


//echo preg_match($regex, $_POST["password"]);

if ($_POST["login"] && preg_match($regex, $_POST["password"])) {
    $hashPass = sha1($password);

    $verif_sql = "SELECT login ,  password  FROM `utilisateurs` WHERE login = ?";

    $verifUser = $database->prepare($verif_sql);
    $verifUser->execute([$login]);

    $result = $verifUser->fetchAll(PDO::FETCH_ASSOC);

    if ($hashPass === $result[0]["password"]) {

        $_SESSION["user"] = $login;
        unset($_SESSION["erreur"]);
        header("location: formulaire_photo.php");
    } else {
        $_SESSION["erreur"] = "<h1>mot de passe incorect</h1>";

        header("location: login.php");
    }
} else {
    $_SESSION["erreur"] = "<h1>login ou mot de passe incorect</h1>";

    header("location: login.php");
}
<?php
session_start();
include "connexion.php";
include("header.php");

if (!isset($_SESSION["user"])) {
    header("location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a class="bouton_commentaire" href="./formulaire_contact.php">Voir Commentaire</a><br>
    <a class="bouton_commentaire" href="./deconnexion.php">Deconnexion</a><br>

    <form class="newGateau" enctype="multipart/form-data" action="traitement_formulaire_photo.php" method="POST">

        <label for="nomG">Nom du Gateau</label>
        <input type="text" name="nomGateau" id="nomG">
        <br>
        <label for="descG">Description Gateau</label>
        <textarea name="descGateau" id="descG" cols="30" rows="10"></textarea>
        <br>
        <div>
            <input type="radio" name="type" id="photo" value="photo">
            <label for="photo">Photo</label>
            <input type="radio" name="type" id="video" value="video">
            <label for="video">Video</label>

            <br>
            <label for="">ajouter un fichier</label>
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="250000" />-->
            <input type="file" name="ajoutFichier" id="">

            <input type="submit" value="Envoyer" />
        </div>

    </form>
    <div class="formulaire_photo">

        <?php

        $affichagePhotoDescription_sql = "SELECT * FROM `gateaux` ";

        $affichagePhotoDescription = $database->prepare($affichagePhotoDescription_sql);
        $affichagePhotoDescription->execute();

        $result = $affichagePhotoDescription->fetchALL(PDO::FETCH_ASSOC);

        foreach ($result as $value) {
            echo "Nom du Gateau: " . $value["nom_gateau"] . "<br>Description: " . $value["description"] . "<br>";
            $idDesc = (int) $value["gateaux_id"];


            $affichagePhoto_sql = "SELECT photo, video, gateau_id FROM `contenu` WHERE gateau_id=$idDesc";

            $affichagePhoto = $database->prepare($affichagePhoto_sql);
            $affichagePhoto->execute();

            $resultat = $affichagePhoto->fetchALL(PDO::FETCH_ASSOC);

            foreach ($resultat as $valeur) {

        ?>
        <div>

            <?php if ($valeur['video'] === NULL) { ?>
            <img class="affichage" src="<?php echo $valeur['photo'] ?>" alt=""><br><br>
            <a href="./modifier.php?id=<?= $valeur['gateau_id'] ?>">Modifier</a> <br><br>
            <a href="./supprimer.php?id=<?= $valeur['gateau_id'] ?>"
                onclick="return confirm('confirmer suppression ?')">Supprimer</a><br><br><br>
            <?php
                    } else {
                    ?><video class="affichage" src="<?php echo $valeur['video'] ?>" controls></video><br><br>
            <a href="./modifier.php?id=<?= $valeur['gateau_id'] ?>">Modifier</a> <br><br>
            <a href="./supprimer.php?id=<?= $valeur['gateau_id'] ?>"
                onclick="return confirm('confirmer suppression ?')">Supprimer</a><br><br><br>
            <?php

                    }
                } ?>
        </div>
        <?php
        }

            ?>


    </div>

</body>

</html>
<link rel="stylesheet" href="style.css">
<?php
session_start();
include "connexion.php";
include("header.php");

if (!isset($_SESSION["user"])) {
    header("location: ./index.php");
}

$affichageFormulaireContact_sql = "SELECT * FROM commentaire_client";

$affichageFormulaireContact = $database->prepare($affichageFormulaireContact_sql);
$affichageFormulaireContact->execute();
//var_dump($affichageFormulaireContact);

$result = $affichageFormulaireContact->fetchAll(PDO::FETCH_ASSOC);
?>
<a class="bouton_commentaire" href="./formulaire_photo.php">Retour Formulaire Photos</a><br>

<section class="page_menu_contact">

    <?php
    foreach ($result as $value) { ?>


    <div class="menu_contact">
        <?php
            echo "Commentaire laissé par: " . $value["nom_client"] .
                "<br>Email: " . $value["email_client"] .
                "<br>Commentaire: " . $value["commentaire_client"] . "<br>";
            ?> <a href="./supprimer_message.php?id=<?= $value['id_client'] ?>"
            onclick="return confirm('confirmer suppression ?')">supprimer
            commentaire</a><br>
        <?php
    } ?>
    </div>





</section>
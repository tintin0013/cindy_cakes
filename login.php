<?php
session_start();
include("header.php");


if (isset($_SESSION["erreur"])) {

    echo $_SESSION["erreur"];
}
?>
<link rel="stylesheet" href="style.css">

<body>
    <div class="formulaire_login">

        <form class="form_login" action="traitement_login.php" method="post">
            <label for="login">login </label><br>
            <input type="text" name="login" id="">
            <br>
            <label for="password">mot de passe</label><br>
            <input type="password" name="password" id="">
            <br>

            <input class="input_login" type="submit" value="VALIDER">
            <br><br><br>

        </form>
        <a href="./index.php">Retour acceuil</a>
    </div>
</body>

</html>
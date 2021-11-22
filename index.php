<?php

include "./traitement_index.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyndy's Cakes</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <header>
        <div>
            <div class="plaisir">
                <p class="bureau">Pour le plaisir de faire plaisir</p>
                <p class="portable">
                    Pour le plaisir<br />
                    de faire plaisir
                </p>
                <img id="logo" src="./image/gateau_good.png" alt="logo du site" />
            </div>
            <nav>
                <input type="checkbox" id="check" />
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>

                <ul>
                    <li><a href="./index.php">Accueil</a></li>
                    <li><a href="./presentation.html">Présentation</a></li>
                    <li><a class="logo-space" href="./creations.php">Créations</a></li>
                    <li><a href="./contact.html">Me contacter</a></li>
                </ul>
                <!-- <div class="navbar">
            <ul class="nav">
              <li><a href="/index.php">Accueil</a></li>
              <li><a href="/presentation.html">Présentation</a></li>

              <li><a href="/creations.php">Mes créations</a></li>
              <li><a href="/contact.html">Me contacter</a></li>
            </ul>
          </div> -->
            </nav>
        </div>
    </header>
    <hr />
    <section id="quiSuisJe">
        <h1>Qui suis-je ?</h1>
        <div id="para1">
            <div class="photoPresentation">
                <img class="mickeyF" src="./image gateau cindy's cakes/mickey de face.jpg" alt="" />
            </div>
            <div class="textePresentation">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam
                    quisquam aut fugit rerum labore. Temporibus numquam ullam quibusdam,
                    nulla, natus laudantium, odio dolorem amet in laboriosam a ipsum
                    atque ipsa Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Quam quisquam aut fugit rerum labore. Temporibus numquam ullam
                    quibusdam, nulla, natus laudantium, odio dolorem amet in laboriosam
                    a ipsum atque ipsa.
                </p>
                <div id="enSavoirPlus">
                    <span><a href="./presentation.html">En savoir plus sur moi</a></span>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section id="mesCreations">
        <h1>Mes gâteaux</h1>
        <div class="presentation">
            <div class="presentationgateaux">
                <?php
                $compteur = 0;
                foreach ($result as $value) {

                    echo "<img class='imageGateaux' src='$value[photo]' alt='' />";
                    //echo ($value["photo"]);
                    $compteur++;
                    if ($compteur == 6) {
                        break;
                    }
                }

                ?>
            </div>
            <div class="presentationvideo">
                <video controls muted width="250">
                    <source src="./video/spider-man.mp4" type="video/mp4" />
                </video>
                <div class="voirDavantage">
                    <span><a href="./creations.php">Voir d'avantage de mes créations</a></span>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section id="meContacter">
        <form action="traitement_formulaire_contact.php" method="post">

            <h1>Me contacter</h1>
            <div id="contact">
                <div id="input">
                    <div class="commentaire">
                        <p class="comm">Un renseignement ?</p>
                        <p class="comm">Des commentaires ?</p>
                        <p class="simple">Pour me contacter, c'est simple !</p>
                    </div>
                    <div class="labelInput">
                        <div class="sousInput">
                            <label for="nom">Nom*</label>
                            <input type="text" name="nom" id="nom" />
                        </div>
                        <div class="sousInput">
                            <label for="email">E-mail*</label>
                            <input type="text" name="email" id="email" />
                        </div>
                    </div>

                    <label class="labelInput" for="message">Message</label>
                    <textarea class="labelInput" name="message" id="message" cols="30" rows="10"></textarea>
                    <div id="divBouttonEnvoyer">
                        <button id="boutton">Envoyer</button>
                    </div>
                </div>
        </form>
        <div id="photopost"></div>
        <div id="plusInfo">
            <p class="trouverInfo" style="color: #655757">
                Vous pouvez trouver plus d'informations sur comment me contacter sur
            </p>
            <p class="pBlue"><a href="./contact.html">ma page perso</a></p>
        </div>
        </div>
    </section>
    <p class="hiddenLogin"><a href="./login.php">Connexion</a></p>
</body>

</html>
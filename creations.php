<?php

include "./creation_photo.php";


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyndy's Cakes-Créations</title>
    <link rel="stylesheet" href="style.css" />
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

              <li><a href="/creations.html">Mes créations</a></li>
              <li><a href="/contact.html">Me contacter</a></li>
            </ul>
          </div> -->
            </nav>
        </div>
    </header>
    <hr />
    <section id="mesCreations">
        <h1>Mes créations</h1>

        <div id="menuCreations">
            <a class="menu" href="#Agateau">Gateaux</a>

            <a class="menu" href="#divVideoCreations">Videos</a>
        </div>
        <hr />

        <div id="divPhotoCreations">
            <h2 id="Agateau">Mes gateaux</h2>
            <hr />




            <?php



            for ($i = 0; $i < sizeof($result); $i++) {

                if ($i % 2 == 0) { ?>
            <!-- Test creation big div -->
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="<?php echo $result[$i]['photo'] ?>" alt="">
                    <div class="image__overlay">
                        <p class="image__description">
                            <?php
                                    echo $result[$i]['description'];
                                    ?>
                        </p>
                    </div>
                </div>
                <?php
                }

                if ($i % 2 == 1) { ?>
                <div class="image droite">
                    <img class="image__img" src="<?php echo $result[$i]['photo'] ?>" alt="">
                    <div class="image__overlay">
                        <p class="image__description">
                            <?php
                                    echo $result[$i]['description'];
                                    ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php }

                // Cas de la derniere photo a gauche pour fermer la div
                if ($i == sizeof($result) - 1 && $i % 2 == 0) { ?>
        </div>
        <?php } ?>



        <?php } ?>



        <!-- <div id="divPhotoCreations">
            <h2 id="Agateau">Mes gateaux</h2>
            <hr />
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/aristochat.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau sur le thème Marie pour les 3 ans de ma fille<br />
                            Génoise vanille garniture confiture framboise
                        </p>
                    </div>
                </div>

                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/roi lion.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Génoise vanille chantilly fraise <br />
                            Génoise chocolat et intérieur tout chocolat<br />
                            Pour liya 2 ans
                        </p>
                    </div>
                </div>
            </div>

            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/gabriel vert.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau sur le thème panda pour mon filleul <br />génoise vanille
                            garniture mousseline framboise citron
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/bal princesses.jpeg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau thème princesse pour les 3 ans de ma nièce<br />
                            génoise vanille garniture confiture aux 4 fruits
                        </p>
                    </div>
                </div>
            </div>

            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/mickey de face.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau pour les 2 ans de nathan sur le thème de Mickey <br />
                            Génoise vanille ganache montée au chocolat
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/minie.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            gâteau thème Minnie et glamour avec petite couronne <br />
                            Génoise vanille Garniture fraisier
                        </p>
                    </div>
                </div>
            </div>
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/pat patrouille.jpeg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau pat patrouille fille<br />
                            Gâteau choisi par la petite fille pour les 56 ans de son grand
                            père 😂😂😂😂😂<br />
                            Génoise chocolat garniture forêt noire
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/paw patrol.jpeg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau pat patrouille tout chocolat<br />
                            une génoise chantilly poire <br />
                            génoise forêt noire
                        </p>
                    </div>
                </div>
            </div>
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/licorne.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau licorne pour 2 petites jumelles qui fêtent leur 1 an
                            aujourd’hui<br />
                            Génoise vanille ganache nutella <br />Génoise vanille ganache
                            chantilly fraise
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/F1.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau sur le thème Ferrari<br />
                            génoise vanille garni chantilly fraise
                        </p>
                    </div>
                </div>
            </div>
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/petite sirene.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau d’anniversaire pour ma nièce sur le thème de la petite
                            sirène <br />génoise vanille avec ganache nutella <br />
                            génoise vanille chantilly fraise
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/lol.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau poupée lol<br />
                            Génoise vanille intérieur chantilly fraise
                        </p>
                    </div>
                </div>
            </div>
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/belle et bete .jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteaux sur le thème de la belle et la bête <br />pour les 4 ans
                            de ma fille <br />
                            Génoise vanille garniture confiture de fraise
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/eden 2.jpeg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau pour une première coupe de cheveux <br />
                            Génoise vanille chantilly framboise
                        </p>
                    </div>
                </div>
            </div>
            <div class="photoCreation">
                <div class="image gauche">
                    <img class="image__img" src="./image gateau cindy's cakes/cars ok 2.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            car Gâteau sur le thème cars<br />
                            pour les 1 an de mon fils<br />
                            Génoise chocolat garniture lemon
                        </p>
                    </div>
                </div>
                <div class="image droite">
                    <img class="image__img" src="./image gateau cindy's cakes/licorne blanche ok.jpg" alt="" />
                    <div class="image__overlay">
                        <p class="image__description">
                            Gâteau licorne Génoise chocolat <br />
                          Garni chantilly cerise et copeaux de chocolat
                        </p>
                    </div>
                </div>
            </div>
            <div id="divLogo">
                <img id="logo" src="./image/gateau_good.png" alt="logo du site" />
            </div>
        </div> -->
        <div id="divVideoCreations">
            <hr />
            <h2>Mes vidéos</h2>
            <hr />

            <?php
    for ($i = 0; $i < sizeof($resultatVideo); $i++) {

        if ($i % 2 == 0) { ?>
            <div class="videoCreation">
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="<?php echo $resultatVideo[$i]['video'] ?>" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        <?php
                        echo $resultatVideo[$i]['description'];
                        ?>
                    </p>
                </div>
                <?php
        }

        if ($i % 2 == 1) { ?>
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="<?php echo $resultatVideo[$i]['video'] ?>" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        <?php
                        echo $resultatVideo[$i]['description'];
                        ?>
                    </p>
                </div>
            </div>
            <?php }

        // Cas de la derniere video a gauche pour fermer la div
        if ($i == sizeof($resultatVideo) - 1 && $i % 2 == 0) { ?>
        </div>
        <?php } ?>



        <?php } ?>
        <!--  <hr />
           <div class="videoCreation">
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="./video/gateau princesse.mp4" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        Gâteau de ma princesse pour<br />
                        ses 6 ans aujourd’hui <br />
                        Génoise chocolat intérieur forêt noire Chantilly cerise
                    </p>
                </div>
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="./video/spider-man.mp4" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        Gâteau d anniversaire pour les 4 ans de mon fils <br />
                        Un fraisier spiderman
                    </p>
                </div>
            </div>
            <hr />
            <div class="videoCreation">
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="./video/heineken.mp4" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        Gâteau capsule heineken<br />
                        Génoise vanille garni chantilly fraise
                    </p>
                </div>
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="./video/lol.mp4" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        Gâteau poupée lol<br />
                        Génoise chocolat intérieur Bueno framboise
                    </p>
                </div>
            </div>
            <hr />
            <div class="videoCreation">
                <div class="videoPlusDescription">
                    <video class="videoC" controls muted width="250">
                        <source src="./video/reine des neiges.mp4" type="video/mp4" />
                    </video>
                    <p class="description__video">
                        gâteau reine des neiges <br />

                        Génois vanille Garniture chantilly fraise
                    </p>
                </div>
            </div> -->
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</html>
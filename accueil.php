<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
                <title>page d'accueil</title>
                <link rel=stylesheet href=CSS/accueil.css media=screen> <link rel=stylesheet href=CSS/impression.css type=text/css media=print>
                <link rel="icon" type="image/ico" href="img/icone.ico" />
        </head>
        <body>
                <?php
@include 'header.php';

?>



                <h1 class="fo">Base De Donnees</h1>
                <hr />
                <div class="cards">
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class=card__image src=img/harmonie.jpg alt=harmonies />
                                        <div class="card_h2">
                                                <h2>HARMONIES</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class=card__image src="img/chorale.jpg"" alt=chorale />
                                        <div class="card_h2">
                                                <h2>CHORALES</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class="card__image"src=img/structure.jpg alt=structures />
                                        <div class="card_h2">
                                                <h2>STRUCTURES D4ENSEIGNEMENTS</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class=card__image src=img/enregistrement.jpg alt=enregistrement />
                                        <div class="card_h2">
                                                <h2>ENREGISTREMENT / REPETITIONS</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class=card__image src=img/artiste.jpg alt=artiste />
                                        <div class="card_h2">
                                                <h2>ARTISTES</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class=card__image src=img/diffuseur.jpg alt=diffuseur />
                                        <div class="card_h2">
                                                <h2>DIFFUSEURS</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="card">
                                <div class="card__image-holder">
                                        <img class="card__image"src=img/lieux.jpg alt=lieux />
                                        <div class="card_h2">
                                                <h2>LIEUX DE DIFFUSION</h2>
                                        </div>
                                </div>
                        </div>
                </div>
                <h1 class="fo">Les Dernieres News</h1>
                <div class="cardsN">
                        <div class="cardN">
                                <div class="card_image-holderN">
                                        <img class=card_imageN src=img/new1.jpg alt=harmonies />
                                </div>
                                <div class="card-titleN">
                                        <h3>"Retour sur" #11 La danse n??oclassique</h3>
                                </div>
                                <div class="card-excerptN">
                                        <p>
                                                Samedi 12 et dimanche 13 mars une dizaine de danseuses se sont r??unies au centre socioculturel de Saint-Dizier afin de d??couvrir la danse n??oclassique. Arts Vivants 52 et l???intervenante
                                                avaient imagin?? pour elles un atelier m??lant th??orie et pratique
                                        </p>
                                </div>
                                <a href="#">lire la suite </a>
                        </div>
                        <div class="cardN">
                                <div class="card_image-holderN">
                                        <img class=card_imageN src="img/new2.jpg"" alt=chorale />
                                </div>
                                <div class="card-titleN">
                                        <h3>"Retour sur" #10</h3>
                                </div>
                                <div class="card-excerptN">
                                        <p>Lors de ce semestre, Arts Vivants 52 a organis?? une formation autour de l'outil guidage audio en danse avec Denis Plassard, retour sur ces 3 s??ances de formation</p>
                                </div>
                                <a href="#">lire la suite </a>
                        </div>
                        <div class="cardN">
                                <div class="card_image-holderN">
                                        <img class=card_imageN src="img/new3.jpg"" alt=chorale />
                                </div>
                                <div class="card-titleN">
                                        <h3>"Retour sur" #9</h3>
                                </div>
                                <div class="card-excerptN">
                                        <p>
                                                La journ??e aura ??t?? rythm??e et productive au centre social M2K. Huit adolescents ont particip?? samedi 27 mars ?? un atelier ??criture de rap qui s???inscrit dans le temps fort d??partemental,
                                                propos?? par Arts Vivants 52, autour du Hip-Hop, et de certaines pratiques artistiques qui le composent : danse, musique et ??criture
                                        </p>
                                </div>
                                <a href="#">lire la suite </a>
                        </div>
                </div>


        


        



                
                <?php
@include 'footer.php';

?>
        </body>
</html>

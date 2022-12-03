<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> pratique-musique-12 </title>
        <link rel="stylesheet" href="CSS/contact.css"  media="screen" >
        <link rel="stylesheet" href="CSS/impression.css" type="text/css" media="print">
        <link rel="icon" type="image/ico"  href="img/icone.ico">
    </head>
    <body>
    <?php
@include 'header.php';
?>
        <h1 class="fo"> FORMULAIRE DE CONTACT</h1>

        <hr>

            <div class="container2">

                        <p> Par Courrier :</p>
                        <p> Arts-vivants 52  </p>
                        <p>  2 Rue du 14 Juillet</p>
                        <p> 52000 Chaumont </p></br>
                        <p> Par Telephone :</p>
                        <p> Tel:03 25 02 05 75  </p>
                        </br>
                        <p> Sur les réseaux sociaux :</p>
                        
                        <a href="http://facebook.com"><img src="img/facebook.png" alt="Facebook" width="50" height="50" /></a>
   
                            <a href="http://twitter.com"><img src="img\twitter.png" alt="Twitter" width="50" height="50" /></a>
                            <a href="http://twitter.com"><img src="img\youtube1.jpg" alt="Twitter" width="50" height="50" /></a>
                            <a href="http://instagram.com"><img src="img/instagram1.jpg" alt="instagram" width="50" height="50" /></a>

            </div>

        <div class="container">
            <form action="action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </br>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </br>

                <label for="email">Email address</label>
                <input type="text" id="email" name="email" placeholder="Your email address..">
                </br>

                <label for="number">Numero</label>
                <input type="text" id="number" name="number" placeholder="Your number..">
                </br>

                </br>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </br>
                <input type="checkbox" id="politique" name="politique" value="politique">
                <label for="subscribeNews">En utilisant ce formulaire, vous acceptez notre Politique de confidentialité</label>    

                </br></br>
                <input type="submit" value="Submit">
            </form>



        </div>

       
        <h1 class="fo"> Les Dernieres News</h1>


            
        <div class="cardsN">

            <div class="cardN">
                <div class="card_image-holderN">
                    <img class="card_imageN" src="img/new1.jpg"     alt="harmonies" />
                    
                </div>
                <!-- Titre de l'article -->
                <div class="card-titleN">
                    <h3>"Retour sur" #11 La danse néoclassique</h3>
                </div>
                <!-- Extrait de l'article -->
                <div class="card-excerptN">
                    <p> Samedi 12 et dimanche 13 mars une dizaine de danseuses se sont réunies au centre socioculturel de Saint-Dizier afin de découvrir la danse néoclassique. Arts Vivants 52 et l’intervenante avaient imaginé pour elles un atelier mêlant théorie et pratique
                    </p>
                </div>
                <a href="#">lire la suite </a>
            </div>


            <div class="cardN">
                <div class="card_image-holderN">
                    <img class="card_imageN" src="img/new2.jpg"" alt="chorale" />
                    
                </div>
                        <!-- Titre de l'article -->
                        <div class="card-titleN">
                            <h3>"Retour sur" #10</h3>
                        </div>
                        <!-- Extrait de l'article -->
                        <div class="card-excerptN">
                            <p>Lors de ce semestre, Arts Vivants 52 a organisé une formation autour de l'outil guidage audio en danse avec Denis Plassard, retour sur ces 3 séances de formation </p>
                        
                        </div>
                        <a href="#">lire la suite </a>
                        
            </div>
              

                <div class="cardN">
                    <div class="card_image-holderN">
                        <img class="card_imageN" src="img/new3.jpg"" alt="chorale" />
                        
                    </div>
                        <!-- Titre de l'article -->
                        <div class="card-titleN">
                            <h3>"Retour sur" #9</h3>
                        </div>
                        <!-- Extrait de l'article -->
                        <div class="card-excerptN">
                            <p>La journée aura été rythmée et productive au centre social M2K. Huit adolescents ont participé samedi 27 mars à un atelier écriture de rap qui s’inscrit dans le temps fort départemental, proposé par Arts Vivants 52, autour du Hip-Hop, et de certaines pratiques artistiques qui le composent : danse, musique et écriture
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

<?php
  include 'Authentification/config.php';
  $querry1 = mysqli_query($conn, " SELECT structure.Nom FROM `structure` INNER JOIN avoir on structure.Mail=avoir.Mail where avoir.Nom = 'Diffusion'");
  
?>

<?php
  include 'Authentification/config.php';
  $querry = mysqli_query($conn, " SELECT structure.Nom FROM `structure` INNER JOIN avoir on structure.Mail=avoir.Mail where avoir.Nom = 'Éveil musical'");
  
?>

<?php
  include 'Authentification/config.php';
  $querry2 = mysqli_query($conn, " SELECT structure.Nom FROM `structure` INNER JOIN avoir on structure.Mail=avoir.Mail where avoir.Nom = 'Pratique'");
  
?>

<?php
  include 'Authentification/config.php';
  $querry3 = mysqli_query($conn, " SELECT structure.Nom FROM `structure` INNER JOIN avoir on structure.Mail=avoir.Mail where avoir.Nom = 'Accompagnement'");
  
?>

<?php
  include 'Authentification/config.php';
  $querry4 = mysqli_query($conn, " SELECT `Nom` FROM `instrument` ORDER BY Nom ASC");
  
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> pratique-musique-12 </title>
        <link rel="stylesheet" href="CSS/accueil.css" media="screen" >
        <link rel="stylesheet" href="CSS/impression.css" type="text/css" media="print">
        <link rel="icon" type="image/ico"  href="img/icone.ico">
    </head>

    <br> 
    <body>

   ;
        <header>
       
                    
            <nav class="navbar">
                <ul>
                    <li><a href="accueil.php" target="_blank">Accueil</a></li>
                    <li><a href="Annonce.php" target="_blank">Annonce</a></li>


                    
                    <li><a href="Dashboard_structure\dashboardS.php" target="_blank">Structure</a></li>
                    <li><a href="contact.php" target="_blank">contact</a> </li> 
                    <li><a href="DashboardAd\index.php" target="_blank">Admin</a> </li> 
                    <li><div class="dropdown">
                            <button class="dropbtn"> Rubriques
                            </button>
                                <div class="dropdown-content">
                                    <a href="eveil.php"> Éveil musical</a>
                                    <a href="#">Enseignements,</a>
                                    <a href="pratique.php">Pratique d’ensemble</a>
                                    <a href="accompagnement.php">Accompagnement</a>
                                    <a href="diffusion.php">Diffusion</a>
                                </div>
                        </div>
                        </li>

                        
                        
                    <li style="float:right"><a href="Authentification/login_form.php" class="active" target="_blank">Connexion</a></li>


                   

                </ul>	
                
            </nav>

        </header>

 

        <li> <ul class="dropdow">
        <li><a href="#">Menu</a>
            <ul>
                
            <li><a href="#">Éveil musical</a>
                            <ul>
                            <?php 
                    while ($data = mysqli_fetch_assoc($querry)){
                    ?>
                    <li><a href=""><?php echo $data['Nom'] ?> </a></li>
                    <?php }?>
                               
                                  </ul>
                        </li>



                        <li><a href="#">Pratique d’ensemble</a>
                            <ul>
                            <?php 
                    while ($data = mysqli_fetch_assoc($querry2)){
                    ?>
                    <li><a href=""><?php echo $data['Nom'] ?> </a></li>
                    <?php }?>
                              
                            </ul>
                        </li>

                        <li><a href="#">Accompagnement</a>
                            <ul>
                            <?php 
                    while ($data = mysqli_fetch_assoc($querry3)){
                    ?>
                    <li><a href=""><?php echo $data['Nom'] ?> </a></li>
                    <?php }?>
                            </ul>
                        </li>

                        <li><a href="#">Diffusion</a>
                            <ul>
                            <?php 
                    while ($data = mysqli_fetch_assoc($querry1)){
                    ?>
                    <li><a href=""><?php echo $data['Nom'] ?> </a></li>
                    <?php }?>
                            </ul>
                        </li>

                <li><a href="#">Enseignements</a>
                    <ul>
                    <?php 
                    while ($data = mysqli_fetch_assoc($querry4)){
                    ?>
                    <li><a href=""><?php echo $data['Nom'] ?> </a></li>
                    <?php }?>
                            <ul>
                                <li><a href="">Submenu - 1</a></li>
                                <li><a href="">Submenu - 2</a></li>
                                <li><a href="">Submenu - 3</a></li>
                            </ul>
                        </li>
                        <li><a href="">Submenu - 3</a></li>
                    </ul>
                </li>
               
            </ul>
        </li>
    </ul></li>



</body>
</html>
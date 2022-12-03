<?php
  include 'Authentification/config.php';
  $querry = mysqli_query($conn, "SELECT   `Titre`, `Texte`,`Texte_1`,`Lieu`, `Photo1`, `Photo2`, `Photo3`, `Mail` FROM `annonce`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/annonce.css" media="screen" >
  <link rel="icon" type="image/ico"  href="img/icone.ico">
  <title>pratique-musique-12</title>
</head>
<body>
<?php
@include 'header.php';
?>
<h1 class="fo"> Liste Des Annonces   <input type="text" name="search" placeholder="Search.."></h1>
<?php 
if(!$querry){
	die(mysqli_error($conn));
}
  while ($data = mysqli_fetch_assoc($querry)){
?>
<fieldset>  
  
      <div class="container">
    <h1><?php echo $data['Titre'] ?> </h1>
    <h2 ><?php echo $data['Texte'] ?> </h2>
    <h2 ><?php echo $data['Texte_1'] ?> </h2>
    <h2 ><?php echo $data['Lieu'] ?> </h2>
    <h2 ><?php echo $data['Mail'] ?> </h2>
    </div>
    <div class="container2">
    <img  src="img/imgAnnonce1/<?php echo $data['Photo1'] ?> ">
    </div>
 
    </div>
  

</fieldset>
  

<?php }?>

<?php
@include 'footer.php';

?>


</body>
</html>
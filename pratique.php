
<?php
  include 'Authentification/config.php';
  $querry = mysqli_query($conn, " SELECT structure.Nom FROM `structure` INNER JOIN avoir on structure.Mail=avoir.Mail where avoir.Nom = 'Pratique'");
  
?>

<?php
@include 'header.php';

?>

<?php 
  while ($data = mysqli_fetch_assoc($querry)){
?>
<h1> Liste des structures proposant l'offre Pratique </h1>
<h2 ><?php echo $data['Nom'] ?> </h2>



<?php }?>



<?php
@include 'footer.php';

?>

















<?php
  include 'Authentification/config.php';
  $querry = mysqli_query($conn, "SELECT   `Titre`, `Texte`, `Photo1` FROM `annonce`");
  $data = array();
  foreach ($querry as $annonce){
    array_push($data, $annonce);
  }
  echo json_encode($data);
 // while ($data = mysqli_fetch_assoc($querry)
?>
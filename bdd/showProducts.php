<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tous nos produits</title>
</head>
<body>
  <h2>Liste des produits :</h2>
  <form action="" method="post">
    
    <?php
  include 'connexion-bdd.php';
  include 'function.php';
  
  showAllProducts($bdd)
  ?>
<input type="submit" value="Supprimer">
  </form>
</body>
</html>
<?php
if(isset($_POST['id_prod'])){
  //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
  foreach($_POST['id_prod'] as $value){
  deleteProduit($bdd, $value)
  }
  }
  else{
  echo "<p>Veuillez cocher un ou plusieurs produits</p>";
  }
  
?>
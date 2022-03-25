<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="#" method="get">
  <p>saisir so nom :</p>
  <input type="text" name="nom">
  <p>saisir son prénom :</p>
  <input type="text" name="prenom" id="">
  <br>
  <br>
  <input type="submit" value="Envoyer">
</form>
<?php
if(isset($_GET['nom']) AND isset($_GET['prenom']) AND $_GET['nom'] != "" AND $_GET['prenom'] != "") {
  $nom = $_GET['nom'];
  $prenom = $_GET['prenom'];

  echo "Mon nom est $nom, $prenom <br>";
}
?>
</body>
</html>
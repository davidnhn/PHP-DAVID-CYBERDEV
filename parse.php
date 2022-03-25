<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="GET">

    <div>
      <label for="">Entrez un premier nombre : </label>
    <input type="text" name="premierNombre">
  </div>
  <div>
    <label for="">Entrez un secon nombre</label>
    <input type="text" name="secondNombre">
  </div>
<input type="submit" value="Envoyer">
</form>
  <?php
  
  if(isset($_GET['premierNombre']) AND isset($_GET['secondNombre']) AND $_GET['premierNombre'] != "" AND $_GET['secondNombre'] != "" ) {
    $nombre1 = intval($_GET['premierNombre']);
    $nombre2 = intval($_GET['secondNombre']);
    $total = $nombre1 + $nombre2;
    

    echo "La somme de $nombre1 + $nombre2 = $total.";
    // '.($nombre1 + $nombre2).'
    echo "<br>";
  } else {
    echo "Veuillez remplir les champs du formulaire";
  }
  ?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir son nom :</p>
        <input type="text" name="nom">
        <p>Saisir son genre :</p>
        <select name="genre" >
            <option value="1">
                Femme
            </option>
            <option value="2">
                Homme
            </option>
            <option value="3">
                Autre
            </option>   
        </select>
        <p><input type="submit" value="Afficher"></p>
    </form>

    <?php

    if(isset($_POST['nom']) AND isset($_POST['genre']) AND $_POST['nom'] != "" AND $_POST['genre'] != "") {
      $nom = $_POST['nom'];
      $genre = $_POST['genre'];
      echo "$genre";

      switch($genre) {
          case 1:
            $genre = "Femme";
            break;
          case 2:
            $genre = "Homme";
            break;
          case 3: 
            $genre = "Autre";
            break;  
      }

      echo "$nom est un.e $genre";

      else {
          echo "Veuillez remplir le formulaire"
      }
    }
    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulatrice :</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr1">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr2">
        <p>Saisir un Opérateur (+,-,*,/) :</p>
        <input type="text" name="operateur">
        <p><input type="submit" value="Calculer"></p>
    </form>

    <?php

    if(isset($_POST['nbr1']) AND isset($_POST['nbr2']) AND isset($_POST['operateur']) AND !empty($_POST['nbr1']) AND !empty($_POST['nbr2']) AND !empty($_POST['operateur'] )) {
      if(is_numeric($_POST['nbr1']) AND is_numeric($_POST['nbr2'])) {

        
        $nbr1 = $_POST['nbr1'];
        $nbr2 = $_POST['nbr2'];
        $operateur = $_POST['operateur'];
        
        switch($operateur) {
          case '+':
            echo round($nbr1 + $nbr2, 2);
            break; 
            case '-':
              echo round($nbr1 - $nbr2, 2);
              break; 
              case '*':
                echo round($nbr1 * $nbr2, 2);
                break; 
                case '/':
                  echo round($nbr1 / $nbr2, 2);
                  break; 
                case !empty($operateur):
                  echo '';
                  break; 
                  default:
                  echo "Mauvais opérateur";
                }
              }
              else{
                echo "Veuillez saisir un nombre";
              }
    }
    else {
      echo "Veuillez remplir le formulaire";
    }
    ?>
</body>
</html>
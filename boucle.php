<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

$resultats = array();
  function showNext10($nbr, $tab) {

    
    for($i=0; $i < 10; $i++) {
      $nbr++;
      $tab[$i] = $nbr;
      echo $tab[$i];
      echo '<br>';
    }


  }

  function random($a, $b) {
    $tab = array();
    for($i=0; $i<10; $i++) {
      $tab[$i] = rand($a,$b);
    }
    var_dump($tab);
  }

  showNext10(14, $resultats);
  random(10,30);

  ?>
</body>
</html>
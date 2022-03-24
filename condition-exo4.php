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

  function isCategory($age) {

    if($age >= 6 && $age<=7) {
      echo "Votre kid est en Poussin<br>";
    } elseif($age >= 8 && $age<=9) {
      echo "Votre kid est en Pupille<br>";
    } elseif($age >= 10 && $age<=11) {
      echo "Votre kid est en Minime<br>";
    } elseif($age >= 12) {
      echo "Votre kid est en Cadet<br>";
    }
  }

  isCategory(15);
  isCategory(6);
  isCategory(8);
  isCategory(10);


  function isCategory2($age) {
    switch ($age) {
        case $age >= 6 && $age<=7:
          echo "Votre kid est en Poussin<br>";
          break;
        case $age >= 8 && $age<=9:
          echo "Votre kid est en Pupille<br>";
          break;
        case $age >= 10 && $age<=11:
          echo "Votre kid est en Minime<br>";
          break;
        case $age>= 12:
          echo "Votre kid est en Cadet<br>";
          break;

    }
  }

  isCategory2(15);
  isCategory2(8);
  ?>
</body>
</html>
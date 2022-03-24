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

  function changer() {
    echo "On fait des fonctions";
  }
  changer();
  echo "<br>";

  function addition($a, $b) {
    return $a + $b;
  }

  echo addition(20, 20);
  ?>
</body>
</html>
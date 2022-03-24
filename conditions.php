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

  function isPositive($x) {

    if($x > 0) {
      echo "$x est bien positif !";
    } elseif($x < 0) {
      echo "$x est négatif !";
    } else {
      echo "$x est égal à 0";
    }
  }

  isPositive(5);
  ?>
</body>
</html>
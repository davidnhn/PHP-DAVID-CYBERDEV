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

  function isSmallest($x, $y, $z) {

    if($x < $y && $x < $z) {
      echo "$x est le plus petit";
    } elseif($y < $x && $y < $z) {
      echo "$y est le plus petit";
    } else {
      echo "$z est le plus petit";
    }
  }

  isSmallest(2, 10, 15);
  ?>
</body>
</html>
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

  function isBiggest($x, $y, $z) {

    if($x > $y && $x > $z) {
      echo "$x est le plus grand";
    } elseif($y > $x && $y > $z) {
      echo "$y est le plus grand";
    } else {
      echo "$z est le plus grand";
    }
  }

  isBiggest(5, 10, 15);
  ?>
</body>
</html>
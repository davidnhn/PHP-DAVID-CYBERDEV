<?php
session_start();
if(isset($_SESSION['nom'])) {
  echo 'Bonjour '.$_SESSION['nom'].'<br>';
}

$_SESSION['destination1'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="start.php">start</a>
  <a href="destination2.php">destination2</a>
  <a href="deconnexion.php">deconnexion</a>

</body>
</html>
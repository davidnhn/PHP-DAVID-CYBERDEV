

<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ma première page php</title>
</head>
<body>
  <?php

$nom = 'David';
$nb = 5;
$bool = true;
$a = 12;
$b = 10;
$total = $a + $b;


echo "<h1> $nom se met au PHP </h1>";
echo 'Le boss du PHP !';
echo '<br>';

echo $nb; 
echo '<br>';
echo gettype($nb);
echo '<br>';
  
echo gettype($bool);

echo "<p><strong>$a + $b = $total</strong></p>";
?>
</body>
</html>

  
  

  


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

  function prixTotalTTC($prixArticleHT, $nbArticles, $tauxTVA) {

    echo "<p>Prix article HT : $prixArticleHT</p>
          <p>Nombre article :  $nbArticles</p>
          <p>Taux TVA : $tauxTVA";

    $prixTotalHT = $nbArticles * $prixArticleHT ;
    $prixTotalTTC = $prixTotalHT + ($prixTotalHT * $tauxTVA);

    return "<p><strong>$prixTotalTTC</strong></p>";

  }

  echo prixTotalTTC(2, 5, 0.2);

  ?>
</body>
</html>
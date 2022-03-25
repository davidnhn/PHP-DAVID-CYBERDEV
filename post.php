<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="POST">
    <div><label for=""></label>Prix Article HT :<input type="text" name="prixArticleHt"></div>
    <div><label for="">Quantité :</label><input type="text" name="quantite"></div>
    <div><label for="">TVA :</label><input type="text" name="tva"></div>
    <div><input type="submit" value="Calculer"></div>
  </form>
  <?php

if(isset($_POST['prixArticleHt']) AND isset($_POST['quantite']) AND isset($_POST['tva']) AND $_POST['prixArticleHt'] != "" AND $_POST['quantite'] != "" AND $_POST['tva'] !="" ) {
  $prixArticleHT = $_POST['prixArticleHt'];
  $qtite = $_POST['quantite'];
  $tva = $_POST['tva'];
  


  
  function prixTotalTTC($prixArticleHT, $nbArticles, $tauxTVA) {
    
    echo "<p>Prix article HT : $prixArticleHT</p>
    <p>Nombre article :  $nbArticles</p>
    <p>Taux TVA : $tauxTVA </p>";
    
    $prixTotalHT = $nbArticles * $prixArticleHT ;
    $prixTotalTTC = $prixTotalHT * (($tauxTVA/100) + 1);
    $prixArrondi = round($prixTotalTTC, 2);
    
    return "<p><strong>$prixArrondi €</strong></p>";
    
  }
  

  echo prixTotalTTC($prixArticleHT, $qtite, $tva);
  
}

  ?>
</body>
</html>
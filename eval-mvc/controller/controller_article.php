<?php

include '../utils/connect_bdd.php';
include '../model/model_article.php';
include '../view/vue_article.php';

if(isset($_POST['valider'])) {

  if(isset($_POST['name']) AND isset($_POST['price']) AND 
  $_POST['name'] !='' AND $_POST['price'] !=''){
      //stocker les super globales POST dans des variables
      $nom =$_POST['name'];
      $price =$_POST['price'];
      //appel de la fonction ajouter  un user en BDD
      addArticle($bdd, $nom, $price) ;
      //message
      echo "$nom à été ajouté en  BDD";
  }

}

//sinon vides
else{
    echo 'Veuillez compléter les champs du formulaire';
}
?>
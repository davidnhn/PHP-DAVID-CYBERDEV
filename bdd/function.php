p<?php
//*requête ajouter un produit

function insertProduit($bdd,$nom,$content) {

  try {
    //*Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
$req = $bdd->prepare('INSERT INTO produit(nom_produit, contenu_produit) VALUES(:nom_produit, :contenu_produit)');


$req->execute(array(
                'nom_produit' => $nom,
                'contenu_produit' =>$content
                ));

  
}
catch(Exception $e)
{
//affichage d'une exception en cas d’erreur
die('Erreur : '.$e->getMessage());
}
}


function showAllProducts($bdd) {

  try {

    $req = $bdd->prepare('SELECT * FROM produit');
    $req->execute();
    while($data = $req->fetch()) {
      // echo '<p>id: '.$data['id_produit'].' nom : '.$data['nom_produit'].'</p>'; 
      echo '<p><input type="checkbox" name="id_prod[]" value="'.$data['id_produit'].'></p>'
    }
  }

  catch(Exception $e)
{
//affichage d'une exception en cas d’erreur
die('Erreur : '.$e->getMessage());
}
}

function deleteProduit($bdd, $id) {
  try {
    //*Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
$req = $bdd->prepare('DELETE FROM produit WHERE id_produit = :id_produit');


$req->execute(array(
                'id_produit' => $id,
                ));

  
}
catch(Exception $e)
{
//affichage d'une exception en cas d’erreur
die('Erreur : '.$e->getMessage());
}
}
?>

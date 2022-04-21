<?php
include './model_user.php';



function showTasks($bdd, $idUser){
  try{
      $req = $bdd->prepare('SELECT * FROM task WHERE id_user= :id_user');
      $req->execute(array(
        'id_user' => $idUser
      ));
      //a chaque tour de la boucle remplace le contenu de $data
      //par un enregistrement de la BDD
      while($data = $req->fetch()){
          echo '<p><span></span>Le nom est égal à : '.$data['nom_util'].' le mail est égal à 
          '.$data['mail_util'].'</p>';
      }
  }
  catch(Exception $e)
  {
      //affichage d'une exception en cas d’erreur
      die('Erreur : '.$e->getMessage());
  }
}
?>
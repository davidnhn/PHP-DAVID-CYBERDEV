<?php

function addUser($bdd, $nom, $prenom, $mail, $mdp) {
  try{
    $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util,
    mail_util, mdp_util) 
    VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util)');
    $req->execute(array(
        'nom_util' => $nom,
        'prenom_util' =>$prenom,
        'mail_util' =>$mail,
        'mdp_util' =>$mdp
        ));
}
catch(Exception $e)
{
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
}
}


// function showAllUser($bdd){
//   try{
//       $req = $bdd->prepare('SELECT * FROM utilisateur');
//       $req->execute();
//       while($data = $req->fetch()){
//           echo '<p><a href="updateUser.php?id='.$data['id_util'].'">Nom : '.$data['nom_util'].' prenom : '.$data['prenom_util'].' 
//           mail: '.$data['mail_util'].'</a></p>';
//       }
//   }
//   catch(Exception $e)
//   {
//       //affichage d'une exception en cas d’erreur
//       die('Erreur : '.$e->getMessage());
//   }
// }

//affiche tous les utilisateurs (version alternative) (renvoi un tableau d'utilisateur
function showAllUser($bdd) {

  try{

    $req = $bdd->prepare("SELECT * FROM utilisateur");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }
  catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}


 //requête pour modifier un utilisateur en BDD
 function updateUser($bdd,$nom,$prenom,$mail,$mdp,$value){
  try{
      $req = $bdd->prepare('UPDATE utilisateur SET nom_util = :nom_util, 
      prenom_util= :prenom_util, mail_util=:mail_util, mdp_util=:mdp_util 
      WHERE id_util=:id_util');
      $req->execute(array(
          'nom_util' => $nom,
          'prenom_util' =>$prenom,
          'mail_util' =>$mail,
          'mdp_util' =>$mdp,
          'id_util' =>$value
          ));
  }
  catch(Exception $e)
  {
      //affichage d'une exception en cas d’erreur
      die('Erreur : '.$e->getMessage());
  }
}

//requete pour selectionner un user
 function selectUser($bdd,$value){
  try{
    $req = $bdd->prepare("SELECT * FROM utilisateur where id_util= :id_util");
    $req->execute(array(
      'id_util' => $value
    ));
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }
  catch(Exception $e)
  {
      //affichage d'une exception en cas d’erreur
      die('Erreur : '.$e->getMessage());
  }
}


?>
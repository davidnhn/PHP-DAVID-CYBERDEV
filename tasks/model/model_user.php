<?php

function addUser($bdd, $name, $firstname, $login, $mdp) {
  try{
    $req = $bdd->prepare('INSERT INTO user(name_user, first_name_user,
    login_user, mdp_user) 
    VALUES(:name_user, :first_name_user, :login_user, :mdp_user)');
    $req->execute(array(
        'name_user' => $name,
        'first_name_user' =>$firstname,
        'login_user' =>$login,
        'mdp_user' =>$mdp
        ));
}
catch(Exception $e)
{
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
}
}

function getUserByInfo($bdd, $login, $mdp):array {
  try{
      $req = $bdd->prepare("SELECT * FROM user 
      WHERE login_user = :login_user AND mdp_user = :mdp_user");
      $req->execute(array(
          'login_user' => $login,  
          'mdp_user' => $mdp 
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
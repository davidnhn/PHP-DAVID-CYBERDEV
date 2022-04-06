<?php
include './utils/connectBdd.php';

include './model/model_user.php';

include './view/view_update_user.php';

if(isset($_GET['id']) AND $_GET['id'] != ''){
  $id = $_GET['id'];



  $list = selectUser($bdd, $id);

  
  foreach($list as $value){
    foreach($value as $key=>$champ) {
      if($key != 'id_util') {

        echo '<script>document.querySelector("[name='.$key.']").value="'.$champ.'"</script>';
      }
    }
  // echo '<p><a href="update_user.php?id='.$value['id_util'].'">Le prénom est égal a : '.$value['nom_util'].'</a></p>';
}


  //test si les champs du formulaire sont remplis
  if(isset($_POST['nom_util']) AND isset($_POST['prenom_util']) AND
  isset($_POST['mail_util']) AND isset($_POST['mdp_util']) AND 
  $_POST['nom_util'] !='' AND $_POST['prenom_util'] !='' AND
  $_POST['mail_util'] !='' AND $_POST['mdp_util'] !=''){
      //variables qui vont stocker les super Globales POST
      $nom = $_POST['nom_util'];
      $prenom = $_POST['prenom_util'];
      $mail = $_POST['mail_util'];
      $mdp = $_POST['mdp_util'];
      $mdp = md5($_POST['mdp_util']);
      // updateUser($bdd,$nom,$prenom,$mail,$mdp,$value);

      updateUser($bdd,$nom,$prenom,$mail,$mdp,$id);
      
      echo 'l\'utilisateur '.$nom.' à été modifié en BDD';        
  }
  else{
      echo "Veuillez remplir les champs du formulaire";
  }
}
else{
  header('Location: showUser.php?error');
}
?>
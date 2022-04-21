<?php
session_start();

include './utils/connexionBDD.php';
include './model/model_user.php';

isset($_SESSION['connected']) ? include './view/view_navbarUser.php' : include './view/view_navbar.php';


include './view/view_forms.php';
include './view/view_bootstrapCDN.php';

if(isset($_POST['inscription'])) {
  if(isset($_POST['firstname']) AND isset($_POST['name']) AND isset($_POST['login_user']) AND isset($_POST['mdp_user']) AND $_POST['firstname'] != '' AND $_POST['name'] != '' AND $_POST['login_user'] != '' AND $_POST['mdp_user'] != '') {

    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $login = $_POST['login_user'];
    $mdp = $_POST['mdp_user'];

    addUser($bdd, $firstname, $name, $login, $mdp);

    echo '<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    Bienvenue sur Task Manager <strong>'.$login.'</strong>
  </div>';

  $_SESSION['login'] = $login;
  $_SESSION['mdp'] = $mdp;
  $_SESSION['connected'] = true;
  header('Location: ./accueil.php');

} 
}

if(isset($_POST['connexion'])) {
  if(isset($_POST['login']) AND isset($_POST['mdp']) AND $_POST['login'] != '' AND $_POST['mdp'] != "") {

    $info = getUserByInfo($bdd, $_POST['login'], $_POST['mdp']);

    if($_POST['login'] == $info[0]['login_user'] AND $_POST['mdp']== $info[0]['mdp_user']){
      //création des supers globale SESSION
      $_SESSION['id'] = $info[0]['id_user'];
      $_SESSION['nom'] = $info[0]['name_user'];
      $_SESSION['prenom'] = $info[0]['first_name_user'];
      $_SESSION['login'] = $info[0]['login_user'];
      $_SESSION['connected'] = true;
      //redirection
      header('Location: ./accueil.php');
  }
  //sinon informations de connexion incorrectes
  else{
      //redirection
      // header('Location: ./index.php?invalid');
  }
  }
}

?>
<?php

include './utils/connectBdd.php';

include './model/model_user.php';

include './view/view_show_all_user.php';


$list = showAllUser($bdd);

foreach($list as $value){
  echo '<p><input name=id_util[] type="checkbox" value="'.$value['id_util'].'"><a href="update_user.php?id='.$value['id_util'].'">Le prénom est égal a : '.$value['nom_util'].'</a></p>';
}
// if(isset($_GET['error'])){
//     echo "<p>veuillez sélectionner un utilisateur dans la liste</p>";
// }
echo '<button type="submit" name="delete">Supprimer</button></form>';


if(isset($_POST['id_util']) AND isset($_POST['delete'])){
  //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
  foreach($_POST['id_util'] as $id){
    // foreach($list as $value){
      $user = selectUser($bdd, $id);
      deleteUser($bdd, $id);
      echo '<p>Suppression de l\'utilisateur '.$user[0]['nom_util'].'</p>';
    // }
  }
  echo '<script>
           setTimeout(()=>{
           document.location.href="/PHP/mvc/show_all_user.php"; 
           }, 1500);</script>';
}
else{
echo "<p>Veuillez cocher un ou plusieurs utilisteurs à supprimer</p>";
}


?>
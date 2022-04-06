<?php

include './utils/connectBdd.php';

include './model/model_user.php';

include './view/view_show_all_user.php';


$list = showAllUser($bdd);

foreach($list as $value){
  echo '<p><a href="update_user.php?id='.$value['id_util'].'">Le prénom est égal a : '.$value['nom_util'].'</a></p>';
}
// if(isset($_GET['error'])){
//     echo "<p>veuillez sélectionner un utilisateur dans la liste</p>";
// }

?>
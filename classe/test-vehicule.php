<!--
  -Créer un fichier vehicule.php qui va contenir la classe,
-Dans ce fichier recréer la classe Vehicule comme dans le cours (attributs et méthodes),
-Créer un fichier test_objet.php au même niveau que vehicule.php,
-Appeler avec require() ou include() le fichier de la classe Vehicule,
-Instancier 2 nouveaux véhicules dans le fichier test_objet.php avec les paramètres suivants :
-Objet voiture (nomVehicule = « Mercedes CLK », nbrRoue = 4, vitesse 250),
-Objet moto (nomVehicule = « Honda CBR », nbrRoue = 2, vitesse = 280),
-Créer une fonction detect() qui détecte si le véhicule est une moto ou une voiture (la méthode retourne une string moto ou voiture avec return) dans le fichier de classe vehicule.php,
-Exécuter la méthode detect() sur les 2 objets voiture et moto dans le fichier test_objet.php.
-Afficher le type de véhicule dans le fichier test_objet.php,
-Créer une méthode boost qui ajoute 50 à la vitesse d’un objet dans le fichier de classe vehicule.php,
-Appliquer la méthode boost a la voiture dans le fichier test_objet.php,
-Afficher la nouvelle vitesse de la voiture dans le fichier test_objet.php.
Bonus :
-Créer une méthode plusRapide() dans le fichier vehicule.php qui compare la vitesse des différents véhicules (moto et voiture) et retourne le véhicule le plus rapide des 2 avec un return.
-Exécuter la méthode plusRapide() dans le fichier test_objet.php.
-Afficher le véhicule le plus rapide dans le fichier test_objet.php.
 -->
 <?php
  require './vehicule.php';

$voiture = new Vehicule("Mercedes CLK", 4, 250);
$moto = new Vehicule("Honda CBR", 2, 280);

$voiture->detect();
$moto->detect();

var_dump($voiture);
var_dump($moto);

echo ''.$voiture->getNomVehicule().' est une '.$voiture->getType().' .';
echo "<br>";
echo ''.$moto->getNomVehicule().' est une '.$moto->getType().' .';
echo "<br>";

$voiture->boost(50);
echo 'La vitesse max de '.$voiture->getNomVehicule().' est passée à '.$voiture->getVitesse().' !';



echo ''.plusRapide($voiture, $moto).' est la plus rapide !';

echo ''.$voiture->plusRapide2($moto).' est la plus rapide !';

 ?>
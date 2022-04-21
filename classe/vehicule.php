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
    class Vehicule{
      private $nomVehicule;
      private $nbrRoues;
      private $vitesse;
      private $type;
      public function __construct($name, $nbr, $vit){
        $this->nomVehicule = $name;
        $this->nbrRoues = $nbr;
        $this->vitesse = $vit;
      }

      //*GETTERS

      public function getNomVehicule():string {
        return $this->nomVehicule;
      }
      public function getNbrRoues():int {
        return $this->nbrRoues;
      }
      public function getVitesse():int {
        return $this->vitesse;
      }
      public function getType():string {
        return $this->type;
      }

      //* SETTERS 

      public function setNomVehicule($nom):void {
         $this->nomVehicule = $nom;
      }
      public function setNbrRoues($roues):void {
         $this->nbrRoues = $roues;
      }
      public function setVitesse($v):void {
         $this->vitesse = $v;
      }
      public function setType($type):void {
         $this->type = $type;
      }
  
      public function demarrage() {
        echo ''.$this->getNomVehicule().' a demarré';
      }

      //*METHODS
      public function detect() {
        if($this->getNbrRoues() == 2) {
          $this->setType('moto');
          return "moto";
        } else if($this->getNbrRoues() == 4) {
          $this->setType('voiture');
          return "voiture";
        }
      }

      public function boost($boost) {
        $this->setVitesse($this->getVitesse() + $boost);
      }

      public function plusRapide2($vehicule2) {
        return $this->getVitesse() > $vehicule2->getVitesse() ? $this->getNomVehicule() : $vehicule2->getNomVehicule(); 
      }

    }
   function plusRapide($vehicule1, $vehicule2) {
      return $vehicule1->getVitesse() > $vehicule2->getVitesse() ? $vehicule1->getNomVehicule() : $vehicule2->getNomVehicule(); 
    }
    ?>
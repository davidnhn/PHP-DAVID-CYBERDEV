<?php

  class Vehicule{
    public $nomVehicule;
    public $nbrRoues;
    public $vitesse;
    public function __construct($name, $nbr, $vit){
      $this->nomVehicule = $name;
      $this->nbrRoues = $nbr;
      $this->vitesse = $vit;
    }

    public function demarrage() {
      echo "$this->nomVehicule a demarré";
    }
  }
?>


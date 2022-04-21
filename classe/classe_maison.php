<?php


  class Maison {
    public $nom;
    public $longueur;
    public $largeur;
    public $superficie;
    public $nbrEtage;
    public function __construct($nom, $longueur, $largeur, $etages){
      $this->nom = $nom;
      $this->longueur = $longueur;
      $this->largeur = $largeur;
      $this->nbrEtage = $etages;
    }

    public function calculeSuperficie() {
      return $this->superficie = ($this->longueur * $this->largeur) * $this->nbrEtage ;
    }
  }
?>
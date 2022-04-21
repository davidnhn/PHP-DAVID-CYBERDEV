<?php
  require './classe.php';
  $voiture = new Vehicule("OPel AGila",4,160);
  var_dump($voiture);

  $moto = new Vehicule(null, null, null);
  var_dump($moto);

  $camion = new Vehicule('Renault Clio', 10, 130);
  var_dump($camion);

$voiture->nomVehicule = "Opel Agila";
$voiture->nbrRoues = 4;
$voiture->vitesse = 160;

var_dump($voiture);

echo $voiture->nomVehicule;

$voiture->demarrage();
?>
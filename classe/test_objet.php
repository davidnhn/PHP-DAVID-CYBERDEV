<?php
require './classe_maison.php';

$maison1 = new Maison('La guarriguette', 300, 200,1);
$superficieMaison1 = $maison1->calculeSuperficie();
var_dump($maison1);

$maison2 = new Maison('Le chalet nordique', 30, 100, 2);
$superficieMaison2 = $maison2->calculeSuperficie();
var_dump($maison2);

echo "<p>la surface de $maison1->nom est égale à : $superficieMaison1 m2</p>";
echo "<p>la surface de $maison2->nom est égale à : $superficieMaison2 m2</p>";

?>
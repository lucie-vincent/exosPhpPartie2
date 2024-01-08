<h1>Exercice 14</h1>

<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

</p>

<h2>Résultat</h2>

<?php

include"Voiture2.php";
include"Voiture2Elec.php";

$v1 =  new Voiture2("Peugeot","408");
var_dump($v1);

$ve1 = new Voiture2Elec("BMW", "I3", 100);
var_dump($ve1);

echo $v1->infos();
echo $ve1->infos();

// echo $ve1->test();
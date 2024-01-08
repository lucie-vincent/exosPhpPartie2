<h1>Exercice 13</h1>

<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. 
</p>

<h2>Résultat</h2>

<?php

include"Voiture.php";

$v1 = new Voiture(1, "Peugeot", "408", 5);
$v2 = new Voiture(2, "Citroën", "C4", 3);

// echo "<p>Nom complet : " . $v1->getNomComplet() . "</p>";

// var_dump($v1);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump($v2);
// echo "<br>";
// echo "<br>";
// echo "<br>";

$v1->demarrer();
$v1->accelerer(30);
$v1->ralentir(45);

// $v1->demarrer();
// $v1->accelerer(50);
// $v1->ralentir(60);
// $v1->ralentir(15);
// $v2->demarrer();
// $v2->stopper();
// $v2->stopper();
// $v2->accelerer(20);
// $v1->getVitesseActuelle();
// $v2->getVitesseActuelle();

echo $v1->afficherInfos();
echo $v2->afficherInfos();
// echo $v2;

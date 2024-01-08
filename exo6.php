<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements) {
    $resultat = "<select>";

    foreach ($elements as $civilite) {
        $resultat .= "<option>$civilite</option>";
    }

    $resultat .= "</select>";

    return $resultat;
}
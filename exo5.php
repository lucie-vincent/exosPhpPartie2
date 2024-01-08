<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

echo afficherInput($nomsInput);

function afficherInput($nomsInput) {

    $resultat = "<form>";
    foreach ($nomsInput as $info) {
        $resultat .= "<label for='$info'>$info</label><br>
                    <input type='text' id='$info'/><br>";
    }
    $resultat .= "</form>";

    return $resultat;
}




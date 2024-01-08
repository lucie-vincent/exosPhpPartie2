<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio) {
    $resultat = "<form>";

    foreach ($nomsRadio as $civilite) {
        $resultat .= "<input type='radio' name='civilites' id=$civilite/>
                    <label for=$civilite>$civilite</label><br>";
    }

    $resultat .= "</form>";

    return $resultat;
}
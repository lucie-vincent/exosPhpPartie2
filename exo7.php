<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat</h2>

<?php

$elements = [
    "Choix1" => "",
    "Choix2" => "checked",
    "Choix3" => ""
];

echo genererCheckbox($elements);

function genererCheckbox($elements) {
    $result = " <form>";

    foreach ($elements as $choix => $check) {
        $result .= "<input type='checkbox' $check>
                    <label>$choix</label><br>";
    }

    return $result;
}

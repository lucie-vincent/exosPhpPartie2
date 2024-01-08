<h1>Exercice 8</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

echo repeterImage($url,4);

function repeterImage($url, $nbRepetition) {
    $resultat = "";

    for ($i=1; $i <= $nbRepetition ; $i++) { 
        $resultat .="<img src='$url'>";
    }

    return $resultat;
}




// function repeterImage($url, $nb) {
//     $resultat = "";
//     for ($i=1; $i <= $nb; $i++) { 
//         $resultat .= "<img src='$url'>";
//     }
//     return $resultat;
// }

// // echo repeterImage("http://my.mobirise.com/data/userpic/764.jpg", 4);

// echo str_repeat("<img src='http://my.mobirise.com/data/userpic/764.jpg'>", 3);

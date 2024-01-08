<h1>Exercice 1</h1>
<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<h2>Résultat</h2>

<!-- balise css  -->
<!-- habituellement ce serait directement dans le fichier css -->
<style>
    /* créer classe */
    .red{
        color: red;
    }
</style>


<?php

$texte = "Mon texte en paramètre";
$phrase = "Deuxième exemple de texte";

// appeler la fonction et afficher les résultats
echo convertirMajRouge($texte);
echo convertirMajRouge($phrase);
echo convertirMajRouge2($texte);

// appeler la fonction convertir maj et couleur
echo convertirMajColor($texte, 'purple'); // on peut mettre des codes couleurs hexadécimaux également

// déclarer la fonction
function convertirMajRouge($texte) {
    // convertir en majuscule. !! mb_strtoupper permet prendre en compte les accents !!
    $resultat = mb_strtoupper($texte);
    // changer la couleur en rouge en appelant la classe css .red 
    $resultat ="<p class='red'>$resultat</p>";
    //renvoyer le résultat
    return $resultat;
}

// autre exemple, synthétisé
function convertirMajRouge2($texte) {
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

//pouvoir changer de couleur dans la fonction

function convertirMajColor($texte, $color) {
    return "<p style='color: $color'>".mb_strtoupper($texte)."</p>";
}
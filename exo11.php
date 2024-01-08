<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
Affichage
vendredi 23 février 2018
</p>

<h2>Résultat</h2>

<?php

$date = new DateTime("2018-02-23");

// $formaterDate = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM);
// $formaterDate->setPattern('EEEE dd MMMM Y');

// echo $formaterDate->format($date);


echo formaterDateFr($date);

function formaterDateFr($date) {

    $formaterDate = new IntlDateFormatter(
        'fr_FR',  // locale
        IntlDateFormatter::FULL, // date 
        IntlDateFormatter::FULL, // heure
        'Europe/Paris', // fuseau horaire
        IntlDateFormatter::GREGORIAN, // calendrier
        'Y' // pattern
    );

    return  $formaterDate->format($date);
}
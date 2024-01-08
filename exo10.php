<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).
</p>

<h2>Résultat</h2>

<?php

$infosGenerales = [
    "Nom",
    "Prénom",
    "Mail",
    "Ville"
];

$civilites = ["Monsieur", "Madame"];

$formations = ["Développeur Logiciel",
    "Designer Web",
    "Intégrateur",
    "Chef de projet"
];


echo afficherChampsTexte($infosGenerales);
echo afficherCivilite($civilites);
echo afficherFormations($formations);

echo "<input type='submit' value='Envoyer' />";


function afficherChampsTexte($infosGenerales) {
    $resultat = "<form>";

    foreach ($infosGenerales as $info) {
        $resultat .= "<label for=$info>$info</label><br>
                    <input type='text' id=$info placeholder='$info' required /><br>";
    }

    $resultat .= "</form>";

    return $resultat;
}


function afficherCivilite($civilites) {
    $resultat = " <label>Civilité:</label><br>
                <select>";

    foreach ($civilites as $civilite) {
        $resultat .= " <option>$civilite</option> ";
    }

    $resultat .= "</select><br>";

    return $resultat;
}

function afficherFormations($formations) {
    $resultat = "<br><form>
                <legend> Veuillez choisir une formation: </legend>";

    foreach ($formations as $formation) {
        $resultat .= " <input type='radio' name='formations' id=$formation>
                    <label for=$formation>$formation</label><br> ";
    }

    $resultat .= "</form>";

    return $resultat;
}

<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
</p>

<p>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Résultat</h2>

<!-- ex de tableau en html
pas nécessaire de tout taper en html pour cet exercice 
<table border=1 >
     entête du tableau 
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
     corps du tableau 
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
    </tbody>
</table>  -->



<?php

// déclarer tableau
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
];

// foreach($capitales as $pays => $capitale) {
//     echo " Le pays $pays a pour capitale : $capitale <br>";
// }

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);
    $result = "<table border=1 >
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
                <tbody>";
    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                    </tr>";
    }
    $result .= "</tbody>
                </table>";
    return $result;
}
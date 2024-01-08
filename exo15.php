<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
Affichage
L’adresse elan@elan-formation.fr est une adresse e-mail valide</p>

<h2>Résultat</h2>

<?php

//----------------------VALIDATE_EMAIL------------------------

// avec filter_var + filtre validation VALIDATE_EMAIL
// validation : retourne true (si réussi) ou false (si echec)


$mail = "elan@elan-formation.fr";

if (filter_var($mail, FILTER_VALIDATE_EMAIL))  {
    echo "L'adresse $mail est une adresse e-mail valide ";
}
else {
    echo "L'adresse $mail n'est pas une adresse e-mail valide";
}

//----------------------SANTIZE_EMAIL------------------------------------------

// avec filter_var + le filtre de nettoyage SANITIZE_EMAIL
// + filtre validation VALIDATE_EMAIL
// nettoyage : modifie la variable = enleve tous les caractères interdits dans un mail





// $sanitizedMail = filter_var($mail, FILTER_SANITIZE_EMAIL);

// if (filter_var($sanitizedMail, FILTER_VALIDATE_EMAIL))  {
//     echo "L'adresse $sanitizedMail est une adresse e-mail valide ";
// }
// else {
//     echo "L'adresse $sanitizedMail n'est pas une adresse e-mail valide";
// }



//-------------------------------------------------------------------------


// fonction filter_var($valeur, filtre)
// voir https://www.php.net/manual/fr/book.filter.php pour lire sur le filtrage
// des données et les types de filtre

// RFC 822 - STANDARD FOR THE FORMAT OF ARPA INTERNET TEXT MESSAGES
<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir dans un nouvel onglet (_blank).</p>

<h2>Résultat</h2>

<?php

echo "<a href='https://elan-formation.fr' target='_blank'>https://elan-formation.fr</a>";

// on peut utiliser la balise <a href="">...</a> pour donner un lien
// l'attribut target permet de spécifier où va s'ouvrir le lien :
    // _blank : nouvel onglet
    // _self : même fenêtre (option par défaut)

<?php

class Voiture2 {
    // déclaration des attributs
    protected string $_marque;
    protected string $_modele;

    // constructeur
    public function __construct(string $marque, string $modele) {
        // affectation aux attributs paramétrables
        $this->_marque = $marque;
        $this->_modele = $modele;

    }

    // accesseurs / getters
    public function getMarque() : string {
        return $this->_marque;
    }
    
    public function getModele() : string {
        return $this->_modele;
    }

    // mutateurs / setters

    public function setModele(string $marque) {
        $this->_modele = $modele;
    }

    public function setMarque(string $modele) {
        $this->_marque = $marque;
    }

    // méthode
    public function infos() {
        return "<p>------------------------------------</p>
        <p> Infos du véhicule : </p>
        <p>------------------------------------</p>
        <p> Nom du véhicule : $this->_marque </p>
        <p> Modèle du véhicule : $this->_modele </p>";
    }

    public function __toString() {
        return "$this->_marque $this->_modele";
    }

}
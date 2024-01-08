<?php

class Voiture {
    // attributs / propriétés
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_isDemarree;
    private int $_numero;

    // attribut statique
    // appartient à la classe et pas aux objets = la valeur est partagée par ttes les instances
    //de classe (tous les objets)
    private static $_nbVehicules; // compte le nombre total de véhicules

    // constructeur / méthode magique
    public function __construct(int $numero, string $marque, string $modele, int $nbPortes) {

        // affectation de valeur aux attributs paramétrables
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        

        // initialisation des attributs non paramétrables (=qui ne sont pas des arguments pour instancier un objet de la classe Voiture )
        $this->_vitesseActuelle = 0;
        $this->_isDemarree = false;
        $this->_numero = $numero;
        self::$_nbVehicules++; // incrémenter le compteur
    }

    // accesseurs - getters
    public function getMarque() : string {
        return $this->_marque;
    }

    public function getModele() : string {
        return $this->_modele;
    }

    public function getNbPortes() : int {
        return $this->_nbPortes;
    }

    public function getVitesseActuelle() : int {
        echo "<p>La vitesse du véhicule " . $this . " est de :
        $this->_vitesseActuelle km / h </p>";

        return $this->_vitesseActuelle;
    }

    public function getIsDemarree() : bool {
        return $this->_isDemarree;
    }

    public function getNumero() : int {
        return $this->_numero;
    }


    // mutateurs / setters

    public function setModele(string $marque) {
        $this->_modele = $modele;
    }

    public function setMarque(string $modele) {
        $this->_marque = $marque;
    }

    public function setNbPortes(int $nbPortes) {
        $this->_nbPortes = $nbPortes;
    }

    public function setVitesseActuelle(int $vitesseActuelle) {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function setIsDemarree(bool $isDemarree) {
        $this->_isDemarree = $isDemarree;
    }

    public function setNumero(int $numero) {
        $this->_numero = $numero;
    }

    // méthodes

    // démarrer la voiture
    public function demarrer() {
    
        //si la voiture est à l'arrêt
        if (!$this->_isDemarree) {
            // démarre réellement la voiture
            $this->_isDemarree = true;

            // bonus : message de confirmation
            // echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre"; // concaténation (fusionner)
            echo "<p>Le véhicule $this démarre</p>"; // interpolation (incruster)
        }
        else {
            echo "<p>>Le véhicule $this veut démarrer.
            Le véhicule est déja démarré !</p>";
        }

    }

    public function stopper() {
        // si le véhicule est démarré
        if ($this->_isDemarree ) {
            // on stoppe le véhicule
            $this->_isDemarree = false;
            //on met la vitesse à zéro
            $this->_vitesseActuelle = 0;
            echo "<p>Le véhicule  $this  est stoppé.
                Sa vitesse est de  $this->_vitesseActuelle km / h </p>";
        }
        else {
            echo "<p> Le véhicule  $this veut stopper. 
            Le véhicule est déjà à l'arrêt !</p>";
        }

    }

    public function accelerer(int $acceleration) {
        // si la voiture est démarrée (et on accepte la demande d'action)
        if ($this->_isDemarree) {
            // accélère / applique réellement l'accélération
            // $this->_vitesseActuelle = $this->_vitesseActuelle + $acceleration;
            $this->_vitesseActuelle += $acceleration; // a += b   <=>   a = a + b

            echo "<p>Le véhicule  $this  accélère de 
            $acceleration km / h</p>";
        }
        // sinon (la voiture n'est pas démarrée) (et on refuse la demande d'action)
        else {
            echo "<p>Le véhicule $this veut accélérer 
            de $acceleration . Pour accélérer, il faut démarrer le véhicule  $this  ! </p>";
        }
    }
    

    public function ralentir(int $ralentissement) {

        if ($ralentissement > $this->_vitesseActuelle) {
            echo "Le véhicule  $this veut ralentir de $ralentissement. Il ne peut pas ralentir davantage!";
            $this->stopper();
            
        }
        elseif ($this->_vitesseActuelle > 0) {
            $this->_vitesseActuelle -= $ralentissement;
            echo "<p> Le véhicule  $this ralenti de $ralentissement. Sa nouvelle vitesse est de $this->_vitesseActuelle km / h</p>";
        }
        else {
            echo "<p> Le véhicule $this veut ralentir.
                     Pour ralentir, il faut d'abord démarrer le véhicule ! </p>";
        }
    }

    public function afficherInfos() {

        $etat = ($this->_isDemarree) ? "démarré" : "à l'arrêt";

        return "<p>****************************</p>
        <p>Infos véhicule $this->_numero </p> 
        <p>****************************</p>
        <p>Nom et modèle du véhicule : $this </p>
        <p>Nombre de portes : $this->_nbPortes </p>
        <p>Le véhicule  $this  est  $etat </p>
        <p>Sa vitesse actuelle est de :  $this->_vitesseActuelle  km / h</p>";
    }

    // méthode statique = liée à l'attribut statique
    public static function combien() {
        echo self::$_nbVehicules;
    }
    
    // méthode magique : comment on veut représenter l'objet sous forme de string
    //pour pouvoir afficher marque + modele en évitant les répétitions
    public function __toString() {
        return "$this->_marque $this->_modele";
    }
    
}

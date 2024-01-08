<?php

class Voiture2Elec extends Voiture2 {
    // déclaration des attrbuts
    private int $_autonomie;

    // constructeur
    public function __construct(string  $marque, string $modele, int $autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    //accesseurs- getters 
    public function getAutonomie():  int {
        return $this->_autonomie;
    }

    // mutateurs - setters
    public function setAutonomie() {
        $this->_autonomie = $autonomie;
    }

    public function infos() {
       return parent::infos(). "Autonomie du véhicule : $this->_autonomie";
        
    }

    // il faut mettre les propriétés en protected pour pouvoir y accéder dans la classe enfant
    // public function test() {
    //     return $this->_marque;
    // }

}
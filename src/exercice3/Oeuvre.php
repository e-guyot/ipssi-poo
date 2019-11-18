<?php

namespace Ipssi\Evaluation\exercice3;

class Oeuvre
{
	private $nom; 
	private $lend =NULL;
	private $nbExemplaire;

	function __construct(string $nom, int $nbExemplaire){
		$this->nom = $nom;
		$this->nbExemplaire = $nbExemplaire;
	}
    /**
     * @return mixed
     */
    public function getNom()
    {
    	return $this->nom;
    }

    public function getReservation(){
    	return $this->lend;
    }

    public function setReservation($lend){
    	$this->lend = $lend;
    	$this->nbExemplaire -= 1; 
    }
}

<?php

namespace Ipssi\Evaluation;

class Oeuvre
{
	private $nom; 
	private $lend =NULL;

	function __construct($nom){
		$this->nom = $nom;
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
    }
}

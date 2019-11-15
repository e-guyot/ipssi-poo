<?php

namespace Ipssi\Evaluation;

class Adherent extends Reservation
{
	private $nom;

	function __construct(string $nom){
		$this->nom = $nom;
	}

	function lendAbook($book){
		
	}
}

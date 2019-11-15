<?php

namespace Ipssi\Evaluation;

class Oeuvre
{
	private $nom; 
	private $lend = NULL;

	function __construct($nom){
		$this->nom = $nom;
	}
}

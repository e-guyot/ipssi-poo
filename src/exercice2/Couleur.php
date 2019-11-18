<?php

namespace Ipssi\Evaluation\exercice2;

//RGB(205, 92, 92);

class Couleur
{
	private $rouge;
	private $vert;
	private $bleu;

	function __construct(int $rouge, int $vert, int $bleu){
		$this->rouge = $rouge;
		$this->vert = $vert;
		$this->bleu = $bleu;
	}

	function getCouleurs(){
		return "RGB(".$this->rouge.",".$this->vert.",".$this->bleu.");";
	}

}

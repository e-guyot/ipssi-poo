<?php

namespace Ipssi\Evaluation\exercice2;

class Element
{
	private $forme;
	private $texte;
	private $img;

	function __construct(string $forme, string $texte, string $img){
		$this->forme = $forme;
		$this->texte = $texte;
		$this->img = $img;
	}
    /**
     * @return mixed
     */
    public function getForme()
    {
    	return $this->forme;
    }
    /**
     * @return mixed
     */
    public function getTexte()
    {
    	return $this->texte;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
    	return $this->img;
    }
}

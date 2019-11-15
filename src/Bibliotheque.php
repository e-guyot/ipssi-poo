<?php

namespace Ipssi\Evaluation;

class Bibliotheque
{
	private $livres;

	function __construct(array $livres){
         foreach ($livres as $livre) {
            if (false === $livre instanceof Oeuvre) {
                throw new \Error("Le livre n'existe pas !");
            }
        }
		$this->livres = $livres;
	}

    /**
     * @return mixed
     */
    public function getLivres()
    {
        return $this->livres;
    }
}

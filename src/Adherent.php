<?php

namespace Ipssi\Evaluation;

class Adherent
{
	private $nom;
	private $lend = NULL;

	function __construct(string $nom){
		$this->nom = $nom;
	}

	public function lendABook($book)
	{
		if (is_null($this->lend) && is_null($book->getReservation())) {
			$lend = new Reservation($this, $book, new \DateTime());
			$book->setReservation($lend);
			$this->lend = $lend;
			var_dump($lend);
			echo "Le livre'" . $book->getNom() . "' vous a été réservé";
		}
	}


}

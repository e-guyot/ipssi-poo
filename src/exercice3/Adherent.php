<?php

namespace Ipssi\Evaluation\exercice3;

class Adherent
{
	private $nom;
	private $lend = NULL;

	function __construct(string $nom){
		$this->nom = $nom;
	}

	public function lendABook(Bibliotheque $biblio, $book)
	{
		if  ($biblio->bookExist($book)){
			if (is_null($this->lend) && is_null($book->getReservation())) {
				$lend = new Reservation($this, $book, new \DateTime());
				$book->setReservation($lend);

				if ($book->getNbExemplaire() < 0) {
					return false;
				}
				$this->lend = $lend;

				return "Le livre'" . $book->getNom() . "' vous a été réservé";
			}
		}
		return false;
	}


}

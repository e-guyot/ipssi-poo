<?php

namespace Ipssi\Evaluation;

class Reservation
{
	private $adherent; 
	private $oeuvre;
	private $date;

	function __construct(Adherent $adherent, Oeuvre $oeuvre, \DateTime $date){
		$this->adherent = $adherent;
		$this->oeuvre = $oeuvre;
		$this->date = $date->modify('+14 day');
	}

	function setReservation($oeuvre){
		$lend = $oeuvre;
	}
}
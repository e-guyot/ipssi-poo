<?php

require_once('vendor/autoload.php');

// Structure interne de la bibliothèque. Un adhérent peut empréter un exemplaire d'une oeuvre de la façon suivante : s'il reste un exemplaire dans la bibliothèque, l'un des exemplaires de l'oeuvre est prété à l'adhérent. Le prêt à une durée limitée de deux semaine, si un adhérent souhaite emprinter un exemplaire, il ne doit pas avoir de prêt en cours dont la date limite de restitution est déjà passé.

use Ipssi\Evaluation\exercice3\Adherent;
use Ipssi\Evaluation\exercice3\Oeuvre; 
use Ipssi\Evaluation\exercice3\Reservation;
use Ipssi\Evaluation\exercice3\OeuvreException;
use Ipssi\Evaluation\exercice3\Bibliotheque;



try {
	$biblio = new Bibliotheque ([
		$book1 = new Oeuvre("test1", 10),
		$book2 = new Oeuvre("test2", 10),
		$book3 = new Oeuvre("test3", 0)
	]);

	$adherent = new Adherent("jean");
	$livreAReserve = $adherent->lendABook($biblio, $book2);
	if(!$livreAReserve){//demande dans quel bibliotheque veut t'il reserve et quel livre.
	throw new \Error("le livre n'existe pas");
} else{
	echo $livreAReserve.PHP_EOL;
}
}catch (OeuvreException $e) {
	echo sprintf(
		"Error : ".
		$e->getGivenType()
	) . PHP_EOL;
}catch (Error $e){
	echo "Erreur : ".$e->getMessage().PHP_EOL;
}
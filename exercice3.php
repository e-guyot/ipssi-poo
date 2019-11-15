<?php

require_once('vendor/autoload.php');

// Structure interne de la bibliothèque. Un adhérent peut empréter un exemplaire d'une oeuvre de la façon suivante : s'il reste un exemplaire dans la bibliothèque, l'un des exemplaires de l'oeuvre est prété à l'adhérent. Le prêt à une durée limitée de deux semaine, si un adhérent souhaite emprinter un exemplaire, il ne doit pas avoir de prêt en cours dont la date limite de restitution est déjà passé.

use Ipssi\Evaluation\Adherent;
use Ipssi\Evaluation\Bibliotheque;
use Ipssi\Evaluation\Oeuvre; 
use Ipssi\Evaluation\Reservation;

$book1 = new Oeuvre("test1");
$book2 = new Oeuvre("test2");
$book3 = new Oeuvre("test3");
$adherent = new Adherent("jean");
$adherent->lendABook($book2);
// echo $thomas->getLivreExpire().PHP_EOL;

// echo $thomas->ResaLivre($bibliotheque).PHP_EOL;
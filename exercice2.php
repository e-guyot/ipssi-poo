<?php

require_once('vendor/autoload.php');

// Soit un document dans lequel on peut insérer des éléments.

// Un élément à une position (x, y) en pixel sur le document
// Il existe les éléments : texte, forme (étoile, nuage) et image
// On peut modifier la couleur des éléments texte et forme ainsi que la couleur du document
// Une couleur est exprimé en RGB
// Faire les class nécessaire pour pouvoir afficher un compte rendu complet de la composition d'un document.

use Ipssi\Evaluation\exercice2\Couleur;
use Ipssi\Evaluation\exercice2\Document; 
use Ipssi\Evaluation\exercice2\Element;
use Ipssi\Evaluation\exercice2\Position;

$document = new Document();
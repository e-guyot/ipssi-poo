<?php

require_once('vendor/autoload.php');

class Diviseur {


	public function division(int $index, int $diviseur, array $valeurs)
	{
		return $valeurs[$index] / $diviseur;
	}
}

$marche = false;
$valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

while(!$marche){

	try{
		$climate = new League\CLImate\CLImate;
		$input = $climate->input("Entrez l’indice de l’entier à diviser : ");
		$index =  $input->prompt();

		$input = $climate->input("Entrez le diviseur : ");
		$diviseur = $input->prompt();
		if (filter_var($index, FILTER_VALIDATE_INT) === FALSE || filter_var($diviseur, FILTER_VALIDATE_INT) === FALSE) {
			throw new \Error("Erreur les valeurs ne sont pas des entier !");
		}
		if ($index > count($valeurs) || $index < 0) {
			throw new \Error("Erreur l'indice doit être choisi entre 0 et 9");
		}
		$diviseur = intval($diviseur);
		if ($diviseur === 0) {
			throw new \Error("Erreur le diviseur est égal à 0 !");
		};
		$index = intval($index);

		$climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur, $valeurs));
		$marche = true;
	} catch (\Error $e) {
		echo "Erreur : ".$e->getMessage().PHP_EOL;
	}
}

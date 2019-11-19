<?php
namespace Ipssi\Evaluation\exercice3;
/**
 * 
 */
class Bibliotheque extends Oeuvre
{
	private $array;
	function __construct(array $array)
	{
		$this->array = $array;
	}

	public function bookExist( $book){
		foreach ($this->array as $value) {
			if ($book === $value) {
				return true; 
			}
		}
		return false;
	}
}
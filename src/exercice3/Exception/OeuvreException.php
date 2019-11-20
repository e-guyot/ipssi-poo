<?php

namespace Ipssi\Evaluation\exercice3\Exception;

class OeuvreException extends \Exception
{
    private $givenData;

    public function __construct($givenData)
    {
        $this->givenData = $givenData;
    }

    public function getGivenType() : string
    {
        return gettype($this->givenData);
    }
}

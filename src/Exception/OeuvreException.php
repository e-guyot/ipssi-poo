<?php

namespace Ipssi\Evaluation\Exception;

class OeuvreException extends \Error
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

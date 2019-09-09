<?php

// Klass med funktioner

class Functions {
    private $inputString = "";
    private $metricsDataResults = array();

    // Tar emot en text sträng
    public function __construct(string $string)
    {
        $this->inputString = $string;      
    }

    //Räknar antal tecken i strängen. Ej testad
    function countChars () {
        return count_chars($this->inputString);
    }

    // Kör alla funktion, sparar data i en array och returerar den
    function runMetrics () {
        $this->add($this->metricsDataResults, $this->countChars());
        return $this->metricsDataResults;
    }
}
<?php

// Class with functions

class MetricFunctions
{
    private $inputString = "";

    // Takes a string as a parameter.
    public function __construct(string $string)
    {
        $this->inputString = $string;
    }

    //Counts characters in a string.
    function getCountedChars()
    {
        $count = 0;

        // Trim string from whitespaces
        $trimmedInputString = trim($this->inputString);

        foreach (count_chars($trimmedInputString, 1) as $i) {
            $count += $i;
        }

        return $count;
    }

    // Counts for loop occurences
    function getCountedForLoops()
    {
        $count = 0;

        $count = substr_count($this->inputString, "for(");
        $count += substr_count($this->inputString, "for (");

        return $count;
    }

    // Counts foreach occurences
    function getCountedForEachLoops()
    {
        $count = 0;

        $count = substr_count($this->inputString, "foreach(");
        $count += substr_count($this->inputString, "foreach (");

        return $count;
    }

    // Counts if-statements 
    function getCountedIfStatements()
    {
        $count = 0;

        $count = substr_count($this->inputString, "if(");
        $count += substr_count($this->inputString, "if (");

        return $count;
    }
}

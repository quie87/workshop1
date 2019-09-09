<?php

require_once("MetricFunctions.php");

// Render the main content
class View {
    private $textInput = "";
    private $funcs;

    public function __construct(string $text) {
        $this->textInput = $text;
        $this->funcs = new MetricFunctions($this->textInput);
    }
    
     function show() {
        if (strlen($this->textInput) > 0) {
            return $this->showMetrics();
        }        
    }

    function showMetrics () {
        $numberOfChars = $this->funcs->getCountedChars();
        $numberOfForLoops = $this->funcs->getCountedForLoops();
        $numberOfForEachLoops = $this->funcs->getCountedForEachLoops();
        $numberOfIfStatements = $this->funcs->getCountedIfStatements();


        return $this->metricsDataResults = "
        <ul>
            <li> Number of characters: $numberOfChars </li>
            <li> Number of For-Loops: $numberOfForLoops </li>
            <li> Number of ForEach-Loops: $numberOfForEachLoops </li>
            <li> Number of If-statements: $numberOfIfStatements </li>
        </ul>
        ";
    }
}
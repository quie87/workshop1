<?php

require_once("functions.php");

// Klass som renderar huvudinnehållet
class View {
    

    private $textInput = "";
    private $inputReceived = false;

    public function __construct(string $text) {
        $this->textInput = $text;
    }
    
     function show() {
        if ($this->inputReceived) {
            $funcs = new functions($this->textInput);
        }
        //ska returera vy beroende på om det finns en text fil eller inte
    }

}
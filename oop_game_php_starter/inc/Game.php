<?php

class Game 
{
    private $phrase;
    private $lives = 5;

    function __construct($phrase){
        $this->phrase = $phrase;
    }

    function getPhrase() {
        return $this->phrase;
    }

    function displayKeyboard(){ 
        $this->phrase->keyrow;
    }
}



//var_dump($game);
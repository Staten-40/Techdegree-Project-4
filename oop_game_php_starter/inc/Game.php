<?php

class Game 
{
    private $phrase;
    private $lives = 5;

    function __construct($phrase){
        $this->phrase = $phrase;
    }

    function whaChuSay() {
        return $this->phrase;
    }
}



//var_dump($game);
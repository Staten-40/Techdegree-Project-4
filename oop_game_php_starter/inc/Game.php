<?php

class Game 
{
    private $phrase;
    private $lives = 5;

    function __construct($phrase){
        $this->phrase = $phrase;
    }

    function wha_chu_say() {
        return $this->phrase;
    }
}



//var_dump($game);
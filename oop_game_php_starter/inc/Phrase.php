
<?php

class Phrase
{
    private $currentPhrase;
    private $selected;

   function __construct($currentPhrase=null, $selected=null){

    if(!isset($currentPhrase)){
        $this->currentPhrase = "Dream Big";

    }
   }

   function wha_chu_say() {
       return $this->currentPhrase;
   }
  
}

//var_dump($phrase);


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

   function getPhrase() {
       return $this->currentPhrase;
   }

   $character = "";
   $character = $currentPhrase->getPhrase();
   $character = implode($currentPhrase->getPhrase()());

   function addPhraseToDisplay() {
       foreach($currentPhrase as $cpr) {
         return $character = 
       }
    //Split screen into lowercase chracters
    return $characters = str_split(strtolower($this->currentPhrase));

   }
    
}

//var_dump($phrase);

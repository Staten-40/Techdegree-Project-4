
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

 

   function addPhraseToDisplay() {
           //Split screen into lowercase chracters
        $characters = str_split(strtolower($this->currentPhrase));
        $output = '<ul>';
        '<li class="hide letter h">h</li>';
        '<li class="hide letter h">h</li>';
        '<li class="hide letter o">o</li>';
        '<li class="hide letter w">w</li>';
        '<li class="hide space "> . " " .  </li>';
        '<li class="hide letter a">a</li>';
        '<li class="hide letter r">r</li>';
        '<li class="hide letter e">e</li>';
        '<li class="hide space"> . " " . </li>';
        '<li class="hide letter y">y</li>';
        '<li class="hide letter o">o</li>';
        '<li class="hide letter u">u</li>';

            foreach($charcters in $char) {
        

            }
                   
   }
    
}

//var_dump($phrase);

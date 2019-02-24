
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
       /* $output .= '<li class="hide letter h">h</li>';
        $output .= '<li class="hide letter o">o</li>';
        $output .= '<li class="hide letter w">w</li>';
        $output .= '<li class="hide space "> . " " .  </li>';
        $output .= '<li class="hide letter a">a</li>';
        $output .= '<li class="hide letter r">r</li>';
        $output .= '<li class="hide letter e">e</li>';
        $output .= '<li class="hide space"> . " " . </li>';
        $output .= '<li class="hide letter y">y</li>';
        $output .= '<li class="hide letter o">o</li>';
        $output .= '<li class="hide letter u">u</li>';*/

             foreach($characters as $char) {
                if($char == " ") {
                   $output .= '<li class="hide space "> " " </li>';
                } else {
                   $output .= '<li class="hide letter' . "$char" .'>' . $char . '</li>';
                   
                   $output .= '<ul>';
                   return $output;
                    }
                }   
                
            }
     }                  
        
    


//var_dump($phrase);

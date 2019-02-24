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
        return
        '<form action="play.php" method ="post">
        <div id="qwerty" class="section">
    <div class="keyrow">
        <button class="key" name="qwerty" type="submit" value="q">q</button>
        <button class="key" name="qwerty" type="submit" value="w">w</button>
        <button class="key" name="qwerty" type="submit" value="e">e</button>
        <button class="key" name="qwerty" type="submit" value="r">r</button>
        <button class="key" style="background-color: red" disabled>t</button>
        <button class="key" name="qwerty" type="submit" value="y">y</button>
        <button class="key" name="qwerty" type="submit" value="u">u</button>
        <button class="key" name="qwerty" type="submit" value="i">i</button>
        <button class="key" name="qwerty" type="submit" value="o">o</button>
        <button class="key" name="qwerty" type="submit" value="p">p</button>
    </div>

    <div class="keyrow">
        <button class="key" name="qwerty" type="submit" value="a">a</button>
        <button class="key" name="qwerty" type="submit" value="d">d</button>
        <button class="key" name="qwerty" type="submit" value="f">f</button>
        <button class="key" name="qwerty" type="submit" value="g">g</button>
        <button class="key" name="qwerty" type="submit" value="h">h</button>
        <button class="key" name="qwerty" type="submit" value="j">j</button>
        <button class="key" name="qwerty" type="submit" value="k">k</button>
        <button class="key" name="qwerty" type="submit" value="l">l</button>
    </div>

    <div class="keyrow">
        <button class="key" name="qwerty" type="submit" value="z">z</button>
        <button class="key" name="qwerty" type="submit" value="x">x</button>
        <button class="key" name="qwerty" type="submit" value="c">c</button>
        <button class="key" name="qwerty" type="submit" value="v">v</button>
        <button class="key" name="qwerty" type="submit" value="b">b</button>
        </div>
        </div>
</form>';
    }
   
}




//var_dump($game);
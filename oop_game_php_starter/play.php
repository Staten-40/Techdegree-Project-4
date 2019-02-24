


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Phrase Hunter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
<div class="main-container">
           <h2 class="header">Phrase Hunter</h2>

           <?php
include ('inc/Game.php');
include ('inc/Phrase.php');
$phrase = new Phrase;
$game = new Game($phrase);
echo($game->getPhrase()->getPhrase());
echo $phrase->addPhraseToDisplay();

$game = $_POST['displayKeyboard'];
    return $desk;
  
    echo $game->displayKeyvbord();
    var_dump($_POST);
   ?> 
      
</div>

</body>
</html>

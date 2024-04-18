<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="post">
    <label for="game">Game:</label><br>
    <input id="gameInput" name="game"><br><br>

    <label for="herausgeber">Herausgeber:</label><br>
    <input id="herausgeberInput" name="herausgeber"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
class game {
  public $game;    
  public $herausgeber;   
  public function __construct($game, $herausgeber) {
    $this->game = $game;
    $this->herausgeber = $herausgeber;
  }
  public function nachricht() {
    return "Mein Lieblingsspiel ist " . $this->game . " und ist vom Hersteller " . $this->herausgeber . "!";
  }
}

$mygame = new game($_POST['game'], $_POST['herausgeber'] );  
echo $mygame -> nachricht();

echo "<br>";
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <label for="num1">Number1:</label><br>
    <input id="num1Input" name="num1"><br><br>

    <label for="num2">Number2:</label><br>
    <input id="num2Input" name="num2"><br><br>

    <label for="operator">Operator</label><br>
    <input id="operator" name="operator"><br><br>

    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
class calcs {
  function calc($num1,$num2,$operator){
    switch($operator){
        case "+":
            echo "Das Ergebnis ist: " . (int)$num1+$num2;
            break;
        case "-":
            echo "Das Ergebnis ist: " . (int)$num1-$num2;
            break;
        case "/":
            echo "Das Ergebnis ist: " . (int)$num1/$num2;
            break;
        case "*":
            echo "Das Ergebnis ist: " . (int)$num1*$num2;
            break;
        }
}
}
}

$instanz = new calcs;
$instanz->calc($_POST['num1'], $_POST['num2'],$_POST['operator'])
?>
</body>
</html>
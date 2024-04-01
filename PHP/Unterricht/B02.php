// echo & print 
// Aufgabe 1
<?php
echo "Hello World";
print "Hello World";
?>


//Aufgabe 2
<?php
$meinName = "David";

echo "Hallo mein Name ist $meinName";
print "Hallo mein Name ist $meinName";
?>


// Aufgabe 3
// 1. echo
<?php
$vorname = "David";
$nachname = "Wagner";
$name = $vorname . " " . $nachname;

echo "Hallo meine Vor und Nachnamen lauten $name";
?>


// 2. print
<?php
$vorname = "David";
$nachname = "Wagner";
$text = "Hallo meine Vor und Nachnamen lauten $vorname $nachname";

print "$text";
?>



// String Funktionen
// Aufgabe 1
<?php
$string = "Hallo Welt!";
$umgekehrt = strrev($string);
echo "Ursprüngliche Zeichenkette: $string<br>";
echo "Umgekehrte Zeichenkette: $umgekehrt";
?>


//Aufgabe 2
<?php
$string = "Hello World!";
$anzahl_zeichen = strlen($string);
echo "Die Anzahl der Zeichen im String \"$string\" beträgt: $anzahl_zeichen";
?>


//Aufgabe 3
<?php
$string = "Die Katze frisst den Käse";
$teilstring = "frisst";
if (strpos($string, $teilstring) !== false) {
    echo "Der Teilstring \"$teilstring\" wurde im String gefunden.";
} else {
    echo "Der Teilstring \"$teilstring\" wurde im String nicht gefunden.";
}
?>


//Aufgabe 4
<?php
$string = "Hallo WELT!";
$kleinbuchstaben = strtolower($string);
echo "Ursprüngliche Zeichenkette: $string<br>";
echo "Zeichenkette in Kleinbuchstaben: $kleinbuchstaben";
?>


//Aufgabe 5
<?php
$string = "Die Katze frisst den Käse";
$ersetzt = str_replace("Katze", "Hund", $string);
echo "Ursprüngliche Zeichenkette: $string<br>";
echo "Ersetzte Zeichenkette: $ersetzt";
?>



// numbers
//Aufgabe 1
<?php
$zahl1 = 10;
$zahl2 = 5;
$ergebnis = $zahl1 + $zahl2;
echo "Das Ergebnis der Addition von $zahl1 und $zahl2 ist: $ergebnis";
?>


//Aufgabe 2
<?php
$dividend = 10;
$divisor = 3;
$ergebnis = $dividend / $divisor;
echo "Das Ergebnis der Division von $dividend durch $divisor ist: $ergebnis";
?>


//Aufgabe 3
<?php
$fließkommazahl = 4.7;
$gerundet = round($fließkommazahl);
echo "Die Fließkommazahl $fließkommazahl wurde auf die nächste ganze Zahl gerundet: $gerundet";
?>


//Aufgabe 4
<?php
$fließkommazahl = 5.9;
$ganzzahl = (int)$fließkommazahl;
echo "Die Fließkommazahl $fließkommazahl wurde in eine Ganzzahl umgewandelt: $ganzzahl";
?>


//Aufgabe 5
<?php
$ganzzahl = 10;
$fließkommazahl = 3.5;
$ergebnis = (int)($ganzzahl + $fließkommazahl);
echo "Das Ergebnis der Addition von $ganzzahl und $fließkommazahl ist: $ergebnis";
?>


// Formular Ganzzahlen
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechner</title>
</head>
<body>
    <h2>Rechner</h2>
    <form action="#" method="post">
        <label for="zahl1">Zahl 1:</label><br>
        <input type="number" id="zahl1" name="zahl1"><br>
        
        <label for="zahl2">Zahl 2:</label><br>
        <input type="number" id="zahl2" name="zahl2"><br><br>
        
        <label for="operation">Operation:</label><br>
        <select name="operation" id="operation">
            <option value="addition">Addition (+)</option>
            <option value="subtraktion">Subtraktion (-)</option>
            <option value="multiplikation">Multiplikation (*)</option>
            <option value="division">Division (/)</option>
        </select><br><br>
        
        <input type="submit" value="Berechnen">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zahl1 = $_POST["zahl1"];
        $zahl2 = $_POST["zahl2"];
        $operation = $_POST["operation"];
        
        switch ($operation) {
            case "addition":
                $ergebnis = $zahl1 + $zahl2;
                echo "Das Ergebnis der Addition von $zahl1 und $zahl2 ist: " . (int)$ergebnis;
                break;
            case "subtraktion":
                $ergebnis = $zahl1 - $zahl2;
                echo "Das Ergebnis der Subtraktion von $zahl1 und $zahl2 ist: " . (int)$ergebnis;
                break;
            case "multiplikation":
                $ergebnis = $zahl1 * $zahl2;
                echo "Das Ergebnis der Multiplikation von $zahl1 und $zahl2 ist: " . (int)$ergebnis;
                break;
            case "division":
                if ($zahl2 != 0) {
                    $ergebnis = $zahl1 / $zahl2;
                    echo "Das Ergebnis der Division von $zahl1 durch $zahl2 ist: " . (int)$ergebnis;
                } else {
                    echo "Division durch Null ist nicht erlaubt.";
                }
                break;
            default:
                echo "Ungültige Operation.";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Strings {   
    #Aufgabe1
      public function stringUmkehren($string){
          echo "Umgekehrter String: " . strrev($string);
        }
    #Aufgabe2
        public function stringZeichenZählen($string){
            echo "Anzahl der Zeichen: " . strlen($string);
        }
    #Aufgabe3
        public function findeTeilstring($string){
            echo "String gefunden an Position: " . strpos($string,"string");
        }                                                                                                                                                                            
    #Aufgabe4
        public function stringInKleinbuchstaben($string){
            echo "Der umgewandelte String: " . strtolower($string); 
            }
    #Aufgabe5
        public function stringErsetzen($string){
            echo str_replace("World","David",$string);
        }
    }

$instance = new Strings;
$instance->stringUmkehren("Teststring");
echo "<br>";
$instance->stringZeichenZählen("Teststring");
echo "<br>";
$instance->findeTeilstring("Teststringabc");
echo "<br>";
$instance->stringInKleinbuchstaben("Teststring");
echo "<br>";
$instance->stringErsetzen("Hello World");
echo "<br>";

class Numbers {
    #Aufgabe1
    public function add(int $num1, int $num2){
        echo "Das Ergebnis ist: " . $num1+$num2;
    }
    #Aufgabe2
    public function division($num1,$num2){
        echo "Das Ergebnis: " . $num1 / $num2;
    }
    #Aufgabe3
    public function roundKommazahlen($float){
        echo "Gerundete Zahl: " . round($float);
    }
    #Aufgabe4
    public function kommazahlToInteger($kommazahl){
        echo "Kommazahl zu Integer: " . (int)$kommazahl;
    }
    #Aufgabe5
    public function addIntAndFloat(int $int, float $float){
        echo "Das Ergebnis ist: " . (int)($int+$float);
    }

}

$instance = new Numbers;
$instance->add(2,3);
echo "<br>";
$instance->division(2,3);
echo "<br>";
$instance->roundKommazahlen(3.7);
echo "<br>";
$instance->kommazahlToInteger(4.2);
echo  "<br>";
$instance->addIntAndFloat(2,3.3);
echo "<br>";


    ?>
</body>
</html>
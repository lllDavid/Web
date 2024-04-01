// Aufgabe 1
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eingabeformular</title>
</head>
<body>
    <h2>Eingabeformular</h2>
    <form action="#" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="vorname">Vorname:</label><br>
        <input type="text" id="vorname" name="vorname"><br>
        
        <label for="geburtsdatum">Geburtsdatum:</label><br>
        <input type="date" id="geburtsdatum" name="geburtsdatum"><br>
        
        <label for="plz">PLZ:</label><br>
        <input type="text" id="plz" name="plz"><br>
        
        <label for="ort">Ort:</label><br>
        <input type="text" id="ort" name="ort"><br>
        
        <label for="strasse_hausnr">Straße / Hausnummer:</label><br>
        <input type="text" id="strasse_hausnr" name="strasse_hausnr"><br><br>
        
        <input type="submit" value="Absenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $vorname = $_POST["vorname"];
        $geburtsdatum = $_POST["geburtsdatum"];
        $plz = $_POST["plz"];
        $ort = $_POST["ort"];
        $strasse_hausnr = $_POST["strasse_hausnr"];

        echo "<h2>Hallo $vorname $name, herzlich willkommen auf unserer Homepage!</h2>";
        echo "<p>Geburtsdatum: $geburtsdatum</p>";
        echo "<p>Adresse: $plz, $ort</p>";
        echo "<p>$strasse_hausnr</p>";
    }
    ?>
</body>
</html>

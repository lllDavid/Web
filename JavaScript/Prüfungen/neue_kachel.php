

<?php
// Name: Wagner
// Vorname: David

/*

Abschlussprüfung Webentwicklung 2024 - Teil 3/3
Mögliche Gesamtpunktzahl: 15
Verfügbare Zeit: 30 Minuten
Erlaubte Hilfsmittel: 
•   Visual Studio Code (ohne Plugins, diese sind vorher zu löschen)
•   XAMPP
•   Recherche auf den Seiten: www.w3schools.com & www.webentwicklerkurs.de

Aufgabe:
a) Ergänze den fehlenden Code anstelle der Kommentare in den Zeilen 23 & 24 >>> 5 Punkte
a) Ergänze den fehlenden Code anstelle des Kommentars in den Zeilen 27 - 22 >>> 10 Punkte


*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ueberschrift = htmlspecialchars($_POST['ueberschrift']); 
    $text = htmlspecialchars($_POST['text']);

    $kachelHTML = " 
        <div class=kachel>
            <h3>Überschrift 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button>Klicken</button>
        </div>"
    ;

    $dateiInhalt = file_get_contents('fehlersuche.html');
    $einfuegePosition = strpos($dateiInhalt, '<div class="grid-raster" id="kachel-container">') + strlen('<div class="grid-raster" id="kachel-container">');
    $aktualisierterInhalt = substr_replace($dateiInhalt, $kachelHTML, $einfuegePosition, 0);
    file_put_contents('fehlersuche.html', $aktualisierterInhalt);

    header('Location: fehlersuche.html');
}
?>
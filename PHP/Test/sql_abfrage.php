<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "123";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// SQL-Abfrage aus dem Formular erhalten
$sql_query = $_POST['sql'];

// SQL-Abfrage an die Datenbank senden
$result = $conn->query($sql_query);

if ($result === FALSE) {
    echo "Fehler bei der Ausführung der Abfrage: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        // Ergebnisse der Abfrage anzeigen
        echo "<h2>Abfrageergebnisse:</h2>";
        while ($row = $result->fetch_assoc()) {
            // Hier kannst du die Ergebnisse nach deinem Bedarf formatieren und ausgeben
            print_r($row);
            echo "<br>";
        }
    } else {
        echo "Keine Ergebnisse gefunden.";
    }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
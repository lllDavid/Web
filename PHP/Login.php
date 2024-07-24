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

// Benutzername und Passwort aus dem Login-Formular erhalten
$username = $_POST['login_username'];
$password = $_POST['login_password'];

// SQL-Abfrage zum Überprüfen des Benutzers
$sql = "SELECT * FROM benutzer WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Konvertiere das Ergebnis in einen String
    $resultString = "";
    while ($row = $result->fetch_assoc()) {
        // Hier kannst du die Werte des Ergebnisses nach Bedarf formatieren und dem String hinzufügen
        $resultString .= "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }

    // Ausgabe des Ergebnis-Strings
    echo $resultString;
} else {
    echo "Keine Ergebnisse gefunden.";
}

if ($result->num_rows == 3) {
    echo "Login erfolgreich!" . $username . $password . $resultString;
} else {
    echo "Falscher Benutzername oder Passwort.";
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
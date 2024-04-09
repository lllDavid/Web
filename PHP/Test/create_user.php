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

// Benutzerdaten aus dem Benutzer-Formular erhalten
$username = $_POST['create_username'];
$password = $_POST['create_password'];
$email = $_POST['create_email'];

// SQL-Abfrage zum Hinzufügen eines neuen Benutzers
$sql = "INSERT INTO benutzer (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Neuer Benutzer wurde erfolgreich erstellt!";
} else {
    echo "Fehler beim Erstellen des Benutzers: " . $conn->error;
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP Prüfung</title>
</head>
<body>
    <h1>Willkommen zur PHP Aufgabe</h1>
    <p><?php echo "Dieser Text wird von PHP generiert."; ?></p>
    
    <form method="post">
        <button type="submit" name="aenderButton">Text ändern</button>
        <button type="submit" name="neuerButton">Neuer Text</button> <!-- Button für die neue Funktion -->
    </form>

    <?php
    // Bestehende Funktionalität: Text ändern
    if (isset($_POST['aenderButton'])) {
        echo "<p>Der Text wurde geändert!</p>";
    }

    if (isset($_POST['neuerButton'])) {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<p>Neuer Text</p>";
    }

    ?>
</body>
</html>
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
        <button type="submit" name="neuerButton">Neuer Text</button>
    </form>

    <?php
    $string = " ";
    if (isset($_POST['aenderButton'])) {
        echo "<p>Der Text wurde geändert!</p>";
    }

    if (isset($_POST['neuerButton'])) {

        echo "<p>Neuer Text</p>";
    }

    ?>
</body>

</html>
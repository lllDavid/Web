<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textanzeige</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin-top: 50px;
        }

        form {
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <h1>Textanzeige</h1>

    <form method="post" action="">
        <label for="eingabetext">Geben Sie einen Text ein:</label>
        <input type="text" id="eingabetext" name="eingabetext" placeholder="Ihr Text hier">
        <input type="submit" value="Text anzeigen">
    </form>

    <?php
    if (isset($_POST['eingabetext'])) {
        $text = htmlspecialchars($_POST['eingabetext']);
        echo "<p>$text</p>";
    }
    ?>
</body>

</html>
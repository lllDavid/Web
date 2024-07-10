<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abschlussprüfung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            function changeColor()
            {
                if (isset($_POST['hexfarbe'])) {
                    $hexfarbe = $_POST['hexfarbe'];
                    echo "h1, p { color: $hexfarbe}";
                }
            }

            changeColor();
        }
        ?>
    </style>
</head>

<body>
    <h1>Beispielüberschrift</h1>
    <p>Dies ist ein Beispieltext.</p>

    <form method="post" action="">
        <label for="hexfarbe">Hex-Farbcode:</label>
        <input type="text" id="hexfarbe" name="hexfarbe" placeholder="#ff0000">
        <input type="submit" value="Farbe ändern">
    </form>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <div id="dropdown">
            <label for="colors">Choose a color:</label>
            <select name="colors" id="colors">
                <option value="" selected disabled hidden>Auswählen</option>
                <option value="blau">Blau</option>
                <option value="gelb">Gelb</option>
                <option value="rot">Rot</option>
            </select>
            <input type="submit" value="click" name="submit"></>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lieblingsfarbe = $_POST["colors"];

        switch ($lieblingsfarbe) {
            case "rot":
                echo "Die Lieblingsfarbe ist rot.";
                break;
            case "blau":
                echo "Die Lieblingsfarbe ist blau.";
                break;
            case "gelb":
                echo "Die Lieblingsfarbe ist gelb.";
                break;

            default:
                echo "Die Lieblingsfarbe ist weder rot, blau oder gelb.";
        }
    }
    ?>
</body>

</html>
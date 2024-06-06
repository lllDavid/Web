<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function addieren($zahl1, $zahl2)
    {
        echo "Ergebnis: " . $zahl1 + $zahl2;
        return $zahl1 + $zahl2;
    }

    addieren(2, 3);
    addieren(5, 5);
    addieren(1, 1)
        ?>
</body>

</html>
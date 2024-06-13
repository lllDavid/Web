<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Grid</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .item {
            border: 1px solid;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    //Aufgabe 1
    <br>
    <?php

    $alter = array("Peter" => "35", "Anja" => "37", "Martin" => "43");
    echo "Peter ist " . $alter['Peter'] . " Jahre alt.";
    ?>


    <br>


    //Aufgabe 2
    <br>
    <?php
    $autos = array("Volvo", "BMW", "Toyota");
    sort($autos);

    foreach ($autos as $auto) {
        echo $auto . "<br>";
    }
    ?>


    <br>


    //Aufgabe 3
    <br>
    <?php
    $nummern = array(4, 6, 2, 22, 11);
    sort($nummern);

    foreach ($nummern as $nummer) {
        echo $nummer . "<br>";
    }
    echo "<br>";
    rsort($nummern);
    foreach ($nummern as $nummer) {
        echo $nummer . "<br>";
    }
    ?>


    <br>


    //Aufgabe 4
    <br>
    <?php
    $alter = array("Peter" => "35", "Anja" => "37", "Martin" => "43");
    asort($alter);


    foreach ($alter as $name => $alterwert) {
        echo "$name ist $alterwert Jahre <br>";
    }
    echo "<br>";
    arsort($alter);
    foreach ($alter as $name => $alterwert) {
        echo "$name ist $alterwert Jahre <br>";
    }
    ?>


    <br>


    //Aufgabe 5
    <br>
    <br>
    <?php
    $autos = array("Volvo", "BMW", "Toyota");
    sort($autos);

    echo "<div class='container'>";
    foreach ($autos as $marke => $farbe) {
        echo "<div class='item'>$marke - $farbe</div>";
    }
    echo "</div>";
    ?>
</body>

</html>
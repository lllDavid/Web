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

  $x = 20;

  while ($x >= 5) {
    echo "Schritt: $x <br>";
    $x--;
  }
  ?>


  <br>


  //Aufgabe 2
  <br>
  <?php
  $x = 1000;

  while ($x >= 49) {
    echo "Erhöhung auf: $x <br>";
    $x /= 2;
  }
  ?>


  <br>


  //Aufgabe 3
  <br>
  <?php
  $x = 20;

  do {
    echo "Zählerstand: $x <br>";
    $x--;
  } while ($x >= 4);
  ?>


  <br>


  //Aufgabe 4
  <br>
  <?php
  for ($x = 20; $x >= 4; $x--) {
    echo "Zählerstand: $x <br>";
  }
  ?>


  <br>


  //Aufgabe 5
  <br>
  <?php

  for ($x = 1000; $x >= 4; $x /= 2) {
    echo "Zählerstand: $x <br>";
  }


  ?>


  <br>


  //Aufgabe 6
  <br>
  <?php
  $autos = array("BMW", "Audi", "Mercedes", "Opel", "VW");

  echo "<table border='1'>";
  echo "<tr><th>Marke</th></tr>";

  foreach ($autos as $auto) {
    echo "<tr>";
    echo "<td>$auto</td>";
    echo "</tr>";
  }

  echo "</table>";
  ?>


  <br>


  //Aufgabe 7
  <br>
  <?php
  $autos = array(
    "BMW" => "schwarz",
    "Audi" => "rot",
    "Opel" => "grün",
    "VW" => "weiß",
    "Mercedes" => "gelb",
    "Skoda" => "grau",
  );

  echo "<div class='container'>";
  foreach ($autos as $marke => $farbe) {
    echo "<div class='item'>$marke - $farbe</div>";
  }
  echo "</div>";
  ?>


  <br>


  //Aufgabe 8
  <br>
  <?php


  $x = 10;

  while ($x >= 0) {
    if ($x == 0) {
      echo "Ziel erreicht!";
      break;
    }
    echo "Aktueller Wert: $x<br>";
    $x--;
  }
  ?>


  <br>


  <?php
  $x = 0;

  while ($x <= 10) {
    if ($x == 5) {
      $x++;
      echo "Hälfte erreicht! <br>";
      continue;
    }
    echo "Zählerstand: $x <br>";
    $x++;
  }
  ?>
</body>

</html>
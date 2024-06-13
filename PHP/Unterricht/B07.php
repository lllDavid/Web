//Aufgabe 1
<html>

<body>
    <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?thema=PHP&schule=IFB-Berufsfachschule">Klicken</a>

    <?php
    echo "Lerne " . ($_GET['thema']) . " an der " . ($_GET['schule']);
    ?>
</body>

</html>
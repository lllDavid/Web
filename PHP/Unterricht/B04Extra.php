<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    #Function
    function calculateSubnet($hosts)
    {
        $subnetMask = 32 - $hosts;
        $subnetMask2 = 2 ** $subnetMask - 2;
        echo "Subnet: " . $subnetMask2;
        echo "<br>";
    }
    calculateSubnet(24);
    #Switch
    $random = random_int(1, 5);

    switch ($random) {
        case "1":
            echo "Option1";
            break;
        case "2":
            echo "Option2";
            break;
        case "3":
            echo "Option3";
            break;
        case "4":
            echo "Option4";
            break;
        case "5":
            echo "Option5";
            break;

    }

    ?>


</body>

</html>
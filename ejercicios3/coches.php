<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $coches =
        array(
            "75845KLJ" => array("Ford", "Focus", 4),
            "32454OLK" => array("Seat", "Leon", 5),
            "25463GHN" => array("Ford", "Fiesta", 3),
            "98751QWE" => array("Kia", "Ceed", 4)
        );
        foreach ($coches as $matricula => $detalles) {
            echo "Matrícula: $matricula<br>";
            echo "Marca: " . $detalles[0] . "<br>";
            echo "Modelo: " . $detalles[1] . "<br>";
            echo "Número de puertas: " . $detalles[2] . "<br>";
            echo "<br>";
        }

    ?>
</body>
</html>
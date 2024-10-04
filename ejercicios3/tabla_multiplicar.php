<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for($i = 0;$i<10;$i++){
        $tabla[0][$i] = 0;
    }
    for($i = 0;$i<10;$i++){
        $tabla[1][$i] = $i * 1;
    }
    for($i = 0;$i<10;$i++){
        $tabla[2][$i] = $i * 2;
    }
    $res = 0;
    for($i = 0; $i < count($tabla); $i++){
        echo "Tabla del $i:";
        echo "<br>";
        for($j = 0;$j <= count($tabla[$i]); $j++){
            $res = $i * $j;
            echo "$i x $j = $res";
            echo "<br>";
        }
        echo "<br>";

    }
    ?>
</body>

</html>
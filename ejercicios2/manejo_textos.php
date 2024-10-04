<?php
include "funciones.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $suma = 0;
    $radio = 20;
    $area = calcularArea($radio);
    $areaformat = number_format($area, 2);
    $textoResultado = "El área calculada del circulo es $areaformat <br>";
    echo $textoResultado;
    $textoResultadoMayus = strtoupper($textoResultado);
    echo "$textoResultadoMayus";
    $textoResultadoModificado = str_replace("calculada","obtenida",$textoResultado);
    $caracteres = strlen($textoResultado);
    $posicion = strpos($textoResultado,"circulo");
    $numeros = "1,2,3,4,5";
    $numeroscambiados = explode(",",$numeros);
    $numeros = implode("+",$numeroscambiados);
    for($i = 0;$i<count($numeroscambiados);$i++){
        $suma += $numeroscambiados[$i];
    }
    echo "$numeros = $suma";
    ?>

</body>

</html>
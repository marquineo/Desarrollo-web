<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $fichero = "dontExist.txt";
    $ficherocopia = "copia_datos.txt";
    $datos = file_get_contents($fichero) or die("No se encuentra el fichero");
    file_put_contents($ficherocopia, $datos);
    $datoscopiados = file_get_contents($ficherocopia) or die ("No exite el fichero de copia");
    echo "Datos copiados: $datoscopiados";
    //no funciona
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    try {
        $fichero = "dontExist.txt";
        $ficherocopia = "copia_datos.txt";
        $datos = file_get_contents($fichero);
        file_put_contents($ficherocopia, $datos); //-> no genera Excepciones, solo warnings (PHP es así)
        $datoscopiados = file_get_contents($ficherocopia);
        echo "Datos copiados: $datoscopiados";
    } catch (Exception $e) {
        echo "Se ha producido un error: " . $e->getMessage();
    }
    ?>
</body>

</html>
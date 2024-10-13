<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $estudios_es = "He estudiado 2ºDAW";
    $estudios_en = "I've studied 2ºDAW";
    $idioma_es = "El español es mi idioma materno";
    $idioma_en = "I aproved First Certified of Cambridge";
    $idioma = "en";
    $texto_idioma = "idioma_" . $idioma;
    $texto_estudios = "estudios_" . $idioma;
    echo $$texto_estudios;
    echo "<br>";
    echo $$texto_idioma;

    
    /*
    $texto_es = "Bienvenido";
    $texto_en = "Welcome";
    $idioma = "es";
    $texto = "texto_" . $idioma;
    echo $$texto;
    */
    ?>
</body>

</html>
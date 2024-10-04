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
        <!--Formulario para enviar los datos-->
        <form method="POST" action="">
        <label for="n1">Dime el precio:</label>
        <input type="number" name="prec" id="prec" required>
        <br><br>

        <label for="n2">Dime el descuento en porcentaje:</label>
        <input type="number" name="desc" id="desc">
        <br><br>

        <input type="submit" value="Intercambiar">
    </form>

    <?php

//verificar el formulario HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prec = $_POST['prec'];

    if (!empty($_POST['desc'])) {
        $desc = $_POST['desc'];
    } else {
        $desc = 0; // Valor por defecto
    }


    $preciototal = calculaDescuento($prec,$desc);
    echo "El precio total sería de $preciototal";

}
?>
</body>
</html>
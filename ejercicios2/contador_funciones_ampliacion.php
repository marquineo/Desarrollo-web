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
        <label for="n1">Dime el primer número:</label>
        <input type="number" name="n1" id="n1" required>
        <br><br>

        <label for="n2">Dime el segundo número:</label>
        <input type="number" name="n2" id="n2" required>
        <br><br>

        <label for="s">Dime el salto (opcional):</label>
        <input type="number" name="salto" id="s">
        <br><br>

        <input type="submit" value="Contar">
    </form>
    <?php
    //verificar el formulario HTML
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $diff = $n1 - $n2;
        if($diff < 0){
            $diff = $diff * -1;
        }
        // Verificar si el salto fue enviado, si no, asignar el valor por defecto de 1
        if (!empty($_POST['salto'])) {
            $s = $_POST['salto'];
        } else {
            $s = 1; // Valor por defecto
        }
        if ($s < 0) {
            echo "El salto no puede ser negativo, listillo";
        } else if($diff > $s){
            cuentaAmplicacion($n1, $n2, $s);
        }
    }
    ?>

</body>

</html>
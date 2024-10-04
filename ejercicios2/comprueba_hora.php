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
        <label for="n1">Dame la fecha (hh:mm:ss):</label>
        <input type="string" name="n1" id="n1" required>
        <br><br>

        <input type="submit" value="Comprobar">
    </form>
<?php

//verificar el formulario HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hora = $_POST['n1'];
    comprobarHora($hora);
}
?>
</body>
</html>
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

        <input type="submit" value="Intercambiar">
    </form>
<?php

//verificar el formulario HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
   function Intercambiar(&$a,&$b,&$aux = 0){
    echo "Cambiando valores...<br>";
    $aux = $a;
    $a = $b;
    $b = $aux;
    echo "Ahora el primer número vale $a y el segundo numero vale $b<br>";
   }
   Intercambiar($n1,$n2);
   echo "n1 = $n1 / n2 = $n2";
}
?>
</body>
</html>
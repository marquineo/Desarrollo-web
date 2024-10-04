<?php

function saludo($n)
{
    echo "Hola, $n";
}

function cuenta($a, $b)
{
    for ($i = $a; $i < $b; $i++) {
        echo "$i,";
    }
    echo $b;
}

function cuentaAmplicacion($a, $b, $c = 1) //$c no es obligatoria, si esta vacio, se la asigna 1
{
    $diff = 0;
    if ($a < $b) {
        $aux = $b - $c; //para que el for no muestre el último número con coma y hacerle un echo sin coma fuera del for
        for ($i = $a; $i < $aux; $i += $c) {
            echo "$i,";
        }
        $diff = $b - $i;
        echo $i; //<- echo fuera del for
        if ($diff == $c) { //soluciona un proble que no me mostraba el último número si el salto era exacto
            echo ",$b";
        }
    } else if ($b < $a) {
        $aux = $b + $c;
        for ($i = $a; $i > $aux; $i -= $c) {
            echo "$i,";
        }
        $diff = $i - $b;
        echo $i;
        if ($diff == $c) {
            echo ",$b";
        }
    } else {
        echo "Los numero no pueden ser igual para contar, listillo";
    }
}


function Intercambiar(&$a, &$b, &$aux = 0)
{
    echo "Cambiando valores...<br>";
    $aux = $a;
    $a = $b;
    $b = $aux;
    echo "Ahora el primer número vale $a y el segundo numero vale $b<br>";
}


function calculaDescuento($pre, $des = 0)
{
    if ($des != 0) {
        $resto = $pre * ($des / 100);
        $pre -= $resto;
        return $pre;
    } else {
        return $pre;
    }
}

function calcularArea($radio)
{
    $area = ($radio * $radio) * 3.14;
    return $area;
}

function comprobarHora($hora)
{

    if (preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $hora, $partes) == 1) {
        if ($partes[1] > 23) {
            echo "Hora inválida<br>";
        } else {
            echo "Hora válida<br>";
        }
        if ($partes[2] > 59) {
            echo "Minutos inválidos<br>";
        } else {
            echo "Minutos válidos<br>";
        }
        if ($partes[3] > 59) {
            echo "Segundos inválidos<br>";
        } else {
            echo "Segundos válidos<br>";
        }
    }else{
        echo "Formato de la hora inválido";
    }
}

<?php 
$nota1 = rand(0,10);
$nota2 = rand(0,10);
$nota3 = rand(0,10);
$mayor = 0;
$var = 0;
if($nota1 > $nota2 && $nota1 > $nota3){
    print("Nota1 es la mayor<br>");
    $mayor = $nota1;
}else if($nota2 > $nota1 && $nota2 > $nota3){
    print("Nota2 es la mayor<br>");
    $mayor = $nota2;
}else if($nota3 > $nota1 && $nota3 > $nota2){
    print("Nota3 es la mayor<br>");
    $mayor = $nota3;
}else{
    print("Las notas son iguales");
    $mayor = $nota3;
}
switch(){
    case 5:
        echo "La nota es suficiente";
        break;
    case 6:
        echo "La nota es bien";
        break;
    case 7:
    case 8:
        echo "La nota es notable";
        break;
    case 9:
    case 10:
        echo "La nota es sobresaliente";
        break;
    break;
    default:
        echo"La nota es insuficiente";
}
/*
if($mayor < 5){
    $var = 1;
}else if($mayor >= 5 && $mayor <6){
    $var = 2;
}else if($mayor >=6 && $mayor <7){
    $var = 3;
}else if($mayor >=7 && $mayor <9){
    $var = 4;
}else if($mayor >=9 && $mayor <=10){
    $var = 5;
}
switch($var){
    case 1:
        echo "La nota es insuficiente";
        break;
    case 2:
        echo "La nota es suficiente";
        break;
    case 3:
        echo "La nota es un bien";
        break;
    case 4:
        echo "La nota es notable";
        break;
    case 5:
        echo "La nota es sobresaliente";
        break;
    default:
        echo "Nota invalida";
        break;
}*/
?>
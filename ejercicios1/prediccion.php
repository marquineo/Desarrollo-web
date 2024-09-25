<?php
$num1 = 3;
$num2 = 5;
$num3 = 8;
$num1 *= 4; //->12
echo $num1; // ->12
echo $num1 <= $num2;//->false
echo $num3 > $num1 and $num3 > $num2;//->false
echo $num3 > $num1 or $num3 > $num2;//->true
echo $num1 > $num2 xor $num1 > $num3;//->false (xor, solo una de las condiciones debe ser true)
$num3--;
echo $num3;//->7
$num3 += $num1;
echo $num3;//->19
?>
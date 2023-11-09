<?php
$peso = 75;
$altura = 1.75;

//$calculo = $peso / $altura ** 2;
$calculo = $peso / pow($altura, 2);

echo("<br>O IMC é igual á: $calculo");
?>
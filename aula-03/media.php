<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

//echo round($calculo = ($n1 + $n2 + $n3)/3, 1); *arrendodar número""

echo($calculo >=7 ? "Sua media é: $calculo você está Aprovado" : "Sua media é: $calculo você está reprovado");

?>
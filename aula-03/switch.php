<?php
$n1 = 5;
$n2 = 2;
$op = 4;

switch($op){
    case  1:
        $calculo = $n1 + $n2;
        break;
    case  2:
        $calculo = $n1 - $n2;
        break;
    case  3:
        $calculo = $n1 * $n2;
        break;
    case  4:
        $calculo = $n1 / $n2;
        break;
        default:
        echo("Opção inválida.");
        $calculo = 0;
    }
echo("Resultado: $calculo");

?>
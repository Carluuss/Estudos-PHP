<?php

$metrosC = 150;
$metrosZ = 110;
$ano = 0;

while($metrosZ <= $metrosC){
    $metrosC += 2;
    $metrosZ += 3;
    $ano++;
}
echo("Ano: $ano - Zé: $metrosZ e Chico $metrosC");

?>
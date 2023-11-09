<?php
$altura = 1.5;
$largura = 3;
$comprimento = 5;

$metroCubico = $altura * $largura * $comprimento;

$litros = $metroCubico * 1000;

echo ("As medidas da caixa d`água são: altura: $altura, largura: $largura, comprimento: $comprimento logo a  capacidade da caixa d`água são de: $metroCubico m^3 ");

echo ("<br>Capacidades em litro é: $litros");
?>
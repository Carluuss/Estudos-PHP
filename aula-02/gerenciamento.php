<?php
/*$estoque = 100;

$movimentacao = 'saida';
$quantidade = 10;

if ($movimentacao == 'entrada') {
    $atualizacao = $estoque + $quantidade;
    echo("Valor do estoque: $estoque<br>");
    echo ("O estoque teve uma entrada de $quantidade <br> O valor do estoque atual é de: $atualizacao");
} else if ($movimentacao == 'saida') {
    $atualizacao = $estoque - $quantidade;
    echo("Valor do estoque: $estoque<br>");
    echo ("O estoque teve uma saida de $quantidade <br> O valor do estoque atual é de: $atualizacao");
}*/

$estoque = 100;
$movimentacao = 'saida';
$quantidade = 10;

$atualizacao = $movimentacao == 'saída' ? $estoque - $quantidade : $estoque + $quantidade;

echo ("Estoque: $estoque <br> Movimento: $movimentacao<br> Quantidade: $quantidade<br>Estoque atual $atualizacao");

?>
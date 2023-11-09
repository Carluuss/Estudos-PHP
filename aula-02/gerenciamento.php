<?php
$estoque = 100;

$movimentacao = 'saida';
$quantidade = 10;

if ($movimentacao == 'entrada') {
    $atualizacao = $estoque + $quantidade;

    echo ("O estoque teve uma entrada de $quantidade <br> O valor do estoque atual é de: $atualizacao");
} else if ($movimentacao == 'saida') {
    $atualizacao = $estoque - 10;
    echo ("O estoque teve uma saida de $quantidade <br> O valor do estoque atual é de: $atualizacao");
}
?>
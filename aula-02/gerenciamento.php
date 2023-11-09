<?php
$estoque = 100;

$movimentacao = 'saida';

if($movimentacao == 'entrada'){
    $atualizacao = $estoque + 10;
    
    echo("O estoque teve uma entrada de $atualizacao");
}else if($movimentacao == 'saida'){
    $atualizacao = $estoque - 10;
    echo("O estoque teve uma saida de $atualizacao");
}
?>


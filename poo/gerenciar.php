<?php
include("produto.php");
//criar um objeto da classe Produto
$p = new Produto("batata", 20, 4.59);
//atribuir um valor ao atributo nome
// $p->nome = "batata";
//escrever o atributo nome
// $p->quantidade = 20;
// $p->preco = 4.20;
// echo($p->preco);

$p2 = new Produto("Arroz", 60, 5.8);
$p2->setQuantidade(80);
// $p2->nome = "Arroz";
// $p2->quantidade = 60;
// $p2->preco = 5.80;
// echo($p->getNome());
$totalEstoque = $p->getQuantidade() + $p2->getQuantidade();
echo("<br> Quantidade total em estoque: $totalEstoque");
$faturamentoEstimado = $p2->faturamentoMax();
echo("<br> Faturamento Máximo: $faturamentoEstimado");
?>
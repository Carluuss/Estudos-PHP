<?php
include("produto.php");
//criar um objeto da classe Produto
$p = new Produto();
//atribuir um valor ao atributo nome
$p->nome = "batata";
//escrever o atributo nome
echo($p->nome);
$p->quantidade = 20;
$p->preco = 4.20;
echo($p->preco);

$p2 = new Produto();
$p2->nome = "Arroz";
$p2->quantidade = 60;
$p2->preco = 5.80;
$totalEstoque = $p->quantidade + $p2->quantidade;
echo("<br> Quantidade total em estoque: $totalEstoque");
?>
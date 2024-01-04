<?php
include_once("conexao.php");

$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];

$sql = "SELECT quantidade FROM produtos WHERE id = '$produto'";
$result = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($result);
echo"<br> $linha[quantidade]";

$quantidadeAtualizada = $linha['$quantidade'] - $quantidade    ;

echo("$linha[quantidade], $quantidade, $quantidadeAtualizada");

$sql = "UPDATE produtos SET quantidade = '$quantidadeAtualizada' WHERE id = '$id'";
mysqli_query($conn, $sql);

session_start();
if(mysqli_affected_rows($conn)){//iniciar sessão
    $_SESSION['vender'] = "1";//atribui um valor a sessão
    header('Location:./gerenciarProdutos2.php');
}else{
    $_SESSION['vender'] = "2";//atribui um valor a sessão
    header('Location:./gerenciarProdutos2.php');
}


?>
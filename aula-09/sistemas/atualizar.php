<?php
include_once("conexao.php");

$id = $_POST['id'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

$sql = "UPDATE produtos SET produto = '$produto', valor = '$valor', quantidade = '$quantidade', validade = '$validade' WHERE id = '$id'";
mysqli_query($conn, $sql);

session_start();
if(mysqli_affected_rows($conn)){//iniciar sessão
    $_SESSION['atualizar'] = "1";//atribui um valor a sessão
    header('Location:./gerenciarProdutos2.php');
}else{
    $_SESSION['atualizar'] = "2";//atribui um valor a sessão
    header('Location:./gerenciarProdutos2.php');
}


?>
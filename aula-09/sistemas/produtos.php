<?php

$produto = $_POST['produto'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

echo("Produto: $produto<br>Valor: $valor<br> Quantidade: $quantidade<br> Validade: $validade");

//conexão com banco de dados

$conn = new MySQli('localhost', 'root', '', 'produtos_full');

if($conn->connect_error){
    die("Connection falied: ". $conn->connect_error);
}else{
    $sql = "INSERT INTO produto (produto, valor, quantidade, validade)
    VALUE ('$produto', '$valor', '$quantidade', '$validade' ";
    mysqli_query($conn, $sql);
}

?>
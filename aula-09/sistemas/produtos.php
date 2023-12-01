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
    $sql = "INSERT INTO produtos (produto, valor, quantidade, validade)
    VALUE ('$produto', '$valor', '$quantidade', '$validade') ";
    

    if(mysqli_query($conn, $sql)){
        if(mysqli_affected_rows($conn)){
            header('Location:./gerenciarProdutos.php');
        }else{
            header('Location:./gerenciarProdutos.php');
        }
    }else{
        echo'Falha no comando SQL';
    }

}

?>
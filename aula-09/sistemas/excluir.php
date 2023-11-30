<?php

include_once("conexao.php");

$id = $_POST['id'];


$sql = "DELETE FROM produtos  WHERE id = '$id'";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    
    echo '<script>alert("Produto deletado com sucesso")</script>';
}else{
    echo '<script>alert("Nenhum produto foi deletado")</script>';
  
}

sleep(5);

header("location: gerenciarProdutos.php");

?>
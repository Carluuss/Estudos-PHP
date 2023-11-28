<?php
include_once("conexao.php");

$id = $_POST['id'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

$sql = "UPDATE produtos SET produto = '$produto', valor = '$valor', quantidade = '$quantidade', validade = '$validade' WHERE id = '$id'";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    //$_SESSION['result'] = "1";
    header('Location:./formulario.html');
}else{
    echo '<script>alert("Nenhuma alteração foi realizada")</script>';
    //$_SESSION['result'] = "2";
    header('Location:./formulario.html');
}


?>
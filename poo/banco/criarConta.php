<?php
include("conta.php");
include("conexao.php");
$c = new Conta($_POST["agencia"], $_POST["conta"], 0, $_POST["senha"]);
//conexão
$conn = new Conexao();
$conexao = $conn->criarConexao();
// $conn = new mysqli('localhost', 'root', '', 'banco');
// if($conn->connect_error){
//     die("Connection failed: ". $conn->connect_error);
// }

$sql = "INSERT INTO contas (agencia, conta, saldo, senha) VALUES ('".$c->getAgencia()."', '". $c->getConta()."', '".$c->getSaldo()."', '".$c->getSenha()."')";

mysqli_query($conexao, $sql);

?>
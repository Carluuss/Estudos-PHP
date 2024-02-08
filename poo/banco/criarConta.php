<?php
include("conta.php");
include("conexao.php");
$c = new Conta($_POST["agencia"], $_POST["conta"], 0, $_POST["senha"]);
//conexão
$conn = new Conexao();//criar objeto da classe conexao
$conn->inserir($c);

?>
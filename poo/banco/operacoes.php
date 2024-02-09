<?php
include("conta.php");
include("conexao.php");

$conta = $_POST["conta"];
$conn = new Conexao();
$c = new Conta();
$linha = $c->selecionarConta($conta, $conn);
echo "Agência: $linha[agencia] <br> Conta: $linha[conta]<br>";

switch ($_POST["operacao"]){
    case 'Saldo':
        $saldo = $c->getSaldo($conta, $conn);
        echo "Saldo: $saldo";

        break;
        
    case 'Saque' :
        echo "Saque";
}
?>
<?php
include("conta.php");
include("conexao.php");

$conta = $_POST["conta"];
$valor = $_POST["valor"];
$conn = new Conexao();
$c = new Conta();
$linha = $c->selecionarConta($conta, $conn);
echo "Agência: $linha[agencia] <br> Conta: $linha[conta]<br>";

switch ($_POST["operacao"]) {
    case 'Saldo':
        $saldo = $c->getSaldo($conta,$conn);
        break;
    
    case 'Saque':
        echo "Saque";
        break;

    case 'Deposito':
            $result = $c->depositar($conta, $conn, $valor);
            echo $result; break;

    default:
            echo "Operação inválida";
}

?>
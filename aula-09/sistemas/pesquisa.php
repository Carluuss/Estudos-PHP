<?php

$id = $_POST['id'];

include_once("conexao.php");
//comando SELECT para retornar todas as colunas
//onde o id for igual a variável $id
$sql = "SELECT  * FROM produtos WHERE id = $id";
//realiza a pesquisa no banco de dados e salva na variável resultado
//variável resultado
$resultado = mysqli_query($conn, $sql);
//organiza os dados que estão na varável resltado
//para o formato de vetor e atribui ao vetor linha
$linha = mysqli_fetch_array($resultado);
//escreve cada item no vetor linha
if($linha){

    echo"Id: $linha[id]<br> Produto: $linha[produto]<br>Valor: $linha[valor]<br>Quantidade: $linha[quantidade]<br>Validade: $linha[validade]<br>";

}else{
    echo '<script>alert("Produto não localizado")</script>';
}
?>
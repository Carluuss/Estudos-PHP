<?php

$id = $_POST['id'];
include_once('head.php');
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

    echo"<body>
    <header>

    </header>
    <main>
        <section>
            <h1>Pesquisa de Produtos</h1>
            <form action='' method='post'>
                <div>
                    <div class='itens'>
                        <label for='produto'>Produto:</label>
                        <input type='text' id='produto' name='produto' value='$linha[produto]' required onblur='V_produto(this)'>
                        <div id='alertaProduto'>
                        </div>
                        
                    </div>
                        <div class='itens2'>
                            <label for='valor'>Valor:</label>
                            <input type='text' id='valor' name='valor' value='$linha[valor]' required onblur='V_valor(this)'>
                            <div id='alertaValor'>
                            </div>
                        </div>
                        <div class='itens3'>
                            <label for='quantidade'>Quantidade:</label>
                            <input type='number' id='quantidade' name='quantidade' value='$linha[quantidade]' required onblur='V_quantidade(this)'>
                            <div id='alertaQuantidade'>
                            </div>
                        </div>
                        <div class='itens4'>
                            <label for='validade'>Validade:</label>
                            <input type='date' id='validade' name='validade' value='$linha[validade]' required onblur='V_validade(this)'>
                            <div id='alertaValidade'>
                        </div>
                    </div>
                        <input type='submit' value='Cadastrar' onclick='V_cadastro(this)'>
                    </div>
                    
            </form>
            </body>
            ";

}else{
    echo '<script>alert("Produto não localizado")</script>';
}
?>
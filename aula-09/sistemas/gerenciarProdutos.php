<?php


session_start(); //inicia a sessão
if (isset($_SESSION['atualizar'])) { //existe uma sessão
    if ($_SESSION['atualizar'] == "1") { //verifica se sessão é igual a 1
        unset($_SESSION['atualizar']); //excluir sessão
        echo "<script>alert('Atualização feita com sucesso')</script>";
    } else if ($_SESSION['atualizar'] == "2") { //verifica se sessão é igual a 2
        unset($_SESSION['atualizar']); //excluir sessão
        echo "<script>alert('Erro ao atualizar produto')</script>";
    }
} else if (isset($_SESSION['excluir'])) { //existe uma sessão
    if ($_SESSION['excluir'] == "1") { //verifica se sessão é igual a 1
        unset($_SESSION['excluir']); //excluir sessão
        echo "<script>alert('Deletado com sucesso')</script>";
    } else if ($_SESSION['excluir'] == "2") { //verifica se sessão é igual a 2
        unset($_SESSION['excluir']); //excluir sessão
        echo "<script>alert('Erro ao deletar produto')</script>";
    }
} else if (isset($_SESSION['cadastrar'])) { //existe uma sessão
    if ($_SESSION['cadastrar'] == "1") { //verifica se sessão é igual a 1
        unset($_SESSION['cadastrar']); //excluir sessão
        echo "<script>alert('Cadastrado com sucesso')</script>";
    } else if ($_SESSION['cadastrar'] == "2") { //verifica se sessão é igual a 2
        unset($_SESSION['cadastrar']); //excluir sessão
        echo "<script>alert('Erro ao cadastrar produto')</script>";
    }
}
session_destroy();


include_once("conexao.php");
include_once('bootstrap.php');

$sql = "SELECT * FROM produtos ORDER BY produto";


$result = mysqli_query($conn, $sql);

if ($result) {
    echo "
    <body>
    <div class='container card mt-2'>
    <h2>Lista de produtos</h2>
    <a href ='formulario.html'class = 'btn btn-primary'>Cadastrar</a>
    <a href ='dashboard.php'class = 'btn btn-success mt-2 mb-2'>Estatísticas</a>
    
    <table id='tabelaPrincipal' class='table table-striped table-sm'>
    
    <tr class='table-light' class='table-sm'>
    <th>ID</th>
    <th>Produto</th>
    <th>Valor</th>
    <th>Quantidade</th>
    <th>Validade</th>
    <th>Editar</th>
    <th>Deletar</th>
    </tr>
    ";

    while ($linha = mysqli_fetch_array($result)) {
        echo "
        
        
        <tr id='trCadastro' >
        <form action='gerenciarProdutos2.php' method='post'>
        <td data-label='ID'> $linha[id]</td>
        <td data-label='Produto'> $linha[produto]</td>
        <td data-label='Valor'>R$ $linha[valor]</td>
        <td data-label='Quantidade'> $linha[quantidade]</td>
        <td data-label='Validade'> $linha[validade]</td>
        <td class='posicaoBotao'><input type='submit' name='comando' value='Editar' class='btn btn-primary'></td>
        <input type='hidden' name='id' value= '$linha[id]'>
        </form>
        
        <form action = 'excluir.php' method='post'>
        <td class='posicaoBotao'><input type='submit' name='comando' value='Deletar' id='delete' class='btn btn-danger ms-4' onclick=\"return confirm('Deseja deletar o produto?')\"></td>
        <input type='hidden' name='id' value= '$linha[id]'>
        </form>
        </tr>
        </div>
        
        
        ";
    }
    echo "</table>
    </body>
    </html>
    ";
} else {
    echo "0 resultado";
}

?>
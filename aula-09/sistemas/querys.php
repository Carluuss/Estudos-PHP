<?php
session_start();

include_once("conexao.php");

function gerarTabelaHTML($mysqli_query){

    echo"<tr class='table-light' class='table-sm'>
    <th>ID</th>
    <th>Produto</th>
    <th>Valor</th>
    <th>Quantidade</th>
    <th>Validade</th>
    <th>Editar</th>
    <th>Deletar</th>
    </tr>
    ";

    while ($linha = mysqli_fetch_array($mysqli_query)) {
        echo "
        
        
        <tr id='trCadastro' >
    
        <td data-label='ID'> $linha[id]</td>
        <td data-label='Produto'> $linha[produto]</td>
        <td data-label='Valor'>R$ $linha[valor]</td>
        <td data-label='Quantidade'> $linha[quantidade]</td>
        <td data-label='Validade'> $linha[validade]</td>

        <input type='hidden' id='produto$linha[id]' value='$linha[produto]'>
        <input type='hidden' id='valor$linha[id]' value='$linha[valor]'>
        <input type='hidden' id='quantidade$linha[id]' value='$linha[quantidade]'>
        <input type='hidden' id='validade$linha[id]' value='$linha[validade]'>

        <td><button class='btn btn-warning' onclick='abrirModalEditar($linha[id])'>Editar</button></td>
        
        
        <form action = 'excluir.php' method='post'>
        <td class='posicaoBotao'><input type='submit' name='comando' value='Deletar' id='delete' class='btn btn-danger ms-4' onclick=\"return confirm('Deseja deletar o produto?')\"></td>
        <input type='hidden' name='id' value= '$linha[id]'>
        </form>
        </tr>
        </div>
        
        
        ";
    };
}


if (isset($_POST["filtroTabela"]) && isset($_POST["tabela"]) && isset($_POST["filtroData"])) {
    retornarTabelaComFiltros($conn, $_POST["tabela"], $_POST["filtroData"]);
}

function retornarTabelaComFiltros($conexao, $tabela, $filtros)
{
    $filtros = json_decode($filtros, true);

    $sql = "SELECT * FROM produtos WHERE";
    if (isset($filtros["idProduto"])) {
        $id_pro = $filtros["idProduto"];
        $sql .= " id = $id_pro AND";
    }
    if (isset($filtros["produto"])) {
        $prod = $filtros["produto"];
        $sql .= " produto LIKE '%$prod%' AND";
    }

    $final = trim(substr($sql, strlen($sql) - 3, strlen($sql)));
    if ($final == "AND") {$sql = trim(substr($sql, 0, strlen($sql) - 3));}
    $sql .= " LIMIT 0, 10";

    gerarTabelaHTML(mysqli_query($conexao, $sql));

    $_SESSION["filtro"] = $sql;
}



?>
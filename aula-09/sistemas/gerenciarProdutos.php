<?php

include_once("conexao.php");


$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

if($result){
    echo"<!DOCTYPE html>
    <html lang='pt'>
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    </head>
    <body>
    <div class='container card mt-2'>
    <h2>Lista de produtos</h2>
    <a href ='formulario.html'class = 'btn btn-primary'>Cadastrar</a>
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
    
    while($linha = mysqli_fetch_array($result)){
        echo"
        
        
        <tr id='trCadastro' >
        <form action='pesquisa.php' method='post'>
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
    echo"</table>
    </body>
    </html>
    ";
}else{
 echo "0 resultado";
}
    
?>
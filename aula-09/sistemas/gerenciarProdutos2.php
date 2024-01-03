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
    <div class='container mt-2 d-flex justify-content-center'>
    
    <button class='btn btn-danger text-center'  onclick='abrirModalVenda()'>Venda</button>
    </div>
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
    }
    echo "</table>
    </body>
    </html>
    ";
} else {
    echo "0 resultado";
}

?>

<div class='modal fade' id='modalEditar' tabindex='-1' role='dialog' aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class="modal-content">
            <form action="atualizar.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Produtos</h5>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="editarId" name='id' class='form-control'>
                        <label>ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarProduto" name="produto" class="form-control">
                        <label>Produto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarValor" name="valor" class="form-control">
                        <label>Valor</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarQuantidade" name="quantidade" class="form-control">
                        <label>Quantidade</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarValidade" name="validade" class="form-control">
                        <label>Validade</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class='btn btn-secondary' onclick='fecharModalEditar()'>Fechar</button>
                        <input type="submit" class='btn btn-primary' value="Editar">
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

<div class='modal fade' id='modalVenda' tabindex='-1' role='dialog' aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class="modal-content">
            <form action="update.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Vender Produtos</h5>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <select class=" form-select" name="nome_fantasia">
                            <option></option>
                            <?php

                            $result = "SELECT id, produto FROM produtos";
                            $resultado = mysqli_query($conn, $result);

                            while ($row = mysqli_fetch_assoc($resultado)) {
                                echo '<option value="' . $row['nome_fantasia'] . '"> ' . $row['nome_fantasia'] . ' </option>';
                            }
                            ?>
                        </select>
                        <label>Produto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarQuantidade" name="quantidade" class="form-control">
                        <label>Quantidade</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class='btn btn-secondary' onclick='fecharModalVenda()'>Fechar</button>
                        <input type="submit" class='btn btn-danger' value="Vender">
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

<script>
    function abrirModalEditar(id) {
        $("#modalEditar").modal("show");
        //onbtem o input hidden produtoid
        produto = document.getElementById("produto" + id);
        valor = document.getElementById("valor" + id);
        quantidade = document.getElementById("quantidade" + id);
        validade = document.getElementById("validade" + id);
        //obtem os inputs do modal
        editarId = document.getElementById("editarId");
        editarProduto = document.getElementById("editarProduto");
        editarValor = document.getElementById("editarValor");
        editarQuantidade = document.getElementById("editarQuantidade");
        editarValidade = document.getElementById("editarValidade");
        //preencher modal
        editarId.value = id;
        editarProduto.value = produto.value;
        editarValor.value = valor.value;
        editarQuantidade.value = quantidade.value;
        editarValidade.value = validade.value;
    }

    function fecharModalEditar() {
        $("#modalEditar").modal("hide");
    }
    function abrirModalEditar(id) {
        $("#modalEditar").modal("show");
        //onbtem o input hidden produtoid
        produto = document.getElementById("produto" + id);
        valor = document.getElementById("valor" + id);
        quantidade = document.getElementById("quantidade" + id);
        validade = document.getElementById("validade" + id);
        //obtem os inputs do modal
        editarId = document.getElementById("editarId");
        editarProduto = document.getElementById("editarProduto");
        editarValor = document.getElementById("editarValor");
        editarQuantidade = document.getElementById("editarQuantidade");
        editarValidade = document.getElementById("editarValidade");
        //preencher modal
        editarId.value = id;
        editarProduto.value = produto.value;
        editarValor.value = valor.value;
        editarQuantidade.value = quantidade.value;
        editarValidade.value = validade.value;
    }

    function fecharModalEditar() {
        $("#modalEditar").modal("hide");
    }

    function abrirModalVenda(id) {
        $("#modalVenda").modal("show");

        produto = document.getElementById("produto" + id);
        quantidade = document.getElementById("quantidade" + id)

    }

    function fecharModalVenda() {
        $("#modalVenda").modal("hide");
    }

</script>
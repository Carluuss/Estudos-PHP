<?php

include_once("conexao.php");


$sql = "SELECT * FROM matriculas";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang='pt'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link rel='stylesheet' href='lista.css'>

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box
            }


            #modal {
                opacity: 0;
                z-index: -999;
            }

            .modalContent {
        
                justify-content: space-between;
            }

            .modal {

                background-color: white;
                border: 1px solid red;
                color: black;
                height: 12em;
                width: 30em;
                border-radius: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;

            }

            .modal h2 {
                color: red;
                margin: 10px;
            }

            .modal p {
                font-size: 20px;
                font-weight: bold;
                margin: 10px;
            }

            .modal button {
                border: none;
                transition: 0.5s;
                box-shadow: 1px 1px 1px black;
                padding: 2px 0;
                margin: 10px;
            }

            .modal button:hover {
                background-color: red;
            }
        </style>
    </head>

    <body>
        <div class='container card mt-2'>
            <h2>Lista de matriculas</h2>
            <a href='matricula.html' class='btn btn-primary'>Cadastrar</a>
            <table id='tabelaPrincipal' class='table table-striped table-sm'>
                <?php

                if ($result) {
                    echo "
                        <tr class='table-light' class='table-sm'>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Genero</th>
                            <th>Idade</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    ";
                    while ($linha = mysqli_fetch_array($result)) {
                    echo "
                        <tr id='trCadastro' >
                            <form action='pesquisa.php' method='post'>
                            <td data-label='ID'> $linha[id]</td>
                            <td data-label='Nome'> $linha[nome]</td>
                            <td data-label='Curso'> $linha[curso]</td>
                            <td data-label='Genero'> $linha[genero]</td>
                            <td data-label='Idade'> $linha[idade]</td>
                            <td class='posicaoBotao'><input type='submit' name='comando' value='Editar' class='btn btn-primary'></td>
                            <input type='hidden' name='id' value= '$linha[id]'>
                            </form>
                    
                            <form action = 'deletar.php' method='post' id='deleteForm'>
                            <td class='posicaoBotao'><input type='button' name='comando' value='Deletar' id='delete' class='btn btn-danger ms-4' onclick='showModal(true)'></td>
                            <input type='hidden' name='id' value= '$linha[id]'>
                            </form>
                        </tr>";
                    };
                }?>

            </table>
        </div>

                <div class="modalContent" id='modal'>
                    <div class='modal'>
                        <h2>AVISO</h2>
                        <p>Tem certeza que deseja deletar?</p>
                        <div>
                            <button value='Confirmar' onclick="deletarDados()">Confirmar</button>
                            <button value='Cancelar' onclick="showModal(false)">Cancelar</button>
                        </div>
                    </div>
                </div>

                <script>
                    function showModal(isShow) {
                        let modal = document.getElementById("modal")

                        if (isShow) {
                            modal.style.opacity = "1"
                            modal.style.zIndex = "999"
                        } else {
                            modal.style.opacity = "0"
                            modal.style.zIndex = "-999"
                        }
                    }

                    function deletarDados() {
                        let formDelete = document.getElementById("deleteForm");

                        formDelete.submit();
                    }
                </script>
    </body>

    </html>
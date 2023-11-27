<?php

$id = $_POST['id'];
include_once('head.php');
include_once("conexao.php");
//comando SELECT para retornar todas as colunas
//onde o id for igual a variável $id
$sql = "SELECT  * FROM matriculas WHERE id = $id";
//realiza a pesquisa no banco de dados e salva na variável resultado
//variável resultado
$resultado = mysqli_query($conn, $sql);
//organiza os dados que estão na varável resultado
//para o formato de vetor e atribui ao vetor linha
$linha = mysqli_fetch_array($resultado);
//escreve cada item no vetor linha
if($linha){

    echo"<body>
    <form action='matricula.php' method='post'>
            <h1>Matricula</h1>
            <div class='itens'>
                <label for='nome'>Nome: </label>
                <input type='text' id='nome' name='nome' required onblur='V_nome(this)'value='$linha[nome]'>
                <div id='alertaNome'></div>
        
            </div>
            <div class='itens'>
                <label for='curso'>Curso: </label>
                <input type='text' id='curso' name='curso' required onblur='V_curso(this)' value='$linha[curso]'>
                <div id='alertaCurso'></div>
            </div>
            <div class='itens'>
                <label for='genero'>Genero: </label>
                <input type='text' id='genero' name='genero' onblur='V_genero(this)' value='$linha[genero]'>
            </div>
            <div class='itens'>
                <label for='idade'>Idade: </label>
                <input type='number' id='idade' name='idade' required onblur='V_idade(this)' value='$linha[idade]'>
                <div id='alertaIdade'></div>
            </div>
            <a href='./matricula.html'><input type='button' value='Voltar'></a>
        </form>

        <table border=1>
        <tr>
            <td>Nome</td>
            <td>Curso</td>
            <td>Genero</td>
            <td>Idade</td>
        </tr>
        <tr>
            <td>$linha[nome]</td>
            <td>$linha[curso]</td>
            <td>$linha[genero]</td>
            <td>$linha[idade]</td>
            </tr>
</table>

        </body>";

}else{
    echo '<script>alert("Aluno não localizado")</script>';
}
?>
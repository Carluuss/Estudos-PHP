<?php
if(isset($_SESSION["cadastroAtendimento"])){
    if($_SESSION["cadastroAtendimento"] == "1"){
        unset($_SESSION["cadastroAtendimento"]);
        echo"<script>alert('Atendimento cadastro com sucesso!');</script>";
    }else if($_SESSION["cadastroAtendimento"] == "2"){
        unset($_SESSION["cadastroAtendimento"]);
        echo"<script>alert('Erro ao cadastrar atendimento.');</script>";
    }
}

include_once("bootstrap.php");
include_once("conexao.php");

$sql = "SELECT id_paciente, nome FROM pacientes";
$resultado = mysqli_query($conn, $sql);



echo"<body>

<div class='card container mt-3 mb-3>
    <div class='mt-2'>
    <h2 style= 'text-align: center;'
    class='mt-1'>CADASTRO DE ATENDIMENTO</h2>


<form action='cadastrar_atendimento.php' method='POST'>
<div class='mb-3'>
<label class='form-label'>Data do atendimento*</label>
<input type='date' class='form-control' id='data' name='data' onblur='V_data(this)' required>
<div id= 'alertaData' class='form-text'>
</div>

<div class='mb-3'>
    <label class='form-label'>Tipo de atendimento*</label>

    <select class='form-select' name='triagem' id='triagem'>
    <option value='M' selected> Moderado</option>
    <option value='C'> Critico</option>
    <option value='U'> Urgente</option>
    </select>
    </div>

<div class='mb-3'>
    <label class='form-label'>Nome do Paciente*</label>

    <select class='form-select' name='nome' id='nome'>";
    if($resultado){
        while($linha = mysqli_fetch_array($resultado)){

            echo"
            <option value='$linha[id]' selected>$linha[nome] </option>";
    }}
    echo"
        </select>
    </div>


<div class='mb-3'>
    <input type='submit' class='btn btn-primary' value='Cadastrar' onclick='V_cadastrar()'>
</div>
</form>
</div>
</body>
<script type='text/javascript' src='santa_casa.js'></script>
";

?>

<?php
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];

include_once('conexao.php');
$sql = "INSERT INTO pacientes (nome, sexo, cpf, data_nascimento) VALUE ('$nome', '$sexo', '$cpf', '$dataNascimento')";

if(mysqli_query($conn,$sql)){
    session_start();
    if(mysqli_affected_rows($conn)){
        $_SESSION["cadastrar"] = "1";
        header('Location:./cadas"trar_paciente.html.php');
    }else{
        $_SESSION["cadastrar"] = "2";
        header('Location:./cadastrar_paciente.html.php');
    }
}else{
    echo"Falha no comando SQL.";
}

?>
<?php
include_once("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$genero = $_POST['genero'];
$idade = $_POST['idade'];

$sql = "UPDATE matriculas SET nome = '$nome', curso = '$curso', genero = '$genero', idade = '$idade' WHERE id = '$id'";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    //$_SESSION['result'] = "1";
    header('Location:./matricula.html');
}else{
    echo '<script>alert("Nenhuma alteração foi realizada")</script>';
    //$_SESSION['result'] = "2";
    header('Location:./matricula.html');
}


?>
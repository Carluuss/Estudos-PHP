<?php

include_once("conexao.php");

$id = $_POST['id'];


$sql = "DELETE FROM matriculas  WHERE id = '$id'";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    header('Location:./crud.php');
    echo '<script>alert("Matricula deletada com sucesso")</script>';
}else{
    echo '<script>alert("Nenhuma matricula foi deletado")</script>';
    header('Location:./crud.php');
}

?>
<?php
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$genero = $_POST['genero'];
$idade = $_POST['idade'];

echo("Nome: $nome<br>Curso: $curso<br>Genero: $genero<br>Idade $idade");

$conn = new MySQli('localhost', 'root', '', 'db_escola');

if($conn->connect_error){
    die("Connection falied: ". $conn->connect_error);
}else{
    $sql = "INSERT INTO matriculas (nome, curso, genero, idade)
    VALUE ('$nome', '$curso', '$genero', '$idade' ";
    mysqli_query($conn, $sql);
}



?>
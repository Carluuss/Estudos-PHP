<?php
$id = $_POST['id'];
$conn = new MySQli('localhost', 'root', '', 'db_escola');

if($conn->connect_error){
    die("Connection falied: ". $conn->connect_error);
}

?>
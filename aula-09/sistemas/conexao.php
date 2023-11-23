<?php
$id = $_POST['id'];
$conn = new MySQli('localhost', 'root', '', 'produtos_full');

if($conn->connect_error){
    die("Connection falied: ". $conn->connect_error);
}

?>
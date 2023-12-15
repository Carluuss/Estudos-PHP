<?php

$conn = new MySQli('localhost', 'root', '', 'santa_casa');

if($conn->connect_error){
    die("Connection falied: ". $conn->connect_error);
}

?>
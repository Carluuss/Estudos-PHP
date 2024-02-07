<?php
class Conexao
{

    public function criarConexao()
    {
        try{//tentará fazer os comandos dentro dessa chave
            $conn = new mysqli('localhost', 'root', '', 'banco');
        }catch(Exception $e){//caso encontre algum erro dentro do try é o catch é realizado
        die("Connection failed: ". $conn->connect_error);
        }finally{
            return $conn;
        }

    }
}

?>
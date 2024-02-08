<?php
class Conexao
{

    private function criarConexao()
    {
        try { //tentará fazer os comandos dentro dessa chave
            $conn = new mysqli('localhost', 'root', '', 'banco');
            return $conn;
        } catch (Exception $e) { //caso encontre algum erro dentro do try é o catch é realizado
            die("Connection failed: " . $conn->connect_error);
        }

    }

    public function inserir($c)
    {
        try{
            $conexao = $this->criarConexao();
            $sql = "INSERT INTO contas (agencia, conta, saldo, senha) VALUES ('" . $c->getAgencia() . "', '" . $c->getConta() . "', '" . $c->getSaldo() . "', '" . $c->getSenha() . "')";
            mysqli_query($conexao, $sql);
        }catch(Exception $e){

            die("Connection failed: " . $e->getMessage());

        }finally{
            mysqli_close($conexao);
        }
    }

}

?>
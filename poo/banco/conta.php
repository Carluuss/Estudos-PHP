<?php
    class Conta{
        private $agencia = "";
        private $conta = "";
        private $saldo = 0;
        private $senha = "";

        
        public function selecionarConta($conta, $conn){
            try{
                $sql = "SELECT * FROM contas WHERE conta = $conta";
                $linha = $conn->selecionar($sql);
                return $linha;
            }catch(Exception $e){
                die("Connection failed: " . $e->getMessage());
            }
        }

    

       
        function setAgencia($a){
            $this->agencia = $a;
        }
    
        function getAgencia(){
            return $this->agencia;
        }
    
        function setConta($c){
            $this->conta = $c;
        }
    
        function getConta(){
            return $this->conta;
        }
        function setSaldo($conta, $conn, $saldo){
            $sql = "UPDATE contas SET saldo = $saldo WHERE conta = $conta";
            $result = $conn->dml($sql);
            return $result;
        }
        
        function getSaldo($conta, $conn){
            $sql = "SELECT saldo FROM contas WHERE conta = $conta";
            $linha = $conn->selecionar($sql);
            return $linha['saldo'];
        }
        
        function setSenha($se){
            $this->senha = $se;
        }
        
        function getSenha(){
            return $this->senha;
        }
        
        function depositar($conta, $conn, $valor){
            try{

                //saber saldo
                $saldo = $this->getSaldo($conta, $conn);
                //somar com o deposito
                $saldo += $valor;
                //atualizar o saldo
                $result = $this->setSaldo($conta, $conn, $saldo);
                return $result ? "Depósito realizado com sucesso" : "Depósito não realizado";
            }catch(Exception $e){
                die("Connection failed: ". $e->getMessage());
            }
        }
    
        
    }
    
?>
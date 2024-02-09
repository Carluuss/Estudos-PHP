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
    
        function setSaldo($sa){
            $this->saldo = $sa;
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
    }
    

?>
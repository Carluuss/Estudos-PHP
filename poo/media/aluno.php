<?php
class Aluno{
    public $nota1 = 0;
    public $nota2 = 0;
    public $nota3 = 0;

    public function __construct($n1, $n2, $n3){
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    public function media(){
        $media = ($this->nota1 + $this->nota2 + $this->nota3)/3;
        return $media;
    }
}

?>
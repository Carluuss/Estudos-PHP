<?php
$aprovado = $recuperacao = $reprovado = 0;
for($i = 1; $i <= 15; $i++){
    $n1 = rand(0, 10);
    echo("<br>Aluno$i:<br> média =  $n1<br>");
    if($n1 >= 7){
        $aprovado++ ;
        echo("Aprovado");
    }else if($n1 < 7 && $n1 >= 4){
        $recuperacao++;
        echo("Recuperação");
    }else{
        $reprovado++;
        echo("Reprovado");
    }
}
echo("<br> Aprovados: $aprovado<br> Recupeção: $recuperacao<br> Reprovados: $reprovado");


?>
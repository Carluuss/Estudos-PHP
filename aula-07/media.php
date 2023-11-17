<?php

for($i = 1; $i <= 15; $i++){
    $n1 = rand(0, 10);
    echo("<br>Aluno$i:<br> média =  $n1<br>");
    if($n1 >= 7){
        echo("Aprovado");
    }else if($n1 < 7 && $n1 >= 4){
        echo("Recuperação");
    }else{
        echo("Reprovado");
    }
}


?>
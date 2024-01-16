<?php
$notas = array(
    array(4, 8, 9),
    array(10, 8, 9),
    array(4, 8, 1),
    array(4, 2, 9),
    array(10, 7, 9)
);


for ($i = 0; $i < 5; $i++) {
    $soma = ($notas[$i][0] + $notas[$i][1] + $notas[$i][2]) / 3;

    if($soma >= 7){
        echo "Aluno $i: aprovado com média $soma <br>";
    }else{
        echo "Aluno $i: reprovado com média $soma <br>";
    }

}
;

?>
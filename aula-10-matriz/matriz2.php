<?php

$produtos2 = array(
    array("arroz" => 4.50, "quantidade" => 50),
    array("feijão" => 6.50, "quantidade" => 30),
    array("leite" => 4.00, "quantidade" => 35),
);

foreach ($produtos2 as $p) {
    foreach ($p as $chave => $valor) {
        echo "{$chave}: {$valor}";
    }
    echo "<br>";
}

$medias = array(
    array("nota1" => 8, "nota2" => 9, "nota3" => 10),
    array("nota1" => 2, "nota2" => 7, "nota3" => 10),
    array("nota1" => 6, "nota2" => 3, "nota3" => 5),
    array("nota1" => 9, "nota2" => 9, "nota3" => 10),
    array("nota1" => 8, "nota2" => 10, "nota3" => 10),
);
    foreach($medias as $index => $notas){
        $media = 0;
        foreach($notas as $key => $value){
            $media += $value;
        }
        $media = round($media/3, 2);
        echo "Media do aluno ". ($index + 1). " = $media<br>";
    }

?>
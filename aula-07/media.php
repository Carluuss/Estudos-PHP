<?php
$nota = [1, 7, 9, 10, 2, 6, 4];
$aprovado = $recuperacao = $reprovado = 0;
for ($i = 0; $i < 7; $i++) {
    //$n1 = rand(0, 10);
    echo ("<br>Aluno$i:<br> média =  $nota[$i]<br>");
    if ($nota[$i] >= 7) {
        $aprovado++;
        echo ("Aprovado");
    } else if ($nota[$i] < 7 && $nota[$i] >= 4) {
        $recuperacao++;
        echo ("Recuperação");
    } else {
        $reprovado++;
        echo ("Reprovado");
    }
}
echo ("<br> Aprovados: $aprovado<br> Recuperação: $recuperacao<br> Reprovados: $reprovado");


?>
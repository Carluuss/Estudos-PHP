<?php
include("aluno.php");
$aluno1 = new Aluno(7, 8, 9);
$media1 = $aluno1->media();
echo ("<br> As notas deste aluno foram: $aluno1->nota1, $aluno1->nota2, $aluno1->nota3 <br> Média das notas: " . round($media1, 2));
echo $media1 >= 7 ?" (Aprovado)": " (Reprovado)";

$aluno2 = new Aluno(3, 6, 4);
$media2 = $aluno2->media();
echo ("<br> As notas deste aluno foram: $aluno2->nota1, $aluno2->nota2, $aluno2->nota3 <br> Média das notas: " . round($media2, 2));
echo $media2 >= 7 ?" (Aprovado)": " (Reprovado)";

$aluno3 = new Aluno(7, 6, 8);
$media3 = $aluno3->media();
echo ("<br> As notas deste aluno foram: $aluno3->nota1, $aluno3->nota2, $aluno3->nota3 <br> Média das notas: " . round($media3, 2));
echo $media3 >= 7 ?" (Aprovado)": " (Reprovado)";

$mediaTurma = ($media1 + $media2 + $media3) / 3;
echo ("<br>A média da turma: " . round($mediaTurma, 2));
?>
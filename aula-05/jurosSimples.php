<?php
$capital = 100;
$taxa = 0.1;
$tempo = 1;


echo("Capital inicial: $capital<br>Taxa: $taxa<br>Tempo: $tempo<br>");
while ($tempo <= 10) {
    $j = $capital * $taxa;
    $montante = $j + $capital;
    echo("<br>montante: ". $montante);
    $capital = $montante;
    $tempo++;
}

?>
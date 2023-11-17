<?php
$numero = [7, 8, 9, 2, 6, 4, 1, 0, 10, 7];
$soma = 0;
/*echo "$numero[4]<br>";
$numero[4] = 9;
echo $numero[4];*/
for($i = 0; $i < 10; $i++){
    $soma += $numero[$i];
    echo("$numero[$i]<br>");
}
echo("Soma: $soma");

?>
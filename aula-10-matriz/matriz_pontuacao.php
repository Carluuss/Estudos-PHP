<?php

$times = array(
    array(3, 1, 1),
    array(1, 1, 3),
    array(1, 3, 0),
    array(0, 0, 1)
);

for($i = 0; $i <= 3; $i++){


    $somaPontos = $times[$i][0] + $times[$i][1] + $times[$i][2];

    echo"Pontuação final dos $i times = $somaPontos<br>";
}

?>
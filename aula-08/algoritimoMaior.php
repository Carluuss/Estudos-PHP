<?php

$numero = [14, 5, 6, 25, 60, 129, 40, 139, 80];

$posicao = 0;
for ($i = 0; $i < count($numero); $i++){

    if($numero[$i] > $posicao ){
        $posicao = $numero[$i];
        
    }

}
echo($posicao);

?>
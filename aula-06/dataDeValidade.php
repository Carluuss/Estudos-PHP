<?php

for ($i = 1; $i <= 10; $i++) {

    $ano = rand(2020, 2023);
    $mes = rand(1, 12);
    if ($mes === 1 || $mes === 3 || $mes === 5 || $mes === 7 || $mes === 8 || $mes === 10 || $mes === 12) {
        $dia = rand(1, 31);

    } else if ($mes === 2) {
        $dia = rand(1, 28);
    } else {
        $dia = rand(1, 30);
    }


    if ($ano === 2023 && $mes >= 7 && $dia >= 1) {
        echo ("Produto$i: Valido<br>Data de Validade: $dia/$mes/$ano<br>");
    } else if ($ano < 2023 || $mes <= 5) {
        echo ("Produto$i: Vencido<br>Data de Validade: $dia/$mes/$ano<br>");
    } else {
        echo ("Produto$i: Vencido<br>Data de Validade: $dia/$mes/$ano<br>");
        ;
    }
}

?>
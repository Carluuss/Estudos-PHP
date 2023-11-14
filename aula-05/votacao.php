<?php
$candidato1 = 0;
$candidato2 = 0;
$contador = 1;

while($contador <= 18){
    $votos1 = rand(1,2);
    
    echo("<br>Votos candidato: $votos1");
    $contador++;
    if($votos1 == 1){
        $candidato1++;
    }else{
        $candidato2++;
    }
}
echo("<br>Candidato 1 recebeu: $candidato1 votos");
echo("<br>Candidato 2 recebeu: $candidato2 votos");

if($candidato1 > $candidato2){
    echo("<br>Candidato 1 ganhou");
}else if ($candidato2 > $candidato1){
    echo("<br>Candidato 2 ganhou");
}else{
    echo("<br>Não ouve vencedores nesse turno");
}


?>
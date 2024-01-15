<?php
//MATRIZ 3X2
$produto = array(
              //0    1
    /*0*/array(4.5, 50),
    
    /*1*/array(6.50, 30),
    
    /*2*/array(4.00, 35)
);

$faturamento = 0;
$somaQuant = 0;
for ($i = 0; $i <= 2; $i++) {
    //Valor X Quantidade (por produto)
    $faturamento += $produto[$i][0]  *  $produto[$i][1];

    // echo "Valor: " . $produto[$i][0] . " , Quantidade: " . $produto[$i][1] . "<br>";
    //Somar as quantidades (de todos os produtos)
    $somaQuant += $produto[$i][1];
}
echo "Faturamento máximo: $faturamento<br>";
echo "Quantidade de produtos: $somaQuant";
//valor da matriz[linha][coluna]
// echo "Valor: ". $produto[0][0]. " , Quantidade: " . $produto[0][1]. "<br>";
// echo $produto[1][0];


?>
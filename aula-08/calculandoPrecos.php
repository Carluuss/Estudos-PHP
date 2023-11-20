<?php

$preco = ['notebook', 3000, 'monitor', 530];

$soma = 0;
for ($i = 0; $i < count($preco); $i++) {
    $i % 2 == 1 ? $soma += $preco[$i] : null;
}

echo ($soma);
?>
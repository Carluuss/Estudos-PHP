<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$op = $_POST['num'];

switch ($op) {
    case 1:
        $calculo = $numero1 + $numero2;
        break;
    case 2:
        $calculo = $numero1 - $numero2;
        break;
    case 3:
        $calculo = $numero1 * $numero2;
        break;
    case 4:
        $calculo = $numero1 / $numero2;
        break;
}

echo("Resultado: $calculo");

?>
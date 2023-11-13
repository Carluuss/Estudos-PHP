<?php
$contador = 0;
$numero = $_POST['numero'];

//usando while

/*
while ($contador <= 10) {
    echo ("<br> $numero x $contador = " . $numero * $contador);
$contador++;

}
*/

// usando FOR

for ($i = 0; $i <= 10; $i++) {
    echo ("<br> $numero x $i = " . $numero * $i);
}

?>
<?php

$frase = "O rato roeu a roupa do rei de roma";

$palavra = "roeu";

$q = strpos($frase, $palavra); // 23

$texto = substr($frase, 0, $q); // Frase antes de "rei"

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

?>
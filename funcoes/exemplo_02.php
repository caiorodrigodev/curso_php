<?php

$dolares = 4500;

function dolar() {

    return 5.33;

}

echo "$ ".number_format($dolares, 2, ".", ",")." equivalem a R$ ".number_format($dolares*dolar(), 2, ",", ".");
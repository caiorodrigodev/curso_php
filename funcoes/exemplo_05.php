<?php

$a = 10;

// Quando se coloca um & no parâmetro, ele altera o valor da variável mesmo fora do escopo da função, por referência, alterando direto no espaço de memória da variável

function trocaValor(&$a) {

    $a += 50;

    return $a;

}

echo trocaValor($a)."<br>".$a;
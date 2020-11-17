<?php

// Diferença entre Include e Require
// 1º o Require exige que o arquivo exista e esteja funcionando, caso o contrário da um erro fatal
// 2º o Include tenta funcionar mesmo sem o arquivo existir ou com problemas

// @include 'inc/functions.php';
@require 'inc/functions.php';

$resultado = soma(10, 20);

echo "O resultado da soma é: $resultado";

?>
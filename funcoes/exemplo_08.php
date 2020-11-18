<?php

// Setando o tipo de dado que será inserido como parametro, e retornando com outro tipo
function soma(int ...$valores):string {

    return array_sum($valores);

}

echo var_dump(soma(3,86,57,13,53,42,53,46,76,5,86,58,54,6,32,4,23));
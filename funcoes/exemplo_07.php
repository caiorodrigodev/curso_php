<?php

// Setando o tipo de dado que será inserido como parametro
function soma(int ...$valores) {

    return array_sum($valores);

}

echo soma(3,86,57,13,53,42,53,46,76,5,86,58,54,6,32,4,23);
<?php

function ola() {
    $args = func_get_args();

    return $args;
}

var_dump(ola(20, "String"));
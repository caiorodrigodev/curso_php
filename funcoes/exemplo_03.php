<?php

function saudacao($arg = "Caio", $per = "Bom dia") {
    return "Olá $arg! $per<br>";
}

echo saudacao();
echo saudacao("Naty", "Boa noite");
echo saudacao("", "Boa tarde");
echo saudacao("Deus", "");
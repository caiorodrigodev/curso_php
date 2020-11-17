<?php

session_id('57147921b1c30f9949e9cfe0dd511302');

require_once 'setup.php';

session_regenerate_id();

echo session_id()."<br>";

var_dump($_SESSION);
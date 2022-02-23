<?php // constantes

define("SERVIDOR", "127.0.0.1");
echo SERVIDOR . '<br>';

// Constants Array

define('BANCO_DE_DADOS', [
    '127.0.0.1',
    'root',
    'password',
    'test'
], true); // "true" = case sensitive
print_r(BANCO_DE_DADOS);

// Constantantes pré definidas

echo '<br>' . PHP_VERSION;
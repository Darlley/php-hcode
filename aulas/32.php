<?php // User function

function mostrar(){
    return "olá mundo<br>";
}

$frase = mostrar();
echo strlen($frase);

echo '<br>';

var_dump(mostrar());

echo '<br>';

print(mostrar());

echo '<br>';

print_r(mostrar());

function salario(){
    return 946.00;
}

echo "A soma de 3 salários é " . salario()*3;
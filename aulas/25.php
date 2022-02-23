<?php // ARRAYS

$frutas = array("laranja", "abacaxi", "melancia");
print_r($frutas);

$carros[0][0] = "GM";
$carros[0][1] = "Cobait";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";
echo '<br>';
print_r($carros[0]);

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";
echo '<br>';
print_r($carros[1]);

echo 'last: ' . end($carros[1]);

echo '<br>';

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Fulano',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Ciclano',
    'idade' => 22
));

print_r($pessoas[0]['nome']);
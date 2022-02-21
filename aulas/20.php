<?php // estruturas condicionais (if, elseif, else)

$qualASuaIdade = 30;

$criancaIdade = 12;
$maiorIdade = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $criancaIdade){
    echo "Crinça";
}else if($qualASuaIdade < $maiorIdade){
    echo "Adolescente";
}else if($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo '<br>';

// Operador ternário

echo ($qualASuaIdade < $maiorIdade) ? "Menor de idade" : "Maior de idade";
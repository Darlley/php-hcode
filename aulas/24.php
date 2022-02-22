<?php

// $condicao = true;

// while($condicao){

//     $numero = rand(1, 10);

//     if($numero === 3){
//         echo "Três";
//         $condicao = false;
//     }else{
//         echo $numero;
//     }

// }

$total = 100;
$desconto = 0.9;

do{
    $total *= $desconto;
    echo 'do';
} while ($total > 100);

echo $total;
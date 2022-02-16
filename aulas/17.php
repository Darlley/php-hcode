<?php

    // operador de atribuição
    $variavel_de_string = "Darlley ";
    $variavel_de_inteiro = 1;

    $valorTotal = 0;
    $valorTotal += 100;
    $valorTotal -= 25;
    $valorTotal *= .9;
    echo $valorTotal;

    echo '<br>';

    // Operador de concatenção ou operador de string
    echo $variavel_de_string . "Brasil de Brito Furtado" . '<br>';

    // Operador composto 
    $variavel_de_string .= 'Brasil de Brito Furtado';
    echo $variavel_de_string . '<br>';

    // Operadores aritméticos
    $a = 10;
    $b = 2;
    echo $a+$b . '<br>';
    echo $a-$b . '<br>';
    echo $a*$b . '<br>';
    echo $a/$b . '<br>';
    echo $a%$b . '<br>';
    echo $a**$b . '<br>';

    // Operadores de comparação
    $a = 30;
    $b = 55;
    var_dump($a > $b);
    echo '<br>';
    var_dump($a < $b);
    echo '<br>';
    // var_dump($a = $b) . '<br>'; só um '=' é atribuição
    var_dump($a == $b); // 2 '==' é comparação de tipo
    echo '<br>';
    var_dump($a === $b ); // 3 '===' comparação de tipo
    echo '<br>';
    var_dump($a != $b); // diferença de valor 
    echo '<br>';
    var_dump($a !== $b); // diferençade de tipo
    echo '<br>';
    
    // Operador Spaceship
    $a = 50;
    $b = 55;

    echo 'spaceship';
    var_dump($a <=> $b); // '1'
    echo '<br>';

    // Operador null coalescing (tratar valores nulos)
    $a = null;
    $b = null;
    $c = 10;

    echo $a ?? $b ?? $c . '<br>';

    // Operador de pós-incremento
    $a = 10;
    echo $a++ . '<br>';
    // Operador de pré-incremento
    echo ++$a . '<br>';

    // Operador de pós-decremento
    $b = 5;
    echo $b--;

    // Operador de pré-decremento
    echo --$b;

    // Ordem de precedencia dos operadores aritméticos 
    echo 10 + 3 / 2 . '<br>';
    echo (10 + 3) / 2 . '<br>';
    var_dump((10 + 3) / 2 > 5 && 10 + 5 < 20);
    echo '<br>';
    var_dump((10 + 3) / 2 > 5 || 10 + 5 < 20);
    echo '<br>';

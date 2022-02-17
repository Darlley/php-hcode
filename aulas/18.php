<?php 

    $nome = "Hcode";

    $nome2 = "Darlley";

    // var_dump($nome, $nome2);
    echo "abc $nome"; // aspas duplas fazem interpolação de variaveis 
    
    echo '<br>';

    echo 'abc $nome';

    echo '<br>';

    $nome = "Darlley";
    echo strtoupper("toUppercase: $nome");
    echo '<br>';
    echo strtolower("toLowerCase: $nome");
    echo '<br>';
    echo ucwords("Capitalizado (Todas As Palavras): $nome");
    echo '<br>';
    echo ucfirst("Capitalizado (Somente a primeira palavra): $nome");

    echo '<br>';

    $empresa = "Leadszapp";
    echo $empresa;
    echo '<br>';
    $empresa = str_replace('z','Z', $empresa);
    echo $empresa;

    echo '<br>';
    
    $frase = "A repetição é a mãe da perfeição";
    $q = strpos($frase, "mãe"); // posição/index 19
    var_dump($q);

    echo '<br>';

    $subtexto_1 = substr($frase, 0, $q); // 0-19
    echo $subtexto_1;
    echo '<br>';
    $subtexto_2 = substr($frase, $q + strlen($q), strlen($frase)); // 19 - lenght
    var_dump("strlen($q) + strlen($frase) = $subtexto_2");

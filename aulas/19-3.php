<?php // criar arquivos separados e reutiliza-los

    // Require (recomendado)
    require_once "./19-1.php";

    $resultado = somar(10,20);

    echo 'Require: ' . $resultado . '<br>';
    // O require, diferente do include, obriga que o arquivo exista e funcione corretamente
    // Ele gera um "fatal error" (para a execução do código)
    // Para evitar que faça mais de uma chamada ao arquivo o PHP disponiliza tanto o include_once e require_once
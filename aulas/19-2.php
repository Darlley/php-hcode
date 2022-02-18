<?php // criar arquivos separados e reutiliza-los

    // include
    include_once "./19-1.php";
    $resultado = somar(10,20);

    echo 'Include: ' . $resultado . '<br>';
    // o include faz uma cópia completa do arquivo (Recomendado para arquivos HTML)
    // crie diretórios separados para arquivos de inclusão como boas práticas 
    // Existe um diretorio chamado "include path" no PHP.ini que permite fazer includes direto de lá (recomendado para intranets).
    // Existem includes perigosos chamados "includes remotos": permite trazer arquvios armazenados remotamente (se existirem scripts maliciosos terá acesso).
    // Se tiver variaveis dentro da string do caminho do include podem ser feitos ataques de Script Injection
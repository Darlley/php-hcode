<?php

    require_once('config.php');

    use Cliente\Cadastro; // usar namespace

    $cadastro = new Cadastro();
    $cadastro->setNome('Darlley Brasil de Brito Furtado');
    $cadastro->setEmail('darlleybrito@gmail.com');
    $cadastro->setSenha('123455');

    echo $cadastro->registrarVenda();
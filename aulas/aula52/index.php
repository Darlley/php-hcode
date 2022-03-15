<?php

    require_once('config.php');

    use Cliente\Cadastro;

    $cadastro = new Cadastro();
    $cadastro->setNome('Darlley Brito');
    $cadastro->setEmail('darlleybrito@gmail.com');
    $cadastro->setSenha('dev123');

    $cadastro->chamar();
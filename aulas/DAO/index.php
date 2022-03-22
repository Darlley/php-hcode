<?php

    require_once('config.php');
    // $sql = new Sql('dev_php7','root','123@ldz'); // Databse name, user, password
    // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    // echo json_encode($usuarios); 

    $root = new Usuario();
    var_dump($root->login('estagiario','12345'));

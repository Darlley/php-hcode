<?php

    require_once('config.php');

    $mysql = new Database('dev_php7','root','123@ldz');
    $usuarios = $mysql->select('SELECT * FROM tb_usuarios');

    echo json_encode($usuarios);
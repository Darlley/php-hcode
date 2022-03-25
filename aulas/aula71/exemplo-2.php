<?php

    require_once('config.php');

    $sql = new Sql('dev_php7','root','123@ldz');
    $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY des_login");

    $headers = array();

    foreach($usuarios[0] as $key => $value){
        array_push($headers,ucfirst($key));
    }

    $file = fopen('usuarios.csv', "w+");
    fwrite($file, implode(', ', $headers) . "\r\n");

    // tabelas
    foreach($usuarios as $row){
        $data = array();

        // campos
        foreach($row as $key => $value){
            array_push($data,$value);
        }

        fwrite($file, implode(', ', $data) . "\r\n");
    }

    fclose($file);